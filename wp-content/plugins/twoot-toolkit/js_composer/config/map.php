<?php
/**
 * WPBakery Visual Composer Shortcodes settings
 *
 * @package VPBakeryVisualComposer
 *
 */
$vc_is_wp_version_3_6_more = version_compare(preg_replace('/^([\d\.]+)(\-.*$)/', '$1', get_bloginfo('version')), '3.6') >= 0;


// Params
$animation_opts = array(
	__('No', 'js_composer') => '', 
	__('Fade In', 'js_composer') => 'fadeIn', 
	__('Fade In Left', 'js_composer') => 'fadeInLeft', 
	__('Fade In Right', 'js_composer') => 'fadeInRight', 
	__('Fade In Up', 'js_composer') => 'fadeInUp', 
	__('Fade In Down', 'js_composer') => 'fadeInDown'
);

$repeat_opts = array(
	__('No Repeat', 'js_composer') => 'no-repeat',
	__('Repeat only Horizontally', 'js_composer') => 'repeat-x',
	__('Repeat only Vertically', 'js_composer') => 'repeat-y',
	__('Repeat both Vertically and Horizontally', 'js_composer') => 'repeat'
);

$horizontal_opts = array(
	__('Left', 'js_composer') => 'left',
	__('Right', 'js_composer') => 'right',
	__('Center', 'js_composer') => 'center'
);

$vertical_opts = array(
	__('Top', 'js_composer') => 'top',
	__('Bottom', 'js_composer') => 'bottom',
	__('Center', 'js_composer') => 'center'
);

$attachment_opts = array(
	__('Fixed', 'js_composer') => 'fixed',
	__('Scroll', 'js_composer') => 'scroll'
);

$tax_opts = array(
	__('Cat', 'js_composer') => 'cat',
	__('Tag', 'js_composer') => 'tag'
);

$column_opts = array(
	__('2 Column', 'js_composer') => '2',
	__('3 Column', 'js_composer') => '3',
	__('4 Column', 'js_composer') => '4'
);

$order_opts = array(
	__('ASC', 'js_composer') => 'ASC',
	__('DESC', 'js_composer') => 'DESC'
);

$orderby_opts = array(
	__('ID', 'js_composer') => 'ID',
	__('Title', 'js_composer') => 'title',
	__('Name', 'js_composer') => 'name',
	__('Date', 'js_composer') => 'date',
	__('Rand', 'js_composer') => 'rand',
	__('Menu Order', 'js_composer') => 'menu_order'
);

$slider_num_opts = array(
	__('1 Item', 'js_composer') => '1',
	__('2 Item', 'js_composer') => '2',
	__('3 Item', 'js_composer') => '3',
	__('4 Item', 'js_composer') => '4'
);



// Row
vc_map( array(
	'name' => __('Row', 'js_composer'),
	'base' => 'vc_row',
	'is_container' => true,
	'icon' => '',
	'show_settings_on_create' => false,
	'category' => __('Content', 'js_composer'),
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => __('Padding Top', 'js_composer'),
			'param_name' => 'pt',
			'description' => __('Set the section from top, the unit is pixel.', 'js_composer')
		),
		array(
			'type' => 'textfield',
			'heading' => __('Padding Bottom', 'js_composer'),
			'param_name' => 'pb',
			'description' => __('Set the section from bottom, the unit is pixel.', 'js_composer')
		),
		array(
			'type' => 'textfield',
			'heading' => __('Text Color', 'js_composer'),
			'param_name' => 'text_color',
			'description' => __('Set the section text color, ex: "#FFFFFF".', 'js_composer')
		),
		array(
			'type' => 'textfield',
			'heading' => __('Background Color', 'js_composer'),
			'param_name' => 'bg_color',
			'description' => __('Set the section background color, ex: "#FFFFFF".', 'js_composer')
		),
		array(
			'type' => 'attach_image',
			'heading' => __('Image', 'js_composer'),
			'param_name' => 'bg_image',
			'value' => '',
			'description' => __('Select image from media library.', 'js_composer')
		),
		array(
			'type' => 'dropdown',
			'heading' => __('Image Repeat', 'js_composer'),
			'param_name' => 'bg_repeat',
			'value' => $repeat_opts,
			'description' => __('Select title location.', 'js_composer')
		),
		array(
			'type' => 'dropdown',
			'heading' => __('Image Horizontal', 'js_composer'),
			'param_name' => 'bg_horizontal',
			'value' => $horizontal_opts,
			'description' => __('Select title location.', 'js_composer')
		),
		array(
			'type' => 'dropdown',
			'heading' => __('Image Vertical', 'js_composer'),
			'param_name' => 'bg_vertical',
			'value' => $vertical_opts,
			'description' => __('Select title location.', 'js_composer')
		),
		array(
			'type' => 'dropdown',
			'heading' => __('Image Position', 'js_composer'),
			'param_name' => 'bg_attachment',
			'value' => $attachment_opts,
			'description' => __('Select title location.', 'js_composer')
		),
		array(
			'type' => 'textfield',
			'heading' => __('Extra class name', 'js_composer'),
			'param_name' => 'el_class',
			'description' => __('If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'js_composer')
		)
	),
	'js_view' => 'VcRowView'
) );


// Row Inner
vc_map( array(
	'name' => __('Row', 'js_composer'), //Inner Row
	'base' => 'vc_row_inner',
	'content_element' => false,
	'is_container' => true,
	'icon' => 'icon-wpb-row',
	'show_settings_on_create' => false,
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => __('Padding Top', 'js_composer'),
			'param_name' => 'pt',
			'description' => __('Set the section from top, the unit is pixel.', 'js_composer')
		),
		array(
			'type' => 'textfield',
			'heading' => __('Padding Bottom', 'js_composer'),
			'param_name' => 'pb',
			'description' => __('Set the section from bottom, the unit is pixel.', 'js_composer')
		),
		array(
			'type' => 'textfield',
			'heading' => __('Extra class name', 'js_composer'),
			'param_name' => 'el_class',
			'description' => __('If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'js_composer')
		)
	),
	'js_view' => 'VcRowView'
) );


// Text Block
vc_map( array(
	'name' => __('Text Block', 'js_composer'),
	'base' => 'vc_column_text',
	'icon' => '',
	'wrapper_class' => 'clearfix',
	'category' => __('Content', 'js_composer'),
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => __('Padding Top', 'js_composer'),
			'param_name' => 'pt',
			'description' => __('Set the section from top, the unit is pixel.', 'js_composer')
		),
		array(
			'type' => 'textfield',
			'heading' => __('Padding Bottom', 'js_composer'),
			'param_name' => 'pb',
			'description' => __('Set the section from bottom, the unit is pixel.', 'js_composer')
		),
		array(
			'type' => 'textarea_html',
			'holder' => 'div',
			'heading' => __('Text', 'js_composer'),
			'param_name' => 'content',
			'value' => __('<p>I am text block. Click edit button to change this text.</p>', 'js_composer')
		),
		array(
			'type' => 'dropdown',
			'heading' => __('CSS Animation', 'js_composer'),
			'param_name' => 'css_animation',
			'admin_label' => true,
			'value' => $animation_opts,
			'description' => __('Select animation type if you want this element to be animated when it enters into the browsers viewport. Note: Works only in modern browsers.', 'js_composer')
		),
		array(
			'type' => 'textfield',
			'heading' => __('Extra class name', 'js_composer'),
			'param_name' => 'el_class',
			'description' => __('If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'js_composer')
		)
	)
) );


// Quick Buttons
// Br
vc_map( array(
	'name' => __('Br', 'js_composer'),
	'base' => 'br',
	'icon' => '',
	'category' => __('Quick Buttons', 'js_composer'),
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => __('Padding Top', 'js_composer'),
			'param_name' => 'top',
			'description' => __('Set the section from top, the unit is pixel.', 'js_composer')
		)
	)
) );


// Clear
vc_map( array(
	'name' => __('Clear', 'js_composer'),
	'base' => 'clear',
	'icon' => '',
	'category' => __('Quick Buttons', 'js_composer'),
	'params' => array()
) );


// Title
vc_map( array(
	'name' => __('Title', 'js_composer'),
	'base' => 'title',
	'icon' => '',
	'category' => __('Quick Buttons', 'js_composer'),
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => __('Title', 'js_composer'),
			'param_name' => 'content',
			'value' => '',
			'description' => __('Set the title text.', 'js_composer')
		)
	)
) );


// Hr
vc_map( array(
	'name' => __('Hr', 'js_composer'),
	'base' => 'hr',
	'icon' => '',
	'category' => __('Quick Buttons', 'js_composer'),
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => __('Padding Top', 'js_composer'),
			'param_name' => 'top',
			'description' => __('Set the section from top, the unit is pixel.', 'js_composer')
		),
		array(
			'type' => 'textfield',
			'heading' => __('Padding Bottom', 'js_composer'),
			'param_name' => 'bottom',
			'description' => __('Set the section from bottom, the unit is pixel.', 'js_composer')
		)
	)
) );


