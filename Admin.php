<!DOCTYPE html>
<html>
<head>
    <title>Панель Администратора</title>
</head>
<body>
    <p><a href="?interval=1">За сегодня</a></p>
    <p><a href="?interval=7">За последнюю неделю</a></p>

<?php
$db = mysqli_connect ("localhost", "root", "268453971MamaAmaNama", "stats")
    or die ("Невозможно подключиться к БД");
$pages = array('', 'Главная', 'Сотрудники', 'Услуги', 'О нас', 'Связаться');

for ($i=1; $i <= 5; $i++):?>
    <table style="border: 1px solid silver;">
        <caption><b>
                <?=$pages[$i];?>
        </b></caption>
        <tr>
            <td style="border: 1px solid silver;">Дата</td>
            <td style="border: 1px solid silver;">Уникальных посетителей</td>
            <td style="border: 1px solid silver;">Просмотров</td>
        </tr>
<?php
    if (isset($_GET['interval']))
    {
        $interval = $_GET['interval'];
        if (!is_numeric ($interval) and $interval>0)
        {
            echo '<p><b>Недопустимый параметр!</b></p>';
        }

        $res = mysqli_query($db, "SELECT * FROM `visits` WHERE `page_id` = '$i' ORDER BY `date` DESC LIMIT $interval");
        while ($row = mysqli_fetch_assoc($res))
        {
            echo '<tr>
                      <td style="border: 1px solid silver;">' . $row['date'] . '</td>
                      <td style="border: 1px solid silver;">' . $row['hosts'] . '</td>
                      <td style="border: 1px solid silver;">' . $row['views'] . '</td>
                  </tr>';
        }
        echo "<br>";
    }
endfor;
?>
    </table>
</body>
</html>