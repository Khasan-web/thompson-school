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
        $test = Test::find()->where(['fan'=>$sub_id])->all();
        $fan = Fanlar::findOne($sub_id);
        $session['soni'] = count($test);
        $this->setMeta($fan->nomi . ' 😀👌✅', 'img/site-img.jpg');
        $session['javoblar'] = [];
        $data = [];
        foreach($test as $t){
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

    if (Yii::$app->request->isAjax) {
        $session = Yii::$app->session;
        $data = Yii::$app->request->post();
        $value = explode("-", $data['answer']);

        $javob = $session['javoblar'];
        $bool = true;
        $i = 0;
        foreach ( $javob as $j){
            if ($j['test_id'] == $value[1]){                
                unset($javob[$i]);
                $bool = false;
                break;
            }
            $i++;
        }
        
        $tanlov = [
            "test_id" => $value[1],
            "javob" => $value[0]
        ];
        if ($bool){            
            $bir = $session['javoblar'];
            $bir[] = $tanlov;
            $session['javoblar'] = $bir;
        }else{
            $bir = $session['javoblar'];
            $bir[$i] = $tanlov;
            $session['javoblar'] = $bir;
        }  
      
      }
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

        if ($calls_model->load(Yii::$app->request->post())) {
            $calls_model->date_request = date('Y-m-d H:i:s');
            $calls_model->save();
        }

        $this->layout = 'test';
        $this->setMeta('Congratulation 👏👏👏', 'img/site-img.jpg');
        return $this->render('javob');
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
        
        foreach ($javob as $j){
            print_r($j['test_id']);echo "<br>";
        }
    }
    public function actionAnswerreview()
    {   
        $session = Yii::$app->session;
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        return $session['javoblar'];
    }
}