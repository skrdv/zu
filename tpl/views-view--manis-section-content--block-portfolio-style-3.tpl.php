<?php print render($title_prefix); ?>
<div class="container">
  <div class="row">
    <div class="col-lg-12">
        <div class="plugin-container" id="projects3">
        <?php if($header): ?>
          <?php print $header; ?>
        <?php endif; ?>
        <?php if($rows): ?>
          <?php print $rows; ?>
        <?php endif; ?>
        </div>
    </div>
  </div>
</div>