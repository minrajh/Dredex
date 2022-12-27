<div class="wrap">
        <div class="form-add">
        <div class="addhead"><?php echo $title; ?></div>
            <div class="posright">
            <ul>
                <li>
                    <form class="noname" action="" method="post">
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
                            <label>Изображение</label><br>
                            <input type="file" name="img">
                        </div>
                        <div>
                            <button type="submit" class="js-open-modal" data-modal="2">Добавить</button>
                        </div>
                    </form>
                </li>
            </ul>
            </div>
        </div>
</div>
<!-- Модальное окно -->
<div class="modal" data-modal="2">
    <div class="modal-content">
        <div class="modal-header">
            <span class="close js-modal-close">&times;</span>
            <h2>Внимание!</h2>
        </div>
        <div class="modal-body">
            <p>Не заполнены поля</p>
            <p>Поля помеченные <b>*</b> обязательные для заполнения</p>
        </div>
        <div class="modal-footer">
            <p><button type="submit" class="js-modal-close fbtn">Ок</button></p>
        </div>
    </div>
</div>
<!-- Конец модального окна -->