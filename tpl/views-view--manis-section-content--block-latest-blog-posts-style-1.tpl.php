<?php print render($title_prefix); ?>
<div class="container">
  <div class="row">
    <div class="col-lg-6 col-md-6">
      <div class="plugin-container" id="posts">
      <?php if($header): ?>
        <?php print $header; ?>
      <?php endif ?>
      <?php if ($rows): ?>
        <?php print $rows; ?>
      <?php endif; ?>
      </div>
    </div>
    <div class="content-divider clearfix hidden-lg hidden-md"></div>
    <?php if($attachment_after): ?>
      <?php print $attachment_after; ?>
    <?php endif; ?>
  </div>
</div>


