<!DOCTYPE html>
<html>
<head>
    <title>Обработка данных</title>
    <meta charset="utf-8">
</head>
<body>
<header>
    <h1>Результат работы:</h1>
</header>
<?php
if(isset($_POST['Name']))
{
    $Mess=$_POST['Name'];
    echo "Ваше сообщение: $Mess";
    $rev = '.';
    $lastpos = 0;
    $slen = strlen($Mess);
    $Mess = lcfirst($Mess);
    for ($i = 0; $i<=$slen; $i++)
    {
        if ($Mess[$i] ===',' or $Mess[$i] ==='.')
        {
            ($rev == '.')? $rev = substr($Mess, $lastpos, $i - $lastpos) . $rev : $rev = substr($Mess, $lastpos, $i - $lastpos) . ', ' . $rev;
            $i += 2;
            $lastpos = $i;
        }
    }
    $rev = ucfirst($rev);
    echo "Обратное сообщение: $rev";
}
?>
</body>
</html>