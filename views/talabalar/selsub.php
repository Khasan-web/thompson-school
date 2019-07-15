<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
<style>
    .col-sm {
        padding-top: 15px;
        padding-bottom: 15px;
    }
</style>
<section id="test-cards" class="pt-0">
    <div class="container">
        <div class="row" style="margin: 100px 0;">
            <div class="col-lg-12 col-md-12 mb-5 tests-info">
                <h1 class="text-left m-0">Выбери интересующее<br /><span>направление</span></h1> <br>
            </div>
            <?php $i = 0;
            foreach ($model as $fan) : ?>

                <div class="test-cards-item col-lg-4 col-md-5 col-12 mb-5">
                    <div class="card-image">
                        <img src="<?= $fan->rasmi ?>" />
                    </div>
                    <div class="for-text">
                        <h4><?= $fan->nomi ?></h4>
                        <article data-readmore class="content" aria-expanded="false">
                            <?= $fan->tuliq ?>
                        </article>
                    </div>
                    <div class="for-buttons">
                        <a href="/test/begin?sub_id=<?= $fan->id ?>" class="btn">Start test</a>
                    </div>
                </div>

                <?php $i++;
            endforeach; ?>
        </div>
    </div>
</section>

<?php
function shorter($text, $chars_limit)
{
    // Check if length is larger than the character limit
    if (strlen($text) > $chars_limit) {
        // If so, cut the string at the character limit
        $new_text = substr($text, 0, $chars_limit);
        // Trim off white space
        $new_text = trim($new_text);
        // Add at end of text ...
        return $new_text . "...";
    }
    // If not just return the text as is
    else {
        return $text;
    }
}
?>