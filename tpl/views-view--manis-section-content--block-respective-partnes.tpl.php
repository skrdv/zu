<?php print render($title_prefix); ?>
<div class="container">
	<div class="row">
		<div class="col-lg-12 align-center">
			<?php if($header): ?>
				<?php print $header; ?>
			<?php endif; ?>
			<?php if($rows): ?>
			<div class="plugin-contaainer" id="logos2">
				<?php print $rows; ?>
				<div class="riva-insert-menu-here"></div>
			</div>
			<?php endif; ?>
		</div>
	</div>
</div>