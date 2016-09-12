<?php print render($title_prefix);?>
<?php if($rows): ?>
<div class="col-lg-6 col-md-6">
	<div class="plugin-container" id="testimonials"> 
		<?php if($header): ?>
			<?php print $header; ?>
		<?php endif; ?>
		<?php print $rows; ?>
	</div>
</div>
<?php endif; ?>
