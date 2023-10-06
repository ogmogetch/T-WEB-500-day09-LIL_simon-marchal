<?php
function display_menu() {
    $menu_items = [
        ["text" => "Home", "href" => "home.php"],
        ["text" => "Products", "href" => "product.php"],
        ["text" => "About Us", "href" => "about.php"],
        ["text" => "Contact", "href" => "contact.php"]
    ];


    $menu_html = "<ul>\n";
    foreach ($menu_items as $item) {
        $menu_html .= "<li><a href=\"{$item['href']}\">{$item['text']}</a></li>\n";
    }
    $menu_html .= "</ul>";
    return $menu_html;
}
?>