<?php
include "connection.php";
mysqli_set_charset($connection,'utf8');
?>
<!DOCTYPE html>
<html lang="ar">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>vCard - Personal Portfolio</title>

  <!--
    - favicon
  -->
  <link rel="shortcut icon" href="./assets/images/logo.ico" type="image/x-icon">

  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>

<body>

  <!--
    - #MAIN
  -->

  <main>

    <!--
      - #SIDEBAR
    -->

    <aside class="sidebar" data-sidebar>

      <div class="sidebar-info">

        <figure class="avatar-box">
          <img src="./assets/images/my-avatar.png" alt="Richard hanrick" width="80">
        </figure>

        <div class="info-content">
          <h1 class="name" title="Richard hanrick"> مدارس   الرواد</h1>

         
        </div>

        <button class="info_more-btn" data-sidebar-btn>
          <span>Show Contacts</span>

          <ion-icon name="chevron-down"></ion-icon>
        </button>

      </div>

      <div class="sidebar-info_more">

        <div class="separator"></div>

        <ul class="contacts-list">

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="mail-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Email</p>

              <a href="ahmedalmesbahi550@gmail.com" class="contact-link">ahmedalmesbahi550@gmail.com</a>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="phone-portrait-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Phone</p>

              <a href="tel:+967776294103" class="contact-link">+967776294103</a>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="calendar-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Birthday</p>

              <time datetime="1982-06-23">may 17, 2002</time>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="location-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Location</p>

              <address>YEMEN,sana'a</address>
            </div>

          </li>

        </ul>

        <div class="separator"></div>

        <ul class="social-list">

          <li class="social-item">
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li class="social-item">
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li class="social-item">
            <a href="#" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

        </ul>

      </div>

    </aside>





    <!--
      - #main-content
    -->

    <div class="main-content">

      <!--
        - #NAVBAR
      -->

      <nav class="navbar">

        <ul class="navbar-list">

          <li class="navbar-item">
            <button class="navbar-link  active" data-nav-link>الرئيسية</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>التسجيل</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>الادارة</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>الكنترول</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>الاعدادات</button>
          </li>

        </ul>

      </nav>





      <!--
        - #ABOUT
      -->

      <article class="about  active" data-page="الرئيسية">

        <header>
          <h2 class="h2 article-title">الصفحة الرئيسية</h2>
        </header>

        
        <!--
          - service
        -->

        <section class="service">

          <h3 class="h3 service-title"> الصفحه الرئيسية</h3>

          <ul class="service-list">

           <a href="enquiry.php">
             <li class="service-item">

              <div class="service-icon-box">
                <img src="./assets/images/icon-design.svg
                " alt="design icon" width="40">
              </div>

              <div class="service-content-box">
                <br>
                <h4 class="h4 service-item-title">الاستعلامات</h4>

              </div>

            </li>
          </a>
          <a href="admission.php">
            <li class="service-item">

             <div class="service-icon-box">
               <img src="./assets/images/icon-design.svg
               " alt="design icon" width="40">
             </div>

             <div class="service-content-box">
               <br>
               <h4 class="h4 service-item-title">القبول والتسجيل </h4>

             </div>

           </li>
         </a>
          <a href="control.php">
            <li class="service-item">

              <div class="service-icon-box">
                <img src="./assets/images/icon-app.svg" alt="mobile app icon" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title"> الكنترول</h4>

              </div>

            </li>
          </a>
          <a href="notices.php">
            <li class="service-item">

              <div class="service-icon-box">
                <img src="./assets/images/icon-design.svg
                " alt="design icon" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">نشر الإشعارات</h4>

                
              </div>

            </li>
          </a>
            <a href="manSystem.php"><li class="service-item">

              <div class="service-icon-box">
                <img src="./assets/images/icon-design.svg
                " alt="design icon" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title"> إدارة النظام</h4>

                
              </div>

            </li>
            </a>
