<!DOCTYPE html>
<html lang="ru">
<head>
<?php $url = $_SERVER["REQUEST_URI"];?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1,maximum-scale=10">
    <title><?php echo $title; ?></title>
    <link rel="shortcut icon" href="/public/images/favicon_img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/public/styles/figaro.admin.style.css">
    <link rel="stylesheet" href="/public/styles/figaro.font.css">
    <link rel="stylesheet" href="/public/styles/figaro.modals.css">
</head>
<body>
    <?php if ($this->route['action'] != 'login'): ?>
    <div class="content-wrapper">
        <header class="header">
            <p class="icon figaro-logo"> Панель управления CRM</p>
        </header>

        <div class="container clearfix">
            <main class="content">
                <!-- Пример -->
                <?php endif; ?>
                <?php echo $content; ?>
                <!-- Контент КОНЕЦ -->
                <?php if ($this->route['action'] != 'login'): ?>
            </main>
            <?php $url = $_SERVER["REQUEST_URI"];?>
            <aside class="sidebar sidebar1">
                <p class="icon figaro-cpanel <?php if ($url == "/admin/add") {echo 'active';}?>"><a href="/admin/add">Панель управления</a></p>
                <p class="icon figaro-seo"><a href="#">SEO продвижение</a></p>
                <p class="icon figaro-list"><a href="/admin/posts">Записи</a></p>
                <p class="icon figaro-media"><a href="#">Медиафайлы</a></p>
                <p class="icon figaro-link"><a href="#">Ссылки</a></p>
                <p class="icon figaro-pages"><a href="#">Страницы</a></p>
                <p class="icon figaro-comments"><a href="#">Комментарии</a></p>
                <p class="icon figaro-appearance"><a href="#">Внешний вид</a></p>
                <p class="icon figaro-plugins"><a href="#">Плагины</a></p>
                <p class="icon figaro-users"><a href="#">Пользователи</a></p>
                <p class="icon figaro-tools"><a href="#">Инструменты</a></p>
                <p class="icon figaro-settings"><a href="#">Настройки</a></p>
                <span style="font-size: 14px; color: #a5b1c4;">Разделитель</span>
                <p class="icon figaro-develop <?php if ($url == "/admin/develop") {echo 'active';}?>"><a href="/admin/develop">Разработка</a></p>
                <p class="icon figaro-out"><a href="/admin/logout">Выход</a></p>
            </aside>
        </div>

        <footer class="footer">
            <p>&copy; <?=date("Y");?>, Интернет-сообщество «Figaro-group»</p>
        </footer>
    </div>
<?php endif; ?>
<!-- Подложка под модальным окном -->
<div class="overlay js-overlay-modal"></div>
<script src="/public/scripts/figaro.modals.js"></script>
</body>
</html>