<?php
    $date = date("Y.m.d");
    $res = mysqli_query($db, "SELECT `views`, `hosts` FROM `visits` WHERE `page_id`='$page' and `date`='$date'");
    $row = mysqli_fetch_assoc($res);
    echo '<p><br>Уникальных посетителей: ' . $row['hosts'] . '<br>';
    echo 'Просмотров: ' . $row['views'] . '</p>';
?>