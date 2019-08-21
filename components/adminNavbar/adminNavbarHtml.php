<?php

use yii\helpers\Url;

?>

<li class="<?= $this->tests?>">
<a href="<?= Url::to(['/admin/index'])?>">
    <i class="fa fa-th-list fa-fw">
        <div class="icon-bg bg-violet"></div>
    </i>
    <span class="menu-title">Result</span>
</a>
</li>

<li class="<?= $this->questions?>"><a href="#"><i class="fa fa-dropbox fa-fw">
    <div class="icon-bg bg-green"></div>
</i><span class="menu-title">Tests</span><span class="fa arrow"></span></a>
    <ul class="nav nav-second-level">
        <li><a href="<?= Url::to(['/admin/test'])?>"><span class="submenu-title"><i class="fa fa-ellipsis-v" aria-hidden="true"></i> List of tests</span></a></li>
        <li><a href="<?= Url::to(['/admin/addsub'])?>"><span class="submenu-title"><i class="fa fa-plus" aria-hidden="true"></i> Add test</span></a></li>
    </ul>
</li>

<li class="<?= $this->calls?>">
<a href="<?= Url::to(['/admin/call/index'])?>">
    <i class="fa fa-th-list fa-fw">
        <div class="icon-bg bg-violet"></div>
    </i>
    <span class="menu-title">Call requests</span>
</a>
</li>