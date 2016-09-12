<?php print render($title_prefix); ?>
<section class="padding-top-0">
	<?php if($header): ?>
		<?php print $header; ?>
	<?php endif; ?>
	<div class="plugin-container riva-sorting" id="sorting">
		<?php if($footer): ?>
			<?php print $footer; ?>
		<?php endif; ?>
		<div class="listing">
			<div class="m-accordion">
				<?php if($rows): ?>
					<?php print $rows; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>