<a href="backup.php">
            <li class="service-item">

              <div class="service-icon-box">
                <img src="./assets/images/icon-dev.svg" alt="Web development icon" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">نسخ احتياطي واستعادة</h4>

              </div>

            </li>
          </a>
            <li class="service-item">

              <div class="service-icon-box">
                <img src="./assets/images/icon-app.svg" alt="mobile app icon" width="40">
              </div>

              <div class="service-content-box">
               <a href="settings.php"> <h4 class="h4 service-item-title">اعدادات الحساب </h4></a>

              </div>

            </li>

           <a href="reports.php"> 
            <li class="service-item">

              <div class="service-icon-box">
                <img src="./assets/images/icon-photo.svg" alt="camera icon" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">التقارير</h4>

                
              </div>

            </li>
            </a>
          </ul>

        </section>


        <!--
          - testimonials
        -->

        <section class="testimonials">

          <h3 class="h3 testimonials-title">Testimonials</h3>

          <ul class="testimonials-list has-scrollbar">

            <li class="testimonials-item">
              <div class="content-card" data-testimonials-item>

                <figure class="testimonials-avatar-box">
                  <img src="./assets/images/avatar-1.png" alt="Daniel lewis" width="60" data-testimonials-avatar>
                </figure>

                <h4 class="h4 testimonials-item-title" data-testimonials-title>Daniel lewis</h4>

                <div class="testimonials-text" data-testimonials-text>
                  <p>
                    Richard was hired to create a corporate identity. We were very pleased with the work done. She has a
                    lot of experience
                    and is very concerned about the needs of client. Lorem ipsum dolor sit amet, ullamcous cididt
                    consectetur adipiscing
                    elit, seds do et eiusmod tempor incididunt ut laborels dolore magnarels alia.
                  </p>
                </div>

              </div>
            </li>

            <li class="testimonials-item">
              <div class="content-card" data-testimonials-item>

                <figure class="testimonials-avatar-box">
                  <img src="./assets/images/avatar-2.png" alt="Jessica miller" width="60" data-testimonials-avatar>
                </figure>

                <h4 class="h4 testimonials-item-title" data-testimonials-title>Jessica miller</h4>

                <div class="testimonials-text" data-testimonials-text>
                  <p>
                    Richard was hired to create a corporate identity. We were very pleased with the work done. She has a
                    lot of experience
                    and is very concerned about the needs of client. Lorem ipsum dolor sit amet, ullamcous cididt
                    consectetur adipiscing
                    elit, seds do et eiusmod tempor incididunt ut laborels dolore magnarels alia.
                  </p>
                </div>

              </div>
            </li>

            <li class="testimonials-item">
              <div class="content-card" data-testimonials-item>

                <figure class="testimonials-avatar-box">
                  <img src="./assets/images/avatar-3.png" alt="Emily evans" width="60" data-testimonials-avatar>
                </figure>

                <h4 class="h4 testimonials-item-title" data-testimonials-title>Emily evans</h4>

                <div class="testimonials-text" data-testimonials-text>
                  <p>
                    Richard was hired to create a corporate identity. We were very pleased with the work done. She has a
                    lot of experience
                    and is very concerned about the needs of client. Lorem ipsum dolor sit amet, ullamcous cididt
                    consectetur adipiscing
                    elit, seds do et eiusmod tempor incididunt ut laborels dolore magnarels alia.
                  </p>
                </div>

              </div>
            </li>

            <li class="testimonials-item">
              <div class="content-card" data-testimonials-item>

                <figure class="testimonials-avatar-box">
                  <img src="./assets/images/avatar-4.png" alt="Henry william" width="60" data-testimonials-avatar>
                </figure>

                <h4 class="h4 testimonials-item-title" data-testimonials-title>Henry william</h4>

                <div class="testimonials-text" data-testimonials-text>
                  <p>
                    Richard was hired to create a corporate identity. We were very pleased with the work done. She has a
                    lot of experience
                    and is very concerned about the needs of client. Lorem ipsum dolor sit amet, ullamcous cididt
                    consectetur adipiscing
                    elit, seds do et eiusmod tempor incididunt ut laborels dolore magnarels alia.
                  </p>
                </div>

              </div>
            </li>

          </ul>

        </section>


        <!--
          - testimonials modal
        -->

        <div class="modal-container" data-modal-container>

          <div class="overlay" data-overlay></div>

          <section class="testimonials-modal">

            <button class="modal-close-btn" data-modal-close-btn>
              <ion-icon name="close-outline"></ion-icon>
            </button>

            <div class="modal-img-wrapper">
              <figure class="modal-avatar-box">
                <img src="./assets/images/avatar-1.png" alt="Daniel lewis" width="80" data-modal-img>
              </figure>

              <img src="./assets/images/icon-quote.svg" alt="quote icon">
            </div>

            <div class="modal-content">

              <h4 class="h3 modal-title" data-modal-title>Daniel lewis</h4>

              <time datetime="2021-06-14">14 June, 2021</time>

              <div data-modal-text>
                <p>
                  Richard was hired to create a corporate identity. We were very pleased with the work done. She has a
                  lot of experience
                  and is very concerned about the needs of client. Lorem ipsum dolor sit amet, ullamcous cididt
                  consectetur adipiscing
                  elit, seds do et eiusmod tempor incididunt ut laborels dolore magnarels alia.
                </p>
              </div>

            </div>

          </section>

        </div>


        <!--
          - clients
        -->

        
      </article>





      <!--
        - #RESUME
      -->

      <article class="resume" data-page="التسجيل">

        <header>
          <h2 class="h2 article-title">القبول والتسجيل</h2>
        </header>

        <section class="timeline">
    
        

        </section>

      </article>





      <!--
        - #PORTFOLIO
      -->

      <article class="portfolio" data-page="الادارة">

        <header>
          <h2 class="h2 article-title">الشؤون المالية و الادارية</h2>
        </header>

        <section class="projects" dir="rtl">





        <style>
        .section {
            display: none;
        }
        section.active {
            display: block;
        }
        .nav-buttons {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
            
        }
        .nav-buttons button {
            margin: 0 10px;
            padding: 10px 20px;
            font-size: 16px;
            background-color: #f2f2f2;
            border: none;
            cursor: pointer;
            display: inline-block;
            background: var(--bg-gradient-jet);
  position: relative;
  padding: 5px 15px;
  align-items: center;
  font-size: 17px;
  font-weight: 600;
  text-decoration: none;
  cursor: pointer;
  border: 1px solid rgb(40, 144, 241);
  border-radius: 25px;
  outline: none;
  overflow: hidden;
  color: rgb(40, 144, 241);
  transition: color 0.3s 0.1s ease-out;
  text-align: center;


  display: inline-block;
  margin-right: 10px;
  text-decoration: none;
        }
        .nav-buttons button.active {
            background-color: #333;
            color: #fff;
        }
        .content {
    display: none;
}

