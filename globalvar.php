<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Globalvar</title>
</head>
<body>
    <h1>Global Variable</h1>
    <?php

    $x = 75;
    echo "ค่าของ x==>" .$x;
    echo "<br>";

    function myfunction(){

        global $x;
        $x = 35;
        echo "อ่านจาก function  ค่าของ  x==>" .$x;
    }
    myfunction();
    echo "<br>";
    echo "ค่าของ x==>" .$x;

echo "<br>";
echo "<h2>การใช้ข้อมูลจาก server ด้วย $_server</h2>";
    echo $_SERVER['PHP_SELF']. "<br>";
    echo $_SERVER['SERVER_NAME']. "<br>";
    echo $_SERVER['HTTP_HOST']. "<br>";
    //echo $_SERVER['HTTP_REFERER']. "<br>";
    echo $_SERVER['HTTP_USER_AGENT']. "<br>";
    echo $_SERVER['SCRIPT_NAME']. "<br>";

    echo "<hr>";




    ?>

</body>
</html>