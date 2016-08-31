<?php print render($title_prefix); ?>
<div class="filters align-left">
	<?php if($rows): ?>
		<span data-value="*" class="active"><?php print t('show all'); ?></span>
		<?php print $rows; ?>
	<?php endif; ?>

</div>