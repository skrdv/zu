<?php print render($title_prefix); ?>
<?php if($header): ?>
	<?php print $header; ?>
<?php endif; ?>
<?php if($exposed): ?>
	<?php print $exposed; ?>
<?php endif; ?>
<div class="shop-listing">
	<?php if($rows): ?>
		<?php print $rows; ?>
	<?php endif; ?>
</div>
<div class="clearfix"></div>
<?php if($pager): ?>
	<?php print $pager; ?>
<?php endif; ?>