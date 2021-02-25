<?php
defined("ABSPATH") || exit();

add_shortcode( 'dressingroom_logo', 'dressingroom_custom_logo_shortcode' );

function dressingroom_custom_logo_shortcode( $atts ){
    if(is_front_page()){
        $logo = '<div class="dressingroom-logo">
                    <a class="logo">
                        <span>Aristo</span>
                        <span>Гардеробные системы</span>
                    </a>
                </div>';
    }else{
        $logo = '<div class="dressingroom-logo">
                    <a  href="'.home_url().'" class="logo">
                        <span>Aristo</span>
                        <span>Гардеробные системы</span>
                    </a>
                </div>';
    }



    return $logo;
}


