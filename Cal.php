<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>Календарь</title>
    </head>
    <body>
        <form  method="POST">
            <input type="number" name="year" min="1970" max="2030"/><br><br>
            <input type="submit" value="Показать календарь">
        </form>
<?php
    if(isset($_POST['year'])){
        $year = $_POST['year'];
        $table = calendar($year);
        echo "$table";
    }
?>
    </body>
</html>

<?php
function calendar($year)
{
    $shortDays = array('', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб', 'Вс');
    $months = array('', 'Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь');
    $link = mysqli_connect("localhost", "root", "268453971MamaAmaNama", "calendar") 
            or die("Ошибка " . mysqli_error($link));
    $holidays = mysqli_query($link, "SELECT * FROM calendar") or die("Ошибка " . mysqli_error($link));
    $hNum = 1;
    $hMax = mysqli_num_rows($holidays);
    $row = mysqli_fetch_row($holidays);

    ob_start();
    echo "<table border=\"1\"><caption valign=\"top\">$year</caption></tbody><tr>\n";
    for ($month=1; $month < 13; $month++) {
        echo "<td><table><caption valign=\"top\">$months[$month]</caption>\n<thead>\n<tr>";
        for ($day=1; $day<8 ; $day++) { 
            echo "<th>$shortDays[$day]</th>";
        }
        echo "</tr>\n</thead><tbody>\n<tr>";
        $firstDay = date('N', mktime(0, 0, 0, $month, 1, $year));
        $amountDays = date('t', mktime(0, 0, 0, $month, 1, $year));
        for ($day=1; $day<$firstDay; $day++) { 
            echo "<td>  </td>";
        }
        for ($day = 1; $firstDay<8; $firstDay++, $day++) {
            if ($hNum <= $hMax && $month == $row[2] && $day == $row[1]) {
                echo "<td title=\"";
                echo $row[3];
                echo "\" style=\"color: red\"><b> $day</b></td>";
                $row = mysqli_fetch_row($holidays);
                $hNum++;
            }
            else{
                echo "<td> $day</td>";
            }
        }
        echo "</tr>\n";
        while ($day <= $amountDays) {
            echo "<tr>";
            for ($weekDay=1; $weekDay<8 ; $weekDay++, $day++) {
                if ($hNum <= $hMax && $month == $row[2] && $day == $row[1]) {
                    echo "<td title=\"";
                    echo $row[3];
                    echo "\" style=\"color: red\"><b> $day</b></td>";
                    $row = mysqli_fetch_row($holidays);
                    $hNum++;
                }
                else{
                    echo "<td> $day</td>";
                }
                if ($day == $amountDays) {
                    $day++;
                    break;
                }
            }
            echo "</tr>\n";
        }
        echo "</tbody></table></td>\n";
        if ($month == 4 or $month==8) {
            echo "</tr><tr>\n";
        }
    }
    echo "\n</tr></tbody></table>";
    $table = ob_get_contents();
    ob_end_clean();
    mysqli_free_result($holidays);
    mysqli_close($link);
    return $table;
}
?>