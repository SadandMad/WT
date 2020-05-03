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
    <?php
        $navs = array('Главная', 'Сотрудники', 'Услуги', '<nobr>О нас</nobr>', 'Связаться');
        $main = file_get_contents("Main.half");
        $empl = file_get_contents("Empl.half");
        $serv = file_get_contents("Serv.half");
        $about= file_get_contents("About.half");
        $call = file_get_contents("Call.half");
        
        if(isset($_GET["active"])) {
            $id = $_GET["active"];
        }
        else {
        $id = 0;
        }
        
        echo "<nav>\n";
        foreach($navs as $key => $nav){
            echo "<a";
            if ($key == $id) {
                echo " class=\"current\"";
            }
            echo " href=\"Main.php?active=";
            echo "$key";
            echo "\">";
            echo "$nav";
            echo "</a>\n";
        }
        echo "</nav>\n";
        switch ($id) {
            case 0:
                echo "$main";
                break;
            case 1:
                echo "$empl";
                break;
            case 2:
                echo "$serv";
                break;
            case 3:
                echo "$about";
                break;
            case 4:
                echo "$call";
                break;
        }
    ?>
    <footer>
        <table>
            <tr>
                <td valign="top">
                    ©2020 DТА WS<br>Женька Крот
                </td>
                <td align="right">
                    <a href="http://www.vk.com/id198587228"><img src="images/vk.svg" width="50" height="50" alt="vk.com"></a><br>
                    <a href="https://web.telegram.org/Sad_and_Mad#/im"><img src="images/tg.png" width="50" height="50" alt="telegram"></a><br>
                    <a href="mailto:chemodanik807@gmail.com"><img src="images/gm.png" width="50" height="50" alt="mail.google"></a>
                </td>
            </tr>
        </table>
    </footer>
</body>
</html>