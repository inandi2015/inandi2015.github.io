<?php

function bootstrap_coach_starter_content() {
	$starter_content = array(
	    'options' => array(
	    	'show_on_front' => 'page',
	        'page_on_front' => '{{home}}',
	        'page_for_posts' => '{{blog}}',
			'blogdescription' => esc_html__( 'Just another Preview Sites', 'bootstrap-coach' )
	    ),
	    // Starter pages to include
        'posts' => array(
            'home' => array(
	            'post_type' => 'page',
	            'post_title' => esc_html__( 'Home', 'bootstrap-coach' ),           
	            'template' => 'template-home.php',
	        ),
			'about',
	        'blog',	
        ),

		'theme_mods' => array(
	        'bootstrap_coach_contact_number' => esc_html__( '+9779806789890', 'bootstrap-coach' ),
	        'bootstrap_coach_email_address' => esc_html__( 'spa@yahoo.com', 'bootstrap-coach' ),
			'bc_header_cta_label' => esc_html__( 'BOOK Session', 'bootstrap-coach' ),
	        'bc_header_cta_link' => esc_url( '#' ),

			'bootstrap_coach_social_media' => array(
				array(
					'social_media_repeater_class' => esc_attr( 'facebook' ),
					'social_media_link'     => esc_url( '#' ),		
				),
				array(
					'social_media_repeater_class' => esc_attr( 'twitter' ),
					'social_media_link'     => esc_url( '#' ),		
				),
				array(
					'social_media_repeater_class' => esc_attr( 'instagram' ),
					'social_media_link'     => esc_url( '#' ),		
				),
				array(
					'social_media_repeater_class' => esc_attr( 'youtube' ),
					'social_media_link'     => esc_url( '#' ),		
				),
				
			),

			'banner_section_title' => esc_html__( 'Struggling In Life? I Can Help', 'bootstrap-coach' ),
	        'banner_section_description' => esc_html__( 'Life coach makes easier. After all, the problem is not about you at all. The idea that someone (and preferably a therapist) should tell people how to overcome their challenges is silly on several levels.', 'bootstrap-coach' ),
			'banner_section_cta_label' => esc_html__( 'Book Session', 'bootstrap-coach' ),
	        'banner_section_cta_link' => esc_url( '#' ),

			'bc_title_for_cta_block_1' => esc_html__( 'Call for Consultation', 'bootstrap-coach' ),
			'bc_content_for_cta_block_1' => esc_html__( '30 minutes free for the first session. T&C Apply', 'bootstrap-coach' ),
			'bc_cta_block_contact1_text' => esc_html__( 'Dial Now', 'bootstrap-coach' ),
	        'bc_cta_block_contact1' => esc_html__( '(+123)-345-6789', 'bootstrap-coach' ),
			
			'bc_title_for_cta_block_2' => esc_html__( 'How can I help you?', 'bootstrap-coach' ),
			'bc_content_for_cta_block_2' => esc_html__( 'I can help by coaching in life. life coaching makes the most of your time away from home, and if you find yourself looking for a new way to stay connected with these people that are already close-knit. Here are some tips on finding them', 'bootstrap-coach' ),
			'bc_cta_block_2_link_label' => esc_html__( 'EXPLORE PROGRAMS', 'bootstrap-coach' ),
			'bc_cta_block_2_link' => esc_url( '#' ),

			'bc_heading_for_about' =>  esc_html__( 'Why Most People Get Excited About Coaching', 'bootstrap-coach' ),
			'bc_content_for_about' =>  esc_html__( 'A life coach can help a person to identify strengths, develop them, and identify personal and professional goals. Their role is to assist the coachee throughout the change process. As you will discover, this happens in several ways. It is supposed to help them find happiness. It has an addictive nature, that really comes through in the message and they believe there is something good happening when we talk.', 'bootstrap-coach' ),
			'bc_short_desc_for_about' =>  esc_html__( 'life coach makes people feel less vulnerable and helps them improve their attitudes toward risktaking.', 'bootstrap-coach' ),
			'bc_image_for_about'   => esc_url( get_template_directory_uri().'/images/about.jpg' ),
			'bc_button_for_about' => array(
				array(
					'bc_button_label' => esc_html__( 'More About Us', 'bootstrap-coach' ),
					'bc_button_link'     => esc_url( '#' ),		
				),
				array(
					'bc_button_label' => esc_html__( 'Contact Us', 'bootstrap-coach' ),
					'bc_button_link'     => esc_url( '#' ),		
				),			
			),

			'bc_heading_for_offer' => esc_html__( 'Discount up to 35% for first member!', 'bootstrap-coach' ),
	        'bc_content_for_offer' => esc_html__( 'Mauris ligula purus, commodo a vestibulum in, porttitor semper ex. Nulla turpis dui, fermentum ultrices dignissim ac, pulvinar sit amet enim. Nulla posuere urna.', 'bootstrap-coach' ),
			'bc_image_for_offer'   => get_template_directory_uri().'/images/about.jpg',
			'bc_read_more_label' => esc_html__( 'Learn More', 'bootstrap-coach' ),
	        'bc_read_more_link' => esc_url( '#' ),
    		
			'bc_copyright_text' => esc_html__( '© Copyright 2021 Spa | Developed By Bootstrap Themes Powered by WordPress .', 'bootstrap-coach' ),
			
			'bc_services_heading' => esc_html__( 'Explore Our Services', 'bootstrap-coach' ),
			'bc_services_section' => array(
				array(
					'bc_service_thumbnail' => esc_url( get_template_directory_uri().'/images/service.png' ),
					'bc_service_title'     => esc_html__( 'Face to face coaching', 'bootstrap-coach' ),
					'bc_service_desc'      => esc_html__( 'Face to face coaching makes it easier for those new people and their families to find each other.', 'bootstrap-coach' ),
					'bc_service_btn'       => esc_html__( 'Learn More', 'bootstrap-coach' ),
					'bc_service_btnlink'   => esc_url( '#' ),
					
				),
				array(
					'bc_service_thumbnail' => esc_url( get_template_directory_uri().'/images/service.png' ),
					'bc_service_title' 	 => esc_html__( 'Group Coaching', 'bootstrap-coach' ),
					'bc_service_desc'  	 => esc_html__( 'Group coaching is a place where you can meet the people who are helping you succeed, work with our community leaders and get support at your service.', 'bootstrap-coach' ),
					'bc_service_btn'     => esc_html__( 'Learn More', 'bootstrap-coach' ),
					'bc_service_btnlink' => esc_url( '#' ),
				),
				array(
					'bc_service_thumbnail' => esc_url( get_template_directory_uri().'/images/service.png' ),
					'bc_service_title' => esc_html__( 'Executive Coaching', 'bootstrap-coach' ),
					'bc_service_desc'  => esc_html__( 'Executive coaching makes it possible for you to make better decisions that would result in your career succeeding.', 'bootstrap-coach' ),
					'bc_service_btn'     => esc_html__( 'Learn More', 'bootstrap-coach' ),
					'bc_service_btnlink' => esc_url( '#' ),
			
				),
			),
			'bc_counter_video_link' => esc_url( '#' ),
			'bc_heading_for_counter' => esc_html__( 'Get 15-Minutes Complimentary Zoom or Skype session.', 'bootstrap-coach' ),
			'bc_content_for_counter' => esc_html__( 'Limited Period Offer.', 'bootstrap-coach' ),
			'bc_image_for_counter'   => esc_url( get_template_directory_uri().'/images/about.jpg' ),
			
			'counter_display_option' => array(
				array(
					'counter_number' => absint('960'),
					'counter_text'     => esc_html__( 'Session Per Year', 'bootstrap-coach' ),		
				),
				array(
					'counter_number' => absint('25'),
					'counter_text'     => esc_html__( 'Years Of Experience', 'bootstrap-coach' ),		
				),
				array(
					'counter_number' => absint('131'),
					'counter_text'     => esc_html__( 'Business Sessions', 'bootstrap-coach' ),		
				),
				array(
					'counter_number' => absint('19'),
					'counter_text'     => esc_html__( 'Global Awards Won', 'bootstrap-coach' ),		
				),
				
			),

			'bc_heading_for_teams' => esc_html__( 'Our Team', 'bootstrap-coach' ),
			'bc_heading_for_testimonial' => esc_html__( 'What They Say', 'bootstrap-coach' ),
			'bc_tickets_heading' => esc_html__( 'Pricing Plans', 'bootstrap-coach' ),
			
			'bc_heading_for_benefit' => esc_html__( 'Benefits of Life Coach By An Expert', 'bootstrap-coach' ),
			'bc_content_for_benefit' => esc_html__( 'Easier for those new people and their families to find each other. It is supposed to help them find happiness. Encourage others without passing judgment. Help individuals perform at their highest levels.', 'bootstrap-coach' ),
			'bc_image_for_benefit'   => esc_url( get_template_directory_uri().'/images/about.jpg' ),
			'bc_points_for_benefits' => array(
				array(
					'bc_title_for_benefit' => esc_html__( 'Family', 'bootstrap-coach' ),
					'bc_percent_for_benefit'     => absint('65'),		
				),
				array(
					'bc_title_for_benefit' => esc_html__( 'Marriage & Love', 'bootstrap-coach' ),
					'bc_percent_for_benefit'     => absint('95'),		
				),
				array(
					'bc_title_for_benefit' => esc_html__( 'Life Coaching', 'bootstrap-coach' ),
					'bc_percent_for_benefit'     => absint('82'),		
				),
				
			),
			'blog_post_section_title' => esc_html__( 'Recent Blogs', 'bootstrap-coach' ),

			
		),    
		'nav_menus' => array(
			'main-menu' => array(
				'name' => __( 'Main Menu', 'bootstrap-coach' ),
				'items' => array(
					'page_home' => array(
						'type' => 'post_type',
						'object' => 'page',
						'object_id' => '{{home}}',
					),
					'page_about' => array(
						'type' => 'post_type',
						'object' => 'page',
						'object_id' => '{{about}}',
					),
					'page_blog' => array(
						'type' => 'post_type',
						'object' => 'page',
						'object_id' => '{{blog}}',
					),
					'page_who_we_are' => array(
						'type' => 'post_type',
						'object' => 'page',
						'object_id' => '{{who-we-are}}',
					),
				),
			),	
		),
		'widgets' => array(
						'footer-1' => array(
        						'my_text' => array(
								'text',
								array(
									'title' => esc_html__( 'Address', 'bootstrap-coach' ),
									'text'  => '<p>' . esc_html__( 'Phone: +977-1-47012454', 'bootstrap-coach' ) . '</p>'.
												'<p>' . esc_html__( 'Email: info@xyz-coach.com', 'bootstrap-coach' ). '</p>'.
												'<p>' . esc_html__( 'GPO Box : 5612, Thamel ,Kathmandu ', 'bootstrap-coach' ) . '</p>'.
												'<p>' . esc_html__( 'Fax Number: 503-555-1213', 'bootstrap-coach' ). '</p>',
									)
								),
							),
							'footer-2' => array(
								'text_business_info',
							),
							'footer-3' => array(
								'meta',
							),
							'footer-4' => array(
								'search',
							),
			
		)
	);

	return $starter_content; 
}