<?php if(!$page){?>



<?php } else { ?>

    <div class="news-content">
        <h2 class="title">
            <?php print $title; ?>
        </h2>
        <div class="date">
            <?php print format_date($node->created, 'custom', 'd F Y');?>
        </div>
        <div class="body">
            <?php print render($content['body']); ?>
        </div>
        <div class="share">
            <?php print render($content['uptolike']); ?>
        </div>
        <div class="image">
            <?php print render($content['field_news_students_img']); ?>
        </div>
    </div>

<?php } ?>


<?php // print_r($content); ?>