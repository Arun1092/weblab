<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
</head>
<body>
    <form method="post" action="index.php">
        <table>
            <tr>
                <td>
                <label for="">concumer id</label>
                </td>
                <td>
                    <input type=" number" name="n1">
                </td>    
            </tr>
            <tr>
                <td>
                    <label for="">name</label>
                </td>
                <td>
                    <input type="text" name="name">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">previous reading</label>
                </td>
                <td>
                    <input type="number" name="r1">
                </td>

            <tr>
                <td>
                    <label for="">current reading</label>
                </td>
                <td>
                    <input type="number" name="r2">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit">
                </td>
            </tr>
        </table>
    </form>
    <?php
    $a=$_POST['n1'];
    $b=$_POST['name'];
    $c=$_POST['r1'];
    $d=$_POST['r2'];
    echo"customer id is",$a;
    echo"<br>";
    echo"customer name is",$b;
    echo"<br>";
    echo "previous reading is",$c;
    echo"<br>";
    echo "current reading is",$d;
    echo"<br>";
    $unit=$d-$c;
    if($unit<=100)
    {
        $amount=$unit*3;
        echo"amount is",$amount;        
    }
    elseif($unit>200 && $unit<=300)
    {
        $amount=$unit*4;
        echo "amount is",$amount;
    }
    elseif($unit>300 && $unit<=400)
    {
        $amount=$unit*5;
        echo "amount is",$amount;
    }
    else
    {
        $amount=$unit*5;
        echo "amount is",$amount;
    }

    ?>
    
</body>
</html>