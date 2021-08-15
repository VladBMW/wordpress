<?php 

add_action("wp_enqueue_scripts" , "link_styles");
          function link_styles(){
              wp_enqueue_style("style" , get_stylesheet_uri());
          }


add_action("wp_footer" , "link_script");
          function link_script(){
              wp_enqueue_script("main" , get_template_directory_uri() . "/js/script.js");
          }

?>