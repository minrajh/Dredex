<!DOCTYPE html>
<html lang="ru" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="robots" content="index, follow">
    <meta name="google" content="notranslate">
    <meta name="format-detection" content="telephone=no">
    <meta name="keywords" content="Ошибка 500">
    <meta name="description" content="Ошибка 500">
    <link rel="shortcut icon" href="<?php echo ('assets/images/favicon'); ?>.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/style.min.css?<?=filemtime('assets/css/style.min.css')?>">
    <title>Ошибка 500</title>
    <script type="module">
        document.documentElement.classList.remove('no-js');
        document.documentElement.classList.add('js');
    </script>
</head>
<body>

    <!-- ########## ОБЛАСТЬ ДЛЯ ШАПКИ САЙТА ########## -->
    <div class="content-wrapper">
        <header id="dredex_header" class="header">
            <!-- dredex_header -->
            <div class="wrap">
                <nav class="navbar">
                    <input type="checkbox" id="check">
                    <label for="check" class="checkbtn">
                    <i class="icon figaro-list"></i>
                    </label>
                    <div class="navbar-logo">
                        <picture>
                            <source srcset="/assets/images/logo.webp" media="(max-width: 560px)" type="image/webp">
                            <source srcset="/assets/images/logo.png" media="(max-width: 560px)">
                            <source srcset="/assets/images/logo.webp" type="image/webp">
                            <a href="/"><img src="/assets/images/logo.png" alt="DREDEX"></a>
                        </picture>
                    </div>
                    <?php $url = $_SERVER["REQUEST_URI"];?>
                    <ul>
                        <li><a class="nav__link <?php if ($url == "/about") {echo 'active';}?>" href="about">О нас</a></li>
                        <li><a class="nav__link <?php if ($url == "/post") {echo 'active';}?>" href="post">Блог</a></li>
                        <li><a class="<?php if ($url == "/portfolio") {echo 'active';}?>" href="portfolio">Портфолио</a></li>
                        <li class="dropdown">
                            <a class="dropbtn has-subnav <?php if ($url == "/services") {echo 'active';}?>" href="#" onclick="myFunction()">Услуги</a>
                            
                            <ul class="dropdown-content" id="myDropdown"> 
                                <li><a class="<?php if ($url == "/services") {echo 'active';}?>" href="services">Услуга #1</a></li> 
                                <li><a href="#">Услуга #2</a></li> 
                                <li><a href="#">Услуга #3</a></li> 
                            </ul>
                        
                        </li>
                        <li><a class="nav__link <?php if ($url == "/contacts") {echo 'active';}?>" href="contacts">Контакты</a></li>
                    </ul>
                </nav>
            </div>
            <!-- end dredex_header -->
        </header>
        <!-- ########## КОНЕЦ ОБЛАСТЬ ДЛЯ ШАПКИ САЙТА ########## -->

        <!-- ########## ОБЛАСТЬ КОНТЕНТА ########## -->
        <div class="container clearfix">
            <main id="dredex_content" class="content">
                <!-- dredex_content -->
                
                <section class="container clearfix">
                    <div class="wrap">
                    <div class="nested list row">
                            <h1 style="font-size: 100px; padding-top: 180px;"><b>Ошибка 500</b></h1>
                            <h2 style="padding-top: 20px">Сервер столкнулся с неожиданной ошибкой, которая помешала ему выполнить запрос</h2>
                        </div>
                    </div>
                </section>

                <!-- end dredex_content -->
            </main>
        </div>
        <!-- ########## КОНЕЦ ОБЛАСТИ КОНТЕНТА ########## -->

        <!-- ########## ОБЛАСТЬ ДЛЯ ФУТЕРА САЙТА ########## -->
        <!-- dredex_footer -->
        <footer id="dredex_footer" class="footer">
            <!-- Футер -->
            <section class="footer">
                <div class="content-box">
    <div class="container clearfix">
        <div class="copy">
            <span>&#169; DREDEX 2019 - <?php echo date ( 'Y' ) ; ?></span>
            <span class="line"> | </span>
            <a <?php if ($url == "/privacy") {echo 'class="active"';}?> href="privacy">Политика конфиденциальности</a>
            <span class="line"> | </span>
            <a <?php if ($url == "/terms") {echo 'class="active"';}?> href="terms">Пользовательское соглашение</a>
        </div>
    </div>
</div>
            </section>
        </footer>
    </div>
    <!-- end dredex_footer -->
    <!-- ########## КОНЕЦ ОБЛАСТЬ ДЛЯ ФУТЕРА САЙТА ########## -->

</body>
</html>