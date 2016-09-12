<?php print render($title_prefix); ?>
<div class="container">
	<div class="row">
		 <div class="col-lg-6 col-md-6">
			<div class="plugin-container" id="posts3">
				<?php if($header): ?>
					<?php print $header; ?>
				<?php endif; ?>
				<?php if($rows): ?>
					<?php print $rows; ?>
				<?php endif; ?>
			</div>
		</div>
		<div class="mobile-typo-fix clearfix hidden-lg hidden-md"></div>
		<?php if($footer): ?>
			<?php print $footer; ?>
		<?php endif; ?>
	</div>
</div>
