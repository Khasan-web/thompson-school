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

    public function init() {
        parent::init();
    }

    public function run() {
        $action = Yii::$app->controller->action->id;
        if ($action == 'index') {
            $this->subjects = 'active';
        } else if ($action == 'test') {
            $this->tests = 'active';
        } else if ($action == 'category') {
            $this->questions = 'active';
        } else if ($action == 'order') {
            $this->students = 'active';
        }
        $html = include __DIR__ . '/adminNavbar/adminNavbarHtml.php';
        return $this->html;
    }

}

?>