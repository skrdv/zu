<?php require_once(drupal_get_path('theme','zu').'/tpl/header.tpl.php'); ?>

<?php if($breadcrumb): ?>
    <section class="page-title-bar">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title-bar-wrapper">
                        <h1 class="title"><?php print drupal_get_title(); ?></h1>
                        <div class="breadcrumbs">
                            <?php print $breadcrumb; ?>
                        </div>
                        <?php if($page['page_title_right']): ?>
                            <?php print render($page['page_title_right']); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php  if($page['content']){?>

    <?php /*
    if (!empty($tabs['#primary']) || !empty($tabs['#secondary'])):
        print render($tabs);
    endif;
    print $messages;
     */?>

    <?php print render($page['content']); ?>
    <div class="clearfix"></div>

<?php }?>
<?php require_once(drupal_get_path('theme','zu').'/tpl/footer.tpl.php'); ?>
