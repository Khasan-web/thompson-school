<?php

use yii\helpers\Url;

?>

<li class="<?= $this->tests?>"><a href="<?= Url::to(['/admin/admin/'])?>"><i class="fa fa-th-list fa-fw">
    <div class="icon-bg bg-violet"></div>
</i><span class="menu-title">Result</span><span class="fa arrow"></span></a>
</li>

<li class="<?= $this->questions?>"><a href="#"><i class="fa fa-dropbox fa-fw">
    <div class="icon-bg bg-green"></div>
</i><span class="menu-title">Tests</span><span class="fa arrow"></span></a>
    <ul class="nav nav-second-level">
        <li><a href="<?= Url::to(['/admin/admin/test'])?>"><span class="submenu-title"><i class="fa fa-ellipsis-v" aria-hidden="true"></i> List of tests</span></a></li>
        <li><a href="<?= Url::to(['/admin/admin/addsub'])?>"><span class="submenu-title"><i class="fa fa-plus" aria-hidden="true"></i> Add test</span></a></li>
    </ul>
</li>