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
    <meta name="keywords" content="<?php echo $keywords; ?>">
    <meta name="description" content="<?php echo $description; ?>">
    <link rel="shortcut icon" href="<?php echo ('/assets/images/favicon'); ?>.ico" type="image/x-icon">
    <link rel="stylesheet" href="/assets/css/style.min.css?<?=filemtime('assets/css/style.min.css')?>">
    <title><?php echo $title; ?></title>
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
                    <div class="navbar-logo">
                        <picture>
                            <source srcset="/assets/images/logo.webp" media="(max-width: 560px)" type="image/webp">
                            <source srcset="/assets/images/logo.png" media="(max-width: 560px)">
                            <source srcset="/assets/images/logo.webp" type="image/webp">
                            <a href="/"><img src="/assets/images/logo.png" width="230px" alt="DREDEX"></a>
                        </picture>
                    </div>
                    <?php $url = $_SERVER["REQUEST_URI"];?>
                    <ul>
                        <li><a class="nav__link <?php if ($url == "/about") {echo 'active';}?>" href="/about">О нас</a></li>
                        <li><a class="<?php if ($url == "/portfolio") {echo 'active';}?>" href="/portfolio">Портфолио</a></li>
                        <li class="dropdown">
                            <a class="dropbtn has-subnav <?php if ($url == "/services") {echo 'active';}?>" href="#" onclick="myFunction()">Услуги</a>
                            
                            <ul class="dropdown-content" id="myDropdown"> 
                                <li><a class="<?php if ($url == "/services") {echo 'active';}?>" href="/services">Услуга #1</a></li> 
                                <li><a href="#">Услуга #2</a></li>
                                <li><a href="#">Услуга #3</a></li>
                            </ul>
                        
                        </li>
                        <li><a class="nav__link <?php if ($url == "/contact") {echo 'active';}?>" href="/contact">Контакты</a></li>
                    </ul>
                </nav>
            </div>
            <!-- end dredex_header -->
        </header>
        <!-- ########## КОНЕЦ ОБЛАСТЬ ДЛЯ ШАПКИ САЙТА ########## -->

        <!-- ########## ОБЛАСТЬ КОНТЕНТА ########## -->
        <div class="container clearfix">
            <main id="dredex_content" class="content">

            <!-- КОНТЕНТ НАЧАЛО -->

            <?php echo $content ;?>
            
            <!-- КОНТЕНТ КОНЕЦ -->
            
            </main>
            
        <!-- Тут можно поставить aside -->
            
        </div>
        <!-- ########## КОНЕЦ ОБЛАСТИ КОНТЕНТА ########## -->

        <!-- ########## ОБЛАСТЬ ДЛЯ ФУТЕРА САЙТА ########## -->
        <footer id="dredex_footer" class="footer">
            <section class="footer">
                <div class="content-box">
                    <div class="container clearfix">
                        <div class="copy">
                            <span>&#169; DREDEX 2019 - <?php echo date ( 'Y' ) ; ?></span>
                            <span class="line"> | </span>
                            <a <?php if ($url == "/privacy") {echo 'class="active"';}?> href="/privacy">Политика конфиденциальности</a>
                            <span class="line"> | </span>
                            <a <?php if ($url == "/terms") {echo 'class="active"';}?> href="/terms">Пользовательское соглашение</a>
                        </div>
                    </div>
                </div>
            </section>
        </footer>
    </div>
    <!-- ########## КОНЕЦ ОБЛАСТЬ ДЛЯ ФУТЕРА САЙТА ########## -->


    <!-- ########## НАЧАЛО МОДАЛЬНЫЕ ОКНА ########## -->
    <!-- dredex_attention-modal -->
<div class="modal" id="notice-modal">
    <div class="modal__content modal__content--content">
        <button class="modal__close" type="button">
            <img src="assets/images/close.png" alt="Закрыть">
        </button>
        <div class="modal-header">
            <h2><strong>Внимание</strong></h2>
        </div>
        <div class="modal-body">
            <p>Тут будет выводиться информация</p>
        </div>
        <div class="modal-footer">
            <a href="#" class="btn-blue fl-right btn__close">Ок</a>
        </div>
    </div>
</div>    
<!-- end dredex_modal -->

