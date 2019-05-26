<?php

  function tsk_facebook_like_box_shortcode_function($atts){

     extract(shortcode_atts(array(
      'url' => 'www.facebook.com/FacebookDevelopers',
      'width' => '',
      'height' => '',
      'faces' => 'true',
      'hidecover' => 'false',
      'tabs' => 'timeline',
      'small_header' => 'false',
      'hide_cta' => 'false',
      'acw' => 'false',
      'locale' => 'en_US',
     ), $atts));

     $return_string = '<div class="tsk-facebook-like-box">';

     $return_string .= '<div id="fb-root"></div>';
      /*<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/'.$locale.'/sdk.js#xfbml=1&version=v2.10";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, "script", "facebook-jssdk"));</script>';*/

      $return_string .= '<div class="fb-page" data-href="'.esc_url($url).'" data-width="'.esc_attr($width).'" data-height="'.esc_attr($height).'" data-hide-cover="'.esc_attr($hidecover).'" data-tabs="'.esc_attr($tabs).'" data-small-header="'.esc_attr($small_header).'" data-hide-cta="'.esc_attr($hide_cta).'" data-adapt-container-width="'.esc_attr($acw).'" data-show-facepile="'.esc_attr($faces).'"><blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div>';

      $return_string .= '</div>';

      return $return_string;
  }

  function tsk_facebook_like_box_register_shortcode(){
    add_shortcode('tsk-fblike-box', 'tsk_facebook_like_box_shortcode_function');
  }
  add_action( 'init', 'tsk_facebook_like_box_register_shortcode');
