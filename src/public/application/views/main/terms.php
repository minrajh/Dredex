<?php
$url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'];
$url = explode('?', $url);
$siteurl = $url[0];
?>

<div class="header-blog">
	<div class="wrap">
    <?php $url = $_SERVER["REQUEST_URI"];?>
        <ul class="txt-left">
            <li><a class="<?php if ($url == "/all") {echo 'active';}?>" href="all">Правовые документы</a></li>
            <li><a class="<?php if ($url == "/terms") {echo 'active';}?>" href="terms">Пользовательское соглашение</a></li>
        </ul>
	</div>
</div>

<!-- Секция пользовательское соглашение -->
<section class="container clearfix">
    <div class="wrap">
        <div class="nested list">
            <div class="leftcolumn">
                <div class="card">
                    <h2>Пользовательское Соглашение</h2>
                    <p>Настоящее Пользовательское Соглашение (Далее Соглашение) регулирует отношения между владельцем dredex.ru (далее Dredex или Администрация) с одной стороны и пользователем сайта с другой.</p>
                    <p>Сайт Dredex не является средством массовой информации.</p>
                    <br>
                    <p>Используя сайт, Вы соглашаетесь с условиями данного соглашения.</p>
                    <p><strong>Если Вы не согласны с условиями данного соглашения, не используйте сайт Dredex!</strong></p>
                    <br>
                    <h2>Права и обязанности сторон</h2>
                    <p><strong>Пользователь имеет право:</strong></p>
                    <p>- осуществлять поиск информации на сайте</p>
                    <p>- получать информацию на сайте</p>
                    <p>- комментировать контент, выложенный на сайте</p>
                    <p>- копировать информацию на другие сайты с указанием источника</p>
                    <p>- использовать информацию сайта в личных некоммерческих целях</p>
                    <br>
                    <p><strong>Администрация имеет право:</strong></p>
                    <p>- по своему усмотрению и необходимости создавать, изменять, отменять правила</p>
                    <p>- ограничивать доступ к любой информации на сайте</p>
                    <p>- создавать, изменять, удалять информацию</p>
                    <br>
                    <p><strong>Пользователь обязуется:</strong></p>
                    <p>- не нарушать работоспособность сайта</p>
                    <p>- не использовать скрипты (программы) для автоматизированного сбора информации и/или взаимодействия с Сайтом и его Сервисами</p>
                    <br>
                    <p><strong>Администрация обязуется:</strong></p>
                    <p>- поддерживать работоспособность сайта за исключением случаев, когда это невозможно по независящим от Администрации причинам.</p>
                    <br>
                    <h2>Ответственность сторон</h2>
                    <p>- администрация не несет никакой ответственности за услуги, предоставляемые третьими лицами</p>
                    <p>- в случае возникновения форс-мажорной ситуации (боевые действия, чрезвычайное положение, стихийное бедствие и т. д.) Администрация не гарантирует сохранность информации, размещённой Пользователем, а также бесперебойную работу информационного ресурса</p>
                    <br>
                    <h2>Условия действия Соглашения</h2>
                    <p>Данное Соглашение вступает в силу при любом использовании данного сайта.</p>
                    <p>Соглашение перестает действовать при появлении его новой версии.</p>
                    <p>Администрация оставляет за собой право в одностороннем порядке изменять данное соглашение по своему усмотрению.</p>
                    <p>Администрация не оповещает пользователей об изменении в Соглашении.</p>
                </div>
            </div>

            <div class="rightcolumn">
                <div class="card">
                    <h2>Правовые документы</h2>
                    <ul class="rightcol-doc">
                        <li><a class="<?php if ($url == "/all") {echo 'active';}?>" href="all">Все документы</a></li>
                        <li><a class="<?php if ($url == "/privacy") {echo 'active';}?>" href="privacy">Политика конфиденциальности</a></li>
                        <li><a class="<?php if ($url == "/terms") {echo 'active';}?>" href="terms">Пользовательское соглашение</a></li>
                        <li><a href="#">Договор оказания услуг</a></li>
                        <li><a href="#">Акт выполненных работ</a></li>
                        <li><a href="#">Лицензия</a></li>
                    </ul>
                </div>
            </div>
            
        </div>
    </div>
</section>