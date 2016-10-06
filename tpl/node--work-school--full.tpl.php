<?php
	$img_path = file_create_url($node->field_image['und'][0]['uri']);
	
	$blog_format = $node->field_blog_format['und'][0]['value'];
	if(isset($_GET['listing'])){
		$blogs_list = $_GET['listing'];
	}else{
		$blogs_list = theme_get_setting('blogs_list', 'zu');
		if(empty($blogs_list)){
			$blogs_list = 'style1';
		}
	}
?>
<?php if(!$page){ ?>
<?php if($blogs_list == 'style1' ){?>
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
	        hide($content['field_tags']);
	        hide($content['comments']);
	        hide($content['field_categories']);
	        hide($content['field_image']);
	        hide($content['field_blog_format']);
	        print strip_tags(render($content));
	      ?>
	    </div>
	    <footer>
	        <p>
	        <i class="glyphicon glyphicon-tags"></i><?php print strip_tags(render($content['field_tags']),'<a>'); ?>
	        <a href="<?php print $node_url; ?>" class="read-more"><i class="glyphicon glyphicon-plus"></i><?php print t('read more');?></a>
	        </p>
	    </footer>
	</article>
<?php }elseif($blogs_list == 'style2'){?>
	<?php if(!empty($img_path)){ ?>
	<article class="post" data-style="full">
	    <figure>
	        <a href="<?php print $node_url; ?>" title="<?php print $title; ?>"><img src="<?php print $img_path; ?>" alt="<?php print $title; ?>"></a>
	    </figure>
	<?php }else{ ?>
	<article class="post no-figure" data-style="full">
	<?php } ?>
	    <div class="date">
	        <span class="day"><?php print format_date($node->created, 'custom', 'd');?></span>
	        <span class="month"><?php print format_date($node->created, 'custom', 'M');?></span>
	    </div>
	    <div class="type">
	        <i class="glyphicon <?php print $blog_format; ?>"></i>
	    </div>
	    <header>
	        <p><a href="<?php print $node_url; ?>"><?php print $title; ?></a></p>
	    </header>
	    <div class="content">
	    	<?php
	        hide($content['links']);
	        hide($content['field_tags']);
	        hide($content['comments']);
	        hide($content['field_categories']);
	        hide($content['field_image']);
	        hide($content['field_blog_format']);
	        print strip_tags(render($content));
	      ?>
	    </div>
	    <footer>
	        <p>
	        <?php if($content['field_tags']): ?>
	        <i class="glyphicon glyphicon-tags"></i><?php print strip_tags(render($content['field_tags']),'<a>'); ?>
	    <?php endif; ?>
	        <a href="<?php print $node_url; ?>" class="read-more"><i class="glyphicon glyphicon-plus"></i><?php print t('read more');?></a>
	        </p>
	    </footer>
	</article>
	<?php } ?>
<?php }else{?>
	<section class="padding-bottom-0 blog-article">	
		<article class="post" data-style="full">
		    <figure>
		        <a href="<?php print $node_url; ?>" title="<?php print $title; ?>"><img src="<?php print $img_path; ?>" alt="<?php print $title; ?>"></a>
		    </figure>
		    <div class="date">
		        <span class="day"><?php print format_date($node->created, 'custom', 'd');?></span>
		        <span class="month"><?php print format_date($node->created, 'custom', 'M');?></span>
		    </div>
		    <div class="type">
		        <i class="glyphicon <?php print $blog_format; ?>"></i>
		    </div>
		    <header>
		        <p><a href="<?php print $title; ?>"><?php print $title; ?></a></p>
		    </header>
		    <div class="content">
		    <?php
		        hide($content['links']);
		        hide($content['field_tags']);
		        hide($content['comments']);
		        hide($content['field_categories']);
		        hide($content['field_image']);
		        print render($content);
		      ?>
			</div>
			<footer>
			    <p>
			    <?php if($content['field_tags'] !=""): ?>
			    <span>		    
			    	<i class="glyphicon glyphicon-tags"></i>&nbsp;<?php print strip_tags(render($content['field_tags']),'<a>'); ?>
			    </span>
				<?php endif; ?>
			    <span>
			    	<i class="glyphicon glyphicon-comment"></i><a href="<?php print $node_url; ?>">&nbsp;<?php print $comment_count;?>&nbsp;<?php print t('comments');?></a>
			    </span>
			    <span>
			    	<i class="glyphicon glyphicon-user"></i><font style="color:#222222">
			    	<?php print strip_tags($name); ?></font>
			    </span>
			    </p>
			</footer>
		</article>
	</section>
	<?php // print render($content['comments']);?>
<?php } ?>