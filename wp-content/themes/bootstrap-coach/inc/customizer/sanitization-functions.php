<?php
/**
 * Sanitization Functions
 *
 * @package bootstrap_coach
 * 
 */

//checkbox sanitization function
function bootstrap_coach_sanitize_checkbox( $input ) {
    //returns true if checkbox is checked
    return ( ( isset( $input ) && true == $input ) ? true : false );
}

function bootstrap_coach_sanitize_google_fonts( $input, $setting ) {

    // Get list of choices from the control associated with the setting.
    $choices = $setting->manager->get_control( $setting->id )->choices;
    
    // If the input is a valid key, return it; otherwise, return the default.
    return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
  
}

function bootstrap_coach_sanitize_hex_color( $color ) {
    if ( '' === $color ) {
      return '';
    }
  
    // 3 or 6 hex digits, or the empty string.
    if ( preg_match( '|^#([A-Fa-f0-9]{3}){1,2}$|', $color ) ) {
      return $color;
    }
  
    return NULL;
}

function bootstrap_coach_sanitize_category( $input ){
    $output = intval( $input );
    return $output;
  
}

function bootstrap_coach_sanitize_select( $input, $setting ) {
  
  // Ensure input is a slug.
  $input = sanitize_key( $input );
  
  // Get list of choices from the control associated with the setting.
  $choices = $setting->manager->get_control( $setting->id )->choices;
  
  // If the input is a valid key, return it; otherwise, return the default.
  return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
}

function bootstrap_coach_sanitize_image( $file, $setting ) {
          
  //allowed file types
  $mimes = array(
      'jpg|jpeg|jpe' => 'image/jpeg',
      'gif'          => 'image/gif',
      'png'          => 'image/png'
  );
    
  //check file type from file name
  $file_ext = wp_check_filetype( $file, $mimes );
    
  //if file has a valid mime type return it, otherwise return default
  return ( $file_ext['ext'] ? $file : $setting->default );
}

function bootstrap_coach_sanitize_array( $value ){    
  if ( is_array( $value ) ) {
  foreach ( $value as $key => $subvalue ) {
    $value[ $key ] = esc_attr( $subvalue );
  }
  return $value;
}
return esc_attr( $value );    
}
function bootstrap_coach_sanitize_choices( $input, $setting ) {
  global $wp_customize;

  $control = $wp_customize->get_control( $setting->id );

  if ( array_key_exists( $input, $control->choices ) ) {
      return $input;
  } else {
      return $setting->default;
  }
}

function bootstrap_coach_hex_to_rgba( $hex ) {
    list($r, $g, $b) = sscanf($hex, "#%02x%02x%02x");
    return "$r, $g, $b";
}

function bootstrap_coach_sanitize_float( $input ) {
  return filter_var($input, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
}