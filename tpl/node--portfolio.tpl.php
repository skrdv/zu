<?php 

	$title_2 = $node->field_sub_title_2['und'][0]['value'];

	$summary = $node->body['und'][0]['summary'];

	$agency = $node->field_agency['und'][0]['value'];

	$client = $node->field_client['und'][0]['value'];

	$more = $node->field_more['und'][0]['value'];
  if(isset($node->field_link_portfolio_project['und'][0]['value'])){
	 $link_portfolio = $node->field_link_portfolio_project['und'][0]['value'];
  }

?>

<?php if(!$page){ ?>

<?php }else{ ?>

<div class="col-gl-6 col-md-6">

	<div class="plugin-container margin-top-leading" id="images">

		<?php

          foreach($node->field_project_image['und'] as $key => $value){

            $image_uri  = $node->field_project_image['und'][$key]['uri'];

            print theme('image', array('path' => $image_uri, 'style_name' => 'image_730x550', 'attributes'=>array('alt'=>$title,'class'=>'project-img')));

          }

       	?>

       	<div class="riva-insert-menu-here"></div>

	</div>

</div>

<div class="col-gl-6 col-md-6">

	<?php if(!empty($title_2)): ?>

    <p class="section-subtitle-2"><?php print $title_2; ?></p>

	<?php endif; ?>

	<?php if(!empty($summary)): ?>

    <p><?php print $summary; ?></p>

	<?php endif; ?>

    <div class="project-details">

    	<?php if(!empty($agency)): ?>

        <p><span><?php print t('agency');?>:</span><?php print $agency; ?></p>

    	<?php endif; ?>

    	<?php if(!empty($client)): ?>

        <p><span><?php print t('client');?>:</span><?php print $client; ?></p>

        <?php endif; ?>

        <p><span><?php print t('date');?>:</span><?php print format_date($node->created, 'custom', 'd M Y');?></p>

       	<?php if(!empty($more)): ?>

        <p><span><?php print t('more');?>:</span><?php print $more; ?> </p>

    	<?php endif; ?>

    </div>

    <?php if(!empty($link_portfolio)&& isset($link_portfolio)): ?>

    <p><a target="_blank" href="<?php print $link_portfolio; ?>" class="m-btn" data-size="normal" data-color="primary" data-border><i class="glyphicon glyphicon-link"></i><?php print t('view the project'); ?></a></p>

	<?php endif; ?>

</div>

<?php } ?>