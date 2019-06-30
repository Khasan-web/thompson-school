<?php

namespace app\controllers;

use Yii;
use app\models\Talabalar;
use app\models\Fanlar;
use app\models\TalabalarSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TalabalarController implements the CRUD actions for Talabalar model.
 */
class TalabalarController extends AppController
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

    /**
     * Lists all Talabalar models.
     * @return mixed
     */
    public function actionIndex()
    {
        $this->layout = 'test';
        $searchModel = new TalabalarSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
     
    public function actionSelsub()
    {
        $this->layout = 'test';
        $model = Fanlar::find()->where(['status'=>1])->all();
        $this->setMeta('Our Tests 📑✅', 'img/site-img.jpg');
        return $this->render('selsub', [
            'model' => $model
        ]);
    }

    /**
     * Displays a single Talabalar model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Talabalar model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Talabalar();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }
    // public function actionTestreg($lang)
    // {
    //     $this->layout = 'test';
    //     $model = new Talabalar();
    //     $session = Yii::$app->session;
    //     $session['lang'] = $lang;

    //     if ($model->load(Yii::$app->request->post()) && $model->save()) {
    //         $session = Yii::$app->session;
    //         $session['fio'] = $_POST['Talabalar']['fio'];
    //         $session['mail'] = $_POST['Talabalar']['pochta'];
    //         $session['tel'] = $_POST['Talabalar']['tel'];
    //         if ($session['lang'] == 'en'){
    //             return $this->redirect('/web/test/begin?sub_id=1');
    //         }else{
    //             return $this->redirect('selsub');
    //         }
            
    //     }

    //     return $this->render('testreg', [
    //         'model' => $model,
    //     ]);
    // }


    /**
     * Updates an existing Talabalar model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Talabalar model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Talabalar model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Talabalar the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Talabalar::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
