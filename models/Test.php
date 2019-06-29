<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "test".
 *
 * @property int $id
 * @property string $savol
 * @property string $ja
 * @property string $jb
 * @property string $jc
 * @property string $jd
 * @property string $tj
 * @property string $fan
 */
class Test extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'test';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['savol'], 'string', 'max' => 1024],
            [['ja', 'jb', 'jc', 'jd'], 'string', 'max' => 255],
            [['tj'], 'string', 'max' => 5],
            [['fan'], 'string', 'max' => 64],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'savol' => 'Savol',
            'ja' => 'Ja',
            'jb' => 'Jb',
            'jc' => 'Jc',
            'jd' => 'Jd',
            'tj' => 'Tj',
            'fan' => 'Fan',
        ];
    }
}
