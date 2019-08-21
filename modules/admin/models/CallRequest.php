<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "call_request".
 *
 * @property int $id
 * @property string $name
 * @property string $phone
 * @property string $date_request
 * @property string $status
 */
class CallRequest extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'call_request';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'phone'], 'required'],
            [['date_request'], 'safe'],
            [['status'], 'string'],
            [['name'], 'string', 'max' => 255],
            [['phone'], 'string', 'max' => 155],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'phone' => 'Phone',
            'date_request' => 'Date Request',
            'status' => 'Status',
        ];
    }
}
