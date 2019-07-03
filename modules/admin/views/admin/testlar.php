<div class="user-data m-b-30">
    <h3 class="title-3 m-b-30">
        <i class="zmdi zmdi-account-calendar"></i>Subjects</h3>
    <div class="container" style="    text-align: right;">
        <a href="/web/admin/testadd?sub_id=<?= $sub_id ?>" class="btn btn-primary">+ Test</a>
    </div>

    <div class="table-responsive table-data">
        <table class="table">
            <thead>
                <tr>
                    <td>Question</td>
                    <td>A</td>
                    <td>B</td>
                    <td>C</td>
                    <td>D</td>
                    <td>True answer</td>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;
                foreach ($model as $t) : ?>
                    <tr>
                        <td>
                            <span class="role admin " data-toggle="tooltip" title="<?= $t->savol ?>"><?= shorter($t->savol, 40) ?></span>
                        </td>
                        <td>
                            <h6 data-toggle="tooltip" title="<?= $t->ja ?>"><?= shorter($t->ja, 10) ?></h6>
                        </td>
                        <td>
                            <h6 data-toggle="tooltip" title="<?= $t->jb ?>"><?= shorter($t->jb, 10) ?></h6>
                        </td>
                        <td>
                            <h6 data-toggle="tooltip" title="<?= $t->jc ?>"><?= shorter($t->jc, 10) ?></h6>
                        </td>
                        <td>
                            <h6 data-toggle="tooltip" title="<?= $t->jd ?>"><?= shorter($t->jd, 10) ?></h6>
                        </td>
                        <td>
                            <h6 data-toggle="tooltip"> <?= $t->tj ?></h6>
                        </td>
                        <td>
                            <span class="more">
                                <a href="testedit?test_id=<?= $t->id ?>"><i class="zmdi zmdi-edit" data-toggle="tooltip" title="Edit"></i></a>
                            </span>
                            <span class="more">
                                <a href="deltest?test_id=<?= $t->id ?>"><i class="zmdi zmdi-delete" data-toggle="tooltip" title="Delete"></i></a>
                            </span>
                        </td>
                    </tr>
                    <?php $i++;
                endforeach; ?>
            </tbody>
        </table>
    </div>
    <script>
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
    <?php

    function shorter($text, $chars_limit)
    {
        if (strlen($text) > $chars_limit) {
            $new_text = substr($text, 0, $chars_limit);
            $new_text = trim($new_text);
            return $new_text . "...";
        } else {
            return $text;
        }
    }

    ?>