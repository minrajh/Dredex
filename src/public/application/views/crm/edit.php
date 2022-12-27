<div class="wrap">
        <div class="form-add">
        <div class="addhead"><?php echo $title; ?></div>
            <ul>
                <li>
                    <form class="noname" action="/admin/edit/<?php echo $data['id']; ?>" method="post">
                        <div>
                            <input type="text" value="<?php echo htmlspecialchars($data['name'], ENT_QUOTES); ?>" name="name" placeholder="Название"/>
                        </div>
                        <div>
                            <input type="text" value="<?php echo htmlspecialchars($data['description'], ENT_QUOTES); ?>" name="description" placeholder="Описание"/>
                        </div>
                        <div>
                            <input type="text" name="keywords" placeholder="Ключевые слова"/>
                        </div>
                        <div>
                            <textarea rows="5" name="text"><?php echo htmlspecialchars($data['text'], ENT_QUOTES); ?></textarea>
                        </div>
                        <div>
                            <label>Изображение</label><br>
                            <input type="file" name="img">
                        </div>
                        <div>
                            <button type="submit">Добавить</button>
                        </div>
                    </form>
                </li>
            </ul>
        </div>
</div>