// Accordion
vc_map( array(
	'name' => __('Accordion', 'js_composer'),
	'base' => 'vc_accordion',
	'show_settings_on_create' => false,
	'is_container' => true,
	'icon' => '',
	'category' => __('Content', 'js_composer'),
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => __('Extra class name', 'js_composer'),
			'param_name' => 'el_class',
			'description' => __('If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'js_composer')
		)
		),
		'custom_markup' => '
		<div class="wpb_accordion_holder wpb_holder clearfix vc_container_for_children">
		%content%
		</div>
		<div class="tab_controls">
		<button class="add_tab" title="'.__('Add accordion section', 'js_composer').'">'.__('Add accordion section', 'js_composer').'</button>
		</div>
		',
		'default_content' => '
		[vc_accordion_tab title="'.__('Section 1', 'js_composer').'"][/vc_accordion_tab]
		[vc_accordion_tab title="'.__('Section 2', 'js_composer').'"][/vc_accordion_tab]
		',
		'js_view' => 'VcAccordionView'
	) );
	vc_map( array(
		'name' => __('Accordion Section', 'js_composer'),
		'base' => 'vc_accordion_tab',
		'allowed_container_element' => 'vc_row',
		'is_container' => true,
		'content_element' => false,
		'params' => array(
		array(
			'type' => 'textfield',
			'heading' => __('Title', 'js_composer'),
			'param_name' => 'title',
			'description' => __('Accordion section title.', 'js_composer')
		),
	),
	'js_view' => 'VcAccordionTabView'
) );


// Audio
vc_map( array(
	'name' => __('Audio', 'js_composer'),
	'base' => 'audio',
	'icon' => '',
	'category' => __('Media', 'js_composer'),
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => __('Soundcloud Url', 'js_composer'),
			'param_name' => 'soundcloud_url',
			'description' => __('The url of audio, it is from SoundCloud. ex: "http://api.soundcloud.com/tracks/100556971"', 'js_composer')
		),
		array(
			'type' => 'textfield',
			'heading' => __('Height', 'js_composer'),
			'param_name' => 'height',
			'value' => '166',
			'description' => __('The height for the soundcloud.', 'js_composer')
		),
		array(
			'type' => 'textarea',
			'class' => 'text',
			'heading' => __('Embed', 'js_composer'),
			'param_name' => 'embed',
			'description' => __('If you want to add some other embed code, you can use this option.', 'js_composer')
		)
	)
) );


// Blog
vc_map( array(
	'name' => __('Blog', 'js_composer'),
	'base' => 'blog',
	'icon' => '',
	'category' => __('Blog', 'js_composer'),
	'params' => array(
		array(
			'type' => 'dropdown',
			'heading' => __('Tax', 'js_composer'),
			'param_name' => 'tax',
			'value' => $tax_opts,
			'description' => __('The taxonomy for the posts.', 'js_composer')
		),
		array(
			'type' => 'textfield',
			'heading' => __('Counts', 'js_composer'),
			'param_name' => 'counts',
			'value' => '12',
			'description' => __('The number of posts to display on each page.', 'js_composer')
		),
		array(
			'type' => 'textarea',
			'class' => 'text',
			'heading' => __('Cats', 'js_composer'),
			'param_name' => 'cats',
			'description' => __('The category ID’s to pull posts from. Can be entered as a comma separated list.', 'js_composer')
		),
		array(
			'type' => 'textarea',
			'class' => 'text',
			'heading' => __('Posts', 'js_composer'),
			'param_name' => 'posts',
			'description' => __('The post ID’s to pull posts from. Can be entered as a comma separated list.', 'js_composer')
		),
		array(
			'type' => 'dropdown',
			'heading' => __('Order', 'js_composer'),
			'param_name' => 'order',
			'value' => $order_opts,
			'description' => __('Designates the ascending or descending order of the "orderby" parameter.', 'js_composer')
		),
		array(
			'type' => 'dropdown',
			'heading' => __('Orderby', 'js_composer'),
			'param_name' => 'orderby',
			'value' => $orderby_opts,
			'description' => __('Sort retrieved posts by parameter.', 'js_composer')
		)
	)
) );


// Blog Carousel
vc_map( array(
	'name' => __('Blog Carousel', 'js_composer'),
	'base' => 'blog_carousel',
	'icon' => '',
	'category' => __('Blog', 'js_composer'),
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => __('Title', 'js_composer'),
			'param_name' => 'title',
			'value' => 'Recent News',
			'description' => __('The title for the post carousel.', 'js_composer')
		),
		array(
			'type' => 'dropdown',
			'heading' => __('Tax', 'js_composer'),
			'param_name' => 'tax',
			'value' => $tax_opts,
			'description' => __('The taxonomy for the posts.', 'js_composer')
		),
		array(
			'type' => 'textfield',
			'heading' => __('Counts', 'js_composer'),
			'param_name' => 'counts',
			'value' => '12',
			'description' => __('The number of posts to display on each page.', 'js_composer')
		),
		array(
			'type' => 'textarea',
			'class' => 'text',
			'heading' => __('Cats', 'js_composer'),
			'param_name' => 'cats',
			'description' => __('The category ID’s to pull posts from. Can be entered as a comma separated list.', 'js_composer')
		),
		array(
			'type' => 'textarea',
			'class' => 'text',
			'heading' => __('Posts', 'js_composer'),
			'param_name' => 'posts',
			'description' => __('The post ID’s to pull posts from. Can be entered as a comma separated list.', 'js_composer')
		),
		array(
			'type' => 'dropdown',
			'heading' => __('Order', 'js_composer'),
			'param_name' => 'order',
			'value' => $order_opts,
			'description' => __('Designates the ascending or descending order of the "orderby" parameter.', 'js_composer')
		),
		array(
			'type' => 'dropdown',
			'heading' => __('Orderby', 'js_composer'),
			'param_name' => 'orderby',
			'value' => $orderby_opts,
			'description' => __('Sort retrieved posts by parameter.', 'js_composer')
		),
		array(
			'type' => 'dropdown',
			'heading' => __('Auto', 'js_composer'),
			'param_name' => 'auto',
			'value' => array(
				__('True', 'js_composer') => 'true',
				__('False', 'js_composer') => 'false'
			),
			'description' => __('(Optional) Auto play the slider (true/false).', 'js_composer')
		),
		array(
			'type' => 'textfield',
			'heading' => __('Speed', 'js_composer'),
			'param_name' => 'speed',
			'value' => '800',
			'description' => __('(Optional) Slide transition duration (in ms).', 'js_composer')
		),
		array(
			'type' => 'textfield',
			'heading' => __('Pause', 'js_composer'),
			'param_name' => 'pause',
			'value' => '5000',
			'description' => __('(Optional) The amount of time (in ms) between each auto transition.', 'js_composer')
		),
		array(
			'type' => 'dropdown',
			'heading' => __('Move Slides', 'js_composer'),
			'param_name' => 'move_slides',
			'value' => $slider_num_opts,
			'description' => __('(Optional) The number of slides to move on transition.', 'js_composer')
		)
	)
) );


// Blog Grid
vc_map( array(
	'name' => __('Blog Grid', 'js_composer'),
	'base' => 'blog_grid',
	'icon' => '',
	'category' => __('Blog', 'js_composer'),
	'params' => array(
		array(
			'type' => 'dropdown',
			'heading' => __('Tax', 'js_composer'),
			'param_name' => 'tax',
			'value' => $tax_opts,
			'description' => __('The taxonomy for the posts.', 'js_composer')
		),
		array(
			'type' => 'dropdown',
			'heading' => __('Columns', 'js_composer'),
			'param_name' => 'columns',
			'value' => $column_opts,
			'description' => __('(Optional)The number of columns.', 'js_composer')
		),
		array(
			'type' => 'textfield',
			'heading' => __('Counts', 'js_composer'),
			'param_name' => 'counts',
			'value' => '12',
			'description' => __('(Optional)The number of posts to display on each page.', 'js_composer')
		),
		array(
			'type' => 'textarea',
			'class' => 'text',
			'heading' => __('Cats', 'js_composer'),
			'param_name' => 'cats',
			'description' => __('(Optional)The category ID’s to pull posts from. Can be entered as a comma separated list.', 'js_composer')
		),
		array(
			'type' => 'textarea',
			'class' => 'text',
			'heading' => __('Posts', 'js_composer'),
			'param_name' => 'posts',
			'description' => __('(Optional) The post ID’s to pull posts from. Can be entered as a comma separated list.', 'js_composer')
		),
		array(
			'type' => 'dropdown',
			'heading' => __('Order', 'js_composer'),
			'param_name' => 'order',
			'value' => $order_opts,
			'description' => __('(Optional) Designates the ascending or descending order of the "orderby" parameter.', 'js_composer')
		),
		array(
			'type' => 'dropdown',
			'heading' => __('Orderby', 'js_composer'),
			'param_name' => 'orderby',
			'value' => $orderby_opts,
			'description' => __('(Optional) Sort retrieved posts by parameter.', 'js_composer')
		),
		array(
			'type' => 'dropdown',
			'heading' => __('Filter', 'js_composer'),
			'param_name' => 'filter',
			'value' => array(
				__('Yes', 'js_composer') => 'yes',
				__('No', 'js_composer') => 'no'
			),
			'description' => __('(Optional) Show the sort menu.', 'js_composer')
		),
		array(
			'type' => 'dropdown',
			'heading' => __('Paging', 'js_composer'),
			'param_name' => 'paging',
			'value' => array(
				__('Yes', 'js_composer') => 'yes',
				__('No', 'js_composer') => 'no'
			),
			'description' => __('(Optional) Show the paging.', 'js_composer')
		)
	)
) );


