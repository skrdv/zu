<?php require_once(drupal_get_path('theme','zu').'/tpl/header.tpl.php'); ?>

<?php if($breadcrumb): ?>
	<section class="page-title-bar">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="page-title-bar-wrapper">
						<h1 class="title"><?php print drupal_get_title(); ?></h1>
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
<?php endif; ?>

<?php  if($page['content']){?>
	<section id="main">
		<div class="container">

			<div class="col-lg-9 col-md-8">
				<?php
				if (!empty($tabs['#primary']) || !empty($tabs['#secondary'])):
					print render($tabs);
				endif;
				print $messages;
				?>
				<?php print render($page['content']); ?>
				<div class="clearfix"></div>
				<?php if($page['section']): ?>
					<?php print render($page['section']); ?>
				<?php endif; ?>
			</div>
			<div class="col-lg-3 col-md-4">
				<div class="sidebar">
					<?php if($page['sidebar_second']): ?>
						<?php print render($page['sidebar_second']); ?>
					<?php endif; ?>
				</div>
			</div>

		</div>
	</section>
<?php }?>
<?php require_once(drupal_get_path('theme','zu').'/tpl/footer.tpl.php'); ?>
