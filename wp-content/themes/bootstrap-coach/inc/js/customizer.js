/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

 function convertHex(hex){
	hex = hex.replace('#','');
	r = parseInt(hex.substring(0,2), 16);
	g = parseInt(hex.substring(2,4), 16);
	b = parseInt(hex.substring(4,6), 16);

	result = ''+r+','+g+','+b+'';
	return result;
}

 ( function( $ ) {	
	 //color
	wp.customize('primary_color',function ( value ) {
		value.bind(function ( to ) {
			color = convertHex(to)
			document.body.style.setProperty('--primary-color', color);
		});
	});

	wp.customize('secondary_color',function ( value ) {
		value.bind(function ( to ) {
			color = convertHex(to)
			document.body.style.setProperty('--secondary-color', color);
		});
	});

	wp.customize('dark_color',function ( value ) {
		value.bind(function ( to ) {
			color = convertHex(to)
			document.body.style.setProperty('--dark-color', color);
		});
	});

	wp.customize('light_color',function ( value ) {
		value.bind(function ( to ) {
			color = convertHex(to)
			document.body.style.setProperty('--light-color', color);
		});
	});

	wp.customize('text_color',function ( value ) {
		value.bind(function ( to ) {
			color = convertHex(to)
			document.body.style.setProperty('--text-color', color);
		});
	});

// font	

	wp.customize('body_font_family',function ( value ) {
		value.bind(function ( to ) {
			$("head").append("<link href='https://fonts.googleapis.com/css?family=" + to + ":200,300,400,500,600,700,800,900|' rel='stylesheet' type='text/css'>");
				document.body.style.setProperty('--body-font', to);
			}
		);
	}
	);

	wp.customize('heading_font_family',function ( value ) {
		value.bind(function ( to ) {
			$("head").append("<link href='https://fonts.googleapis.com/css?family=" + to + ":200,300,400,500,600,700,800,900|' rel='stylesheet' type='text/css'>");
				document.body.style.setProperty('--heading-font', to);
			}
		);
	}
	);

	wp.customize( 'font_size', function( value ) {
		value.bind( function( to ) {
			$( 'html, :root' ).css( 'font-size', to );
		} );
	} );

	wp.customize( 'body_font_weight', function( value ) {
		value.bind( function( to ) {
			$( 'body' ).css( 'font-weight', to );
		} );
	} );

	wp.customize( 'body_line_height', function( value ) {
		value.bind( function( to ) {
			$( 'body' ).css( 'line-height', to );
		} );
	} );
	// Site title and description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).text( to );
		} );
	} );
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		} );
	} );

	// Site title color
	wp.customize( 'bs_site_title_color_option', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).css( 'color', to );
		} );
	} );

	// Site title font family 
	wp.customize( 'bs_site_identity_font_family', function( value ) {
		value.bind( function( to ) {
			$("head").append("<link href='https://fonts.googleapis.com/css?family=" + to + ":200,300,400,500,600,700,800,900|' rel='stylesheet' type='text/css'>");
			$( 'header .site-title a' ).css( 'font-family', to );
		} );
	} );

	// Site title size 
	wp.customize( 'bs_site_title_size', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).css( 'font-size', to + "px" );
			$( 'header .custom-logo-link img' ).css( 'height', ( to * 2 ) + "px" );
		} );
	} );
 
	//info section
	wp.customize( 'bc_title_for_cta_block_1', function( value ) {
		value.bind( function( to ) {
			$( '.info-block .call-block h5.title' ).text( to );
		} );
	} );

	wp.customize( 'bc_content_for_cta_block_1', function( value ) {
		value.bind( function( to ) {
			$( '.info-block .call-block p' ).text( to );
		} );
	} );

	wp.customize( 'cta_block_1_link_label', function( value ) {
		value.bind( function( to ) {
			$( '.info-block .call-block a.btn-link' ).text( to );
		} );
	} );

	wp.customize( 'bc_cta_block_contact1_text', function( value ) {
		value.bind( function( to ) {
			$( '.info-block .call-block .number-block .number-holder span' ).text( to );
		} );
	} );

	wp.customize( 'bc_cta_block_contact1', function( value ) {
		value.bind( function( to ) {
			$( '.info-block .call-block .number' ).text( to );
		} );
	} );

	wp.customize( 'bc_title_for_cta_block_2', function( value ) {
		value.bind( function( to ) {
			$( '.info-block .help-block h5.title' ).text( to );
		} );
	} );

	wp.customize( 'bc_content_for_cta_block_2', function( value ) {
		value.bind( function( to ) {
			$( '.info-block .help-block p' ).text( to );
		} );
	} );

	wp.customize( 'bc_cta_block_2_link_label', function( value ) {
		value.bind( function( to ) {
			$( '.info-block .help-block a.btn-link' ).text( to );
		} );
	} );

	wp.customize( 'bc_cta_block_contact2', function( value ) {
		value.bind( function( to ) {
			$( '.info-block .help-block .number' ).text( to );
		} );
	} );

	//about
	wp.customize( 'bc_heading_for_about', function( value ) {
		value.bind( function( to ) {
			$( '.about h2.main-title' ).text( to );
		} );
	} );

	wp.customize( 'bc_content_for_about', function( value ) {
		value.bind( function( to ) {
			$( '.about p.desc' ).text( to );
		} );
	} );

	wp.customize( 'bc_short_desc_for_about', function( value ) {
		value.bind( function( to ) {
			$( '.about blockquote' ).text( to );
		} );
	} );

	//services
	wp.customize( 'bc_services_heading', function( value ) {
		value.bind( function( to ) {
			$( '.services h2.main-title' ).text( to );
		} );
	} );

	//counter
	wp.customize( 'bc_heading_for_counter', function( value ) {
		value.bind( function( to ) {
			$( '.session-counter h5.title' ).text( to );
		} );
	} );

	wp.customize( 'bc_content_for_counter', function( value ) {
		value.bind( function( to ) {
			$( '.session-counter .session-block span' ).text( to );
		} );
	} );

	//benefits
	wp.customize( 'bc_heading_for_benefit', function( value ) {
		value.bind( function( to ) {
			$( '.benefits h2.main-title' ).text( to );
		} );
	} );

	wp.customize( 'bc_content_for_benefit', function( value ) {
		value.bind( function( to ) {
			$( '.benefits p' ).text( to );
		} );
	} );

	//blogs
	wp.customize( 'blog_post_section_title', function( value ) {
		value.bind( function( to ) {
			$( '.blogs h3.title' ).text( to );
		} );
	} );
	
	//testimonial
	wp.customize( 'bc_heading_for_testimonial', function( value ) {
		value.bind( function( to ) {
			$( '.testimonial h2.title' ).text( to );
		} );
	} );

	//teams
	wp.customize( 'bc_heading_for_teams', function( value ) {
		value.bind( function( to ) {
			$( '.team h2.title' ).text( to );
		} );
	} );

	//pricing
	wp.customize( 'bc_tickets_heading', function( value ) {
		value.bind( function( to ) {
			$( '.pricing h2.title' ).text( to );
		} );
	} );

	//copyright_text
	wp.customize( 'bs_copyright_text', function( value ) {
		value.bind( function( to ) {
			$( '.footer .copyright p' ).text( to );
		} );
	} );

} )( jQuery );



