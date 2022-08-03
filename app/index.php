<?php
$content = '';
if (isset($_GET['page'])) {
    $page = htmlentities($_GET['page']);
    $path = "./pages/{$page}.php";
    if (file_exists($path)) {
        $content = $path;
    } else {
        header('Location: ./');
    }
} else {
    $content = "./pages/home.php";
}

require ('./templates/header.php');

include($content);

require ('./templates/footer.php');

