<?php if(!$page){?>

    <div class="col-sm-6 col-md-6 col-lg-4">
        <div class="work-item">
            <h4 class="title">
                <a href="<?php print $node_url; ?>"><?php print $title; ?></a>
            </h4>
            <div class="work-file">
                <?php print render($content['field_school_file']); ?>
                <a class="link" href="<?php print $node_url; ?>"></a>
            </div>
            <div class="details">
                <div class="author">
                    <?php print render($content['field_school_author']); ?>
                </div>
                <div class="like">
                    <?php print render($content['field_school_like']); ?>
                </div>
            </div>
        </div>
    </div>

<?php }else{?>

    <section id="main">
        <div class="container">
            <div class="col-lg-9 col-md-8">
                <div class="work-content">
                    <h2 class="title">
                        <?php print $title; ?>
                    </h2>
                    <div class="category">
                        <?php print render($content['field_school_category']); ?>
                    </div>
                    <div class="nomination">
                        <?php print render($content['field_school_nominations']); ?>
                    </div>
                    <div class="likebtn">
                        <?php print render($content['field_school_like']); ?>
                    </div>
                    <div class="file">
                        <?php print render($content['field_school_file']); ?>
                    </div>
                    <?php print render($content['comments']);?>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="sidebar">
                    <div class="work-author">
                        <?php print views_embed_view('works_school','block_1', $node->nid); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php } ?>


<?php // print_r($node); ?>