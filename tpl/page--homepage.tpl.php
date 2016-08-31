<?php require_once(drupal_get_path('theme','manis').'/tpl/header.tpl.php'); ?>
<?php if($page['slider']): ?>
	<?php print render($page['slider']); ?>
<?php endif; ?>
<?php  if($page['content']):?>
	<?php
		if (!empty($tabs['#primary']) || !empty($tabs['#secondary'])):
			print render($tabs);
		endif;
		print $messages;
		unset($page['content']['system_main']['default_message']);
	?>
	<?php print render($page['content']); ?>
<?php endif; ?>
<?php print render($page['section']); ?>
<?php require_once(drupal_get_path('theme','manis').'/tpl/footer.tpl.php'); ?>