// Blog List
vc_map( array(
	'name' => __('Blog List', 'js_composer'),
	'base' => 'blog_list',
	'icon' => '',
	'category' => __('Blog', 'js_composer'),
	'params' => array(
		array(
			'type' => 'dropdown',
			'heading' => __('Tax', 'js_composer'),
			'param_name' => 'tax',
			'value' => $tax_opts,
			'description' => __('The taxonomy for the posts.', 'js_composer')
		),
		array(
			'type' => 'dropdown',
			'heading' => __('Columns', 'js_composer'),
			'param_name' => 'columns',
			'value' => $column_opts,
			'description' => __('(Optional)The number of columns.', 'js_composer')
		),
		array(
			'type' => 'textfield',
			'heading' => __('Counts', 'js_composer'),
			'param_name' => 'counts',
			'value' => '12',
			'description' => __('(Optional)The number of posts to display on each page.', 'js_composer')
		),
		array(
			'type' => 'textarea',
			'class' => 'text',
			'heading' => __('Cats', 'js_composer'),
			'param_name' => 'cats',
			'description' => __('(Optional)The category ID’s to pull posts from. Can be entered as a comma separated list.', 'js_composer')
		),
		array(
			'type' => 'textarea',
			'class' => 'text',
			'heading' => __('Posts', 'js_composer'),
			'param_name' => 'posts',
			'description' => __('(Optional) The post ID’s to pull posts from. Can be entered as a comma separated list.', 'js_composer')
		),
		array(
			'type' => 'dropdown',
			'heading' => __('Order', 'js_composer'),
			'param_name' => 'order',
			'value' => $order_opts,
			'description' => __('(Optional) Designates the ascending or descending order of the "orderby" parameter.', 'js_composer')
		),
		array(
			'type' => 'dropdown',
			'heading' => __('Orderby', 'js_composer'),
			'param_name' => 'orderby',
			'value' => $orderby_opts,
			'description' => __('(Optional) Sort retrieved posts by parameter.', 'js_composer')
		),
		array(
			'type' => 'dropdown',
			'heading' => __('Paging', 'js_composer'),
			'param_name' => 'paging',
			'value' => array(
				__('Yes', 'js_composer') => 'yes',
				__('No', 'js_composer') => 'no'
			),
			'description' => __('(Optional) Show the paging.', 'js_composer')
		)
	)
) );


// Blog Masonry
vc_map( array(
	'name' => __('Blog Masonry', 'js_composer'),
	'base' => 'blog_masonry',
	'icon' => '',
	'category' => __('Blog', 'js_composer'),
	'params' => array(
		array(
			'type' => 'dropdown',
			'heading' => __('Tax', 'js_composer'),
			'param_name' => 'tax',
			'value' => $tax_opts,
			'description' => __('The taxonomy for the posts.', 'js_composer')
		),
		array(
			'type' => 'dropdown',
			'heading' => __('Columns', 'js_composer'),
			'param_name' => 'columns',
			'value' => $column_opts,
			'description' => __('(Optional)The number of columns.', 'js_composer')
		),
		array(
			'type' => 'textfield',
			'heading' => __('Counts', 'js_composer'),
			'param_name' => 'counts',
			'value' => '12',
			'description' => __('(Optional)The number of posts to display on each page.', 'js_composer')
		),
		array(
			'type' => 'textarea',
			'class' => 'text',
			'heading' => __('Cats', 'js_composer'),
			'param_name' => 'cats',
			'description' => __('(Optional)The category ID’s to pull posts from. Can be entered as a comma separated list.', 'js_composer')
		),
		array(
			'type' => 'textarea',
			'class' => 'text',
			'heading' => __('Posts', 'js_composer'),
			'param_name' => 'posts',
			'description' => __('(Optional) The post ID’s to pull posts from. Can be entered as a comma separated list.', 'js_composer')
		),
		array(
			'type' => 'dropdown',
			'heading' => __('Order', 'js_composer'),
			'param_name' => 'order',
			'value' => $order_opts,
			'description' => __('(Optional) Designates the ascending or descending order of the "orderby" parameter.', 'js_composer')
		),
		array(
			'type' => 'dropdown',
			'heading' => __('Orderby', 'js_composer'),
			'param_name' => 'orderby',
			'value' => $orderby_opts,
			'description' => __('(Optional) Sort retrieved posts by parameter.', 'js_composer')
		),
		array(
			'type' => 'dropdown',
			'heading' => __('Filter', 'js_composer'),
			'param_name' => 'filter',
			'value' => array(
				__('Yes', 'js_composer') => 'yes',
				__('No', 'js_composer') => 'no'
			),
			'description' => __('(Optional) Show the sort menu.', 'js_composer')
		),
		array(
			'type' => 'dropdown',
			'heading' => __('Paging', 'js_composer'),
			'param_name' => 'paging',
			'value' => array(
				__('Yes', 'js_composer') => 'yes',
				__('No', 'js_composer') => 'no'
			),
			'description' => __('(Optional) Show the paging.', 'js_composer')
		)
	)
) );


// Button
vc_map( array(
	'name' => __('Button', 'js_composer'),
	'base' => 'button',
	'icon' => '',
	'category' => __('Content', 'js_composer'),
	'params' => array(
		array(
			'type' => 'dropdown',
			'heading' => __('Style', 'js_composer'),
			'param_name' => 'style',
			'value' => array(
				__('Dark', 'js_composer') => 'dark',
				__('Light', 'js_composer') => 'light',
				__('Blue', 'js_composer') => 'blue',
				__('Red', 'js_composer') => 'red',
				__('Yellow', 'js_composer') => 'yellow',
				__('Green', 'js_composer') => 'green'
			),
			'description' => __('The style for button.', 'js_composer')
		),
		array(
			'type' => 'dropdown',
			'heading' => __('Type', 'js_composer'),
			'param_name' => 'type',
			'value' => array(
				__('None', 'js_composer') => 'none',
				__('Border', 'js_composer') => 'border'
			),
			'description' => __('The type for button.', 'js_composer')
		),
		array(
			'type' => 'dropdown',
			'heading' => __('Size', 'js_composer'),
			'param_name' => 'size',
			'value' => array(
				__('Small', 'js_composer') => 'small',
				__('Medium', 'js_composer') => 'medium',
				__('Large', 'js_composer') => 'large'
			),
			'description' => __('The size for button.', 'js_composer')
		),
		array(
			'type' => 'textfield',
			'heading' => __('Link', 'js_composer'),
			'param_name' => 'link',
			'description' => __('Enter the link url that you want to go.', 'js_composer')
		),
		array(
			'type' => 'dropdown',
			'heading' => __('Target', 'js_composer'),
			'param_name' => 'target',
			'value' => array(
				__('Self', 'js_composer') => 'self',
				__('Blank', 'js_composer') => 'blank'
			),
			'description' => __('(Optional) The target for button.', 'js_composer')
		),
		array(
			'type' => 'textarea',
			'class' => 'text',
			'heading' => __('Button text', 'js_composer'),
			'param_name' => 'content',
			'value' => __('Button Text', 'js_composer')
		)
	)
) );


// Column
vc_map( array(
	'name' => __('Column', 'js_composer'),
	'base' => 'vc_column',
	'is_container' => true,
	'content_element' => false,
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => __('Padding Top', 'js_composer'),
			'param_name' => 'pt',
			'description' => __('Set the section from top, the unit is pixel.', 'js_composer')
		),
		array(
			'type' => 'textfield',
			'heading' => __('Padding Bottom', 'js_composer'),
			'param_name' => 'pb',
			'description' => __('Set the section from bottom, the unit is pixel.', 'js_composer')
		),
		array(
			'type' => 'dropdown',
			'heading' => __('CSS Animation', 'js_composer'),
			'param_name' => 'css_animation',
			'admin_label' => true,
			'value' => $animation_opts,
			'description' => __('Select animation type if you want this element to be animated when it enters into the browsers viewport. Note: Works only in modern browsers.', 'js_composer')
		),
		array(
			'type' => 'textfield',
			'heading' => __('Extra class name', 'js_composer'),
			'param_name' => 'el_class',
			'description' => __('If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'js_composer')
		)
	),
	'js_view' => 'VcColumnView'
) );


