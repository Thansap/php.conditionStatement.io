<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>รับค่า</title>
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

        /* Container for the form */
        .container {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
            text-align: center;
        }

        /* Heading Styling */
        h2 {
            color: #333;
            font-size: 24px;
        }

        h3 {
            color: #555;
            font-size: 18px;
        }

        /* Input Fields */
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        /* Buttons Styling */
        input[type="submit"], input[type="reset"] {
            background-color: #33CC00;
            color: white;
            border: none;
            padding: 10px 20px;
            margin: 10px 5px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover, input[type="reset"]:hover {
            background-color: #45a049;
        }

        /* Form styling */
        form {
            display: flex;
            flex-direction: column;
        }
        
    </style>
</head>
<body>
    <div class="container">
        <h2>โปรแกรมคำนวณพื้นที่รูปเรขาคณิต</h2>
        <h3>คำนวณพื้นที่รูปสามเหลี่ยม</h3>
        <form action="triangle_area.php" method="post">
            <label for="height">ความสูง :</label>
            <input type="text" id="height" name="height" placeholder="กรอกความสูง"><br>
            
            <label for="width">ความยาวฐาน :</label>
            <input type="text" id="width" name="width" placeholder="กรอกความยาวฐาน"><br>
            
            <input type="submit" value="คำนวณ"> 
            <input type="reset" value="ล้างข้อมูล">
        </form>
    </div>
</body>
</html>