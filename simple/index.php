<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body bgcolor="red">
    <?php
    $team=array("dhoni","sachin","dhavan","kohli","sanju");
    echo"<h1>cricket players</h1>";
    echo"<br>";
    print_r($team);
    echo"<br>";
    echo"<center>players name in table</center>";
    echo"<center><table border=2><tr><th>players name</th><tr>";
    echo"<tr><td>$team[0]</td></tr>";
    echo"<tr><td>$team[1]</td></tr>";
    echo"<tr><td>$team[2]</td></tr>";
    echo"<tr><td>$team[3]</td></tr>";
    echo"<tr><td>$team[4]</td></tr></table>";
    ?>
    
</body>
</html>