// Column Inner
vc_map( array(
	'name' => __('Column', 'js_composer'),
	'base' => 'vc_column_inner',
	'class' => '',
	'icon' => '',
	'wrapper_class' => '',
	'controls'	=> 'full',
	'allowed_container_element' => false,
	'content_element' => false,
	'is_container' => true,
	'params'=> array(
		array(
			'type' => 'textfield',
			'heading' => __('Padding Top', 'js_composer'),
			'param_name' => 'pt',
			'description' => __('Set the section from top, the unit is pixel.', 'js_composer')
		),
		array(
			'type' => 'textfield',
			'heading' => __('Padding Bottom', 'js_composer'),
			'param_name' => 'pb',
			'description' => __('Set the section from bottom, the unit is pixel.', 'js_composer')
		),
		array(
			'type' => 'dropdown',
			'heading' => __('CSS Animation', 'js_composer'),
			'param_name' => 'css_animation',
			'admin_label' => true,
			'value' => $animation_opts,
			'description' => __('Select animation type if you want this element to be animated when it enters into the browsers viewport. Note: Works only in modern browsers.', 'js_composer')
		),
		array(
		  'type' => 'textfield',
		  'heading' => __('Extra class name', 'js_composer'),
		  'param_name' => 'el_class',
		  'value' => '',
		  'description' => __('If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'js_composer')
		)
	),
	'js_view' => 'VcColumnView'
) );


// FAQs
vc_map( array(
	'name' => __('FAQs', 'js_composer'),
	'base' => 'faqs',
	'icon' => '',
	'category' => __('Content', 'js_composer'),
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => __('Counts', 'js_composer'),
			'param_name' => 'counts',
			'value' => '12',
			'description' => __('(Optional)The number of posts to display on each page.', 'js_composer')
		),
		array(
			'type' => 'textarea',
			'class' => 'text',
			'heading' => __('Cats', 'js_composer'),
			'param_name' => 'cats',
			'description' => __('(Optional)The category ID’s to pull posts from. Can be entered as a comma separated list.', 'js_composer')
		),
		array(
			'type' => 'textarea',
			'class' => 'text',
			'heading' => __('Posts', 'js_composer'),
			'param_name' => 'posts',
			'description' => __('(Optional) The post ID’s to pull posts from. Can be entered as a comma separated list.', 'js_composer')
		),
		array(
			'type' => 'dropdown',
			'heading' => __('Order', 'js_composer'),
			'param_name' => 'order',
			'value' => $order_opts,
			'description' => __('(Optional) Designates the ascending or descending order of the "orderby" parameter.', 'js_composer')
		),
		array(
			'type' => 'dropdown',
			'heading' => __('Orderby', 'js_composer'),
			'param_name' => 'orderby',
			'value' => $orderby_opts,
			'description' => __('(Optional) Sort retrieved posts by parameter.', 'js_composer')
		),
		array(
			'type' => 'dropdown',
			'heading' => __('Filter', 'js_composer'),
			'param_name' => 'filter',
			'value' => array(
				__('Yes', 'js_composer') => 'yes',
				__('No', 'js_composer') => 'no'
			),
			'description' => __('(Optional) Show the sort menu.', 'js_composer')
		),
		array(
			'type' => 'dropdown',
			'heading' => __('Paging', 'js_composer'),
			'param_name' => 'paging',
			'value' => array(
				__('Yes', 'js_composer') => 'yes',
				__('No', 'js_composer') => 'no'
			),
			'description' => __('(Optional) Show the paging.', 'js_composer')
		)
	)
) );


// Feature Service 
vc_map( array(
	'name' => __('Feature Service', 'js_composer'),
	'base' => 'feature_service',
	'icon' => '',
	'category' => __('Content', 'js_composer'),
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => __('Title', 'js_composer'),
			'param_name' => 'title',
			'description' => __('Enter your title.', 'js_composer')
		),
		array(
			'type' => 'textfield',
			'heading' => __('Icon', 'js_composer'),
			'param_name' => 'icon',
			'description' => __('Enter the icon name. You can find the icon name here:<a href="'. TWOOT_URL . '/fonts/" target="_blank">Link</a>', 'js_composer')
		),
		array(
			'type' => 'textfield',
			'heading' => __('Link', 'js_composer'),
			'param_name' => 'link',
			'description' => __('Enter the link url that you want to go.', 'js_composer')
		),
		array(
			'type' => 'textfield',
			'heading' => __('Button Text', 'js_composer'),
			'param_name' => 'button_text',
			'description' => __('Enter the button text.', 'js_composer')
		),
		array(
			'type' => 'textarea',
			'class' => 'text',
			'heading' => __('Message text', 'js_composer'),
			'param_name' => 'content',
			'value' => __('I am message box. Click edit button to change this text.', 'js_composer')
		)
	)
) );


// Google Map 
vc_map( array(
	'name' => __('Google Map', 'js_composer'),
	'base' => 'gmap',
	'icon' => '',
	'category' => __('Content', 'js_composer'),
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => __('Address', 'js_composer'),
			'param_name' => 'address',
			'description' => __('The place you want to show.', 'js_composer')
		),
		array(
			'type' => 'textfield',
			'heading' => __('Lat', 'js_composer'),
			'param_name' => 'lat',
			'description' => __('(Optional) The number of map lat.', 'js_composer')
		),
		array(
			'type' => 'textfield',
			'heading' => __('Lng', 'js_composer'),
			'param_name' => 'lng',
			'description' => __('(Optional) The number of map lng.', 'js_composer')
		),
		array(
			'type' => 'textfield',
			'heading' => __('Zoom', 'js_composer'),
			'param_name' => 'zoom',
			'value' => '14',
			'description' => __('(Optional) The number of map zoom.', 'js_composer')
		),
		array(
			'type' => 'textfield',
			'heading' => __('Height', 'js_composer'),
			'param_name' => 'height',
			'value' => '500',
			'description' => __('(Optional) The number of map height.', 'js_composer')
		)
	)
) );


// Hgroup
vc_map( array(
	'name' => __('Hgroup', 'js_composer'),
	'base' => 'hgroup',
	'icon' => '',
	'category' => __('Content', 'js_composer'),
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => __('Margin Top', 'js_composer'),
			'param_name' => 'mt',
			'description' => __('Set the section from top, the unit is pixel.', 'js_composer')
		),
		array(
			'type' => 'textfield',
			'heading' => __('Margin Bottom', 'js_composer'),
			'param_name' => 'mb',
			'description' => __('Set the section from bottom, the unit is pixel.', 'js_composer')
		),
		array(
			'type' => 'dropdown',
			'heading' => __('Tag', 'js_composer'),
			'param_name' => 'tag',
			'value' => array(
				__('H1', 'js_composer') => 'h1',
				__('H2', 'js_composer') => 'h2',
				__('H3', 'js_composer') => 'h3',
				__('H4', 'js_composer') => 'h4',
				__('H5', 'js_composer') => 'h5',
				__('H6', 'js_composer') => 'h6'
			),
			'description' => __('Enter your title.', 'js_composer')
		),
		array(
			'type' => 'textfield',
			'heading' => __('Font Family', 'js_composer'),
			'param_name' => 'font_family',
			'description' => __('Set the font family.', 'js_composer')
		),
		array(
			'type' => 'textfield',
			'heading' => __('Font Size', 'js_composer'),
			'param_name' => 'font_size',
			'description' => __('Set the font size.', 'js_composer')
		),
		array(
			'type' => 'dropdown',
			'heading' => __('Font Weight', 'js_composer'),
			'param_name' => 'font_weight',
			'value' => array(
				__('Normal', 'js_composer') => 'normal',
				__('Bold', 'js_composer') => 'bold'
			),
			'description' => __('Set the font weight.', 'js_composer')
		),
		array(
			'type' => 'dropdown',
			'heading' => __('Text Transform', 'js_composer'),
			'param_name' => 'text_transform',
			'value' => array(
				__('None', 'js_composer') => 'none',
				__('Capitalize', 'js_composer') => 'capitalize',
				__('Uppercase', 'js_composer') => 'uppercase',
				__('Lowercase', 'js_composer') => 'lowercase'
			),
			'description' => __('Set the text transform.', 'js_composer')
		),
		array(
			'type' => 'dropdown',
			'heading' => __('Text Align', 'js_composer'),
			'param_name' => 'text_align',
			'value' => array(
				__('Left', 'js_composer') => 'left',
				__('Center', 'js_composer') => 'center',
				__('Right', 'js_composer') => 'right'
			),
			'description' => __('Set the text align.', 'js_composer')
		),
		array(
			'type' => 'textfield',
			'heading' => __('Text Color', 'js_composer'),
			'param_name' => 'text_color',
			'description' => __('Set the section text color, ex: "#FFFFFF".', 'js_composer')
		),
		array(
			'type' => 'textarea',
			'class' => 'text',
			'heading' => __('Text', 'js_composer'),
			'param_name' => 'content',
			'value' => __('', 'js_composer')
		)
	)
) );


// Icon
vc_map( array(
	'name' => __('Icon', 'js_composer'),
	'base' => 'icon',
	'icon' => '',
	'category' => __('Content', 'js_composer'),
	'params' => array(
		array(
			'type' => 'dropdown',
			'heading' => __('Size', 'js_composer'),
			'param_name' => 'size',
			'value' => array(
				__('Small', 'js_composer') => 'small',
				__('Medium', 'js_composer') => 'medium',
				__('Large', 'js_composer') => 'large'
			),
			'description' => __('The size for button.', 'js_composer')
		),
		array(
			'type' => 'textfield',
			'heading' => __('Name', 'js_composer'),
			'param_name' => 'name',
			'description' => __('Enter the icon name. You can find the icon name here:<a href="'. TWOOT_URL . '/fonts/" target="_blank">Link</a>', 'js_composer')
		)
	)
) );


// Icon Boxes
vc_map( array(
	'name' => __('Icon Boxes', 'js_composer'),
	'base' => 'icon_box',
	'icon' => '',
	'category' => __('Content', 'js_composer'),
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => __('Title', 'js_composer'),
			'param_name' => 'title',
			'description' => __('Enter your title.', 'js_composer')
		),
		array(
			'type' => 'textfield',
			'heading' => __('Icon', 'js_composer'),
			'param_name' => 'icon',
			'description' => __('Enter the icon name. You can find the icon name here:<a href="'. TWOOT_URL . '/fonts/" target="_blank">Link</a>', 'js_composer')
		),
		array(
			'type' => 'textfield',
			'heading' => __('Link', 'js_composer'),
			'param_name' => 'link',
			'description' => __('Enter the link url that you want to go.', 'js_composer')
		),
		array(
			'type' => 'textfield',
			'heading' => __('Button Text', 'js_composer'),
			'param_name' => 'button_text',
			'description' => __('Enter the button text.', 'js_composer')
		),
		array(
			'type' => 'textarea',
			'class' => 'text',
			'heading' => __('Message text', 'js_composer'),
			'param_name' => 'content',
			'value' => __('I am message box. Click edit button to change this text.', 'js_composer')
		)
	)
) );


