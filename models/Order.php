<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "order".
 *
 * @property int $id
 * @property string $created_at
 * @property string|null $updated_at
 * @property int $qty
 * @property int $sum
 * @property string $status
 * @property string|null $name
 * @property string|null $email
 * @property string|null $phone
 * @property string|null $address
 */
class Order extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'order';
    }

    public function getOrderItems(){
        return $this->hasMany(OrderItems::className(),['order_id' => 'id']);
    }

    public function rules(){
        return [
            ['phone','string','min' => 10, 'tooShort' => 'Значение «Телефон» не является правильным номером телефона.'],
            [['created_at','updated_at'], 'safe'],
            [['qty', 'sum'], 'integer'],
            [['status'], 'string'],
            [['email'], 'email'],
            [['name', 'email', 'phone', 'address'], 'string', 'max' => 255],
            [['name','email','phone','address'], 'required'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'name' => 'Имя',
            'email' => 'Email',
            'phone' => 'Телефон',
            'address' => 'Адрес',
        ];
    }
}
