<?php require_once(drupal_get_path('theme','zu').'/tpl/header.tpl.php'); ?>
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
<div class="clearfix"></div>
<?php if($page['content']):?>
    <?php
	if (!empty($tabs['#primary']) || !empty($tabs['#secondary'])):
		print render($tabs);
	endif;
	print $messages;
	?>
		<?php print render($page['content']); ?>
<?php endif; ?>	
<?php if($page['section']): ?>
	<?php print render($page['section']); ?>
<?php  endif; ?>
 
<?php require_once(drupal_get_path('theme','zu').'/tpl/footer.tpl.php'); ?>