// Image
vc_map( array(
	'name' => __('Image', 'js_composer'),
	'base' => 'vc_image',
	'icon' => '',
	'category' => __('Content', 'js_composer'),
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => __('Title', 'js_composer'),
			'param_name' => 'title',
			'description' => __('(Optional) The title of image.', 'js_composer')
		),
		array(
			'type' => 'attach_image',
			'heading' => __('Image', 'js_composer'),
			'param_name' => 'id',
			'value' => '',
			'description' => __('The image id.', 'js_composer')
		),
		array(
			'type' => 'textfield',
			'heading' => __('Width', 'js_composer'),
			'param_name' => 'width',
			'description' => __('(Optional) The image width.', 'js_composer')
		),
		array(
			'type' => 'textfield',
			'heading' => __('Height', 'js_composer'),
			'param_name' => 'height',
			'description' => __('(Optional) The image height.', 'js_composer')
		),
		array(
			'type' => 'dropdown',
			'heading' => __('Crop', 'js_composer'),
			'param_name' => 'crop',
			'value' => array(
				__('Yes', 'js_composer') => 'yes',
				__('No', 'js_composer') => 'no'
			),
			'description' => __('(Optional) Crop the image or not.', 'js_composer')
		),
		array(
			'type' => 'textfield',
			'heading' => __('Link', 'js_composer'),
			'param_name' => 'link',
			'description' => __('(Optional) The link of image.', 'js_composer')
		),
		array(
			'type' => 'dropdown',
			'heading' => __('Lightbox', 'js_composer'),
			'param_name' => 'lightbox',
			'value' => array(
				__('Yes', 'js_composer') => 'yes',
				__('No', 'js_composer') => 'no'
			),
			'description' => __('(Optional) Show the image with lightbox or not.', 'js_composer')
		)
	)
) );


// Message Boxes
vc_map( array(
	'name' => __('Message Boxes', 'js_composer'),
	'base' => 'message_box',
	'icon' => '',
	'category' => __('Content', 'js_composer'),
	'params' => array(
		array(
			'type' => 'dropdown',
			'heading' => __('Style', 'js_composer'),
			'param_name' => 'style',
			'value' => array(
				__('Default', 'js_composer') => 'default',
				__('Success', 'js_composer') => 'success',
				__('Warning', 'js_composer') => 'warning',
				__('Notice', 'js_composer') => 'notice',
				__('Error', 'js_composer') => 'error'
			),
			'description' => __('Choose the style.', 'js_composer')
		),
		array(
			'type' => 'dropdown',
			'heading' => __('Close', 'js_composer'),
			'param_name' => 'close',
			'value' => array(
				__('Yes', 'js_composer') => 'yes',
				__('No', 'js_composer') => 'no'
			),
			'description' => __('Show the close button.', 'js_composer')
		),
		array(
			'type' => 'textarea',
			'class' => 'text',
			'heading' => __('Text', 'js_composer'),
			'param_name' => 'content',
			'value' => __('I am message box. Click edit button to change this text.', 'js_composer')
		)
	)
) );


// Number
vc_map( array(
	'name' => __('Number', 'js_composer'),
	'base' => 'number',
	'icon' => '',
	'category' => __('Content', 'js_composer'),
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => __('Icon', 'js_composer'),
			'param_name' => 'icon',
			'description' => __('Enter the icon name.', 'js_composer')
		),
		array(
			'type' => 'textfield',
			'heading' => __('Title', 'js_composer'),
			'param_name' => 'title',
			'description' => __('Enter your title.', 'js_composer')
		),
		array(
			'type' => 'textfield',
			'heading' => __('Percent', 'js_composer'),
			'param_name' => 'percent',
			'description' => __('Enter the percent.', 'js_composer')
		)
	)
) );


// Latest Blog
vc_map( array(
	'name' => __('Latest Blog', 'js_composer'),
	'base' => 'latest_blog',
	'icon' => '',
	'category' => __('Blog', 'js_composer'),
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => __('Counts', 'js_composer'),
			'param_name' => 'counts',
			'value' => '5',
			'description' => __('The number of posts to display on each page.', 'js_composer')
		),
		array(
			'type' => 'textarea',
			'class' => 'text',
			'heading' => __('Cats', 'js_composer'),
			'param_name' => 'cats',
			'description' => __('The category ID’s to pull posts from. Can be entered as a comma separated list.', 'js_composer')
		),
		array(
			'type' => 'textarea',
			'class' => 'text',
			'heading' => __('Posts', 'js_composer'),
			'param_name' => 'posts',
			'description' => __('The post ID’s to pull posts from. Can be entered as a comma separated list.', 'js_composer')
		)
	)
) );


// Portfolio Carousel
vc_map( array(
	'name' => __('Portfolio Carousel', 'js_composer'),
	'base' => 'portfolio_carousel',
	'icon' => '',
	'category' => __('Portfolio', 'js_composer'),
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => __('Title', 'js_composer'),
			'param_name' => 'title',
			'value' => 'Recent Works',
			'description' => __('The title for the post carousel.', 'js_composer')
		),
		array(
			'type' => 'dropdown',
			'heading' => __('Tax', 'js_composer'),
			'param_name' => 'tax',
			'value' => $tax_opts,
			'description' => __('The taxonomy for the posts.', 'js_composer')
		),
		array(
			'type' => 'textfield',
			'heading' => __('Counts', 'js_composer'),
			'param_name' => 'counts',
			'value' => '12',
			'description' => __('The number of posts to display on each page.', 'js_composer')
		),
		array(
			'type' => 'textarea',
			'class' => 'text',
			'heading' => __('Cats', 'js_composer'),
			'param_name' => 'cats',
			'description' => __('The category ID’s to pull posts from. Can be entered as a comma separated list.', 'js_composer')
		),
		array(
			'type' => 'textarea',
			'class' => 'text',
			'heading' => __('Posts', 'js_composer'),
			'param_name' => 'posts',
			'description' => __('The post ID’s to pull posts from. Can be entered as a comma separated list.', 'js_composer')
		),
		array(
			'type' => 'dropdown',
			'heading' => __('Order', 'js_composer'),
			'param_name' => 'order',
			'value' => $order_opts,
			'description' => __('Designates the ascending or descending order of the "orderby" parameter.', 'js_composer')
		),
		array(
			'type' => 'dropdown',
			'heading' => __('Orderby', 'js_composer'),
			'param_name' => 'orderby',
			'value' => $orderby_opts,
			'description' => __('Sort retrieved posts by parameter.', 'js_composer')
		),
		array(
			'type' => 'dropdown',
			'heading' => __('Auto', 'js_composer'),
			'param_name' => 'auto',
			'value' => array(
				__('True', 'js_composer') => 'true',
				__('False', 'js_composer') => 'false'
			),
			'description' => __('(Optional) Auto play the slider (true/false).', 'js_composer')
		),
		array(
			'type' => 'textfield',
			'heading' => __('Speed', 'js_composer'),
			'param_name' => 'speed',
			'value' => '800',
			'description' => __('(Optional) Slide transition duration (in ms).', 'js_composer')
		),
		array(
			'type' => 'textfield',
			'heading' => __('Pause', 'js_composer'),
			'param_name' => 'pause',
			'value' => '5000',
			'description' => __('(Optional) The amount of time (in ms) between each auto transition.', 'js_composer')
		),
		array(
			'type' => 'dropdown',
			'heading' => __('Move Slides', 'js_composer'),
			'param_name' => 'move_slides',
			'value' => $slider_num_opts,
			'description' => __('(Optional) The number of slides to move on transition.', 'js_composer')
		)
	)
) );


// Portfolio Grid
vc_map( array(
	'name' => __('Portfolio Grid', 'js_composer'),
	'base' => 'portfolio_grid',
	'icon' => '',
	'category' => __('Portfolio', 'js_composer'),
	'params' => array(
		array(
			'type' => 'dropdown',
			'heading' => __('Tax', 'js_composer'),
			'param_name' => 'tax',
			'value' => $tax_opts,
			'description' => __('The taxonomy for the posts.', 'js_composer')
		),
		array(
			'type' => 'dropdown',
			'heading' => __('Columns', 'js_composer'),
			'param_name' => 'columns',
			'value' => $column_opts,
			'description' => __('(Optional)The number of columns.', 'js_composer')
		),
		array(
			'type' => 'textfield',
			'heading' => __('Counts', 'js_composer'),
			'param_name' => 'counts',
			'value' => '12',
			'description' => __('(Optional)The number of posts to display on each page.', 'js_composer')
		),
		array(
			'type' => 'textarea',
			'class' => 'text',
			'heading' => __('Cats', 'js_composer'),
			'param_name' => 'cats',
			'description' => __('(Optional)The category ID’s to pull posts from. Can be entered as a comma separated list.', 'js_composer')
		),
		array(
			'type' => 'textarea',
			'class' => 'text',
			'heading' => __('Posts', 'js_composer'),
			'param_name' => 'posts',
			'description' => __('(Optional) The post ID’s to pull posts from. Can be entered as a comma separated list.', 'js_composer')
		),
		array(
			'type' => 'dropdown',
			'heading' => __('Order', 'js_composer'),
			'param_name' => 'order',
			'value' => $order_opts,
			'description' => __('(Optional) Designates the ascending or descending order of the "orderby" parameter.', 'js_composer')
		),
		array(
			'type' => 'dropdown',
			'heading' => __('Orderby', 'js_composer'),
			'param_name' => 'orderby',
			'value' => $orderby_opts,
			'description' => __('(Optional) Sort retrieved posts by parameter.', 'js_composer')
		),
		array(
			'type' => 'dropdown',
			'heading' => __('Filter', 'js_composer'),
			'param_name' => 'filter',
			'value' => array(
				__('Yes', 'js_composer') => 'yes',
				__('No', 'js_composer') => 'no'
			),
			'description' => __('(Optional) Show the sort menu.', 'js_composer')
		),
		array(
			'type' => 'dropdown',
			'heading' => __('Paging', 'js_composer'),
			'param_name' => 'paging',
			'value' => array(
				__('Yes', 'js_composer') => 'yes',
				__('No', 'js_composer') => 'no'
			),
			'description' => __('(Optional) Show the paging.', 'js_composer')
		)
	)
) );


