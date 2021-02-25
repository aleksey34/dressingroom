<?php
defined("ABSPATH") || exit();

add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );

function custom_override_checkout_fields( $fields ) {
   // unset($fields['billing']['billing_first_name']);// имя
    unset($fields['billing']['billing_last_name']);// фамилия
     unset($fields['billing']['billing_company']); // компания
   unset($fields['billing']['billing_address_1']);//
  //  $fields['billing']['billing_address_1']= "улица рабочая 12 кор2";//country:RU
    unset($fields['billing']['billing_address_2']);//
   unset($fields['billing']['billing_city']);
    unset($fields['billing']['billing_postcode']);
  //  unset($fields['billing']['billing_country']);
    unset($fields['billing']['billing_state']);

   // unset($fields['billing']['billing_phone']);
    unset($fields['order']['order_comments']);
  //  unset($fields['billing']['billing_email']);
    unset($fields['account']['account_username']);
    unset($fields['account']['account_password']);
    unset($fields['account']['account_password-2']);
    unset($fields['billing']['billing_company']);// компания
    unset($fields['billing']['billing_postcode']);// индекс
    return $fields;
}




//add_action( 'after_setup_theme', 'dressingroom_checkout_setup' );
//function dressingroom_checkout_setup(){
//
//
//
//}
//add_action("wp_footer" , "dressingroom_checkout_custom_fields" , 90);
//function dressingroom_checkout_custom_fields(){
//
//}