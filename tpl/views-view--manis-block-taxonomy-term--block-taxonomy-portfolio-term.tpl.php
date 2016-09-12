<?php print render($title_suffix); ?>
<?php if ($rows): ?>
<div class="filters align-left">
	<span data-value="*" class="active"><?php print t('show all');?></span>
	<?php print $rows; ?>
</div>
<?php endif; ?>