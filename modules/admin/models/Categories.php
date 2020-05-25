<?php

namespace app\modules\admin\models;

use app\models\Category;
use Yii;

/**
 * This is the model class for table "categories".
 *
 * @property int $id
 * @property string $name
 * @property int $parent
 * @property string|null $keywords
 * @property string|null $description
 *
 * @property Product[] $products
 */
class Categories extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'categories';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['parent'], 'integer'],
            [['name'], 'string', 'max' => 100],
            [['keywords', 'description'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => '№ категории',
            'name' => 'Название',
            'parent' => 'Родительская категория',
            'keywords' => 'Keywords',
            'description' => 'Description',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Product::className(), ['category_id' => 'id']);
    }

    public function getCategory(){
        return $this->hasOne(Category::className(),['id' => 'parent']);
    }
}
