<!-- Секция Админка -->

<div class="login-page">
  <div class="form">
    <div style="padding-bottom: 15px;">
        <h1>Вход</h1>
        <h2>в панель управления</h2>
    </div>
    <form class="login-form" action="/admin/login" method="post">
      <input type="text" name="login" placeholder="Введите Ваш логин" required>
      <input type="password" name="password" placeholder="Введите пароль" required>
      <button>Войти</button>
    </form>
    <div style="text-align: left; margin-top: 12px;">
        <p><a href="/">Перейти на главную</a></p>
    </div>
  </div>
</div>