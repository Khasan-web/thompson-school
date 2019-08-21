<?php

namespace app\components;

use Yii;
use yii\base\Widget;

class AdminNavbar extends widget {

    public $html;

    public $subjects;
    public $tests;
    public $questions;
    public $students;
    public $calls;

    public function init() {
        parent::init();
    }

    public function run() {
        $action = Yii::$app->controller->action->id;
        if ($action == 'index') {
            $this->tests = 'active';
        } else if ($action == 'test' || $action == 'addsub' || $action == 'subedit') {
            $this->questions = 'active';
        } else if ($action == 'calls') {
            $this->calls = 'active';
        }
        $html = include __DIR__ . '/adminNavbar/adminNavbarHtml.php';
        return $this->html;
    }

}

?>