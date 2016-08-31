<?php print render($title_prefix); ?>
	<?php if($header): ?>
		<?php print $header; ?>
	<?php endif; ?>
	<div class="widget-content">
		<ul>
			<?php if($rows): ?>
				<?php print $rows; ?>
			<?php endif;	 ?>
		</ul>
	</div>
