<?php
$author = $node->field_school_author['und'][0]['value'];
$image_uri  = $node->field_school_file['und'][0]['uri'];
//print theme('image', array('path' => $image_uri, 'style_name' => 'image_730x550', 'attributes'=>array('alt'=>$title,'class'=>'img-responsive')));
?>

<section id="main">
    <div class="container">
        <div class="col-lg-9 col-md-8">
            <?php print views_embed_view('works_school','page_1', $node->nid); ?>
            <?php print render($content['comments']);?>
        </div>
        <div class="col-lg-3 col-md-4">
            <div class="sidebar">
                <?php print views_embed_view('works_school','block_1', $node->nid); ?>
            </div>
        </div>
    </div>
</section>

<?php //print_r($node); ?>




