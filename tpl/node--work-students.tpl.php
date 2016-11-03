<?php if(!$page){?>

    <div class="col-sm-6 col-md-6 col-lg-4">
        <div class="work-item">
            <h4 class="title">
                <a href="<?php print $node_url; ?>"><?php print $title; ?></a>
            </h4>
            <div class="work-file">
                <?php print render($content['field_students_file']); ?>
                <a class="link" href="<?php print $node_url; ?>"></a>
            </div>
            <div class="details">
                <div class="author">
                    <?php print render($content['field_students_author']); ?>
                </div>
                <div class="like">
                    <?php print render($content['field_students_like']); ?>
                </div>
            </div>
        </div>
    </div>

<?php } else { ?>

    <?php
    function calculate_age($birthday) {
        $birthday_timestamp = strtotime($birthday);
        $age = date('Y') - date('Y', $birthday_timestamp);
        if (date('md', $birthday_timestamp) > date('md')) {
            $age--;
        }
        return $age;
    }
    $author = user_load($node->uid);
    $profile = profile2_load_by_user($author, 'profile');
    $field_profile_birthday = drupal_render(field_view_field('profile2', $profile, 'field_profile_birthday', 'value'));
    if(!empty($field_profile_birthday)) {
        $profile_birthday = $profile->field_profile_birthday['und'][0]['value'];
        $profile_age = calculate_age($profile_birthday);
    }
    $field_profile_image = drupal_render(field_view_field('profile2', $profile, 'field_profile_image', 'value'));
    $field_profile_name = drupal_render(field_view_field('profile2', $profile, 'field_profile_name', 'value'));
    $field_profile_sname = drupal_render(field_view_field('profile2', $profile, 'field_profile_sname', 'value'));
    $field_collective_name = drupal_render(field_view_field('profile2', $profile, 'field_collective_name', 'value'));
    $field_collective_count = drupal_render(field_view_field('profile2', $profile, 'field_collective_count', 'value'));
    $field_collective_age = drupal_render(field_view_field('profile2', $profile, 'field_collective_age', 'value'));
    $field_institution_students = drupal_render(field_view_field('profile2', $profile, 'field_institution_students', 'value'));
    $field_institution_name = drupal_render(field_view_field('profile2', $profile, 'field_institution_name', 'value'));
    $field_institution_faculty = drupal_render(field_view_field('profile2', $profile, 'field_institution_faculty', 'value'));
    $field_institution_course = drupal_render(field_view_field('profile2', $profile, 'field_institution_course', 'value'));
    $field_profile_teacher = drupal_render(field_view_field('profile2', $profile, 'field_profile_teacher', 'value'));
    $field_profile_city = drupal_render(field_view_field('profile2', $profile, 'field_profile_city', 'value'));
    ?>

    <section id="main">
        <div class="container">
            <div class="col-lg-9 col-md-9">
                <div class="work-content">
                    <?php if($user->uid==279 OR $user->uid==1): ?>
                        <div class="moderation">
                            <?php print render($content['field_students_moderation']); ?>
                            <a href='/node/<?php $node->nid; ?>/edit'>Изменить работу</a><br />
                            <a href='/user/<?php echo $author->uid; ?>/edit'>Редактировать профиль</a><br />
                        </div>
                    <?php endif; ?>
                    <h2 class="title">
                        <?php print $title; ?>
                    </h2>
                    <div class="nomination">
                        <?php print render($content['field_students_nominations']); ?>
                    </div>
                    <div class="date">
                        <?php print format_date($node->created, 'custom', 'd F Y');?>
                    </div>
                    <div class="likebtn">
                        <?php print render($content['field_students_like']); ?>
                    </div>
                    <div class="share">
                        <?php print render($content['uptolike']); ?>
                    </div>
                    <div class="file">
                        <?php print render($content['field_students_file']); ?>
                    </div>
                    <?php print render($content['comments']);?>
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="sidebar">
                    <div class="work-author">
                        <?php // print views_embed_view('works_students','block_1', $node->nid); ?>
                        <?php print $field_profile_image; ?>
                        <?php print $field_profile_name; ?>
                        <?php print $field_profile_sname; ?>
                        <?php if(isset($profile_age)) { ?>
                            <div class="field field-name-field-profile-age">
                                <div class="field-label">Возраст: </div>
                                <div class="field-item even"><?php print $profile_age; ?> лет</div>
                            </div>
                        <?php } ?>
                        <?php print $field_collective_name; ?>
                        <?php print $field_collective_count; ?>
                        <?php print $field_collective_age; ?>
                        <?php print $field_profile_city; ?>
                        <?php print $field_institution_students; ?>
                        <?php print $field_institution_name; ?>
                        <?php print $field_institution_faculty; ?>
                        <?php print $field_institution_course; ?>
                        <?php print $field_profile_teacher; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php } ?>


<?php // print_r($node); ?>