.content.active {
    display: block;
}
/*
.nav-btn.active {
    // تنسيق الزر النشط 
}
*/
#button,.btnback {
    
    background: var(--bg-gradient-jet);
    position: relative;
    padding: 5px 15px;
    align-items: center;
    font-size: 17px;
    font-weight: 600;
    text-decoration: none;
    cursor: pointer;
    border: 1px solid rgb(40, 144, 241);
    border-radius: 25px;
    outline: none;
    overflow: hidden;
    color: rgb(40, 144, 241);
    transition: color 0.3s 0.1s ease-out;
    text-align: center;
  
  
    display: inline-block;
    margin-right: 10px;
    text-decoration: none;
  }
  
  #button span {
    margin: 5px;
  }
  
  #button::before {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    margin: auto;
    content: '';
    border-radius: 50%;
    display: block;
    width: 20em;
    height: 20em;
    left: -5em;
    text-align: center;
    transition: box-shadow 0.5s ease-out;
    z-index: -1;
  
  }
  
  #button:hover {
    color: #ffffff;
    border: 2px solid rgb(9, 105, 195);
  }
  
  #button:hover::before {
    box-shadow: inset 0 0 0 10em rgb(40, 144, 241);
  }
          .content {
              display: none;
              margin: 10px;
          }
          .month{ display: block;}
          #semester1,#semester2{ display: inline-block;
              width: 150px;
              height: 40px;
              margin: 10px;
              background-color:#fff;
              text-align: center;
              line-height: 40px;
              cursor: pointer;}
    </style>

    <header>
        
        <div class="nav-buttons">
            <button class="nav-link active" data-target="#students">شؤون الطلاب</button>
            <button class="nav-link" data-target="#staff">شؤون الموظفين</button>
            <button class="nav-link" data-target="#finance">الشؤون المالية</button>
        </div>
    </header>

    <main>
        <section id="students"  class="section">
            <!-- محتوى شؤون الطلاب هنا -->
            <header>
    <center>
    <nav>
    <nav>
    <button class="nav-btn active" id="button"  data-content="studata">اضافة طالب جديد</button>
        <button class="nav-btn"id="button" data-content="studelete"> حذف طالب</button>
        <button class="nav-btn" id="button" data-content="exportfile">استيراد ملف اكسل</button>
        <button class="nav-btn" id="button" data-content="stumodify">تعديل بيانات الطلاب</button>
    </nav>
    </nav>
    </center>
</header>
    <section id="studata" class="content">
    <section class="contact-form">

<h3 class="h3 form-title">تسجيل طالب جديد</h3>

<style>
#educational-level{
background-color: rgba(127, 255, 212, 0);
    color: #000;
}
</style>


<form action="?" class="form"  method="POST" >

  

 
   <!--   <input class="form-input" type="text" id="student-id" name="student-id" required  placeholder="رقم الطالب">-->
   <br>

<input class="form-input" type="text" id="stu_name" name="sname"     placeholder="الاسم الكامل">

<br>
<input class="form-input" type="date" id="stu_birthdate" name="birthdate"    placeholder="تاريخ الميلاد">
<br>
<input class="form-input" type="tel" id="student-phone" name="stu_phone" placeholder="رقم هاتف الطالب (إن وجد)">
<br>


<?php
// استعلام لاسترداد جميع الصفوف من جدول classes
$query = "SELECT class_name FROM classes";

// استدعاء الوظيفة المسؤولة عن تنفيذ الاستعلام واسترجاع النتائج
$result = mysqli_query($connection, $query);

