<?php

use app\modules\admin\models\Test;

?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<div class="user-data m-b-30 page-content">

    <div class="panel panel-red">
        <div class="panel-heading">All Tests</div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>name</th>
                            <th>Author</th>
                            <th>Status</th>
                            <th>Operations</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        $subjects = [];
                        foreach ($model as $t) : ?>
                            <?php
                            array_push($subjects, $t->nomi);
                            ?>
                            <tr>
                                <td>
                                    <span class="role admin "><?= $t->nomi ?></span>
                                </td>
                                <td>
                                    <div class="table-data__info">
                                        <h6 style="display: inline"><?= $t->fio ?></h6>
                                        <span>
                                            <a href="#"><?= $t->mail ?></a>
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <div class="rs-select2--trans rs-select2--sm">
                                        <?php if ($t->status == 1) : ?>
                                            <select class="js-select2" name="property" onchange="getval(this)">
                                                <option value="hide-<?= $t->id ?>" onClick=>Hidden</option>
                                                <option value="show-<?= $t->id ?>" selected="selected">Normal</option>
                                            </select>
                                        <?php endif; ?>
                                        <?php if ($t->status == 0) : ?>
                                            <select class="js-select2" name="property" onchange="getval(this)">
                                                <option value="hide-<?= $t->id ?>" selected="selected">Hidden</option>
                                                <option value="show-<?= $t->id ?>">Normal</option>
                                            </select>
                                        <?php endif; ?>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <span class="more">
                                        <a onclick="return confirm('Do you want to delete this test?')" href="subdel?sub_id=<?= $t->id ?>"><span class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i>&nbsp;Delete</span></a>
                                    </span>
                                    <span class="more">
                                        <a href="subedit?sub_id=<?= $t->id ?>"><span class="btn btn-default btn-xs"><i class="fa fa-edit"></i>&nbsp;Edit</span></a>
                                    </span>
                                    <span class="more">
                                        <a class="view-info" href="#" data-id="<?= $t->id ?>"><span class="btn btn-info btn-xs"><i class="fa fa-eye"></i>&nbsp;View</span></a>
                                    </span>
                                </td>
                            </tr>
                            <?php $i++;
                        endforeach; ?>
                    </tbody>
                </table>
            </div>
            <a href="/admin/admin/addsub" class="btn btn-primary ">New Test </a>
            <hr>
            <?php
            $qurstion_qty = 0;
            foreach ($question_sort as $questions) :
                $qurstion_qty = count($questions) ?>
                <div class="table-responsive test-table" style="display: none;" id="<?= end($questions)['fan'] ?>">
                    <table class="table table-hover table-bordered" style="table-layout: auto">
                        <thead>
                            <tr>
                                <th>Question</th>
                                <th>A</th>
                                <th>B</th>
                                <th>C</th>
                                <th>D</th>
                                <th>True answer</th>
                                <th>Operations</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($questions as $question) : ?>
                                <tr>
                                    <td>
                                        <span class="role admin "><?= $question['savol'] ?></span>
                                    </td>
                                    <td>
                                        <?= $question['ja'] ?>
                                    </td>
                                    <td>
                                        <?= $question['jb'] ?>
                                    </td>
                                    <td>
                                        <?= $question['jc'] ?>
                                    </td>
                                    <td>
                                        <?= $question['jd'] ?>
                                    </td>
                                    <td>
                                        <?= $question['tj'] ?>
                                    </td>
                                    <td class="text-center">
                                        <span class="more">
                                            <a href="deltest?id=<?= $question['id'] ?>"><span class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i>&nbsp;Delete</span></a>
                                        </span>
                                        <span class="more edit-question" data-id="<?= $question['id'] ?>">
                                            <a href="#question_form"><span class="btn btn-default btn-xs"><i class="fa fa-edit"></i>&nbsp;Edit</span></a>
                                        </span>
                                    </td>
                                </tr>
                                <?php $i++;
                            endforeach; ?>
                        </tbody>
                    </table>
                    <?php foreach ($model as $t) : ?>
                        <?php
                        if ($t['id'] == $question['fan']) {
                            echo $this->render('testadd', [
                                'test_id' => $t['id'],
                                'model' => new Test(),
                            ]);
                        }
                        ?>
                    <?php endforeach; ?>
                </div>
            <?php endforeach; ?>
            <?php
            if ($qurstion_qty <= 0) {
                echo $this->render('testadd', [
                    'test_id' => $t['id'],
                    'model' => new Test(),
                ]);
            }
            ?>
        </div>
    </div>

    <script>
        function getval(sel) {
            $.ajax('subchange', {
                data: {
                    id: sel.value
                }
            })
        }
    </script>