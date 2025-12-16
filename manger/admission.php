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
            <button class="navbar-link  active" data-nav-link>تسجيل طالب جديد  </button>
          </li>


          <li class="navbar-item">
            <a href="index.php"> <button class="navbar-link" data-nav-link>الصفحه الرئيسية</button></a>
          </li>
        </ul>

      </nav>





      <!--
        - #ABOUT
      -->

      <article class="about  active" data-page="القبول والتسجيل">

        <header>
          <h2 class="h2 article-title">القبول والتسجيل</h2>
        </header>

        <section class="about-text"  dir="rtl">


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
     
                <input class="form-input" type="text" id="stu_name" name="name"     placeholder="الاسم الكامل">
                
               <br>
                <input class="form-input" type="date" id="stu_birthdate" name="birthdate"    placeholder="تاريخ الميلاد">
                <br>
              <!--  
                <input class="form-input" type="text" id="address" name="address" required  placeholder="العنوان">
                <br>

-->
                <label for="educational-level">المستوى التعليمي المطلوب:</label>
                <select class="form-input"  id="educational-level" name="educational-level"  >
                  <option value="">اختر المستوى التعليمي</option>
                  <option value="الروضة">الروضة</option>
                  <option value="الابتدائية">الابتدائية</option>
                  <option value="المتوسطة">المتوسطة</option>
                  <option value="الثانوية">الثانوية</option>
                </select><br><br>
            
   
    <input type="checkbox" id="birth-certificate" name="documents" value="شهادة الميلاد"> 
    <label for="birth-certificate">شهادة الميلاد:</label>
    
    
    <input type="checkbox" id="previous-certificates" name="documents" value="شهادات الدراسة السابقة">
     <label for="previous-certificates">شهادات الدراسة السابقة:</label>
    <br>
                
                
                <input class="form-input" type="tel" id="parent-phone" name="parent-phone" required placeholder="رقم هاتف ولي الأمر">
                <br>
               
                <input class="form-input" type="tel" id="student-phone" name="student-phone" placeholder="رقم هاتف الطالب (إن وجد)">
                <br>
                
                <input class="form-input" type="text" id="payment" name="payment" placeholder="رسوم التسجيل">
                <br>
                <input class="btnreport" type="submit" name="submit" value="تسجيل">


               
              </form>

              
<?php
$name = $_POST['name'];
$birthdate = $_POST['birthdate'];
$class = $_POST['educational-level'];
if($_POST['submit'])
{
	if($name == '' &&  $birthdate == ''){
		echo "<p align=\"center\">يجب ادخال البيانات</p>";
	}
	else{
		$sql = "INSERT INTO `student`( `stu_name`,  `stu_brithdate`, `class_id`) VALUES ('$name','$birthdate' ,'$class')";
		
		if(mysqli_query($connection,$sql))
		{
			echo "<script>alert('تم ادخال البيانات')</script>";
	}
	else{
		echo "<p align=\"center\">يوجد اخطاء</p>";
	}
		
		
	}
	
	
}
?>
          </section>
  
        </section>



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