// التحقق من وجود نتائج
if (mysqli_num_rows($result) > 0) {
// إنشاء قائمة HTML المنسدلة
echo'<label for="educational-level"><strong>الصــــــف    :</strong></label>';
echo '<select class="form-input"  id="educational-level" >';

// عرض أسماء الصفوف فقط
while ($row = mysqli_fetch_assoc($result)) {
echo '<option>' . $row['class_name'] . '</option>';
}

echo '</select>';
} else {
echo 'لا توجد صفوف متاحة حاليًا.';
}

// إغلاق الاتصال بقاعدة البيانات

?>


<input type="checkbox" id="birth-certificate" name="documents" value="شهادة الميلاد"> 
<label for="birth-certificate">شهادة الميلاد:</label>


<input type="checkbox" id="previous-certificates" name="documents" value="شهادات الدراسة السابقة">
<label for="previous-certificates">شهادات الدراسة السابقة:</label>
<br>
<hr><hr>
<br>   

<input class="form-input" type="text" id="nam" name="parnam" required placeholder=" اسم ولي الأمر">
<br>

<input class="form-input" type="tel" id="par_phone" name="par_phone" placeholder="رقم هاتف ولي الأمر">
<br>

<input class="form-input" type="text" id="address" name="address" required  placeholder="العنوان">
<br>
<input class="form-input" type="text" id="payment" name="pay" placeholder="رسوم التسجيل">
<br>
<input class="btnreport" type="submit" name="submit" value="تسجيل">



</form>


<?php
$stu_name = $_POST['sname'];
$sphone = $_POST['stu_phone'];
$sql = "INSERT INTO `students`( `stu_name`,`phone_id`) VALUES ('$stu_name','$sphone' )";
if ($connection->query($sql) === TRUE) {
echo "تمت إضافة الطالب بنجاح";
} else {
echo "حدث خطأ أثناء إضافة الطالب: " . $connection->error;
}



$pname = $_POST['parnam'];
$parphone = $_POST['par_phone'];
$address =$_POST['address'];

// إدخال البيانات في جدول الصفوف
$sql = "INSERT INTO `guardians`( `par_name`,  `phone_par`,`address`) VALUES ('$pname','$parphone','$address' )";
if ($connection->query($sql) === TRUE) {
echo "تمت إضافة الاب بنجاح";
} else {
echo "حدث خطأ أثناء إضافة الاب: " . $connection->error;
}
$amount = $_POST['pay'];
// إدخال البيانات في جدول الصفوف
$sql = "INSERT INTO `tuition_fees`( `count_mony`) VALUES ('$amount')";
if ($connection->query($sql) === TRUE) {
echo "تمت إضافة الدفع بنجاح";
} else {
echo "حدث خطأ أثناء إضافة الدفع: " . $connection->error;
}

?>
</section>

</section>


         
    </section>
    <section id="studelete" class="content">
    
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="student_name">اسم الطالب:</label>
        <input type="text" id="student_name" class="form-input" name="student_name" required>
        <br><br>
        <input type="submit" class="btnreport" value="حذف الطالب">
    </form>
    <?php
// افتراض أنه تم توصيل قاعدة البيانات والحصول على اتصال بنجاح

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // استلام قيمة اسم الطالب المرسلة من النموذج
    $studentName = $_POST["student_name"];
    
    // تنفيذ استعلام SQL لحذف السجل المطابق لاسم الطالب
    $sql = "DELETE FROM students WHERE stu_name = '$studentName'";
    
    if (mysqli_query($connection, $sql)) {
        echo "تم حذف الطالب بنجاح.";
    } else {
        echo "حدث خطأ أثناء حذف الطالب: " . mysqli_error($connection);
    }
}
?>
    </section>
    <section id="exportfile" class="content">
         
         <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="excelFile" accept=".xlsx, .xls" required>
        <input type="submit" value="تحميل الملف">
        </form>
        <?php
        if ($connection->connect_error) {
    die("فشل الاتصال بقاعدة البيانات: " . $connection->connect_error);
}

