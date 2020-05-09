<!DOCTYPE html>
<html>
<head>
    <title>EMail picker</title>
</head>
<body>
    <form  method="POST">
        <textarea name="text" cols="50" rows="10"></textarea><br>
        <input type="submit" value="Преобразовать текст">
    </form>

<?php
    if(isset($_POST['text'])){
        $text = $_POST['text'];
        MailReplace($text);
    }
?>
</body>
</html>

<?php
function MailReplace($text)
{
    $mail = '/[a-zA-Z0-9\.][a-zA-Z0-9_\.\-]*@[a-zA-Z0-9\.]+\.[a-zA-Z]{2,5}/';
    $saveFile = 'Mail.txt';

    echo "<table>\n<tr>\n<td style=\"padding-right: 10px\">\n<pre>";
    echo "$text";
    echo "</pre>\n</td>\n<td>\n<pre>";
    echo (preg_replace($mail, "<a style=\"color: red\" href=\"mailto:$0\">$0</a>", $text));
    echo "</pre>\n</td>\n</tr>\n</table>";
        
    $save = array();
    $tok = strtok($text, " \n\t");
    while ($tok !== False) {
        if (preg_match($mail, $tok)) {
            array_push($save, $tok);
        }
        $tok = strtok(" \n\t");
    }
    $savee = implode("\n", $save);
    file_put_contents($saveFile, $savee);
}
?>
