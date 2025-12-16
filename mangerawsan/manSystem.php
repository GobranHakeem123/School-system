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
  <title>مدرسة الرواد الحديثة</title>

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
          <h1 class="name" title="Richard hanrick"> اسم المدرس <br>  الاسم الاخير </h1>

          <p class="title">مدرسة الرواد الحديثة</p>
        </div>

        <button class="info_more-btn" data-sidebar-btn>
          <span>إظهار</span>

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
              <p class="contact-title">ID</p>

              <a href="الإيميل" class="contact-link">ID</a>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="phone-portrait-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">الهاتف</p>

              <a href="tel:+9677777777" class="contact-link">+9677777777</a>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="calendar-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">مادة</p>

              <time datetime="1982-06-23">ماده</time>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="location-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">العنوان</p>

              <address>العنوان</address>
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
            <button class="navbar-link  active" data-nav-link>إداره النظام</button>
          </li>


          <li class="navbar-item">
            <a href="index.php"> <button class="navbar-link" data-nav-link>الصفحه الرئيسية</button></a>
          </li>
        </ul>

      </nav>


      <style>
  #educational-level{
    background-color: rgba(127, 255, 212, 0);
                color: #000;
  }
</style>


      <!--
        - #ABOUT
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
    <button id="button1" class="button" onclick="showContent('button1')">إضافة مدرس</button>
    <button id="button2" class="button" onclick="showContent('button2')">إضافة المواد الدراسية</button>
    <button id="button3" class="button" onclick="showContent('button3')">إضافة المراحل الدراسية</button>
    <button id="button4" class="button" onclick="showContent('button4')">إضافة جدول الحصص اليومية</button>
    <button id="button5" class="button" onclick="showContent('button5')">زر 5</button>

    <div id="button1-content" class="content">
        
  <div id="teacherForm" >
    <h3>إضافة مدرس</h3>
    <form action="?" method="POST">
    <label for="teacher_name">اسم المدرس:</label>
            <input class="form-input" type="text" id="teacher_name" name="teacherName" required>
            <br>
            <label for="teacherPhone">رقم الهاتف:</label>
            <input class="form-input" type="tel" id="teacherPhone" name="teacherPhone" pattern="[0-9]{9}" required>
            <br>
            <label for="teacher_position">المنصب:</label>
            <input class="form-input" type="text" id="teacher_position" name="teacherPosition" required>
            <br>
            <label for="teacher_department">القسم:</label>
            <input class="form-input" type="text" id="teacher_department" name="teacherDepartment" required>
            <br>
            <label for="teacher_salary">الراتب:</label>
            <input class="form-input" type="text" id="teacher_salary" name="teacherSalary" required>
            <br>
            <input class="btnreport" type="submit" value="إضافة المدرس">
    </form>
    <button class="btnreport" onclick="goBack()">العودة</button>
  </div>
    <?php
    $teacherName = $_POST['teacherName'];
    $teacherPosition = $_POST['teacherPosition'];
    $teacherDepartment = $_POST['teacherDepartment'];
    $teacherSalary = $_POST['teacherSalary'];
    $teacherPhone = $_POST['teacherPhone'];
    
    // إدخال البيانات في جدول المدرسين
    $sql = "INSERT INTO teachers (tea_name, tea_postion, tea_dept,sale_id, phone_tea) VALUES ('$teacherName', '$teacherPosition', '$teacherDepartment', '$teacherSalary', '$teacherPhone')";
    if ($connection->query($sql) === TRUE) {
      echo "تمت إضافة المدرس بنجاح";
  } else {
      echo "حدث خطأ أثناء إضافة المدرس: " . $connection->error;
  }
    ?>
    </div>
   

    

    <div id="button2-content" class="content">
        <!-- محتوى زر 2 يظهر هنا -->
        <div id="contenta" class="conten">
    <form method="post" action="?">
      <input type="text" class="form-input" name="sub_nam" placeholder="اسم المادة">
     
      <input class="btnreport" type="submit" value="حفظ">
    </form>
    <button class="btnreport" onclick="goBack()">العودة</button>
  </div>
        <?php
        $subject_name = $_POST['sub_nam'];

