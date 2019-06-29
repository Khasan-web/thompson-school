<?php

namespace app\controllers;
use app\models\Natijalar;
use app\models\Test;
use app\models\Fanlar;
use yii;
use app\models\UploadForm;
use yii\web\UploadedFile;
use yii\helpers\Url;

class AdminController extends \yii\web\Controller
{
    public function actionIndex()
    {
        Yii::$app->view->title = '';
        $model = Natijalar::find()->where('status=0')->all();
    	$this->layout = 'admin';
        return $this->render('index',
        [
            'model'=>$model
        ]);
    }
    public function actionTest()
    {
        $model = Fanlar::find()->all();
    	$this->layout = 'admin';
        return $this->render('subjects',
        [
            'model'=>$model
        ]);
    }
    public function actionSubchange($id)
    {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
            if (isset($id)){
                $work = explode('-',$id);
                if ($work[0] == "hide"){                    
                    $model = Fanlar::findone($work[1]);
                    $model->status = 0;
                    $model->save();
                }else{
                    $model = Fanlar::findone($work[1]);
                    $model->status = 1;
                    $model->save();
                }
                return ['ish'=>'O`zgarishlar tastiqlandi'];
            }else{
                return ['ish'=>'Fan kelmadi'];
            }
    }
    public function actionTestplus($sub_id)
    {
        $model = Test::find()->where(["fan"=>$sub_id])->all();
        $this->layout = 'admin';
        $session = Yii::$app->session;
        $session['fan'] = $sub_id;
        return $this->render('testlar',
        [
            'model'=>$model,
            'sub_id'=>$sub_id
        ]);
    }
    public function actionDeltest($test_id)
    {
        $model = Test::findone($test_id);
        $model->delete();
        $this->layout = 'admin';
        $session = Yii::$app->session;
        return $this->redirect(['testplus','sub_id'=>$session['fan']]);
    }
    public function actionChecktest($id)
    {
        $model = Natijalar::findone($id);
        $model->status = 1;
        $model->save();
        $this->layout = 'admin';
        $session = Yii::$app->session;
        return $this->redirect('index');
    }
    public function actionSubdel($sub_id)
    {
        $model = Fanlar::findone($sub_id);
        $model->delete();
        $this->layout = 'admin';
        return $this->redirect('test');
    }
    public function actionSubedit($sub_id)
    {
        $model = Fanlar::findone($sub_id);
        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            $model->rasmi = UploadedFile::getInstance($model, 'rasmi');

           if ($model->rasmi && $model->validate()) {     
               $son =  time();
               $model->rasmi->saveAs('admin/' . $son . '.' . $model->rasmi->extension);
               $model->rasmi = Url::base('http').'/admin/'  . $son . '.' . $model->rasmi->extension;
               $model->save();
           }
           return $this->redirect('test');
       }


    	$this->layout = 'admin';
        return $this->render('addsub',
        [
            'model'=>$model
        ]);
    }
    public function actionTestadd($sub_id)
    {
        $model = new Test();        
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $session = Yii::$app->session;
            
            return $this->redirect(['testplus','sub_id'=>$session['fan']]);
        }
        $model->fan = $sub_id;
    	$this->layout = 'admin';
        return $this->render('testadd',
        [
            'model'=>$model
        ]);
    }
    public function actionTestedit($test_id)
    {
        $model = Test::findone($test_id);        
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $session = Yii::$app->session;
            
            return $this->redirect(['testplus','sub_id'=>$session['fan']]);
        }
    	$this->layout = 'admin';
        return $this->render('testadd',
        [
            'model'=>$model
        ]);
    }
    public function actionAddsub()
    {
        $model = new Fanlar();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            $model->rasmi = UploadedFile::getInstance($model, 'rasmi');

           if ($model->rasmi && $model->validate()) {     
               $son =  time();
               $model->rasmi->saveAs('admin/' . $son . '.' . $model->rasmi->extension);
               $model->rasmi = Url::base('http').'/admin/'  . $son . '.' . $model->rasmi->extension;
               $model->save();
           }
           return $this->redirect('test');
       }


    	$this->layout = 'admin';
        return $this->render('addsub',
        [
            'model'=>$model
        ]);
    }

}
