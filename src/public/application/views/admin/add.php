<div class="dash-content">
    <div class="overview">
        <div class="title">
            <i class="icon figaro-cpanel"></i>
            <span class="text">Добавить запись</span>
        </div>

        <div class="boxes">
            <form action="/admin/add" method="post">
                <div>
                    <input type="text" name="name" placeholder="Название"/>
                </div>
                <div>
                    <input type="text" name="description" placeholder="Описание"/>
                </div>
                <div>
                    <input type="text" name="keywords" placeholder="Ключевые слова"/>
                </div>
                <div>
                    <textarea rows="5" name="text" placeholder="Текст"></textarea>
                </div>
                <div>
                    <select name="lang" autofocus>
                        <option>Выберите язык</option>
                        <option value="ru">Русский</option>
                        <option value="en">Английский</option>
                    </select>
                </div>
                <div>
                    <label>Изображение</label><br>
                    <input type="file" name="img">
                </div>
                <div>
                    <button type="submit">Добавить</button>
                </div>
            </form>
        </div>
    </div>
</div>