<section class="p-t-20 page-content">
    <div class="panel panel-red">
        <div class="panel-heading">Results</div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-data2">
                    <thead>
                        <tr>
                            <th>№</th>
                            <th>Name</th>
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
                                <td class="desc"><?= $t->telefon ?></td>
                                <td><?= $t->vaqti ?></td>
                                <td>
                                    <span class="status--process"><?= $t->fan ?></span>
                                </td>
                                <td><?= $t->tugri ?></td>
                                <td><?= $t->xato ?></td>
                                <td class="text-center">
                                    <div class="table-data-feature">
                                        <span class="more">
                                            <a href="tel:<?= $t->telefon?>"><span class="btn btn-success btn-xs"><i class="fa fa-phone"></i>&nbsp;Phone</span></a>
                                        </span>
                                        <span class="more">
                                            <a onclick="return confirm('Do you want to delete this test?')" href="subdel?sub_id=<?= $t->id ?>"><span class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i>&nbsp;Delete</span></a>
                                        </span>
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
</section>