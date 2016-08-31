<?php $sale =  trim(strip_tags(render($content['product:field_commerce_saleprice_on_sale']))); ?>
<?php if(!$page){?>
<?php }else{?>
<div class="row">
    <div class="col-lg-5 col-lmd-6">
        <div class="plugin-container margin-top-leading single-product-images" id="images-single-product">
            <?php
          	foreach($content['product:field_image']['#items'] as $key => $value){
		        $image_uri  = $content['product:field_image']['#items'][$key]['uri'];
		        $image_url = file_create_url($image_uri);
		        print '<a href="'.$image_url.'" class="project-img fancybox">'.'<img src="'.$image_url.'">'.'</a>';
	        }?>
            <div class="riva-insert-menu-here"></div>
        </div>
    </div>
    <div class="col-lg-7 col-lmd-6">
        <p class="product-title"><?php print $title; ?></p>
        <p class="price">
        <?php if($sale == '1'){ ?>
	        <span class="old"><?php print strip_tags(render($content['product:commerce_price']));?></span>  
	        <span id="price_id" data-price=""><?php print strip_tags(render($content['product:field_commerce_saleprice']));?></span> 
	    <?php }else{ ?>
	    	<span id="price_id" data-price=""><?php print strip_tags(render($content['product:commerce_price']));?></span>
	    <?php } ?>
        </p>
        <?php print render($content['product:field_product_description']); ?>
        <?php
            hide($content['field_rating']);
        	hide($content['product:field_image']);
        	hide($content['product:commerce_price']);
        	hide($content['field_product_category']);
            hide($content['field_tags']);
        	hide($content['product:field_commerce_saleprice']);
            hide($content['product:field_product_details']);
        	print render($content);
        ?>
        </p>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="m-tabs tabs-info-product" data-active="1">
            <header>
                <span><i class="glyphicon glyphicon-globe"></i><?php print t('Product details') ?></span>
                <span><i class="glyphicon glyphicon-tower"></i><?php print t('Rating'); ?></span>
            </header>
            <section> 
                <?php print render($content['product:field_product_details']);?>
            </section>
            <section>
                <?php print render($content['field_rating']); ?>
            </section>
        </div>
    </div>
</div>
<?php } ?>