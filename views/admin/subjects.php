<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<div class="user-data m-b-30">
    <h3 class="title-3 m-b-30">
        <i class="zmdi zmdi-account-calendar"></i>Subjects</h3>   
        <div class="container" style="    text-align: right;">
            <a href="/web/admin/addsub" class="btn btn-primary">+ Test</a>    
        </div>
                                    
    <div class="table-responsive table-data">
        <table class="table">
            <thead>
                <tr>
                    <td>name</td>
                    <td>Author</td>
                    <td>Status</td>
                    <td></td>
                </tr>
            </thead>
            <tbody>
            <?php $i = 1; foreach($model as $t):?>
                <tr>                                                    
                    <td>
                        <span class="role admin "><?=$t->nomi?></span>
                    </td>
                    <td>
                        <div class="table-data__info">
                            <h6><?=$t->fio?></h6>
                            <span>
                                <a href="#"><?=$t->mail?></a>
                            </span>
                        </div>
                    </td>
                    <td>
                        <div class="rs-select2--trans rs-select2--sm">
                        <?php if ($t->status == 1):?>
                            <select class="js-select2" name="property" onchange="getval(this)">
                                <option value="hide-<?=$t->id?>" onClick=>Hidden</option>
                                <option value="show-<?=$t->id?>" selected="selected">Normal</option>
                            </select>
                        <?php endif;?>
                        <?php if ($t->status == 0):?>
                            <select class="js-select2" name="property" onchange="getval(this)">
                                <option value="hide-<?=$t->id?>" selected="selected">Hidden</option>
                                <option value="show-<?=$t->id?>">Normal</option>
                            </select>
                        <?php endif;?>
                            <div class="dropDownSelect2"></div>
                        </div>
                    </td>
                    <td>
                        <span class="more">
                            <a href="subdel?sub_id=<?=$t->id?>"><i class="zmdi zmdi-delete"></i></a>  
                        </span>
                        <span class="more">
                            <a href="subedit?sub_id=<?=$t->id?>"><i class="zmdi zmdi-edit"></i></a>  
                        </span>
                        <span class="more">
                            <a href="testplus?sub_id=<?=$t->id?>"><i class="zmdi zmdi-plus"></i></a>  
                        </span>
                    </td>
                </tr>   
                <?php $i++; endforeach;?>                                                 
            </tbody>
        </table>
    </div>
<script>
function getval(sel)
    {
        $.ajax('subchange', {
            data: {
                id: sel.value
            }
        })
    }
</script>