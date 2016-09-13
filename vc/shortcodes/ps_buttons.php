<?php

		add_action( 'vc_after_init', 'ps_button', 800 );
		function ps_button() {


			vc_map( array(
				'name' => __( 'Button', 'js_composer' ),
				'base' => 'ps_button',
				'class' => '',
				'icon' => 'icon-wpb-ui-button',
				'category' => array(
					__( 'Content', 'js_composer' ),
				),

				'description' => __( 'Buttons', 'js_composer' ),
				"params" => array(
					array(
			            "type" => "textfield",
			            "heading" => __("Button Text", "html5blank"),
			            "param_name" => "content",
			            "description" => __("", "html5blank")
			        ),
			        array(
			            "type" => "textfield",
			            "heading" => __("Button URL", "html5blank"),
			            "param_name" => "url",
			            "description" => __("Make sure to include the HTTP:// at the front", "html5blank")
			        ),
					array(
				       "type"        => "dropdown",
				       "heading"     => __("Type"),
				       "param_name"  => "type",
				       "admin_label" => true,
				       "value"       => array(
				         'Primary'   		=> 'button',
				         'Bordered'   	    => 'button bordered',
				         'Bordered (Alt)'   => 'button bordered bordered-secondary',
				       ),
				       "std"         => 'button-primary',
				       "description" => __("The description")
				    )

	      		),

			) );


			if ( class_exists( 'WPBakeryShortCode' ) ) {

			    class WPBakeryShortCode_Ps_Button extends WPBakeryShortCode {

			      	protected $template_vars = array();

			      	public function buildTemplate( $atts, $content ) {

						$output = array();

						$output['content'] = wpb_js_remove_wpautop( $content, true );

						$this->template_vars = $output;
					}

					public function getTemplateVariable( $string ) {
						if ( is_array( $this->template_vars ) && isset( $this->template_vars[ $string ] ) ) {

							return $this->template_vars[ esc_attr($string) ];
						}

						return '';
					}

			    }
			}


		}
