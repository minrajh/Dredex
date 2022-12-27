<!DOCTYPE html>
<html lang="ru" class="no-js">
<head>
<?php $url = $_SERVER["REQUEST_URI"];?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="robots" content="index, follow">
    <meta name="google" content="notranslate">
    <meta name="format-detection" content="telephone=no">
    <meta name="keywords" content="<?php echo $keywords; ?>">
    <meta name="description" content="<?php echo $description; ?>">
    <link rel="shortcut icon" href="<?php echo ('/assets/images/favicon'); ?>.ico" type="image/x-icon">
    <link rel="stylesheet" href="/assets/css/admin.min.css?<?=filemtime('assets/css/admin.min.css')?>">
    <title><?php echo $title; ?></title>
</head>
<body>
    <?php if ($this->route['action'] != 'login'): ?>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
            <img src="/assets/images/img_avatar3.png" alt="Dredex">
            </div>

            <span class="logo_name">Dredex</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="/admin/main">
                    <i class="icon figaro-home"></i>
                    <span class="link-name">Панель управления</span>
                </a></li>
                <li><a href="/admin/add">
                    <i class="icon figaro-edit"></i>
                    <span class="link-name">Добавить запись</span>
                </a></li>
                <li><a href="/admin/posts">
                    <i class="icon figaro-pages"></i>
                    <span class="link-name">Страницы</span>
                </a></li>
                <li><a href="/admin/develop" <?php if ($url == "/admin/develop") {echo 'active';}?>>
                    <i class="icon figaro-edit"></i>
                    <span class="link-name">Разработка</span>
                </a></li>
                <li><a href="#">
                    <i class="icon figaro-settings"></i>
                    <span class="link-name">Настройки</span>
                </a></li>
            </ul>
            
            <ul class="logout-mode">
                <li><a href="/admin/logout">
                    <i class="icon figaro-out"></i>
                    <span class="link-name">Выход</span>
                </a></li>

                <li class="mode">
                    <a href="#">
                        <i class="icon figaro-tools"></i>
                    <span class="link-name">Темная тема</span>
                </a>

                <div class="mode-toggle">
                  <span class="switch"></span>
                </div>
            </li>
            </ul>
        </div>
    </nav>

    <section class="dashboard">
        <div class="top">
            <i class="icon figaro-list sidebar-toggle"></i>

            <div class="search-box">
                <i class="icon figaro-find"></i>
                <input type="text" placeholder="Поиск...">
            </div>
            
            <img src="/assets/images/img_avatar.png" alt="">
        </div>

    <?php endif; ?>
    <?php echo $content; ?>
    <?php if ($this->route['action'] != 'login'): ?>
    </section>
    <?php endif; ?>
    <script src="/assets/js/admin.js?<?=filemtime('assets/js/admin.js')?>"></script>
</body>
</html>