// إدخال البيانات في جدول الصفوف
$sql = "INSERT INTO subjects (sub_name) VALUES ('$subject_name')";
if ($connection->query($sql) === TRUE) {
    echo "تمت إضافة المادة بنجاح";
} else {
    echo "حدث خطأ أثناء إضافة الصف: " . $connection->error;
}
     ?>
    </div>
    <div id="button3-content" class="content">
        <!-- محتوى زر 3 يظهر هنا -->
        <div id="contenta" class="conten">
    <form method="post" action="?">
      <input class="form-input" type="text"  name="class_nam" placeholder="اسم الصف">
     
      <input  class="btnreport" type="submit" value="حفظ">
    </form>
  </div>
  <?php
  // استلام البيانات المرسلة من النموذج
$class_name = $_POST['class_nam'];


// إدخال البيانات في جدول الصفوف
$sql = "INSERT INTO classes (class_name) VALUES ('$class_name')";
if ($connection->query($sql) === TRUE) {
    echo "<script>alert\"تمت إضافة الصف بنجاح\"</script>";
} else {
    echo "حدث خطأ أثناء إضافة الصف: " . $connection->error;
}
  ?>
<button class="btnreport" onclick="goBack()">العودة</button>
       
   
    </div>
    <div id="button4-content" class="content">
        <!-- محتوى زر 4 يظهر هنا -->
        <form method="POST" action="?">
  <label for="subject">اختر المادة:</label>
  <select name="subject"  id="educational-level">
    <?php
      // استعلام لاسترداد قائمة المواد من جدول المواد
      $subjectQuery = "SELECT sub_name FROM subjects";
      $subjectResult = $connection->query($subjectQuery);

      if ($subjectResult->num_rows > 0) {
          while ($row = $subjectResult->fetch_assoc()) {
              echo '<option value="' . $row["sub_name"] . '">' . $row["sub_name"] . '</option>';
          }
      } else {
          echo '<option value="">لا توجد بيانات متاحة</option>';
      }
    ?>
  </select>

  <br>

  <label for="teacher">اختر المدرس:</label>
  <select name="teacher"  id="educational-level">
    <?php
      // استعلام لاسترداد قائمة أسماء المدرسين من جدول المدرسين
      $teacherQuery = "SELECT tea_name FROM teachers";
      $teacherResult = $connection->query($teacherQuery);

      if ($teacherResult->num_rows > 0) {
          while ($row = $teacherResult->fetch_assoc()) {
              echo '<option value="' . $row["tea_name"] . '">' . $row["tea_name"] . '</option>';
          }
      } else {
          echo '<option value="">لا توجد بيانات متاحة</option>';
      }
    ?>
  </select>

    <br>
    <label for="time">الوقت:</label>
    <input class="form-input" type="time" id="time" name="time" required>
    <br>
    
    <br>
    <label for="day">اليوم:</label>
    <select class="form-input"  id="educational-level" name="day" required>
        <option value="السبت">السبت</option>
        <option value="الأحد">الأحد</option>
        <option value="الاثنين">الاثنين</option>
        <option value="الثلاثاء">الثلاثاء</option>
        <option value="الأربعاء">الأربعاء</option>
        <option value="الخميس">الخميس</option>
    </select>
    <br>
    <label for="lesson_name">اسم الحصة:</label>
    <input class="form-input" type="text" id="lesson_name" name="lesson_name" required>
    <br>
    <input class="btnreport" type="submit" value="حفــظ">
</form>

  
    <div id="button5-content" class="content">
        <!-- محتوى زر 5 يظهر هنا -->
        <p>محتوى زر 5</p>
    </div>

    <button onclick="goBack()">العودة</button>

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