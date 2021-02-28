<?php
defined("ABSPATH") || exit();

// custom logo
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

// custom page tags -- this is btn for specialy on a page
add_shortcode( 'custom_page_tags', 'dressingroom_custom_page_tags_shortcode' );

function dressingroom_custom_page_tags_shortcode( $atts ){
    $tags = '';

    $slug= $atts["slugs"];
    $btns = $atts["btns"];
    $default_data = $atts['default'];

    $slugArr = explode(' ' , $slug);
    $btnsChunkArr = explode(' ' , $btns);

    $btnsChunkArr = explode('_'  , $btns  );

    $current_slug  = $_SERVER['REQUEST_URI'];;

   if(in_array($current_slug , $slugArr)){

    $index = array_search($current_slug , $slugArr);

    $btn_chunk = $btnsChunkArr[$index];

     $tags =  custom_page_tags_chunk_handler($btn_chunk , $tags);

   }else{
       if(isset($default_data) && !empty($default_data)){
       $tags = custom_page_tags_chunk_handler($default_data , $tags);

       }

   }

    return $tags;
}
function custom_page_tags_chunk_handler($btn_chunk , $tags){
    $btnChunkArr = explode(',' , $btn_chunk);

    for($i=0; $i < count($btnChunkArr); $i++){
        $btn_data = explode('=',  $btnChunkArr[$i] );
        $tags = $tags . '<a class="current-custom-page-link" href="'.$btn_data[1].'" >'.$btn_data[0].'</a>';

    }

    return $tags;
}
