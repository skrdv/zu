<?php print render($title_prefix); ?>
<div class="container">
	<div class="row">
		<div class="col-lg-6 cool-md-6">
			<div class="plugin-container" id="testimonials">
			<?php if($header): ?>
				<?php print $header; ?>
			<?php endif; ?>
			<?php if($rows): ?>
				<?php print $rows; ?>
			<?php endif; ?>
			</div>
		</div>
		<div class="clearfix mobile-typo-fix hidden-lg hidden-md"></div>
		<div class="col-lg-6 cool-md-6">
		<?php if($footer): ?>
			<?php print $footer; ?>
		<?php endif; ?>
		</div>
	</div>
</div>