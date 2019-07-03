<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "fanlar".
 *
 * @property int $id
 * @property string $nomi
 * @property string $rasmi
 * @property string $tuliq
 * @property int $status
 * @property string $fio
 * @property string $mail
 */
class Fanlar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fanlar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status'], 'integer'],
            [['nomi'], 'string', 'max' => 64],
            [['rasmi'], 'file'],
            [['tuliq'], 'string', 'max' => 1024],
            [['fio', 'mail'], 'string', 'max' => 35],
            [['nomi'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nomi' => 'Nomi',
            'rasmi' => 'Rasmi',
            'tuliq' => 'Tuliq',
            'status' => 'Status',
            'fio' => 'Fio',
            'mail' => 'Mail',
        ];
    }
}
