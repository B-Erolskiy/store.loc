<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property string $name
 * @property int|null $category_id
 * @property string|null $alias
 * @property string|null $content
 * @property int|null $price
 * @property string|null $keywords_tag
 * @property string|null $description
 * @property string|null $img
 * @property int $hit
 * @property int|null $new
 * @property int|null $sale
 * @property string|null $description_tag
 *
 * @property Categories $category
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */

    public $image;
    public $gallery;

    public static function tableName()
    {
        return 'product';
    }

    public function behaviors()
    {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }

    public function beforeSave($insert)
    {
        $this->price = $this->price*100;
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['category_id', 'price', 'hit', 'new', 'sale'], 'integer'],
            [['hit', 'new', 'sale'],'default', 'value' => 0],
            [['content', 'description', 'description_tag'], 'string'],
            [['name'], 'string', 'max' => 100],
            [['alias'], 'string', 'max' => 150],
            [['keywords_tag', 'img'], 'string', 'max' => 200],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Categories::className(), 'targetAttribute' => ['category_id' => 'id']],
            [['image'],'file', 'extensions' => 'jpg, png'],
            //[['gallery'],'file', 'extensions' => 'jpg, png', 'maxFiles' => 4],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => '№ Товара',
            'name' => 'Наименование',
            'category_id' => 'Категория',
            'alias' => 'Alias',
            'content' => 'Контент',
            'price' => 'Цена',
            'keywords_tag' => 'Ключевые слова',
            'description_tag' => 'Мета-описание',
            'description' => 'Описание',
            'image' => 'Изображение',
            'hit' => 'Хит',
            'new' => 'Новинка',
            'sale' => 'Распродажа',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Categories::className(), ['id' => 'category_id']);
    }
}
