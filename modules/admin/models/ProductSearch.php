<?php

namespace app\modules\admin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Product;

/**
 * ProductSearch represents the model behind the search form of `app\modules\admin\models\Product`.
 */
class ProductSearch extends Product
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id',  'price', 'hit', 'new', 'sale'], 'integer'],
            [['name','category_id', 'alias', 'content', 'keywords_tag', 'description', 'img', 'description_tag'], 'safe'],
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

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Product::find()->with('category');

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }
        if ($this->price){
            $query->andFilterWhere([
                'id' => $this->id,
                'price' => $this->price*100,
                'hit' => $this->hit,
                'new' => $this->new,
                'sale' => $this->sale,
            ]);        }
        else{
            // grid filtering conditions
            $query->andFilterWhere([
                'id' => $this->id,
                'price' => $this->price,
                'hit' => $this->hit,
                'new' => $this->new,
                'sale' => $this->sale,
            ]);
        }


        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'alias', $this->alias])
            ->andFilterWhere(['like', 'content', $this->content])
            ->andFilterWhere(['like', 'keywords_tag', $this->keywords_tag])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'img', $this->img])
            ->andFilterWhere(['like', 'description_tag', $this->description_tag]);

        $query->joinWith(['category' => function ($q) { //поиск по связанной таблице categories
            $q->where('categories.name LIKE "%' . $this->category_id . '%"');
        }]);

        return $dataProvider;
    }
}
