<?php
function mytheme_support()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    register_nav_menus(['header' => 'header']);
    register_nav_menus(['footer' => 'footer']);
}

function mytheme_title($title)
{
    return "My web site";
}

function mytheme_menu_class($class){
    $class[] = "ml-10";
    return $class;
}

function mytheme_menu_link_class($attrs){
    $attrs['class'] = 'ml-10';
    return $attrs;
}

function wp_hook_javascript() {
    ?>
    <script>
        function menuFunction() {
            var links = document.getElementById("myLinks");
            if (links.style.display === "block") {
              links.style.display = "none";
            } else {
              links.style.display = "block";
            }
        }
    </script>
    <?php
}


add_action('after_setup_theme', 'mytheme_support');
add_action('wp_title', 'mytheme_title');
add_action('wp_head','wp_hook_javascript');
add_filter('nav_menu_class', 'mytheme_menu_class');
add_filter('nav_menu_link_attributes','mytheme_menu_link_class');
