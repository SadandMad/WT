<?php $page = 5; require 'Count.php';?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>DiggerTransAuto</title>
    <meta name="description" content="Сайт грузоперевозчика DiggerTransAuto">
    <meta name="author" content="Женя Крот">
	<link href="Call.css" rel="stylesheet" type="text/css"/>
</head>
<body>
	<nav>
		<a href="Main.php">Главная</a>
		<a href="Empl.php">Сотрудники</a>
		<a href="Serv.php">Услуги</a>
		<a href="About.php"><nobr>О нас</nobr></a>
		<a><b>Связаться</b></a>
	</nav>
	<header>
		<h1>НАЙДИТЕ НАС</h1>
	</header>
	<main>
		<table align="center">
			<tr>
				<td>
					<iframe width="100%" height="150%" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d808.5746043728378!2d25.302590039677174!3d53.06139216760578!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sru!2sby!4v1588079726325!5m2!1sru!2sby"></iframe>
				</td>
				<td style="padding-left: 50px">
					Телефон: +375 (44) 798-97-02<br>
					г. Слоним, ул. Васильковая, 12, кабинет 1<br>
					231800, Беларусь<br>
					Email: <a href="mailto:chemodanik807@gmail.com">chemodanik807@gmail.com</a><br>
					<form action="Task.php" method="POST">
						<table>
							<tr>
								<td>
									<input type="text" name="Name" value="Имя"></textarea><br>
									<input type="text" name="Mail" value="Mail"></textarea><br>
									<input type="text" name="Phone" value="Телефон"></textarea><br>
									<input type="text" name="Skype" value="Skype"></textarea>
								</td>
								<td>
									<textarea name="Mess" cols="25" rows="6"></textarea>
								</td>
							</tr>
						</table>
						<input type="submit" value="Обратиться">
					</form>
				</td>
			</tr>
		</table>
	</main>
	<footer>
		<table width="100%">
			<tr>
				<td valign="top">
					©2020 DТА WS<br>Женька Крот
					<?php $page = 5; require 'Stats.php';?>
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