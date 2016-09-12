<div class="comment-item">
    <?php if($picture):?>
    <figure>
        <?php print $picture; ?>
    </figure>
    <?php endif; ?>
    <?php
        if($comment->uid != 0) {
        $user = user_load($comment->uid);
        $full_name = $user->field_full_name['und'][0]['value'];
        }
    ?>
    <div class="meta">     
        <?php if(isset($full_name)){ ?>
        <?php print t('By');?>
        <?php print $full_name; ?>
        <?php print t('on'); ?> <?php print format_date($comment->created, 'custom', 'd M, Y'); ?>
        <?php } else { ?>
            <?php print theme('username', array('account' => $content['comment_body']['#object'], 'attributes' => array('class' => 'url'))); ?>
            <?php print t('says:'); ?>
        <?php } ?> 
    </div>
    <div class="content">
        <?php hide($content['links']); print render($content); ?>
        <p class="reply"><?php print strip_tags(render($content['links']),'<a>'); ?></p>
    </div>
</div>
<p>&nbsp;</p>
