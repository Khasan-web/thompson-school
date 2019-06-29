<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "natijalar".
 *
 * @property int $id
 * @property int $talaba_id
 * @property int $tugri
 * @property int $xato
 * @property string $tuliq
 * @property string $fan
 * @property string $vaqti
 * @property string $fio
 * @property string $pochta
 * @property string $telefon
 */
class Natijalar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'natijalar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['talaba_id', 'tugri', 'xato'], 'integer'],
            [['vaqti'], 'safe'],
            [['tuliq'], 'string', 'max' => 2048],
            [['fan'], 'string', 'max' => 64],
            [['fio', 'pochta', 'telefon'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'talaba_id' => 'Talaba ID',
            'tugri' => 'Tugri',
            'xato' => 'Xato',
            'tuliq' => 'Tuliq',
            'fan' => 'Fan',
            'vaqti' => 'Vaqti',
            'fio' => 'Fio',
            'pochta' => 'Pochta',
            'telefon' => 'Telefon',
        ];
    }
}
