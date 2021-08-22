<?php 

add_action("wp_enqueue_scripts" , "link_styles");
          function link_styles(){
              wp_enqueue_style("style" , get_stylesheet_uri());
          }


add_action("wp_footer" , "link_script");
          function link_script(){
              wp_enqueue_script("main" , get_template_directory_uri() . "/js/script.js");
          }

add_action("after_setup_theme" , "register_menu");
          function register_menu(){
            register_nav_menu("top_menu" , "Меню в шапке");
            register_nav_menu("top_menu2" , "Меню в шапке 2");
            add_theme_support("title-tag");
          } 
          

          

?>