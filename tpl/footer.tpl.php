<?php $footer_copyright_message = theme_get_setting('footer_copyright_message', 'zu'); ?>
<footer role="contentinfo" class="site-footer">
    <div class="container">
        <div class="row">
            <?php if($page['footer']):?>
               <?php print render($page['footer']); ?>
            <?php endif; ?>
        </div>
    </div>
    <!-- Copyrights start //-->
    <div class="copyrights">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 left">
                    <p><?php print $footer_copyright_message; ?></p>
                </div>
                
                    <?php if($page['footer_menu']): ?>
                        <?php print render($page['footer_menu']); ?>
                    <?php endif; ?>
            </div>
        </div>
    </div>
    <!-- Copyrights end //-->
</footer>