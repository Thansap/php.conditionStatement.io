<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>การใช้คำสั่งคำสั่งแบบ connection <กลุ่มคำสั่ง if></h1>
    <?php
        echo "<h2?>คำสั่ง if </h2><br>";
        $x = 5;
        $y = 8;
        echo "\$x = $x<br>";
        echo "\$y = $y<br>";
        if($x<$y){
            echo "ค่าในตัวแปร x น้อยกว่าค่าในตัวแปร y<br>";
        }
        else{
            echo "ค่าในตัวแปร x น้อยกว่าค่าในตัวแปร y<br>";
        }
        echo "-----------------------------";
        
        echo "<h2> Short hand if</h2>";
        $score = 55;
        if ($score >= 50) echo "ขอแสดงความยินดีคุณสอบผ่าน";
        echo"<br>";
        $result = $score>=50 ? "ได้เกรด p" : "ได้เกรด F"; 
        echo "<br>";
        echo "ผลการเรียนของคุณ" .$result;
        echo "<br>";
        echo "-----------------------------";

        echo "<h2> switch case </h2>";
        echo "<br>";
        $Pet = 'cat';
        switch ($Pet){
            case "Cat";
            echo "สัตว์ชอบนอนเหมือนแมว<br>";
            break;
            case "Dog";
            echo "สัตว์ชอบเห่าเหมือนหมา<br>";
            break;
            case "Brid";
            echo "สัตว์พูดมากเหมือนนก<br>";
            break;
            case "Cat";
            default:
            echo "สัตว์ชอบนอนเหมือนแมว<br>";
            break;
            
        }
        echo "<br>";
        echo "--------------------------";
        


        ?>
</body>
</html>