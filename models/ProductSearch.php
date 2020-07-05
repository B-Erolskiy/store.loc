<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Product;

/**
 * ProductSearch represents the model behind the search form of `app\modules\admin\models\Product`.
 */
class ProductSearch extends Product
{
    /**
     * {@inheritdoc}
     */

    public $price_max;
    public $all_prices_max;
    public $price_min;
    public $sortBy;
    public $all;

    public function rules()
    {
        return [
            [['id', 'price', 'hit', 'new', 'all', 'sale', 'price_min', 'price_max', 'sortBy'], 'integer'],
            [['price_min'], 'default', 'value'=> $this->price_min],
            [['price_max'], 'default', 'value'=> $this->price_max],
            ['price_min', 'compare', 'compareAttribute' => 'price_max', 'operator' => '<=', 'type' => 'number', 'message' => 'Минимальная цена не может быть больше максимальной'],
            ['price_max', 'compare', 'compareAttribute' => 'price_min', 'operator' => '>=', 'type' => 'number', 'message' => 'Максимальная цена не может быть больше минимальной'],
            [['all_prices_max'], 'default', 'value'=> $this->all_prices_max],
            [['all_prices_max'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function attributeLabels()
    {
        return [
            'price_min' => 'Мин. стоимость',
            'price_max' => 'Макс. стоимость',
            'sortBy' => 'Сортировка',
        ];
    }

    public function formName()
    {
        return '';
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Product::find();

        //запрос для определения максимальной цены товаров
        $minMaxQuery = clone $query;
        list($this->all_prices_max) = array_values($minMaxQuery->select(['MAX(price)'])->createCommand()->queryOne());
        $this->all_prices_max /= 100;

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => [
              'defaultOrder' => [
                 'id' =>  SORT_DESC,
              ]
            ],
        ]);

        //возврат при отсутствии фильтра
        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        //сортировка товаров
        if ($this->sortBy == 1)
            $dataProvider->sort->defaultOrder = ['id' => SORT_ASC];
        if ($this->sortBy == 2)
            $dataProvider->sort->defaultOrder = ['name' => SORT_ASC];
        if ($this->sortBy == 3)
            $dataProvider->sort->defaultOrder = ['name' => SORT_DESC];
        if ($this->sortBy == 4)
            $dataProvider->sort->defaultOrder = ['price' => SORT_ASC];
        if ($this->sortBy == 5)
            $dataProvider->sort->defaultOrder = ['price' => SORT_DESC];

        //добавление фильтра по цене при наличии максимального значения
        if ($this->price_max){
            if($this->price_min > $this->price_max)
                if (empty($this->price_min))
                    $this->price_min = 0;
            $this->price_min *= 100;
            $this->price_max *= 100;
            $query->andFilterWhere([
                'and',
                ['>=', 'price', $this->price_min],
                ['<=', 'price', $this->price_max]
            ]);
            $this->price_min /= 100;
            $this->price_max /= 100;
        }

        //добавление фильтра по хитам, новинкам и распродажам при условии не выбора чекбокса "Все"
        if(!$this->all){
            if ($this->hit){
                $query->andFilterWhere([
                    'hit' => $this->hit,
                ]);
            }
            if ($this->new){
                $query->andFilterWhere([
                    'new' => $this->new,
                ]);
            }
            if ($this->sale){
                $query->andFilterWhere([
                    'sale' => $this->sale,
                ]);
            }
        }

        return $dataProvider;
    }
}
