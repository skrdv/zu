<?php

$out = '';

if (!empty($block->block_id)) {

	$id = 'id="'.$block->block_id.'"';

} else {

	$id = '';

}

if($block->region == 'main_menu'){

	$out .= '<nav role="navigation" class="'.$classes.'" '.$attributes.'>';

	$out .= render($title_suffix);

	$out .= $content;

	$out .= '</nav>';

}elseif($block->region == 'slider'){

	$out .= '<div class="'.$classes.'"'.$attributes.'>';

	$out .= render($title_suffix);

	$out .= $content;

	$out .= '</div>';

}elseif($block->region == 'section'){

	$out .= '<section class="'.$classes.'"'.$attributes.'>';

	if ($block->subject):

		$out .= '<h2>'.$block->subject.'</h2>';

	endif;

	$out .= render($title_suffix);

	$out .= $content;

	$out .= '</section>';

}elseif($block->region == 'footer'){

	$out .= '<div class="col-lg-3"><aside class="'.$classes.'"'.$attributes.'>';

	if($block->subject):

		$out .= '<h4 class="widget-title">'.$block->subject.'</h4>';

	endif;

	$out .= render($title_suffix);

	$out .= $content;

	$out .= '</aside></div>';

	$out .= '<div class="clearfix mobile-typo-fix hidden-lg"></div>';

}elseif($block->region == 'footer_menu'){

	$out .= '<div class="'.$classes.'"'.$attributes.'>';

	$out .= render($title_suffix);

	$out .= $content;

	$out .= '</div>';

	

}elseif($block->region == 'search'){

	$out .= '<div class="'.$classes.'"'.$attributes.'>';

	$out .= render($title_suffix);

	$out .= $content;

	$out .= '</div>';

}elseif($block->region == 'page_title_right'){

	$out .= '<div class="search '.$classes.'"'.$attributes.'>';

	$out .= render($title_suffix);

	$out .= $content;

	$out .= '</div>';



}elseif($block->region == 'sidebar_first'||$block->region == 'sidebar_second'){

	$out .= '<aside class="'.$classes.'"'.$attributes.'>';

	if ($block->subject):

		$out .= '<h3 class="widget-title">'.$block->subject.'</h3>';

	endif;

	$out .= render($title_suffix);

	$out .= $content;

	$out .= '</aside>';

}elseif($block->region == 'content'){

	$out .= $content;



}elseif($block->region == 'bottom_product'){

	$out .= '<section class="'.$classes.'" '.$attributes.'>';

	$out .= render($title_suffix);

	$out .= $content;

	$out .= '</section>';

}elseif($block->region == 'bottom_page'){

	$out .= '<div class="row '.$classes.'" '.$attributes.'>';

	$out .= render($title_suffix);

	$out .= $content;

	$out .= '</div>';

}else{

	$out .= '<div class="'.$classes.'"'.$attributes.'>';

	$out .= render($title_suffix);

	$out .= $content;

	$out .= '</div>';

}

print $out;

?>