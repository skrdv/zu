<?php require_once(drupal_get_path('theme','manis').'/tpl/header.tpl.php'); 

 if($page['slider']): ?>

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

<?php if($page['section']): ?>

	<?php print render($page['section']); ?>

<?php  endif; ?>

 

<?php require_once(drupal_get_path('theme','manis').'/tpl/footer.tpl.php');