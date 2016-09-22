<?php
	$countdown = $node->field_countdown['und'][0]['value'];
	$sitename = $node->field_site_name['und'][0]['value'];
	$slogan = $node->field_slogan['und'][0]['value']; 
	$bg_img_path = file_create_url($node->field_background_image['und'][0]['uri']);
?>
<section class="coming-soon bg-img-4" id="coming-soon" data-background="parallax" data-transparent="primary" data-time="<?php print $countdown; ?>" style="background-image:url(<?php print render($bg_img_path);?>)!important">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<?php if(!empty($sitename)||!empty($slogan)): ?>
				<h1 class="title"><?php print $sitename; ?></h1>
				<p><?php print $slogan; ?></p>
				<?php endif; ?>
				<div class="countdown">
					<div class="riva-countdown" id="riva-countdown">
						<!-- Days //-->
						<div class="riva-countdown-item" id="riva-countdown-days">
							<div class="inner">
								<div class="value">
									<p>0</p>
								</div>
								<div class="label">days</div>
							</div>
						</div>
						<!-- Hours //-->
						<div class="riva-countdown-item" id="riva-countdown-hours">
							<div class="inner">
								<div class="value">
									<p>0</p>
								</div>
								<div class="label">hours</div>
							</div>
						</div>
						<!-- Minutes //-->
						<div class="riva-countdown-item" id="riva-countdown-minutes">
							<div class="inner">
								<div class="value">
									<p>0</p>
								</div>
								<div class="label">minutes</div>
							</div>
						</div>
						<!-- Seconds //-->
						<div class="riva-countdown-item" id="riva-countdown-seconds">
							<div class="inner">
								<div class="value">
									<p>0</p>
								</div>
								<div class="label">seconds</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php if($page['section']): ?>
	<?php print render($page['section']); ?>
<?php endif; ?>
<?php require_once(drupal_get_path('theme','zu').'/tpl/footer.tpl.php'); ?>