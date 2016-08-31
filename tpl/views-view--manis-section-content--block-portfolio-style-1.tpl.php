<?php print render($title_prefix); ?>
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="project-block-1" id="projects">
        <div class="row">
        <?php if($header): ?>
          <?php print $header; ?>
        <?php endif; ?>
        <?php if ($rows): ?>
          <div class="col-lg-9">
            <div class="w-100 float-left bg-secondary">
              <?php print $rows; ?>
            </div>
          </div>
        <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</div>
