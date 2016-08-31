<?php require_once(drupal_get_path('theme','manis').'/tpl/header.tpl.php'); ?>
<?php if($breadcrumb): ?>
<!-- Page title start //-->
<section class="page-title-bar bg-img-2" data-background="parallax" data-transparent="secondary">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="page-title-bar-wrapper">
					<p class="title"><?php print drupal_get_title(); ?></p>
					<div class="breadcrumbs">
						<?php print $breadcrumb; ?>
					</div>
					<?php if($page['page_title_right']): ?>
						<?php print render($page['page_title_right']); ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Page title end //-->
<?php endif; ?>
<?php  if($page['content']){?>
<div class="container">
    <div class="row">
    	<div class="col-lg-9 col-md-8">
    		<section class="blog-list">	
			<?php
				if (!empty($tabs['#primary']) || !empty($tabs['#secondary'])):
					print render($tabs);
				endif;
				print $messages;
			?>				
			<?php print render($page['content']); ?>
			</section>

		</div>
		<div class="col-lg-3 col-md-4">
			<div class="sidebar">
			<?php if($page['sidebar_second']): ?>
				<?php print render($page['sidebar_second']); ?>
			<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<?php }?>
<?php require_once(drupal_get_path('theme','manis').'/tpl/footer.tpl.php'); ?>