// التحقق من وجود ملف محدد للتحميل
if ($_FILES["excelFile"]["error"] == UPLOAD_ERR_OK) {
    $tmp_name = $_FILES["excelFile"]["tmp_name"];
    $name = basename($_FILES["excelFile"]["name"]);

    // استيراد الملف إلى قاعدة البيانات
    $sql = "LOAD DATA INFILE '$tmp_name' INTO TABLE students
            FIELDS TERMINATED BY ',' ENCLOSED BY '\"'
            LINES TERMINATED BY '\r\n'
            IGNORE 1 ROWS";
    if ($connection->query($sql) === true) {
        echo "تم استيراد الملف بنجاح.";
    } else {
        echo "حدث خطأ أثناء استيراد الملف: " . $connection->error;
    }
} else {
    echo "حدث خطأ أثناء تحميل الملف.";
}
?>
  
    </section>
    <section id="stumodify" class="content">
    <form method="POST">
        <label for="student_name">اسم الطالب: </label>
        <input type="text" class="form-input"  name="student_name" required>
        <input type="submit" id="button" value="بحث">
    </form>

    <?php
    
        // استعلام عن بيانات الطالب استنادًا إلى الاسم المدخل
        $student_name = $_POST['student_name'];
    $sql = "SELECT * FROM students WHERE stu_name = '$student_name'";
        $result = $connection->query($sql);
        if ($result->num_rows > 0) {
          $student_data = $result->fetch_assoc();

    echo '<h2>تعديل بيانات الطالب</h2>';
            echo '<form method="POST">';
            foreach ($student_data as $key => $value) {
                echo '<label for="' . $key . '">' . $key . ': </label>';
                echo '<input type="text"class="form-input" name="' . $key . '" value="' . $value . '">';
                echo '<br>';
            }
            echo '<input id="button" type="submit" value="حفظ التعديلات">';
            echo '</form>';
          }else {
            echo 'لا يوجد بيانات للطالب المحدد';
        }
      ?>
    </section>

        </section>

        <section id="staff" class="section">
            <!-- محتوى شؤون الموظفين هنا -->
      
            <header>
    <center>
    <nav>
    <nav>
    <button class="nav-btn active" id="button"  data-content="home">اضافة موظف جديد</button>
        <button class="nav-btn"id="button" data-content="employees">بيانات الموظفين</button>
        <button class="nav-btn" id="button" data-content="salaries">الرواتب</button>
        <button class="nav-btn" id="button" data-content="leaves">الإجازات</button>
    </nav>
    </nav>
    </center>
</header>
<main>
    <section id="home" class="content active" dir="rtl">
        <!-- محتوى اضافة موظف جديد  -->
        <div id="employeesForm" >
         <form action="?" method="POST">
            <label for="emp_name">اسم الموظف:</label>
            <input class="form-input" type="text" id="emp_name" name="empName" required>
            <br>
            <label for="emp_job">الوظيفة:</label>
            <input class="form-input" type="text" id="teacher_position" name="emp_job" required>
            <br>
            <label for="empPhone">رقم الهاتف:</label>
            <input class="form-input" type="tel" id="empPhone" name="empPhone" pattern="[0-9]{9}" required>
            <br>
            <label for="emp_Salary">الراتب:</label>
            <input class="form-input" type="text" id="emp_salary" name="emp_Salary" required>
            <br>
            <input class="btnreport" type="submit" value="إضافة الموظف">
          </form>
        </div>
        <?php
    $employeeName = $_POST['empName'];
    $employeeJob = $_POST['emp_job'];
    $employeePhone = $_POST['empPhone'];
    $employeeSalary = $_POST['emp_Salary'];
   
    
    // إدخال البيانات في جدول الموظفين
    $sql = "INSERT INTO employees (staff_name, staff_job,staff_phone,staff_sale) VALUES ('$employeeName', '$employeeJob', '$employeePhone', '$employeeSalary')";
    if ($connection->query($sql) === TRUE) {
      echo "تمت إضافة الموظف بنجاح";
  } else {
      echo "حدث خطأ أثناء إضافة الموظف: " . $connection->error;
  }
    ?>
        <p>محتوى الصفحة1</p>
        
    </section>
    <section id="employees" class="content">
         <!--محتوى بيانات الموظفين -->
         <?php
    // الاتصال بقاعدة البيانات
   
    if (!$connection) {
        die('فشل الاتصال بقاعدة البيانات: ' . mysqli_connect_error());
    }

    // استعلام SQL لاسترجاع بيانات المدرسين
    $query = "SELECT * FROM employees";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die('خطأ في استعلام قاعدة البيانات: ' . mysqli_error($connection));
    }

    // عرض البيانات في جدول
    if (mysqli_num_rows($result) > 0) {
        echo '<table border="1" style="display : block;">
                <tr>
                    <th>الرقم</th>
                    <th>الاسم</th>
                    <th> الوظيفة</th>
                    <th>الهاتف</th>
                    <th> الراتب</th>
                </tr>';

        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>
                    <td>' . $row['staff_id'] . '</td>
                    <td>' . $row['staff_name'] . '</td>
                    <td>' . $row['staff_job'] . '</td>
                    <td>' . $row['staff_phone'] . '</td>
                    <td>' . $row['staff_sale'] . '</td>
                </tr>';
        }

        echo '</table>';
    } else {
        echo 'لا توجد بيانات متاحة.';
    }

    // إغلاق اتصال قاعدة البيانات
   // mysqli_close($connection);
    ?>
        <p>محتوى الصفحة 2</p>
    </section>
    <section id="salaries" class="content">
         <!--محتوى الرواتب -->
        <p>محتوى الصفحة 3</p>
    </section>
    <section id="leaves" class="content">
       <!-- محتوى الإجازات -->
       
    </section>
