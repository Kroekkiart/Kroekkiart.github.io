<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ประวัติส่วนตัว - นายเกริกเกียรติ สิทธิสงค์</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet"> <!-- ใช้ฟอนต์ Poppins -->
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: linear-gradient(to right, #56ccf2, #2f80ed); /* พื้นหลังไล่สี */
            color: #ffffff; /* สีข้อความเป็นขาว */
            padding: 40px;
        }

        .container {
            max-width: 750px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
            color: #333333;
        }

        img {
            width: 180px;
            height: 180px;
            margin: 0 auto 25px auto;
            display: block;
            border-radius: 10px;
            object-fit: cover;
            border: 5px solid #56ccf2; /* ขอบรูปสีฟ้า */
        }

        h1 {
            text-align: center;
            color: #2f80ed; /* สีหัวข้อหลัก */
            font-size: 2rem;
            font-weight: 600;
            margin-bottom: 15px;
        }

        p {
            font-size: 1.1rem;
            line-height: 1.8;
            margin-bottom: 20px;
        }

        .section-title {
            font-size: 1.3rem;
            font-weight: 600;
            color: #56ccf2;
            margin-top: 30px;
            margin-bottom: 15px;
            text-transform: uppercase; /* ทำให้หัวข้อเป็นตัวพิมพ์ใหญ่ */
            border-bottom: 2px solid #56ccf2;
            padding-bottom: 5px;
        }

        ul {
            list-style-type: none; /* ลบสัญลักษณ์การจัดลิสต์ */
            padding-left: 0;
            font-size: 1.1rem;
        }

        ul li {
            padding-left: 20px;
            position: relative;
        }

        ul li::before {
            content: '•';
            color: #2f80ed; /* ใช้สีฟ้าสำหรับสัญลักษณ์ */
            position: absolute;
            left: 0;
        }

        footer {
            text-align: center;
            margin-top: 40px;
            font-size: 0.9rem;
            color: #888;
        }

        .btn {
            display: inline-block;
            background-color: #56ccf2;
            color: #fff;
            padding: 12px 25px;
            text-decoration: none;
            border-radius: 50px;
            text-align: center;
            font-size: 1.1rem;
            margin-top: 30px;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #2f80ed;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        $name = "นายเกริกเกียรติ สิทธิสงค์";
        $dob = "16 กุมภาพันธ์ 2546";
        $age = 22;
        $education = "สาขาวิทยาการจัดการคอมพิวเตอร์และเทคโนโลยีสารสนเทศ คณะวิทยาศาสตร์ มหาวิทยาลัยราชภัฏอุดรธานี";
        $project = "ระบบแจ้งซ่อมอุปกรณ์บนเว็บแอพพลิเคชัน กรณีศึกษาคณะวิทยาศาสตร์ มหาวิทยาลัยราชภัฏอุดรธานี";
        $software = [
            "โปรแกรมจัดการฐานข้อมูล MySQL",
            "Visual Studio Code",
            "HTML5, CSS, PHP",
            "Apache Web Server"
        ];
        $hardware = [
            "CPU: Intel Core i7-14700K",
            "RAM: 24 GB",
            "SSD: 512 GB"
        ];
        ?>

        <img src="http://localhost/img/k.jpg" alt="รูปโปรไฟล์">
        <h1><?php echo $name; ?></h1>
        <p><strong>วันเกิด:</strong> <?php echo $dob; ?></p>
        <p><strong>อายุ:</strong> <?php echo $age; ?> ปี</p>
        <p><strong>การศึกษา:</strong> <?php echo $education; ?></p>

        <h2 class="section-title">โครงงานปัจจุบัน</h2>
        <p><?php echo $project; ?></p>

        <h2 class="section-title">เครื่องมือที่ใช้ในการพัฒนา</h2>
        <p><strong>ซอฟต์แวร์:</strong></p>
        <ul>
            <?php foreach ($software as $item) {
                echo "<li>$item</li>";
            } ?>
        </ul>

        <p><strong>ฮาร์ดแวร์:</strong></p>
        <ul>
            <?php foreach ($hardware as $item) {
                echo "<li>$item</li>";
            } ?>
        </ul>

        <a href="mailto:your-email@example.com" class="btn">ติดต่อผ่านอีเมล</a>
    </div>

    <footer>
        &copy; 2024 นายเกริกเกียรติ สิทธิสงค์. All rights reserved.
    </footer>
</body>
</html>
