<?php if(!$page){?>

    <div class="col-sm-6 col-md-6 col-lg-4">
        <div class="work-item">
            <h4 class="title">
                <a href="<?php print $node_url; ?>"><?php print $title; ?></a>
            </h4>
            <div class="work-file">
                <?php print render($content['field_students_file']); ?>
                <a class="link" href="<?php print $node_url; ?>"></a>
            </div>
            <div class="details">
                <div class="author">
                    <?php print render($content['field_students_author']); ?>
                </div>
                <div class="like">
                    <?php print render($content['field_students_like']); ?>
                </div>
            </div>
        </div>
    </div>

<?php }else{?>

    <section id="main">
        <div class="container">
            <div class="col-lg-9 col-md-8">
                <div class="work-content">
                    <?php if($user->uid==279): ?>
                        <div class="moderation">
                            <a href='/node/<?=$node->nid?>/edit'>Редактировать</a>
                        </div>
                    <?php endif; ?>
                    <h2 class="title">
                        <?php print $title; ?>
                    </h2>
                    <div class="likebtn">
                        <?php print render($content['field_students_like']); ?>
                    </div>
                    <div class="nomination">
                        <?php print render($content['field_students_nominations']); ?>
                    </div>
                    <div class="date">
                        Дата: <?php print format_date($node->created, 'custom', 'd F Y');?>
                    </div>
                    <div class="file">
                        <?php print render($content['field_students_file']); ?>
                    </div>
                    <?php print render($content['comments']);?>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="sidebar">
                    <div class="work-author">
                    <?php print views_embed_view('works_students','block_1', $node->nid); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php } ?>


<?php // print_r($node); ?>