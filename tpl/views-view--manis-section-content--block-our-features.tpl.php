<?php print render($title_prefix); ?>

<div class="container">

    <div class="row">



      <?php if ($footer): ?>

          <?php print $footer; ?>

      <?php endif; ?>

      <div class="col-lg-4 col-md-4">

      <?php if ($header): ?>


          <?php print $header; ?>

      <?php endif; ?>



      <?php if ($rows): ?>

        <?php print $rows; ?>

      <?php endif; ?>
      </div>

  </div>

</div>