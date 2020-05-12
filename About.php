<?php $page = 4; require 'Count.php';?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>DiggerTransAuto</title>
    <meta name="description" content="Сайт грузоперевозчика DiggerTransAuto">
    <meta name="author" content="Женя Крот">
	<link href="About.css" rel="stylesheet" type="text/css"/>
</head>
<body>
	<nav>
		<a href="Main.php">Главная</a>
		<a href="Empl.php">Сотрудники</a>
		<a href="Serv.php">Услуги</a>
		<a><b><nobr>О нас</nobr></b></a>
		<a href="Call.php">Связаться</a>
	</nav>
	<header>
		<h1>О НАС</h1>
	</header>
	<main>
		<table align="center">
			<tr>
				<td>
					<img src="Images/About.png" width="100%">
				</td>
				<td>
					<h2>Digger Trans Auto</h2>
					<p>Здравствуйте. Я понятия не имею, что могу здесь написать. Наверное, довольно сложно делать сайт несуществующей компании. По крайней мере, я надеюсь, я всё же сдам эту лабораторную работу. В любом случае, это наверняка был полезный опыт, стоило хотя бы попытаться в веб.</p>
				</td>
			</tr>
		</table>
	</main>
	<footer>
		<table width="100%">
			<tr>
				<td valign="top">
					©2020 DТА WS<br>Женька Крот
					<?php $page = 4; require 'Stats.php';?>
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