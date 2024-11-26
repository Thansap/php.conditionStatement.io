<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>แสดงผลการคำนวณพื้นที่รูปเรขาคณิต</title>
    <style>
        /* General Page Styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #AFEEEE;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Container for result display */
        .container {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px;
            text-align: center;
        }

        /* Heading Styling */
        h2 {
            color: #2F4F4F;
            font-size: 28px;
        }

        h3 {
            color: #555;
            font-size: 20px;
            line-height: 1.5;
        }

        /* Styling the link button */
        a {
            display: inline-block;
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            margin-top: 20px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #45a049;
        }

        /* Additional spacing */
        .result {
            margin: 20px 0;
        }

    </style>
</head>
<body>
    <div class="container">
        <h2>พื้นที่รูปสามเหลี่ยม</h2>
        <?php
            // Receive input values from the form submission
            $height = $_POST['height']; // รับค่าความสูงสามเหลี่ยม
            $width = $_POST['width']; // รับค่าความยาวฐานจากฟอร์ม
            $area = 0.5 * $height * $width; // คำนวณพื้นที่สามเหลี่ยม

            // Display the results
            echo "<div class='result'><h3>รูปสามเหลี่ยมที่มีความสูง $height <br> และมีความยาวฐาน $width </h3></div>";
            echo "<div class='result'><h3>คำนวณพื้นที่ได้ $area ตารางหน่วย</h3></div>";
        ?>
        <a href="http://localhost/word1/php.conditionStatement/php.conditionStatement.io/triangle_area_form.php">กลับไปคำนวณใหม่</a>
    </div>
</body>
</html>