</main>
        </section>
        <section id="finance" class="section">
            <!-- محتوى الشؤون المالية هنا -->
          
        </section>
        </section>
    </main>

   
    <script>
        const navLinks = document.querySelectorAll('.nav-link');
        const sections = document.querySelectorAll('.section');

        navLinks.forEach(link => {
            link.addEventListener('click', (event) => {
                const targetId = event.currentTarget.dataset.target;
                const targetSection = document.querySelector(targetId);

                sections.forEach(section => {
                    section.classList.remove('active');
                });

                targetSection.classList.add('active');

                navLinks.forEach(link => {
                    link.classList.remove('active');
                });

                event.currentTarget.classList.add('active');
            });
        });
        const navBtns = document.querySelectorAll('.nav-btn');
const contentSections = document.querySelectorAll('.content');

navBtns.forEach(btn => {
    btn.addEventListener('click', () => {
        // إزالة الفئة النشطة من جميع الأزرار والأقسام
        navBtns.forEach(btn => btn.classList.remove('active'));
        contentSections.forEach(section => section.classList.remove('active'));

        // إضافة الفئة النشطة للزر المضغوط وقسم المحتوى المرتبط به
        const targetContent = document.getElementById(btn.dataset.content);
        btn.classList.add('active');
        targetContent.classList.add('active');
    });
});
    </script>


























<!-- 

          <ul class="filter-list">

            <li class="filter-item">
              <button data-filter-btn>الشؤون المالية</button>
            </li>

            <li class="filter-item">
              <button data-filter-btn>شؤون الطلاب</button>
            </li>

            <li class="filter-item">
              <button data-filter-btn>شؤون الموظفين</button>
            </li>

          </ul>
 -->
          

            
<!-- 
            <ul class="select-list">

              

              <li class="select-item">
                <button data-select-item>الشؤون المالية</button>
              </li>

              <li class="select-item">
                <button data-select-item>شؤون الطلاب</button>
              </li>

              <li class="select-item">
                <button data-select-item>شؤون الموظفين</button>
              </li>

            </ul>

          </div>

          <ul class="project-list">

            <li class="project-item  active" data-filter-item data-category="شؤون الموظفين">
             

            <li class="project-item  active" data-filter-item data-category="شؤون الطلاب">
              <ul class="service-list">

                <li class="service-item">
    
                  <div class="service-icon-box">
                    
                  </div>
    
                  <div class="service-content-box">
                    <br>
                    <h4 class="h4 service-item-title">سجل الدرجات الفصلية  </h4>
    
                  </div>
    
                </li>
    
                <li class="service-item">
    
                  <div class="service-icon-box">
                    
                  </div>
    
                  <div class="service-content-box">
                    <h4 class="h4 service-item-title">سجل الدرجات الشهرية  </h4>
    
                  </div>
    
                </li> <ul class="service-list">

                  <li class="service-item">
      
                    <div class="service-icon-box">
                      
                    </div>
      
                    <div class="service-content-box">
                      <br>
                      <h4 class="h4 service-item-title">سجل الدرجات الفصلية  </h4>
      
                    </div>
      
                  </li>
      
                  <li class="service-item">
      
                    <div class="service-icon-box">
                      
                    </div>
      
                    <div class="service-content-box">
                      <h4 class="h4 service-item-title">سجل الدرجات الشهرية  </h4>
      
                    </div>
      
                  </li>
         </ul>

            <li class="project-item  active" data-filter-item data-category="الشؤون المالية">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/project-7.png" alt="summary" loading="lazy">
                </figure>

                <h3 class="project-title">Summary</h3>

                <p class="project-category">Web development</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="الشؤون المالية">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/project-8.jpg" alt="task manager" loading="lazy">
                </figure>

                <h3 class="project-title">Task Manager</h3>

                <p class="project-category">Applications</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="شؤون الموظفين">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/project-9.png" alt="arrival" loading="lazy">
                </figure>

                <h3 class="project-title">Arrival</h3>

                <p class="project-category">Web development</p>

              </a>
            </li>

          </ul>
 -->
        </section>

      </article>





      <!--
        - #BLOG
      -->
      <article class="about  active" data-page="الكنترول">

        <header>
          <h2 class="h2 article-title">الكنترول</h2>
        </header>

        <section class="about-text"  dir="rtl">


          <section class="contact-form">

          <style>
      /*  .button {
            display: inline-block;
            width: 150px;
            height: 40px;
            margin: 10px;
            background-color:#fff;
            text-align: center;
            line-height: 40px;
            cursor: pointer;
        }
        */
