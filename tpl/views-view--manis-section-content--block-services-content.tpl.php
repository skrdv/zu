<?php print render($title_prefix); ?>
<div class="container">
	<div class="row">
		<div class="col-lg-8 col-md-8">
			<div class="m-tabs" data-active="2">
			<?php if($attachment_before): ?>
				<?php print $attachment_before; ?>
			<?php endif; ?>
			<?php if($rows): ?>
				<?php print $rows; ?>
			<?php endif; ?>
			</div>
		</div>
		<?php if($footer): ?>
			<?php print $footer; ?>
		<?php endif; ?>
	</div>
</div>
