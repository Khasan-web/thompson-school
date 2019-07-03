<?php

use yii\helpers\Url;

?>

<li class="<?= $this->subjects?>"><a href="<?= Url::to(['/admin'])?>"><i class="fa fa-tachometer fa-fw">
    <div class="icon-bg bg-orange"></div>
</i><span class="menu-title">Dashboard <?= Yii::$app->controller->action->id?></span></a></li>

<li class="<?= $this->tests?>"><a href="#"><i class="fa fa-th-list fa-fw">
    <div class="icon-bg bg-violet"></div>
</i><span class="menu-title">Products</span><span class="fa arrow"></span></a>
    <ul class="nav nav-second-level">
    <li><a href="<?= Url::to(['product/'])?>"><span class="submenu-title"><i class="fa fa-ellipsis-v" aria-hidden="true"></i> List of products</span></a></li>
        <li><a href="<?= Url::to(['product/create'])?>"><span class="submenu-title"><i class="fa fa-plus" aria-hidden="true"></i> Add product</span></a></li>
    </ul>
</li>

<li class="<?= $this->questions?>"><a href="#"><i class="fa fa-dropbox fa-fw">
    <div class="icon-bg bg-green"></div>
</i><span class="menu-title">Categories</span><span class="fa arrow"></span></a>
    <ul class="nav nav-second-level">
        <li><a href="<?= Url::to(['category/'])?>"><span class="submenu-title"><i class="fa fa-ellipsis-v" aria-hidden="true"></i> List of collections</span></a></li>
        <li><a href="<?= Url::to(['category/create'])?>"><span class="submenu-title"><i class="fa fa-plus" aria-hidden="true"></i> Add collection</span></a></li>
    </ul>
</li>

<li class="<?= $this->students?>"><a href="#"><i class="fa fa-users">
    <div class="icon-bg bg-pink"></div>
</i><span class="menu-title">Orders</span><span class="fa arrow"></span></a>
    <ul class="nav nav-second-level">
        <li><a href="<?= Url::to(['order/'])?>"><span class="submenu-title"><i class="fa fa-ellipsis-v" aria-hidden="true"></i> List of orders</span></a></li>
        <li><a href="<?= Url::to(['order/create'])?>"><span class="submenu-title"><i class="fa fa-plus" aria-hidden="true"></i> Create order</span></a></li>
    </ul>
</li>