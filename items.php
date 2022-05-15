<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" href="style.css">
<title>Items</title>
</head>
<body><br>
    <section style="background-color: #000000;">
        <img src="images/smile-s-logo-1.png" alt="image">
    <div class="popo">
        <a style="color: #fff;" href="from.php"> - เพิ่มรูปภาพ - </a>/
        /<a style="color: #fff;" href="index.php"> - กลับหน้าหลัก - </a>
    </div><br>
    </section><br>
    <section class="tr">
    <p>********************************************************************************</p>
    <?php
      //1. เชื่อมต่อ database: 
      include('connect.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
      //2. query ข้อมูลจากตาราง: 
      $query = "SELECT * FROM uploadfile" or die("Error:" . mysqli_error()); 
      //3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result . 
      $result = mysqli_query($con, $query); 
      //4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล: 
      echo "<table border='1' align='center' width='500'>";
      //หัวข้อตาราง
        echo "<tr align='center' bgcolor='#CCCCCC'><td> img </td><td> details </td><td> price </td></tr>";
      while($row = mysqli_fetch_array($result)) { 
        echo "<tr>";
        // echo "<td>" .$row["fileupload"] .  "</td> ";
        echo "<td>"."<img src='fileupload/".$row['fileupload']."' width='700'>"."</td>";
        echo "<td>" .$row["details"] .  "</td> ";
        echo "<td>" .$row["price"] .  "</td> ";
        echo "</tr>";
      }
      echo "</table>";
      //5. close connection
      mysqli_close($con);
    ?>
    <br/>
    <p>********************************************************************************</p>
    </section>      
</body>
</html>