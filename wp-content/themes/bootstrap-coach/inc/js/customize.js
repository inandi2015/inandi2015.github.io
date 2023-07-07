jQuery(document).ready(function($){
    //Scroll to section
    $('body').on('click', '#sub-accordion-panel-bootstrap_coach_homepage_panel .control-subsection .accordion-section-title', function(event) {
        var section_id = $(this).parent('.control-subsection').attr('id');
        scrollToSection( section_id );
    });
    
    //preview url of homepages templates 
     wp.customize.panel( 'bootstrap_coach_homepage_panel', function( section ){
        section.expanded.bind( function( isExpanded ) {
            if( isExpanded ){
                wp.customize.previewer.previewUrl.set( data.home );
            }
        });
    });
     
});

function scrollToSection( section_id ){
    var preview_section_id = "banner_section";

    var $contents = jQuery('#customize-preview iframe').contents();

    switch ( section_id ) {
        
        case 'accordion-section-header_image':
        preview_section_id = "bootstrap_coach_banner_section";
        break;

        case 'accordion-section-bootstrap_coach_info_section':
        preview_section_id = "bootstrap_coach_info_section";
        break;

        case 'accordion-section-bootstrap_coach_about_section':
        preview_section_id = "bootstrap_coach_about_section";
        break;

        case 'accordion-section-bootstrap_coach_service_section':
        preview_section_id = "bootstrap_coach_service_section";
        break;

        case 'accordion-section-bootstrap_coach_counter_sections':
        preview_section_id = "bootstrap_coach_counter_sections";
        break;

        case 'accordion-section-bootstrap_coach_benefit_section':
        preview_section_id = "bootstrap_coach_benefit_section";
        break;

        case 'accordion-section-bootstrap_coach_blog_post_section':
        preview_section_id = "bootstrap_coach_blog_post_section";
        break;

        case 'accordion-section-bootstrap_coach_testimonial_sections':
        preview_section_id = "bootstrap_coach_testimonial_sections";
        break;
        
        case 'accordion-section-bootstrap_coach_teams_sections':
        preview_section_id = "bootstrap_coach_teams_sections";
        break;

        case 'accordion-section-bootstrap_coach_offer_section':
        preview_section_id = "bootstrap_coach_offer_section";
        break;

        case 'accordion-section-bootstrap_coach_pricing_table':
        preview_section_id = "bootstrap_coach_pricing_table";
        break;
        
        case 'accordion-section-bootstrap_coach_blog_post_section':
        preview_section_id = "bootstrap_coach_blog_post_section";
        break;
        
    }

    if( $contents.find('#'+preview_section_id).length > 0 && $contents.find('.home').length > 0 ){
        $contents.find("html, body").animate({
        scrollTop: $contents.find( "#" + preview_section_id ).offset().top
        }, 1000);
    }
}