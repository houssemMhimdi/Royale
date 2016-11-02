<?php

/**
* @category    Core
* @author      Jason Van Hil
* @copyright   Copyright (c) 2015, PixelBin
* @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
* @since       1.0
*/


class PM_Posts_Types{

	private $postsTypes = array();

	function __construct(){

		$post_types = get_post_types( '', 'object' );

    	unset($post_types['bj-adverts']);
    	unset($post_types['product_variation']);
    	unset($post_types['revision']);
    	unset($post_types['nav_menu_item']);
    	unset($post_types['shop_coupon']);
    	unset($post_types['shop_order']);
    	unset($post_types['shop_order_refund']);
    	unset($post_types['shop_webhook']);
    	unset($post_types['vc_grid_item']);

    	$temp = array();

    	foreach($post_types as $post_type){
    		$temp[$post_type->name] = esc_attr($post_type->name);
    	}


		$this->setInstance( $temp );
	}

	function getInstance(){
		return $this->postsTypes;
	}

	function setInstance( $postsTypes ){
		$this->postsTypes = $postsTypes;
	}

}