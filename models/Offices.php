<?php

namespace app\models;

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
            [['addess'], 'required'],
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
            'addess' => 'Addess',
            'coord1' => 'Coord1',
            'coord2' => 'Coord2',
            'worktime' => 'Worktime',
            'phone' => 'Phone',
        ];
    }
}
