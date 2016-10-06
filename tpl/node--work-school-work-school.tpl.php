

<?php
$author = $node->field_school_author['und'][0]['value'];
$image_uri  = $node->field_school_file['und'][0]['uri'];

            print theme('image', array(
            					'path' => $image_uri, 
            					'style_name' => 'image_730x550', 
            					'attributes'=>array('alt'=>$title,'class'=>'project-img')
            					));
?>

Автор:  <?php print $author; ?>

<?php // print_r($node); ?>