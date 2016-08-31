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
<?php if($page['slider']): ?>
	<?php //print render($page['slider']); ?>
<?php endif; ?>

<?php
if (isset($node->field_sidebar['und'][0]['value'])){
	$sidebar = $node->field_sidebar['und'][0]['value'];
} else{ $sidebar = 'none';}
?>
<?php if($sidebar == '1'){//left sidebar style 1 ?>
	<section class="padding-top-1">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4">
					<?php if($page['sidebar_first']): ?>						
						<?php print render($page['sidebar_first']); ?>
					<?php endif; ?>
				</div>
				<div class="col-lg-8 col-md-8">
				<?php  if($page['content']):?>
					<?php
						if (!empty($tabs['#primary']) || !empty($tabs['#secondary'])):
							print render($tabs);
						endif;
						print $messages;
					?>		
					<?php print render($page['content']); ?>
				<?php endif; ?>
				</div>
			</div>
		</div>
	</section>

<?php }elseif($sidebar == '2'){//left sidebar style 2  ?>
	<section class="padding-top-1">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-4">
					<?php if($page['sidebar_first']): ?>
						<?php print render($page['sidebar_first']); ?>
					<?php endif; ?>
				</div>
				<div class="col-lg-9 col-md-8">
				<?php  if($page['content']):?>
					<?php
						if (!empty($tabs['#primary']) || !empty($tabs['#secondary'])):
							print render($tabs);
						endif;
						print $messages;								
					?>
					<?php print render($page['content']); ?>
					</section>
				<?php endif; ?>
				</div>
			</div>
		</div>
	</section>
<?php }elseif($sidebar == '3'){//right sidebar style 1 ?>
	<section class="padding-top-1">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-8">
				<?php  if($page['content']):?>
					<?php
						if (!empty($tabs['#primary']) || !empty($tabs['#secondary'])):
							print render($tabs);
						endif;
						print $messages;						
					?>
					<?php print render($page['content']); ?>
				<?php endif; ?>
				</div>
				<div class="col-lg-4 col-md-4">
					<?php if($page['sidebar_second']): ?>
						<?php print render($page['sidebar_second']); ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>
<?php }elseif($sidebar == '4'){//right sidebar style 2 ?>
	<section class="padding-top-1">
		<div class="container">
			<div class="row">			
				<div class="col-lg-9 col-md-8">
				<?php  if($page['content']):?>
					<?php
						if (!empty($tabs['#primary']) || !empty($tabs['#secondary'])):
							print render($tabs);
						endif;
						print $messages;							
					?>
					<?php print render($page['content']); ?>
				<?php endif; ?>
				</div>
				<div class="col-lg-3 col-md-4">
					<?php if($page['sidebar_second']): ?>
						<?php print render($page['sidebar_second']); ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>
<?php }else{//full width ?>
	<?php  if($page['content']):?>
		<section class="padding-top-1">
			<div class="container">
				 <div class="row">
                    <div class="col-lg-12">
                    <?php
					if (!empty($tabs['#primary']) || !empty($tabs['#secondary'])):
						print render($tabs);
					endif;
					print $messages;
					?>
						<?php print render($page['content']); ?>
					</div>
				</div>
			</div>
		</section>
	<?php endif; ?>	
<?php } ?>
<?php if($page['section']): ?>
	<?php print render($page['section']); ?>
<?php  endif; ?>
 
<?php require_once(drupal_get_path('theme','manis').'/tpl/footer.tpl.php'); ?>