<!-- dredex_master-modal -->
<div class="modal" id="master-modal">
    <div class="modal__content modal__content--content">
        <button class="modal__close" type="button">
            <img src="assets/images/close.png" alt="Закрыть">
        </button>
        <div class="modal-header">
            <h2><strong>Оформление заявки</strong></h2>
        </div>
        <div class="modal-body">
            <form class="form__app" action="/" method="POST">

                <div class="form__group">
                    <input class="form__control" type="text" placeholder="Ваше имя:">
                </div>

                <div class="form__group">
                    <input class="form__control" type="email" placeholder="Email:">
                </div>

                <div class="form__group">
                    <input class="form__control" type="tel" placeholder="Контактный телефон:">
                </div>

                <div class="form__group">
                    <textarea rows="4" cols="50" name="subject" placeholder="Сообщение:" class="form__control" required></textarea>
                </div>

                <div class="form__group">
                    <label for="rdo-1" class="btn-radio">
                        <input type="radio" id="rdo-1" name="radio-grp">
                            <svg width="20px" height="20px" viewBox="0 0 20 20">
                                <circle cx="10" cy="10" r="9"></circle>
                                <path d="M10,7 C8.34314575,7 7,8.34314575 7,10 C7,11.6568542 8.34314575,13 10,13 C11.6568542,13 13,11.6568542 13,10 C13,8.34314575 11.6568542,7 10,7 Z" class="inner"></path>
                                <path d="M10,1 L10,1 L10,1 C14.9705627,1 19,5.02943725 19,10 L19,10 L19,10 C19,14.9705627 14.9705627,19 10,19 L10,19 L10,19 C5.02943725,19 1,14.9705627 1,10 L1,10 L1,10 C1,5.02943725 5.02943725,1 10,1 L10,1 Z" class="outer"></path>
                            </svg>
                        <span>Option One</span>
                    </label>
                </div>
            
            </form>
        </div>
        <div class="modal-footer">
            <a href="#" class="btn-blue fl-right btn__close">Отправить</a>
        </div>
    </div>
</div>    
<!-- end dredex_contact-modal -->

<!-- dredex_cookie_notice -->
<div class="cookie_notice" id="cookie-modal">
    <h4>Здравствуйте!</h4>
    <p>Для получения статистической информации и нормального функционирования наш сайт собирает метаданные посетителей (cookie, данные об IP-адресе и местоположении).
    Если вы не хотите, чтобы эти данные обрабатывались, то вы должны покинуть сайт.
    Вы видете это сообщение во исполнение нами Федерального закона от 27.07.2006 N 152-ФЗ "О персональных данных".</p>
    <a class="btn-blue-cookie" id="cookie_close" href="#close">Согласиться</a>
    <a class="btn-blue-cookie" href="privacy">Политика конфиденциальности</a>
</div>
<!-- end dredex_cookie_notice -->

    <!-- ########## КОНЕЦ МОДАЛЬНЫЕ ОКНА ########## -->

    <!-- ########## СКРИПТЫ МОДУЛЯ ########## -->
        <!-- ########## ОБЩИЕ СКРИПТЫ ШАБЛОНА ########## -->
    <a class="back_to_top"><i class="icon figaro-scroll-up"></i></a>

    <script type="text/javascript">
        function FunctionSnackbar() {
        var x = document.getElementById("snackbar");
        x.className = "show";
        // After 3 seconds, remove the show class from DIV
        setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
    }
    </script>

    <!-- Прелоадер -->
    <script type="text/javascript">
        function loadData() {
        return new Promise((resolve, reject) => {
            // setTimeout не является частью решения
            // Код ниже должен быть заменен на логику подходящую для решения вашей задачи
            setTimeout(resolve, 500);
        })
        }

        loadData()
        .then(() => {
            let preloaderEl = document.getElementById('preloader');
            preloaderEl.classList.add('hidden');
            preloaderEl.classList.remove('visible');
        });
    </script>
    <!-- ########## КОНЕЦ ОБЩИХ СКРИПТОВ ШАБЛОНА ########## -->

    
<script src="/assets/js/script.js?<?=filemtime('assets/js/script.js')?>"></script>
    <!-- ########## КОНЕЦ СКРИПТОВ МОДУЛЯ ########## -->

</body>
</html>