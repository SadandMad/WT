<?php $page = 3; require 'Count.php';?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>DiggerTransAuto</title>
    <meta name="description" content="Сайт грузоперевозчика DiggerTransAuto">
    <meta name="author" content="Женя Крот">
	<link href="Serv.css" rel="stylesheet" type="text/css"/>
</head>
<body>
	<nav>
		<a href="Main.php">Главная</a>
		<a href="Empl.php">Сотрудники</a>
		<a><b>Услуги</b></a>
		<a href="About.php"><nobr>О нас</nobr></a>
		<a href="Call.php">Связаться</a>
	</nav>
	<header>
		<h1>УСЛУГИ</h1>
		<div class="info">Мы, конечно, можем всё</div>
		<div class="subinfo">Но за это придётся доплатить</div>
		<div class="realinfo">А если серьёзно, здесь вы найдёте всю необходимую информацию.</div>
	</header>
	<main>
		<table align="center">
			<tr>
				<td>
					<img src="Images/Serv.png" height="90" width="120">
					<h2>МЕЖДУНАРОДНЫЕ ГРУЗОПЕРЕВОЗКИ</h2>
					<p>Доверьте нам доставку Вашего груза!<br>Мы говорим на всех языках Европы</p>
				</td>
				<td>
					<img src="Images/Serv.png" height="90" width="120">
					<h2>УСЛУГИ ЭКСПЕДИТОРОВ</h2>
					<p>Экспедирование грузов от стран СНГ<br>до государств Европы, дальнего зарубежья</p>
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<img src="Images/Serv.png" height="90" width="120">
					<h2 style="text-align: center;">АРЕНДА ТЕХНИКИ</h2>
					<p>Работаем по всей Республике Беларусь.<br>Вы можете самостоятельно забрать технику из пункта стоянки,<br>либо заказать доставку</p>
				</td>
			</tr>
		</table>
	</main>
	<footer>
		<table width="100%">
			<tr>
				<td valign="top">
					©2020 DТА WS<br>Женька Крот
					<?php $page = 3; require 'Stats.php';?>
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