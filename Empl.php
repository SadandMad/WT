<?php $page = 2; require 'Count.php';?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>DiggerTransAuto</title>
    <meta name="description" content="Сайт грузоперевозчика DiggerTransAuto">
    <meta name="author" content="Женя Крот">
	<link href="Empl.css" rel="stylesheet" type="text/css"/>
</head>
<body>
	<nav>
		<a href="Main.php">Главная</a>
		<a><b>Сотрудники</b></a>
		<a href="Serv.php">Услуги</a>
		<a href="About.php"><nobr>О нас</nobr></a>
		<a href="Call.php">Связаться</a>
	</nav>
	<header>
		<h1>СОТРУДНИКИ</h1>
		<div class="info">Наши сотрудники всегда готовы ответить на любые ваши вопросы и запросы...</div>
		<div class="subinfo">Если только не спят...</div>
		<div class="coffeinfo">Или не пьют кофе.</div>
​		<div class="time">Время работы:<br>Рабочие дни<br>С 9<sup>00</sup> до 18<sup>00</sup></div>
	</header>
	<main>
		<table align="center">
			<tr>
				<td>
					<img src="Images/Empl.png" height="100" width="100">
					<h2>Евгений Крот. Администратор</h2>
					<b>Почта: </b><a href="mailto:chemodanik807@gmail.com">chemodanik807@gmail.com</a><br>
					<b>Skype: </b>none<br>
					<b>Контактный телефон: +375-44-79-89-702</b>
				</td>
				<td>
					<img src="Images/Empl.png" height="100" width="100">
					<h2>Имя Фамилия. Должность</h2>
					<b>Почта: </b><br>
					<b>Skype: </b><br>
					<b>Контактный телефон: </b>
				</td>
			</tr>
			<tr>
				<td>
					<img src="Images/Empl.png" height="100" width="100">
					<h2>Имя Фамилия. Должность</h2>
					<b>Почта: </b><br>
					<b>Skype: </b><br>
					<b>Контактный телефон: </b>
				</td>
				<td>
					<img src="Images/Empl.png" height="100" width="100">
					<h2>Имя Фамилия. Должность</h2>
					<b>Почта: </b><br>
					<b>Skype: </b><br>
					<b>Контактный телефон: </b>
				</td>
			</tr>
		</table>
	</main>
	<footer>
		<table width="100%">
			<tr>
				<td valign="top">
					©2020 DТА WS<br>Женька Крот
					<?php $page = 2; require 'Stats.php';?>
				</td>
				<td align="right">
					<a href="http://www.vk.com/id198587228"><img src="images/vk.svg" width="50" height="50" alt="vk.com"></a>
					<br>
					<a href="https://web.telegram.org/Sad_and_Mad#/im"><img src="images/tg.png" width="50" height="50" alt="telegram"></a>
				   	<br>
				   	<a href="mailto:chemodanik807@gmail.com"><img src="images/gm.png" width="50" height="50" alt="mail.google">
				</td>
			</tr>
		</table>
	</footer>
</html>