
<div class="header-blog">
	<div class="wrap">
	<?php if (empty($list)): ?>
		<p>Список меню пуст</p>
		<?php else: ?>
        <ul class="txt-left">
			<?php foreach ($list as $val): ?>
            <li><a class="<?php if ($url == "/post") {echo 'active';}?>" href="/post/<?php echo $val['id']; ?>"><?php echo htmlspecialchars($val['name'], ENT_QUOTES); ?></a></li>
			<?php endforeach; ?>
        </ul>
		<?php endif; ?>
	</div>
</div>

<section class="business">
	<div class="content-box">
		<div class="container clearfix">
			<div class="wrap">
				<div class="nested list">
					<div class="leftcolumn">
						<div class="card">
							<h2><?php echo htmlspecialchars($data['name'], ENT_QUOTES); ?></a></h2>
							<h5>7 Декабря, 2017</h5>
							<p><?php echo htmlspecialchars($data['description'], ENT_QUOTES); ?></p>
							<div class="fakeimg" style="height:400px; background-image: url(/assets/images/materials/<?php echo $data['id']; ?>.jpg)">Картинка</div>
							<p><?php echo htmlspecialchars($data['text'], ENT_QUOTES); ?></p>
							<p>
							<i class="icon figaro-user" style="font-size: 20px;"></i> -25 
							<i class="icon figaro-comments" style="font-size: 20px;"></i> -34
							<i class="icon figaro-link" style="font-size: 20px;"></i> -100
							</p>
							<p><b><i>Тут форма оставления комментариев</i></b></p>
						</div>
					</div>

					<!-- Правая колонка БЛОГА НАЧАЛО -->
					<div class="rightcolumn">
						<div class="card">
						<h3>Популярные посты</h3>
                        <?php if (empty($list)): ?>
                		<p>Список постов пуст</p>
            			<?php else: ?>
						<?php foreach ($list as $val): ?>
						<div class="fakeimg" style="height:100px; background-image: url(/assets/images/materials/<?php echo $val['id']; ?>.jpg)"><a href="/post/<?php echo $val['id']; ?>"><?php echo htmlspecialchars($val['name'], ENT_QUOTES); ?></a></div><br>
                        <?php endforeach; ?>
                        <?php endif; ?>
						<span tooltip="В разработке" flow="down">В разработке</span>
						</div>
                        
						<div class="card">
						<h3>Подписаться на нас</h3>
						<p>Текст с кнопкой..</p>
						<span tooltip="В разработке" flow="down">В разработке</span>
						</div>
					</div>
					<!-- Правая колонка БЛОГА КОНЕЦ -->

				</div>
			</div>
		</div>
	</div>
</section>