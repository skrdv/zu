<?php
	$img_path = file_create_url($node->field_news_school_img['und'][0]['uri']);
?>

<?php if(!$page){ ?>
	<?php if(!empty($img_path)){ ?>
	<article class="post" data-style="preview">
	    <figure>
	        <a href="<?php print $node_url; ?>" title="<?php print $title; ?>"><img src="<?php print $img_path; ?>" alt="<?php print $title; ?>"></a>
	    </figure>
	<?php }else{ ?>
	<article class="post no-figure" data-style="preview">
	<?php } ?>
	    <div class="date">
	        <span class="day"><?php print format_date($node->created, 'custom', 'd');?></span>
	        <span class="month"><?php print format_date($node->created, 'custom', 'M');?></span>
	    </div>
	    <div class="type">
	        <i class="glyphicon glyphicon-picture"></i>
	    </div>
	    <header>
	        <p><a href="<?php print $node_url; ?>"><?php print $title; ?></a></p>
	    </header>
	    <div class="content">
	    	<?php
	        hide($content['links']);
	        hide($content['field_image']);
	        print strip_tags(render($content));
	      ?>
	    </div>
	    <footer>
	        <p>
	        <a href="<?php print $node_url; ?>" class="read-more"><i class="glyphicon glyphicon-plus"></i><?php print t('read more');?></a>
	        </p>
	    </footer>
	</article>
<?php } ?>
