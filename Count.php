<?php
    $db = mysqli_connect ("localhost", "root", "268453971MamaAmaNama", "stats")
    or die ("Невозможно подключиться к БД");
    
    $visitor_ip = $_SERVER["REMOTE_ADDR"];
    $date = date("Y.m.d");

    $res = mysqli_query($db, "SELECT `visit_id` FROM `visits` WHERE `visits`.`date`='$date'")
    or die ("Проблема при подключении к БД");

    if (mysqli_num_rows($res) == 0)
    {
        mysqli_query($db, "DELETE FROM `ips`");
        mysqli_query($db, "INSERT INTO `ips` SET `ip_adress`='$visitor_ip'");
        for ($i=1; $i <= 5; $i++) {
        	mysqli_query($db, "INSERT INTO `visits` SET `page_id`='$i', `date`='$date', `hosts`=0, `views`=0");    
        }
        mysqli_query($db, "UPDATE `visits` SET `hosts` = 1, `views` = 1 WHERE `visits`.`page_id`='$page' and `visits`.`date`='$date'");
    }
    else
    {
        $current_ip = mysqli_query($db, "SELECT `ip_id` FROM `ips` WHERE `ips`.`ip_adress`='$visitor_ip'");
        if (mysqli_num_rows($current_ip) == 1)
        {
            mysqli_query($db, "UPDATE `visits` SET `views`=`views`+1 WHERE `visits`.`page_id`='$page' and `visits`.`date`='$date'");
        }
        else
        {
            mysqli_query($db, "INSERT INTO `ips` SET `ip_adress`='$visitor_ip'");
            mysqli_query($db, "UPDATE `visits` SET `views`=`views`+1, `hosts`=`hosts`+1 WHERE `visits`.`page_id`='$page' and `visits`.`date`='$date'");
        }
    }
?>