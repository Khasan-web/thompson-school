<?php

namespace app\modules\admin\controllers;

use app\modules\admin\models\Natijalar;
use app\modules\admin\models\Test;
use app\modules\admin\models\Fanlar;
use yii;
use yii\web\UploadedFile;
use yii\helpers\Url;
use app\modules\admin\models\User;

class AdminController extends AppAdminController
{

    public function actionIndex()
    {
        Yii::$app->view->title = '';
        $model = Natijalar::find()->all();
        $this->layout = 'admin';
        $this->setMeta('Thompson school');
        return $this->render(
            'index',
            [
                'model' => $model
            ]
        );
    }
    public function actionTest()
    {
        $model = Fanlar::find()->all();
        $questions = Test::find()->asArray()->all();
        $question_sort = [];
        foreach ($questions as $question) {
            $question_sort[$question['fan']][$question['id']] = $question;
        }

        $question_model = new Test();
        if ($question_model->load(Yii::$app->request->post())) {
            // check if admin want to update any question
            if ($question_model->question_id) {
                // update question
                $question = Test::findOne($question_model->question_id);
                $question->savol = $question_model->savol;
                $question->ja = $question_model->ja;
                $question->jb = $question_model->jb;
                $question->jc = $question_model->jc;
                $question->jd = $question_model->jd;
                $question->tj = $question_model->tj;
                $question->fan = $question_model->test_id;
                $question->save();
                return $this->refresh();
            } else {
                // admin add new question
                $question_model->fan = $question_model->test_id;
                $question_model->save();
            }
            return $this->refresh();
        }

        $this->layout = 'admin';
        $this->setMeta('Tests');
        return $this->render(
            'subjects',
            [
                'model' => $model,
                'question_sort' => $question_sort,
            ]
        );
    }

    public function actionGetQuestion() {
        if (Yii::$app->request->isAjax) {
            $id = Yii::$app->request->get('question_id');
            $question = Test::find()->where(['id' => $id])->asArray()->one();

            $this->layout = false;
            $question_json = json_encode($question);
            return $question_json;
        } else {
            return $this->redirect(Yii::$app->request->referrer);
        }
    }

    public function actionSubchange($id)
    {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        if (isset($id)) {
            $work = explode('-', $id);
            if ($work[0] == "hide") {
                $model = Fanlar::findone($work[1]);
                $model->status = 0;
                $model->save();
            } else {
                $model = Fanlar::findone($work[1]);
                $model->status = 1;
                $model->save();
            }
            return ['ish' => 'O`zgarishlar tastiqlandi'];
        } else {
            return ['ish' => 'Fan kelmadi'];
        }
    }
    public function actionTestplus($sub_id)
    {
        $model = Test::find()->where(["fan" => $sub_id])->all();
        $this->layout = 'admin';
        $session = Yii::$app->session;
        $session['fan'] = $sub_id;
        return $this->render(
            'testlar',
            [
                'model' => $model,
                'sub_id' => $sub_id
            ]
        );
    }
    public function actionDeltest($id)
    {
        $model = Test::findOne($id);
        $model->delete();
        $this->layout = 'admin';
        return $this->redirect('/admin/admin/test');
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
    public function actionDelresult() {
        if (isset($_GET['id'])) {
            $id = Yii::$app->request->get('id');
        }
        $result = Natijalar::findone($id);
        $result->delete();
    }
    public function actionSubdel($sub_id)
    {
        $model = Fanlar::findone($sub_id);
        $model->delete();
        $this->layout = 'admin';
        return $this->redirect('test');
    }
    public function actionSubedit()
    {
        $this->setMeta('Edit the test');
        if (isset($_GET['sub_id'])) {
            $sub_id = Yii::$app->request->get('sub_id');
        }
        $model = Fanlar::findone($sub_id);
        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            $model->rasmi = UploadedFile::getInstance($model, 'rasmi');

            if ($model->rasmi && $model->validate()) {
                $son =  time();
                $model->rasmi->saveAs('/web/img/admin/' . $son . '.' . $model->rasmi->extension);
                $model->rasmi = Url::base(true) . '/web/img/admin/'  . $son . '.' . $model->rasmi->extension;
                $model->save();
            }
            return $this->redirect('test');
        }


        $this->layout = 'admin';
        return $this->render(
            'addsub',
            [
                'model' => $model
            ]
        );
    }
    public function actionTestadd()
    {
        $model = new Test();
        if ($model->load(Yii::$app->request->post())) {
            if ($model->question_id) {
                $question = Test::findOne($model->question_id);
                $question->savol = $model->savol;
                $question->ja = $model->ja;
                $question->jb = $model->jb;
                $question->jc = $model->jc;
                $question->jd = $model->jd;
                $question->tj = $model->tj;
                $question->fan = $model->fan;
                $question->save();
            } else {
                $model->save();
            }
        }
        $this->layout = 'admin';
        return $this->render(
            'testadd',
            [
                'model' => $model
            ]
        );
    }
    public function actionTestedit($test_id)
    {
        $model = Test::findone($test_id);
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $session = Yii::$app->session;

            return $this->redirect(['testplus', 'sub_id' => $session['fan']]);
        }
        $this->layout = 'admin';
        return $this->render(
            'testadd',
            [
                'model' => $model
            ]
        );
    }
    public function actionAddsub()
    {
        $this->setMeta('Add a test');
        $model = new Fanlar();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            $model->rasmi = UploadedFile::getInstance($model, 'rasmi');

            if ($model->rasmi && $model->validate()) {
                $son =  time();
                $model->rasmi->saveAs('admin/' . $son . '.' . $model->rasmi->extension);
                $model->rasmi = Url::base('http') . '/admin/'  . $son . '.' . $model->rasmi->extension;
                $model->save();
            }
            return $this->redirect('test');
        }


        $this->layout = 'admin';
        return $this->render(
            'addsub',
            [
                'model' => $model
            ]
        );
    }


    public function actionAuth() {
        $this->setMeta('Change auth');
        $model = User::find()->one();
        if ($model->load(Yii::$app->request->post())) {
            $password = Yii::$app->security->generatePasswordHash($model->password);
            $model->username = $model->username;
            $model->password = $password;
            $model->save();
            return $this->redirect(['admin/index']);
        }
        $this->layout = 'admin';
        return $this->render('auth', compact('model'));
    }

}
