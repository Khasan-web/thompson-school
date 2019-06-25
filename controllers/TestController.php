<?php

namespace app\controllers;

class TestController extends AppController
{

    public function actionList() {
        return $this->render('list');
    }

    public function actionTest() {
        return $this->render('test');
    }

}