// Portfolio List
vc_map( array(
	'name' => __('Portfolio List', 'js_composer'),
	'base' => 'portfolio_list',
	'icon' => '',
	'category' => __('Portfolio', 'js_composer'),
	'params' => array(
		array(
			'type' => 'dropdown',
			'heading' => __('Tax', 'js_composer'),
			'param_name' => 'tax',
			'value' => $tax_opts,
			'description' => __('The taxonomy for the posts.', 'js_composer')
		),
		array(
			'type' => 'dropdown',
			'heading' => __('Columns', 'js_composer'),
			'param_name' => 'columns',
			'value' => $column_opts,
			'description' => __('The number of columns.', 'js_composer')
		),
		array(
			'type' => 'textfield',
			'heading' => __('Counts', 'js_composer'),
			'param_name' => 'counts',
			'value' => '12',
			'description' => __('The number of posts to display on each page.', 'js_composer')
		),
		array(
			'type' => 'textarea',
			'class' => 'text',
			'heading' => __('Cats', 'js_composer'),
			'param_name' => 'cats',
			'description' => __('The category ID’s to pull posts from. Can be entered as a comma separated list.', 'js_composer')
		),
		array(
			'type' => 'textarea',
			'class' => 'text',
			'heading' => __('Posts', 'js_composer'),
			'param_name' => 'posts',
			'description' => __('The post ID’s to pull posts from. Can be entered as a comma separated list.', 'js_composer')
		),
		array(
			'type' => 'dropdown',
			'heading' => __('Order', 'js_composer'),
			'param_name' => 'order',
			'value' => $order_opts,
			'description' => __('Designates the ascending or descending order of the "orderby" parameter.', 'js_composer')
		),
		array(
			'type' => 'dropdown',
			'heading' => __('Orderby', 'js_composer'),
			'param_name' => 'orderby',
			'value' => $orderby_opts,
			'description' => __('Sort retrieved posts by parameter.', 'js_composer')
		),
		array(
			'type' => 'dropdown',
			'heading' => __('Paging', 'js_composer'),
			'param_name' => 'paging',
			'value' => array(
				__('Yes', 'js_composer') => 'yes',
				__('No', 'js_composer') => 'no'
			),
			'description' => __('Show the paging.', 'js_composer')
		)
	)
) );


// Portfolio Masonry
vc_map( array(
	'name' => __('Portfolio Masonry', 'js_composer'),
	'base' => 'portfolio_masonry',
	'icon' => '',
	'category' => __('Portfolio', 'js_composer'),
	'params' => array(
		array(
			'type' => 'dropdown',
			'heading' => __('Tax', 'js_composer'),
			'param_name' => 'tax',
			'value' => $tax_opts,
			'description' => __('The taxonomy for the posts.', 'js_composer')
		),
		array(
			'type' => 'dropdown',
			'heading' => __('Columns', 'js_composer'),
			'param_name' => 'columns',
			'value' => $column_opts,
			'description' => __('(Optional)The number of columns.', 'js_composer')
		),
		array(
			'type' => 'textfield',
			'heading' => __('Counts', 'js_composer'),
			'param_name' => 'counts',
			'value' => '12',
			'description' => __('(Optional)The number of posts to display on each page.', 'js_composer')
		),
		array(
			'type' => 'textarea',
			'class' => 'text',
			'heading' => __('Cats', 'js_composer'),
			'param_name' => 'cats',
			'description' => __('(Optional)The category ID’s to pull posts from. Can be entered as a comma separated list.', 'js_composer')
		),
		array(
			'type' => 'textarea',
			'class' => 'text',
			'heading' => __('Posts', 'js_composer'),
			'param_name' => 'posts',
			'description' => __('(Optional) The post ID’s to pull posts from. Can be entered as a comma separated list.', 'js_composer')
		),
		array(
			'type' => 'dropdown',
			'heading' => __('Order', 'js_composer'),
			'param_name' => 'order',
			'value' => $order_opts,
			'description' => __('(Optional) Designates the ascending or descending order of the "orderby" parameter.', 'js_composer')
		),
		array(
			'type' => 'dropdown',
			'heading' => __('Orderby', 'js_composer'),
			'param_name' => 'orderby',
			'value' => $orderby_opts,
			'description' => __('(Optional) Sort retrieved posts by parameter.', 'js_composer')
		),
		array(
			'type' => 'dropdown',
			'heading' => __('Filter', 'js_composer'),
			'param_name' => 'filter',
			'value' => array(
				__('Yes', 'js_composer') => 'yes',
				__('No', 'js_composer') => 'no'
			),
			'description' => __('(Optional) Show the sort menu.', 'js_composer')
		),
		array(
			'type' => 'dropdown',
			'heading' => __('Paging', 'js_composer'),
			'param_name' => 'paging',
			'value' => array(
				__('Yes', 'js_composer') => 'yes',
				__('No', 'js_composer') => 'no'
			),
			'description' => __('(Optional) Show the paging.', 'js_composer')
		)
	)
) );


// Post Images
vc_map( array(
	'name' => __('Post Images', 'js_composer'),
	'base' => 'post_images',
	'icon' => '',
	'category' => __('Content', 'js_composer'),
	'params' => array(
		array(
			'type' => 'attach_images',
			'heading' => __('Images', 'js_composer'),
			'param_name' => 'ids',
			'value' => '',
			'description' => __('The image ids.', 'js_composer')
		),
		array(
			'type' => 'textfield',
			'heading' => __('Width', 'js_composer'),
			'param_name' => 'width',
			'description' => __('(Optional) The image width.', 'js_composer')
		),
		array(
			'type' => 'textfield',
			'heading' => __('Height', 'js_composer'),
			'param_name' => 'height',
			'description' => __('(Optional) The image height.', 'js_composer')
		),
		array(
			'type' => 'dropdown',
			'heading' => __('Crop', 'js_composer'),
			'param_name' => 'crop',
			'value' => array(
				__('Yes', 'js_composer') => 'yes',
				__('No', 'js_composer') => 'no'
			),
			'description' => __('(Optional) Crop the image or not.', 'js_composer')
		),
		array(
			'type' => 'dropdown',
			'heading' => __('Lightbox', 'js_composer'),
			'param_name' => 'lightbox',
			'value' => array(
				__('Yes', 'js_composer') => 'yes',
				__('No', 'js_composer') => 'no'
			),
			'description' => __('(Optional) Show the image with lightbox or not.', 'js_composer')
		)
	)
) );


// Post Masonry
vc_map( array(
	'name' => __('Post Masonry', 'js_composer'),
	'base' => 'post_masonry',
	'icon' => '',
	'category' => __('Content', 'js_composer'),
	'params' => array(
		array(
			'type' => 'attach_images',
			'heading' => __('Images', 'js_composer'),
			'param_name' => 'ids',
			'value' => '',
			'description' => __('The image ids.', 'js_composer')
		),
		array(
			'type' => 'textfield',
			'heading' => __('Width', 'js_composer'),
			'param_name' => 'width',
			'description' => __('(Optional) The image width.', 'js_composer')
		),
		array(
			'type' => 'textfield',
			'heading' => __('Height', 'js_composer'),
			'param_name' => 'height',
			'description' => __('(Optional) The image height.', 'js_composer')
		),
		array(
			'type' => 'dropdown',
			'heading' => __('Crop', 'js_composer'),
			'param_name' => 'crop',
			'value' => array(
				__('Yes', 'js_composer') => 'yes',
				__('No', 'js_composer') => 'no'
			),
			'description' => __('(Optional) Crop the image or not.', 'js_composer')
		),
		array(
			'type' => 'dropdown',
			'heading' => __('Lightbox', 'js_composer'),
			'param_name' => 'lightbox',
			'value' => array(
				__('Yes', 'js_composer') => 'yes',
				__('No', 'js_composer') => 'no'
			),
			'description' => __('(Optional) Show the image with lightbox or not.', 'js_composer')
		),
		array(
			'type' => 'dropdown',
			'heading' => __('Columns', 'js_composer'),
			'param_name' => 'columns',
			'value' => $column_opts,
			'description' => __('(Optional)The number of columns.', 'js_composer')
		)
	)
) );


