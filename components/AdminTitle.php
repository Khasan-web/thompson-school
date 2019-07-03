<?php

namespace app\components;

use Yii;
use yii\base\Widget;

class AdminTitle extends Widget {

    public $title;
    public $breadcrumbs;
    public $link;
    public $html;

    public function init() {
        parent::init();
        if ($this->title == null) {
            $this->title = 'No title';
        }
    }

    public function run() {
        $html = include __DIR__ . '/adminTitle/titleHtml.php';
        return $this->html;
    }

}

?>