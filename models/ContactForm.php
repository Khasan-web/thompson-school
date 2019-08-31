<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{
    public $name;
    public $email;
    public $subject;
    public $body;
    public $phone;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // name, phoen and body are required
            [['name', 'phone', 'body'], 'required'],
            // email has to be a valid email address
            ['email', 'email'],
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'verifyCode' => 'Verification Code',
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     * @param string $email the target email address
     * @return bool whether the model passes validation
     */
    public function contact($email)
    {
        if ($this->validate()) {
            Yii::$app->mailer->compose()
                ->setTo('support@thompson.uz')
                ->setFrom([$this->email => $this->name])
                ->setSubject('Thompson landing | Contact form')
                ->setTextBody($this->body)
                ->send();

            return true;
        }
        return false;
    }
}
