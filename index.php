<?php

$page = $_GET["page"] ?? "home";

$arrays_page = ['about', 'brand', 'contact', 'news', 'store', 'accsessories', 'pages', 'home'];

// Автоматически подключаем CSS файл, если он существует
$page_css = [];
$css_file = "{$page}.css";
if (file_exists(__DIR__ . "/style/{$css_file}")) {
    $page_css = [$css_file];
}

?>



<?php require_once "includes/header.php" ?>

<?php if (in_array($page, $arrays_page)) {
    include "pages/$page.php";
} else {

    // Если страница НЕ разрешена (пользователь ввел что-то типа ?page=admin)
    // Или страница не существует - показываем страницу 404 (не найдено)
    include "pages/404.php";
}
?>







<?php require_once "includes/footer.php" ?>