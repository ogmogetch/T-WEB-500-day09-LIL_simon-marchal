<?php
function display_menu() {
    $menu_html = '<ul>';
    $menu_items = array(
        'Home' => 'home.php',
        'Products' => 'product.php',
        'About Us' => 'about.php',
        'Contact' => 'contact.php'
    );

    foreach ($menu_items as $label => $link) {
        $menu_html .= '<li><a href="' . $link . '">' . $label . '</a></li>';
    }

    $menu_html .= '</ul>';

    return $menu_html;
}
?>