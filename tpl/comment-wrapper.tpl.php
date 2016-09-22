<?php if($content['comments']): ?>
<section class="padding-bottom-0">
	<h3><?php print t('comments');?></h3>
	<div class="comment-item-wrapper">
		<?php print render($content['comments']); ?>
	</div>
</section>
<?php endif; ?>
<?php if($content['comment_form']): ?>
<section class="padding-top-0">
	<h3><?php print t('add a comment');?></h3>
	<div style="margin-top:31.5px;">
		<?php print str_replace('resizable', '', render($content['comment_form'])); ?>
	</div>
</section>
<?php endif; ?>