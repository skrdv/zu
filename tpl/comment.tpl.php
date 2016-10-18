<div class="comment-item">
    <?php
    if($comment->uid != 0) {
        $user = user_load($comment->uid);
        $profile = profile2_load_by_user($user, 'profile');
        $name = drupal_render(field_view_field('profile2', $profile, 'field_profile_name', 'value'));
        $sname = drupal_render(field_view_field('profile2', $profile, 'field_profile_sname', 'value'));
        $picture = drupal_render(field_view_field('profile2', $profile, 'field_profile_image', 'value'));
        $collective = drupal_render(field_view_field('profile2', $profile, 'field_collective_name', 'value'));
    }
    ?>
    <div class="user">
        <?php print $picture.''.$name.''.$sname.''.$collective; ?>
    </div>
    <div class="content">
        <?php hide($content['links']); print render($content); ?>
        <p class="reply"><?php print render($content['links']); ?></p>
    </div>
</div>