// Post Slider
vc_map( array(
	'name' => __('Post Slider', 'js_composer'),
	'base' => 'post_slider',
	'icon' => '',
	'category' => __('Content', 'js_composer'),
	'params' => array(
		array(
			'type' => 'attach_images',
			'heading' => __('Images', 'js_composer'),
			'param_name' => 'ids',
			'value' => '',
			'description' => __('The image ids.', 'js_composer')
		),
		array(
			'type' => 'textfield',
			'heading' => __('Width', 'js_composer'),
			'param_name' => 'width',
			'description' => __('(Optional) The image width.', 'js_composer')
		),
		array(
			'type' => 'textfield',
			'heading' => __('Height', 'js_composer'),
			'param_name' => 'height',
			'description' => __('(Optional) The image height.', 'js_composer')
		),
		array(
			'type' => 'dropdown',
			'heading' => __('Crop', 'js_composer'),
			'param_name' => 'crop',
			'value' => array(
				__('Yes', 'js_composer') => 'yes',
				__('No', 'js_composer') => 'no'
			),
			'description' => __('(Optional) Crop the image or not.', 'js_composer')
		),
		array(
			'type' => 'dropdown',
			'heading' => __('Lightbox', 'js_composer'),
			'param_name' => 'lightbox',
			'value' => array(
				__('Yes', 'js_composer') => 'yes',
				__('No', 'js_composer') => 'no'
			),
			'description' => __('(Optional) Show the image with lightbox or not.', 'js_composer')
		),
		array(
			'type' => 'dropdown',
			'heading' => __('Auto', 'js_composer'),
			'param_name' => 'auto',
			'value' => array(
				__('True', 'js_composer') => 'true',
				__('False', 'js_composer') => 'false'
			),
			'description' => __('(Optional) Auto play the slider (true/false).', 'js_composer')
		),
		array(
			'type' => 'textfield',
			'heading' => __('Speed', 'js_composer'),
			'param_name' => 'speed',
			'value' => '800',
			'description' => __('(Optional) Slide transition duration (in ms).', 'js_composer')
		),
		array(
			'type' => 'textfield',
			'heading' => __('Pause', 'js_composer'),
			'param_name' => 'pause',
			'value' => '5000',
			'description' => __('(Optional) The amount of time (in ms) between each auto transition.', 'js_composer')
		),
		array(
			'type' => 'dropdown',
			'heading' => __('Mode', 'js_composer'),
			'param_name' => 'mode',
			'value' => array(
				__('Fade', 'js_composer') => 'fade',
				__('Horizontal', 'js_composer') => 'horizontal',
				__('Vertical', 'js_composer') => 'vertical'
			),
			'description' => __('Type of transition between slides.', 'js_composer')
		)
	)
) );


// Price Table
vc_map( array(
	'name' => __('Price Table', 'js_composer'),
	'base' => 'price_table',
	'icon' => '',
	'category' => __('Content', 'js_composer'),
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => __('Title', 'js_composer'),
			'param_name' => 'title',
			'description' => __('The title for price table.', 'js_composer')
		),
		array(
			'type' => 'textfield',
			'heading' => __('Currency', 'js_composer'),
			'param_name' => 'currency',
			'value' => '$',
			'description' => __('The currency for price table.', 'js_composer')
		),
		array(
			'type' => 'textfield',
			'heading' => __('Price', 'js_composer'),
			'param_name' => 'price',
			'description' => __('The price for price table.', 'js_composer')
		),
		array(
			'type' => 'textfield',
			'heading' => __('Sub Price', 'js_composer'),
			'param_name' => 'sub_price',
			'description' => __('The sub price for price table.', 'js_composer')
		),
		array(
			'type' => 'textfield',
			'heading' => __('Time', 'js_composer'),
			'param_name' => 'time',
			'description' => __('The time for price table.', 'js_composer')
		),
		array(
			'type' => 'textfield',
			'heading' => __('Button Text', 'js_composer'),
			'param_name' => 'button_text',
			'description' => __('Enter the button text.', 'js_composer')
		),
		array(
			'type' => 'textfield',
			'heading' => __('Button Link', 'js_composer'),
			'param_name' => 'button_link',
			'description' => __('Enter the link url that you want to go.', 'js_composer')
		),
		array(
			'type' => 'textarea_html',
			'holder' => 'div',
			'heading' => __('Text', 'js_composer'),
			'param_name' => 'content',
			'value' => __('I am text block. Click edit button to change this text.', 'js_composer')
		)
	)
) );


// Progress Bar
vc_map( array(
	'name' => __('Progress Bar', 'js_composer'),
	'base' => 'progress_bar',
	'icon' => '',
	'category' => __('Content', 'js_composer'),
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => __('Title', 'js_composer'),
			'param_name' => 'title',
			'description' => __('Enter your title.', 'js_composer')
		),
		array(
			'type' => 'textfield',
			'heading' => __('Percent', 'js_composer'),
			'param_name' => 'percent',
			'description' => __('Enter the percent.', 'js_composer')
		)
	)
) );


// Social Icon
vc_map( array(
	'name' => __('Social Icon', 'js_composer'),
	'base' => 'social_icon',
	'icon' => '',
	'category' => __('Content', 'js_composer'),
	'params' => array(
		array(
			'type' => 'dropdown',
			'heading' => __('Type', 'js_composer'),
			'param_name' => 'type',
			'value' => array(
				__('Duckduckgo', 'js_composer') => 'duckduckgo',
				__('Aim', 'js_composer') => 'aim',
				__('Delicious', 'js_composer') => 'delicious',
				__('Smashmag', 'js_composer') => 'smashmag',
				__('Fivehundredpx', 'js_composer') => 'fivehundredpx',
				__('Forrst', 'js_composer') => 'forrst',
				__('Blogger', 'js_composer') => 'blogger',
				__('Viadeo', 'js_composer') => 'viadeo',
				__('Youtube', 'js_composer') => 'youtube',
				__('Facebook', 'js_composer') => 'facebook',
				__('Github', 'js_composer') => 'github',
				__('Twitter', 'js_composer') => 'twitter',
				__('Flickr', 'js_composer') => 'flickr',
				__('Vimeo', 'js_composer') => 'vimeo',
				__('Gplus', 'js_composer') => 'gplus',
				__('Pinterest', 'js_composer') => 'pinterest',
				__('Tumblr', 'js_composer') => 'tumblr',
				__('Linkedin', 'js_composer') => 'linkedin',
				__('Dribbble', 'js_composer') => 'dribbble',
				__('Stumbleupon', 'js_composer') => 'stumbleupon',
				__('Box', 'js_composer') => 'box',
				__('Spotify', 'js_composer') => 'spotify',
				__('Instagram', 'js_composer') => 'instagram',
				__('Dropbox', 'js_composer') => 'dropbox',
				__('Flattr', 'js_composer') => 'flattr',
				__('Skype', 'js_composer') => 'skype',
				__('Soundcloud', 'js_composer') => 'soundcloud',
				__('Behance', 'js_composer') => 'behance',
				__('Vkontakte', 'js_composer') => 'vkontakte'
			),
			'description' => __('Type of social icon.', 'js_composer')
		),
		array(
			'type' => 'textfield',
			'heading' => __('Link', 'js_composer'),
			'param_name' => 'ink',
			'description' => __('Enter the link url that you want to go.', 'js_composer')
		)
	)
) );


// Team Member
vc_map( array(
	'name' => __('Team Member', 'js_composer'),
	'base' => 'team_member',
	'icon' => '',
	'category' => __('Content', 'js_composer'),
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => __('Avatar', 'js_composer'),
			'param_name' => 'avatar',
			'description' => __('The image url for avatar.', 'js_composer')
		),
		array(
			'type' => 'textfield',
			'heading' => __('Name', 'js_composer'),
			'param_name' => 'name',
			'description' => __('The name for member.', 'js_composer')
		),
		array(
			'type' => 'textfield',
			'heading' => __('Role', 'js_composer'),
			'param_name' => 'role',
			'description' => __('The role for member.', 'js_composer')
		),
		array(
			'type' => 'textarea',
			'class' => 'text',
			'heading' => __('Text', 'js_composer'),
			'param_name' => 'content',
			'value' => __('I am message box. Click edit button to change this text.', 'js_composer')
		)
	)
) );


// Testimonial
vc_map( array(
	'name' => __('Testimonials', 'js_composer'),
	'base' => 'testimonials',
	'icon' => '',
	'category' => __('Content', 'js_composer'),
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => __('Counts', 'js_composer'),
			'param_name' => 'counts',
			'value' => '5',
			'description' => __('The number of posts to display on each page.', 'js_composer')
		),
		array(
			'type' => 'textarea',
			'class' => 'text',
			'heading' => __('Posts', 'js_composer'),
			'param_name' => 'posts',
			'description' => __('The post ID’s to pull posts from. Can be entered as a comma separated list.', 'js_composer')
		),
		array(
			'type' => 'dropdown',
			'heading' => __('Order', 'js_composer'),
			'param_name' => 'order',
			'value' => $order_opts,
			'description' => __('Designates the ascending or descending order of the "orderby" parameter.', 'js_composer')
		),
		array(
			'type' => 'dropdown',
			'heading' => __('Orderby', 'js_composer'),
			'param_name' => 'orderby',
			'value' => $orderby_opts,
			'description' => __('Sort retrieved posts by parameter.', 'js_composer')
		)
	)
) );


