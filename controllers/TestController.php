<?php

namespace app\controllers;

use Yii;
use app\models\Fanlar;
use app\models\TestSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\Response;
use app\models\Test;
use yii\db\Expression;
use app\models\CallRequest;
use app\models\Talabalar;
use app\modules\admin\models\Natijalar;

/**
 * TestController implements the CRUD actions for Test model.
 */
class TestController extends AppController
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {

        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }
    public function actionBegin($sub_id)
    {
        $calls_model = new CallRequest();

        if ($calls_model->load(Yii::$app->request->post())) {
            $calls_model->date_request = date('Y-m-d H:i:s');
            $calls_model->save();
        }

        $this->layout = 'test';
        $session = Yii::$app->session;
        $session->remove('test');
        $test = Test::find()->where(['fan' => $sub_id])->all();
        $fan = Fanlar::findOne($sub_id);
        $session['soni'] = count($test);
        $this->setMeta($fan->nomi . ' 😀👌✅', 'img/site-img.jpg');
        $session['javoblar'] = [];
        $data = [];
        foreach ($test as $t) {
            $data[] = $t->id;
        }

        $session['test'] = $data;
        return $this->render('test', [
            'sub_id' => $sub_id,
            'test' => $test,
        ]);
    }
    public function actionCheck()
    {

        $data = Yii::$app->request->post();
        $results = $data['results'];

        $questions_arr = [];
        $true = 0;
        $false = 0;

        $session = Yii::$app->session;
        $session->open();

        $questions = Test::find()->where(['fan' => $data['fan_id']])->all();
        // direction
        $fan = Fanlar::findOne($data['fan_id']);
        // it is tries of people
        $natijalar = new Natijalar();


        // count true and false answers
        foreach ($questions as $question) {
            $questions_arr[$question['id']] = $question;
        }
        if ($results) {
            foreach ($results as $answer) {
                if ($questions_arr[$answer[0]]) {
                    if ($questions_arr[$answer[0]]['tj'] == $answer[1]) {
                        $true++;
                    }
                }
            }
        }
        $false = count($questions) - $true;

        // add the user's try
        $natijalar->tugri = $true;
        $natijalar->xato = $false;
        $natijalar->fio = $session['fio'];
        $natijalar->fan = $fan->nomi;
        $natijalar->telefon = $session['tel'];
        $natijalar->vaqti = date('Y-m-d H:i:s');
        $natijalar->save();

        // write in sessions quantity of true and false answers
        $session['true'] = $true;
        $session['false'] = $false;
        $session['fan'] = $fan->nomi;
    }
    public function actionTestreview()
    {
        $session = Yii::$app->session;
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        return $session['test'];
    }
    public function actionEnd()
    {
        $calls_model = new CallRequest();
        $session = Yii::$app->session;

        if ($calls_model->load(Yii::$app->request->post())) {
            $calls_model->date_request = date('Y-m-d H:i:s');
            $calls_model->save();
        }

        $this->layout = 'test';
        $this->setMeta('Congratulation 👏👏👏', 'img/site-img.jpg');
        return $this->render('javob', compact('session'));
    }
    public function actionTestasl()
    {
        $session = Yii::$app->session;
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        return $session['asl'];
    }
    public function actionTestr()
    {
        $session = Yii::$app->session;
        $javob = $session['javoblar'];
        $bool = true;

        foreach ($javob as $j) {
            print_r($j['test_id']);
            echo "<br>";
        }
    }
    public function actionAnswerreview()
    {
        $session = Yii::$app->session;
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        return $session['javoblar'];
    }
}