.button,.btnback {
  
  background: var(--bg-gradient-jet);
  position: relative;
  padding: 5px 15px;
  align-items: center;
  font-size: 17px;
  font-weight: 600;
  text-decoration: none;
  cursor: pointer;
  border: 1px solid rgb(40, 144, 241);
  border-radius: 25px;
  outline: none;
  overflow: hidden;
  color: rgb(40, 144, 241);
  transition: color 0.3s 0.1s ease-out;
  text-align: center;


  display: inline-block;
  margin-right: 10px;
  text-decoration: none;
}

.button span {
  margin: 5px;
}

.button::before {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  margin: auto;
  content: '';
  border-radius: 50%;
  display: block;
  width: 20em;
  height: 20em;
  left: -5em;
  text-align: center;
  transition: box-shadow 0.5s ease-out;
  z-index: -1;

}

.button:hover {
  color: #ffffff;
  border: 2px solid rgb(9, 105, 195);
}

.button:hover::before {
  box-shadow: inset 0 0 0 10em rgb(40, 144, 241);
}
        .content {
            display: none;
            margin: 10px;
        }
        .month{ display: block;}
        #semester1,#semester2{ display: inline-block;
            width: 150px;
            height: 40px;
            margin: 10px;
            background-color:#fff;
            text-align: center;
            line-height: 40px;
            cursor: pointer;}
    </style>
    <script>
        function showContent(buttonId) {
            var buttons = document.getElementsByClassName('button');
            var content = document.getElementsByClassName('content');
            
            for (var i = 0; i < buttons.length; i++) {
                buttons[i].style.display = 'none';
            }
            
            for (var j = 0; j < content.length; j++) {
                content[j].style.display = 'none';
            }
            
            var button = document.getElementById(buttonId);
            var selectedContent = document.getElementById(buttonId + '-content');
            
            button.style.display = 'none';
            selectedContent.style.display = 'block';
        }
        
        function goBack() {
            var buttons = document.getElementsByClassName('button');
            var content = document.getElementsByClassName('content');
            
            for (var i = 0; i < buttons.length; i++) {
                buttons[i].style.display = 'inline-block';
            }
            
            for (var j = 0; j < content.length; j++) {
                content[j].style.display = 'none';
            }
        }
    </script>
</head>
<body>
    <button id="button1"  class="button" onclick="showContent('button1')">سجل الدرجات الشهرية</button>
    <button id="button2" class="button" onclick="showContent('button2')"> سجل الدرجات الفصلية</button>
    <button id="button3" class="button" onclick="showContent('button3')">سجل الدرجات السنوية</button>
    <button id="button4" class="button" onclick="showContent('button4')"> حالة الطالب النهائية </button>
    <button id="button5" class="button" onclick="showContent('button5')"> تقاريرحالة الطالب النهائية</button>
    <style>
  #educational-level{
    background-color: rgba(127, 255, 212, 0);
                color: #000;
  }
</style>
    <div id="button1-content" class="content">
        <!-- محتوى زر 1 يظهر هنا -->
        <label for="educational-level">الصف  :</label>
                <select class="form-input"  id="educational-level" name="educational_level"  >
                  <option value="">اختر الصف : </option>
                  <option value="اول">أول ابتدائي</option>
                  <option value="ثاني">ثاني ابتدائي</option>
                  <option value="ثالث">ثالث ابتدائي</option>
                  <option value="رابع">رابع</option>
                </select>

 <table class="month">
  <tr>
    <th>اسم الطالب</th>
    <th>القرآن الكريم</th>
    <th>الاسلامية</th>
    <th>اللغة العربية </th>
    <th> العلوم</th>
  </tr>
  <tr>
    <td>صف 1، عمود 1</td>
    <td>صف 1، عمود 2</td>
    <td>صف 1، عمود 3</td>
    <td>صف 1، عمود 4</td>
    <td>صف 1، عمود 5</td>
  </tr>
  <tr>
    <td>صف 2، عمود 1</td>
    <td>صف 2، عمود 2</td>
    <td>صف 2، عمود 3</td>
    <td>صف 2، عمود 4</td>
    <td>صف 2، عمود 5</td>
  </tr>
</table>
<button class="btnback" onclick="goBack()">العودة</button>
    </div>
    <div id="button2-content" class="content">
        <!-- محتوى زر 2 يظهر هنا -->
        <label for="educational-level">الصف  :</label>
                <select class="form-input"  id="educational-level" name="educational_level"  >
                  <option value="">اختر الصف : </option>
                  <option value="اول">أول ابتدائي</option>
                  <option value="ثاني">ثاني ابتدائي</option>
                  <option value="ثالث">ثالث ابتدائي</option>
                  <option value="رابع">رابع</option>
                </select>

  <button id="semester1" class="btnreport">الفصل الدراسي الأول</button>
  <button id="semester2" class="btnreport">الفصل الدراسي الثاني</button>
  
  <table id="student-data-table">
        <table class="month">
  <tr>
    <th>اسم الطالب</th>
    <th> الشهر 1</th>
    <th>الشهر 2</th>
    <th>الشهر 3</th>
    <th>النتيجة النهائية</th>
  </tr>
  <tr>
    <td>صف 1، عمود 1</td>
    <td>صف 1، عمود 2</td>
    <td>صف 1، عمود 3</td>
    <td>صف 1، عمود 4</td>
    <td>صف 1، عمود 5</td>
  </tr>
  <tr>
    <td>صف 2، عمود 1</td>
    <td>صف 2، عمود 2</td>
    <td>صف 2، عمود 3</td>
    <td>صف 2، عمود 4</td>
    <td>صف 2، عمود 5</td>
  </tr>
