<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "offices".
 *
 * @property int $id
 * @property string $addess
 * @property string|null $coord1
 * @property string|null $coord2
 * @property string|null $worktime
 * @property string|null $phone
 */
class Offices extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'offices';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['addess', 'coord1', 'coord2'], 'required'],
            [['addess', 'coord1', 'coord2', 'worktime', 'phone'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'addess' => 'Адрес магазина',
            'coord1' => 'Координата 1',
            'coord2' => 'Координата 2',
            'worktime' => 'Режим работы',
            'phone' => 'Телефон',
        ];
    }
}