// Testimonial Carousel
vc_map( array(
	'name' => __('Testimonial Carousel', 'js_composer'),
	'base' => 'testimonial_carousel',
	'icon' => '',
	'category' => __('Content', 'js_composer'),
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => __('Counts', 'js_composer'),
			'param_name' => 'counts',
			'value' => '12',
			'description' => __('The number of posts to display on each page.', 'js_composer')
		),
		array(
			'type' => 'textarea',
			'class' => 'text',
			'heading' => __('Posts', 'js_composer'),
			'param_name' => 'posts',
			'description' => __('The post ID’s to pull posts from. Can be entered as a comma separated list.', 'js_composer')
		),
		array(
			'type' => 'dropdown',
			'heading' => __('Order', 'js_composer'),
			'param_name' => 'order',
			'value' => $order_opts,
			'description' => __('Designates the ascending or descending order of the "orderby" parameter.', 'js_composer')
		),
		array(
			'type' => 'dropdown',
			'heading' => __('Orderby', 'js_composer'),
			'param_name' => 'orderby',
			'value' => $orderby_opts,
			'description' => __('Sort retrieved posts by parameter.', 'js_composer')
		),
		array(
			'type' => 'dropdown',
			'heading' => __('Auto', 'js_composer'),
			'param_name' => 'auto',
			'value' => array(
				__('True', 'js_composer') => 'true',
				__('False', 'js_composer') => 'false'
			),
			'description' => __('(Optional) Auto play the slider (true/false).', 'js_composer')
		),
		array(
			'type' => 'textfield',
			'heading' => __('Speed', 'js_composer'),
			'param_name' => 'speed',
			'value' => '800',
			'description' => __('(Optional) Slide transition duration (in ms).', 'js_composer')
		),
		array(
			'type' => 'textfield',
			'heading' => __('Pause', 'js_composer'),
			'param_name' => 'pause',
			'value' => '5000',
			'description' => __('(Optional) The amount of time (in ms) between each auto transition.', 'js_composer')
		),
		array(
			'type' => 'dropdown',
			'heading' => __('Mode', 'js_composer'),
			'param_name' => 'mode',
			'value' => array(
				__('Fade', 'js_composer') => 'fade',
				__('Horizontal', 'js_composer') => 'horizontal',
				__('Vertical', 'js_composer') => 'vertical'
			),
			'description' => __('Type of transition between slides.', 'js_composer')
		)
	)
) );


// Toggle
vc_map( array(
	'name' => __('Toggle', 'js_composer'),
	'base' => 'vc_toggle',
	'icon' => '',
	'category' => __('Content', 'js_composer'),
	'params' => array(
		array(
			'type' => 'textfield',
			'holder' => 'h4',
			'class' => 'toggle_title',
			'heading' => __('Toggle title', 'js_composer'),
			'param_name' => 'title',
			'value' => __('Toggle title', 'js_composer'),
			'description' => __('Toggle block title.', 'js_composer')
		),
		array(
			'type' => 'textarea_html',
			'holder' => 'div',
			'class' => 'toggle_content',
			'heading' => __('Toggle content', 'js_composer'),
			'param_name' => 'content',
			'value' => __('<p>Toggle content goes here, click edit button to change this text.</p>', 'js_composer'),
			'description' => __('Toggle block content.', 'js_composer')
		),
		array(
			'type' => 'textfield',
			'heading' => __('Extra class name', 'js_composer'),
			'param_name' => 'el_class',
			'description' => __('If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'js_composer')
		)
	),
	'js_view' => 'VcToggleView'
) );


// Tabs
$tab_id_1 = time().'-1-'.rand(0, 100);
$tab_id_2 = time().'-2-'.rand(0, 100);
vc_map( array(
	'name'  => __('Tabs', 'js_composer'),
	'base' => 'vc_tabs',
	'show_settings_on_create' => false,
	'is_container' => true,
	'icon' => '',
	'category' => __('Content', 'js_composer'),
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => __('Extra class name', 'js_composer'),
			'param_name' => 'el_class',
			'description' => __('If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'js_composer')
		)
	),
	'custom_markup' => '
	<div class="wpb_tabs_holder wpb_holder vc_container_for_children">
	<ul class="tabs_controls">
	</ul>
	%content%
	</div>'
	,
	'default_content' => '
	[vc_tab title="'.__('Tab 1','js_composer').'" tab_id="'.$tab_id_1.'"][/vc_tab]
	[vc_tab title="'.__('Tab 2','js_composer').'" tab_id="'.$tab_id_2.'"][/vc_tab]
	',
	'js_view' => 'VcTabsView'
) );


vc_map( array(
	'name'  => __('Tour', 'js_composer'),
	'base' => 'vc_tour',
	'show_settings_on_create' => false,
	'is_container' => true,
	'icon' => '',
	'category' => __('Content', 'js_composer'),
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => __('Extra class name', 'js_composer'),
			'param_name' => 'el_class',
			'description' => __('If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'js_composer')
		)
	),
	'custom_markup' => '
	<div class="wpb_tabs_holder wpb_holder vc_container_for_children">
	<ul class="tabs_controls">
	</ul>
	%content%
	</div>'
	,
	'default_content' => '
	[vc_tab title="'.__('Tab 1','js_composer').'" tab_id="'.$tab_id_1.'"][/vc_tab]
	[vc_tab title="'.__('Tab 2','js_composer').'" tab_id="'.$tab_id_2.'"][/vc_tab]
	',
	'js_view' => 'VcTabsView'
) );


vc_map( array(
	'name' => __('Tab', 'js_composer'),
	'base' => 'vc_tab',
	'allowed_container_element' => 'vc_row',
	'is_container' => true,
	'content_element' => false,
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => __('Title', 'js_composer'),
			'param_name' => 'title',
			'description' => __('Tab title.', 'js_composer')
		),
		array(
			'type' => 'tab_id',
			'heading' => __('Tab ID', 'js_composer'),
			'param_name' => 'tab_id'
		)
	),
	'js_view' => 'VcTabView'
) );


// Twitter Carousel 
vc_map( array(
	'name' => __('Twitter Carousel', 'js_composer'),
	'base' => 'twitter_carousel',
	'icon' => '',
	'category' => __('Content', 'js_composer'),
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => __('Counts', 'js_composer'),
			'param_name' => 'counts',
			'value' => '5',
			'description' => __('The number of posts to display on each page.', 'js_composer')
		),
		array(
			'type' => 'textfield',
			'heading' => __('Cache', 'js_composer'),
			'param_name' => 'cache',
			'value' => '1',
			'description' => __('The cache time (in hour).', 'js_composer')
		),
		array(
			'type' => 'dropdown',
			'heading' => __('Auto', 'js_composer'),
			'param_name' => 'auto',
			'value' => array(
				__('True', 'js_composer') => 'true',
				__('False', 'js_composer') => 'false'
			),
			'description' => __('(Optional) Auto play the slider (true/false).', 'js_composer')
		),
		array(
			'type' => 'textfield',
			'heading' => __('Speed', 'js_composer'),
			'param_name' => 'speed',
			'value' => '800',
			'description' => __('(Optional) Slide transition duration (in ms).', 'js_composer')
		),
		array(
			'type' => 'textfield',
			'heading' => __('Pause', 'js_composer'),
			'param_name' => 'pause',
			'value' => '5000',
			'description' => __('(Optional) The amount of time (in ms) between each auto transition.', 'js_composer')
		),
		array(
			'type' => 'dropdown',
			'heading' => __('Mode', 'js_composer'),
			'param_name' => 'mode',
			'value' => array(
				__('Fade', 'js_composer') => 'fade',
				__('Horizontal', 'js_composer') => 'horizontal',
				__('Vertical', 'js_composer') => 'vertical'
			),
			'description' => __('Type of transition between slides.', 'js_composer')
		)
	)
) );


// Video
vc_map( array(
	'name' => __('Video', 'js_composer'),
	'base' => 'video',
	'icon' => '',
	'category' => __('Media', 'js_composer'),
	'params' => array(
		array(
			'type' => 'dropdown',
			'heading' => __('Type', 'js_composer'),
			'param_name' => 'type',
			'value' => array(
				__('Youtube', 'js_composer') => 'youtube',
				__('Vimeo', 'js_composer') => 'vimeo'
			),
			'description' => __('Type of transition between slides.', 'js_composer')
		),
		array(
			'type' => 'textfield',
			'heading' => __('Url', 'js_composer'),
			'param_name' => 'url',
			'description' => __('The url for the video. ex: "http://vimeo.com/57148705"', 'js_composer')
		),
		array(
			'type' => 'textarea',
			'class' => 'text',
			'heading' => __('Embed', 'js_composer'),
			'param_name' => 'embed',
			'description' => __('If you want to add some other embed code, you can use this option.', 'js_composer')
		),
		array(
			'type' => 'textfield',
			'heading' => __('Width', 'js_composer'),
			'param_name' => 'width',
			'description' => __('(Optional) The width for the video.', 'js_composer')
		),
		array(
			'type' => 'textfield',
			'heading' => __('Height', 'js_composer'),
			'param_name' => 'height',
			'description' => __('(Optional) The height for the video.', 'js_composer')
		)
	)
) );



/* Support for 3rd Party plugins
---------------------------------------------------------- */
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
if (is_plugin_active('LayerSlider/layerslider.php')) {
	global $wpdb;
	$ls = $wpdb->get_results( 'SELECT id, name, date_c FROM '.$wpdb->prefix.'layerslider WHERE flag_hidden = "0" AND flag_deleted = "0" ORDER BY date_c ASC LIMIT 100');
	$layer_sliders = array();
	if ($ls) {
		foreach ( $ls as $slider ) {
			$layer_sliders[$slider->name] = $slider->id;
		}
	} else {
		$layer_sliders['No sliders found'] = 0;
	}
	vc_map( array(
		'base' => 'layerslider_vc',
		'name' => __('Layer Slider', 'js_composer'),
		'icon' => '',
		'category' => __('Content', 'js_composer'),
		'params' => array(
			array(
				'type' => 'dropdown',
				'heading' => __('LayerSlider ID', 'js_composer'),
				'param_name' => 'id',
				'admin_label' => true,
				'value' => $layer_sliders,
				'description' => __('Select your LayerSlider.', 'js_composer')
			),
			array(
				'type' => 'textfield',
				'heading' => __('Extra class name', 'js_composer'),
				'param_name' => 'el_class',
				'description' => __('If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'js_composer')
			)
		)
	) );
} // if layer slider plugin active