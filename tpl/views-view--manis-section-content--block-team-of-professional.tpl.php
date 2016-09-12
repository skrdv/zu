<?php print render($title_prefix); ?>
<?php if($rows): ?>
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<div class="plugin-container" id="team">
			<?php if($header): ?>
				<?php print $header; ?>
			<?php endif; ?>
			<?php print $rows; ?>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>