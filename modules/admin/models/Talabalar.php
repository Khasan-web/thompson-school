<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "talabalar".
 *
 * @property int $id
 * @property string $fio
 * @property string $pochta
 * @property string $tel
 */
class Talabalar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'talabalar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fio', 'pochta', 'tel'], 'string', 'max' => 255],
            [['fio', 'tel'], 'required'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fio' => 'Fio',
            'pochta' => 'Pochta',
            'tel' => 'Tel',
        ];
    }
}
