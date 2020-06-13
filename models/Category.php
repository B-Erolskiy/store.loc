<?php


namespace app\models;

use yii\db\ActiveRecord;
use yii\behaviors\SluggableBehavior;

class Category extends ActiveRecord
{
    public static function tableName()
    {
        return 'categories';
    }

    public function getProducts(){
        return $this->hasMany(Product::className(), ['category_id' => 'id']);
    }
    public function behaviors()
    {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ],
        ];
    }
}