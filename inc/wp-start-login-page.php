<?php
/**
 * add custom img in start login page
 */

function  electric_login_logo(){
    echo '
<style type="text/css">
    #login h1 a {
     background: url('. get_stylesheet_directory_uri() .'/img/img-start-login-page.JPG)  no-repeat 0 0 !important;
     background-size: cover !important;
      width: 300px;
      height: 200px;
      }
</style>';
}
add_action('login_head', 'electric_login_logo');