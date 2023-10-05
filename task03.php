<?php
function dynamic_body() {
    if (isset($_GET['page']) && !empty($_GET['page'])) {
        $page = $_GET['page'];
        $allowed_pages = ['home', 'php', 'sql'];

        if (in_array($page, $allowed_pages)) {
            $file_path = $page . '.html';
            if (file_exists($file_path)) {
                return file_get_contents($file_path);
            } else {
                return '<p>Unknown page</p>';
            }
        } else {
            return '<p>Unknown page</p>';
        }
    } else {
        return '<p>Unknown page</p>';
    }
}
?>
