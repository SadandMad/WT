<?php $page = 1; require 'Count.php';?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>DiggerTransAuto</title>
    <meta name="description" content="Сайт грузоперевозчика DiggerTransAuto">
    <meta name="author" content="Женя Крот">
	<link href="Main.css" rel="stylesheet" type="text/css"/>
</head>
<body>
	<nav>
		<a><b>Главная</b></a>
		<a href="Empl.php">Сотрудники</a>
		<a href="Serv.php">Услуги</a>
		<a href="About.php"><nobr>О нас</nobr></a>
		<a href="Call.php">Связаться</a>
	</nav>
	<header>
		<img src="Images/Emblem.png" height="50" width="125">
		<span class="name">DIGGER TRANS AUTO</span>
	</header>
	<main>
		<img src="Images/Фон5.jpg" width="23%">
		<img src="Images/Фон4.jpg" width="38%">
		<img src="Images/Фон2.jpg" width="38%">
		<img src="Images/Фон1.jpg" width="46%">
		<img src="Images/Фон3.jpg" width="53%">
	</main>
	<footer>
		<table width="100%">
			<tr>
				<td valign="top">
					©2020 DТА WS<br>Женька Крот
					<?php $page = 1; require 'Stats.php';?>
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