<?php

	function register_profotech_theme(){
     // menu register code
  register_nav_menus(
            array(
                'primary-menu' = __('Primary Menu'), // Id and Name
                'footer-menu' = __('Footer Menu') // Id and Name
            )
    );
  }
    // add_action('init', 'register_profotech_theme'); 

?>