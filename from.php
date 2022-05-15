
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<form action="add_file_db.php" method="post" enctype="multipart/form-data" name="upfile" id="upfile">
  <p>&nbsp;</p>
  <table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td height="40" colspan="2" align="center" bgcolor="#D6D6D6">Form Upload&nbsp;File</td>
    </tr>
    <tr>
      <td width="126" bgcolor="#EDEDED">&nbsp;</td>
      <td width="574" bgcolor="#EDEDED">&nbsp;</td>
    </tr>
    <tr>
      <td align="center" bgcolor="#EDEDED">File Browser</td>
      <td bgcolor="#EDEDED"><label>
        <input type="file" name="fileupload" id="fileupload"  required="required"/>
      </label></td>
    </tr>
    <tr>
      <td align="center" bgcolor="#EDEDED">ข้อมูลเพิ่มเติม</td>
      <td bgcolor="#EDEDED"><label>
        <input type="text" chaset="UTF-8" name="details" id="details"/>
      </label></td>
    </tr>
    <tr>
      <td align="center" bgcolor="#EDEDED">ราคา</td>
      <td bgcolor="#EDEDED"><label>
        <input type="text" name="price" id="price"  required="required"/>&nbsp;&nbsp;บาท/ชิ้น
      </label></td>
    </tr>
    <tr>
      <td bgcolor="#EDEDED">&nbsp;</td>
      <td bgcolor="#EDEDED">&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#EDEDED">&nbsp;</td>
      <td bgcolor="#EDEDED"><input type="submit" name="button" id="button" value="Upload" />&nbsp;<a href="items.php">ย้อนกลับ</a></td>
      
    </tr>
    <tr>
      <td bgcolor="#EDEDED">&nbsp;</td>
      <td bgcolor="#EDEDED">&nbsp;</td>
    </tr>
  </table>

</form><br><br>


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
      echo "<tr align='center' bgcolor='#CCCCCC'><td>filename</td><td> img </td><td> details </td><td> price </td></tr>";
      while($row = mysqli_fetch_array($result)) { 
        echo "<tr>";
        echo "<td>" .$row["fileupload"] .  "</td> ";
        echo "<td>"."<img src='fileupload/".$row['fileupload']."' width='175'>"."</td>";
        echo "<td>" .$row["details"] .  "</td> ";
        echo "<td>" .$row["price"] .  "</td> ";
        echo "</tr>";
      }
      echo "</table>";
      //5. close connection
      mysqli_close($con);
      ?>
      <br/>


</body>
</html>