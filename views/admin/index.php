<section class="p-t-20">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="title-5 m-b-35">Results</h3>
            </div>
            <div class="table-responsive table-responsive-data2">
                <table class="table table-data2">
                    <thead>
                        <tr>
                            <th>№</th>
                            <th>Name</th>
                            <th>email</th>
                            <th>Phone</th>
                            <th>date</th>
                            <th>Subjects</th>
                            <th>True</th>
                            <th>Flase</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;
                        foreach ($model as $t) : ?>

                            <tr class="tr-shadow">
                                <td>
                                    <span class="block-email"><?= $i ?></span>
                                </td>
                                <td><?= $t->fio ?></td>
                                <td>
                                    <span class="block-email"><?= $t->pochta ?></span>
                                </td>

                                <td class="desc"><?= $t->telefon ?></td>
                                <td><?= $t->vaqti ?></td>
                                <td>
                                    <span class="status--process"><?= $t->fan ?></span>
                                </td>
                                <td><?= $t->tugri ?></td>
                                <td><?= $t->xato ?></td>
                                <td>
                                    <div class="table-data-feature">
                                        <button class="item" data-toggle="tooltip" href="s" data-placement="top" title="Checked">
                                            <a href="checktest?id=<?= $t->id ?>"><i class="zmdi zmdi-mail-send"></i></a>
                                        </button>
                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Full answer">
                                            <a href="fullanswer?id=<?= $t->id ?>"><i class="zmdi zmdi-more"></i></a>
                                        </button>
                                    </div>
                                </td>

                            </tr>

                            <?php $i++;
                        endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
</section>