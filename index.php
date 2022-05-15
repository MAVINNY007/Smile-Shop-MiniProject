<?php 
    session_start();

    if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }

    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header('location: login.php');
    }
    
?>

<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" href="style.css">
    <title>Smile_Shop</title>
    <link rel="stylesheet" href="style.css">
</head>
<body><br>
    <section style="background-color: #000000;">
        <img src="images/smile-s-logo-1.png" alt="image">
    <div class="popo">
                    <a style="color: #fff;" href="index.php"> - Home</a>
                    <a style="color: #fff;" href="items.php"> - สินค้า - </a>
                    <a style="color: #fff;" href="credits.php">Credits - </a>
    </div><br>
    </section>
    <section style="background-color: #ffffff;" class="content">
        <!-- Contents -->
        
        <div>
            <p>********************************************************************************</p>
            <img src="images/smile-s-logo-2.png" style="width: 40%; text-align: center;border: 5px solid rgb(0, 0, 0);border-radius: 25px;">
            <h1>* Smile Shop *</h1>
            <h1>1) -ร้านนี้คือร้านอะไร</h1>
            <h2>เป็นขายเสื้อผ้ามือสอง แนว vintage style</h2>
            <h1>2) -ร้านนี้เกิดขึ้นได้อย่างไร</h1>
            <h2>เกิดจากความชอบของตัวเอง ชอบซื้อเสื้อเล่น เเละด้วยช่วงโควิดซึ่งต้องมีการเรียนออนไลน์อยู่ที่บ้าน ทำงานอยู่ที่บ้าน จึงเกิดไอเดียอยากขายเสื้อผ้ามือสอง อยากลองทำในสิ่งที่ตัวเองชอบเเละหารายได้เล็กๆน้อยๆให้กับสิ่งที่ตัวเองชอบ จากนั้นลงมือทำจนมีร้านเป็นของตัวเองจนถึงทุกวันนี้</h2>
            <h1>3) - ร้านนี้ขายอะไร</h1>
            <h2>ร้านนี้เป็นร้านขายเสื้อมือสอง เสื้อยืดวินเทจ เป็นเสื้อหลากหลายเเนว อย่างเช่นเสื้อ การ์ตูน,ภาพยนต์,วงดนตรี เป็นงานปีเก่าๆ ยุค 90’s-2000+</h2>
            <p>********************************************************************************</p>
        </div>

                <!-- เช็คการเข้าสู้ระบบ -->            
                <div class="homecontent">
                    <!--  notification message -->
                    <?php if (isset($_SESSION['success'])) : ?>
                        <div class="success">
                            <h3>
                                <?php 
                                    echo $_SESSION['success'];
                                    unset($_SESSION['success']);
                                ?>
                            </h3>
                        </div>
                    <?php endif ?>
                
                    <!-- logged in user information -->
                    <?php if (isset($_SESSION['username'])) : ?>
                        <p style="background-color: #fff;">Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
                        <p><a href="index.php?logout='1'" style="color: red;">Logout</a></p>
                        <h4>สามรถออกจากระบบด้วยปุ่ม Logout ด้านบน</h4>
                    <?php endif ?>
                    
                </div>

        </div>

    </section>

</body>
</html>