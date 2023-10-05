<?php
function render_body($page) {
    $allowed_pages = ['home', 'php', 'sql'];

    if (!in_array($page, $allowed_pages)) {
        return '<p>Unknown page</p>';
    }

    $file_path = $page . '.html';
    if (file_exists($file_path)) {
        return file_get_contents($file_path);
    } else {
        return '<p>Unknown page</p>';
    }
}
?>