</table>
<button class="btnback" onclick="goBack()">العودة</button>
    </div>
    <div id="button3-content" class="content">
        <!-- محتوى زر 3 يظهر هنا -->
        <label for="educational-level">الصف  :</label>
                <select class="form-input"  id="educational-level" name="educational_level"  >
                  <option value="">اختر الصف : </option>
                  <option value="اول">أول ابتدائي</option>
                  <option value="ثاني">ثاني ابتدائي</option>
                  <option value="ثالث">ثالث ابتدائي</option>
                  <option value="رابع">رابع</option>
                </select>
        <table class="month">
  <tr>
    <th>اسم الطالب</th>
    <th>نتيجة الفصل الاول</th>
    <th> نتيجة الفصل الثاني</th>
    <th>النتيجة النهائية</th>
  
  </tr>
  <tr>
    <td>صف 1، عمود 1</td>
    <td>صف 1، عمود 2</td>
    <td>صف 1، عمود 3</td>
    <td>صف 1، عمود 4</td>
    
  </tr>
  <tr>
    <td>صف 2، عمود 1</td>
    <td>صف 2، عمود 2</td>
    <td>صف 2، عمود 3</td>
    <td>صف 2، عمود 4</td>
    
  </tr>
</table>
<button class="btnback" onclick="goBack()">العودة</button>
    </div>
    <div id="button4-content" class="content">
        <!-- محتوى زر 4 يظهر هنا -->
        <label for="educational-level">الصف  :</label>
                <select class="form-input"  id="educational-level" name="educational_level"  >
                  <option value="">اختر الصف : </option>
                  <option value="اول">أول ابتدائي</option>
                  <option value="ثاني">ثاني ابتدائي</option>
                  <option value="ثالث">ثالث ابتدائي</option>
                  <option value="رابع">رابع</option>
                </select>
        <table class="month">
  <tr>
  <th>اسم الطالب</th>
    <th> العام الدراسي</th>
    <th>النتيجة النهائية</th>
  </tr>
  <tr>
    <td>صف 1، عمود 1</td>
    <td>صف 1، عمود 2</td>
    <td>صف 1، عمود 3</td>
   
  </tr>
  <tr>
    <td>صف 2، عمود 1</td>
    <td>صف 2، عمود 2</td>
    <td>صف 2، عمود 3</td>
    
  </tr>
</table>

<button class="btnback" onclick="goBack()">العودة</button>
    </div>
    <div id="button5-content" class="content">
        <!-- محتوى زر 5 يظهر هنا -->
        <label for="educational-level">الصف  :</label>
                <select class="form-input"  id="educational-level" name="educational_level"  >
                  <option value="">اختر الصف : </option>
                  <option value="اول">أول ابتدائي</option>
                  <option value="ثاني">ثاني ابتدائي</option>
                  <option value="ثالث">ثالث ابتدائي</option>
                  <option value="رابع">رابع</option>
                </select>
        <table class="month">
  <tr>
  <th>اسم الطالب</th>
    <th> العام الدراسي</th>
    <th>النتيجة النهائية</th>
  </tr>
  <tr>
    <td>صف 1، عمود 1</td>
    <td>صف 1، عمود 2</td>
    <td>صف 1، عمود 3</td>
   
  </tr>
  <tr>
    <td>صف 2، عمود 1</td>
    <td>صف 2، عمود 2</td>
    <td>صف 2، عمود 3</td>
    
  </tr>
</table>

    
              
          
        <button  class="btnback" onclick="goBack()">العودة</button>

      </div>

          </section>
  
        </section>




      <!--
        - #CONTACT
      -->

      <article class="contact" data-page="الاعدادات">

        <header>
          <h2 class="h2 article-title">الاعدادات</h2>
        </header>

       

        <section class="contact-form">

          <ul class="service-list">

            <li class="service-item">

              <div class="service-icon-box">
                
              </div>

              <div class="service-content-box">
                <br>
                <h4 class="h4 service-item-title">اعدادات النظام    </h4>

              </div>

            </li>

            <li class="service-item">

              <div class="service-icon-box">
                
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">اعدادات الحساب    </h4>

              </div>

            </li>
            </ul>

        

        </section>

      </article>

    </div>

  </main>






  <!--
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>