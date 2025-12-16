<?php
include("connection.php");

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
  <style>
.btns{
  color: #fff;
  background-color: #854305;
  margin: auto;
  border-radius: 15px;
  width: 100%;
  text-align: center;
  padding: 10px 10px 5px 5px;
}
.social-link{
  color: #fff;
}
  </style>

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
   
        <button class="info_more-btn" data-sidebar-btn>
          <span>عرض باقي البيانات</span>

          <ion-icon name="chevron-down"></ion-icon>
        </button>

     
        <figure class="avatar-box">
          <img src="./assets/images/my-avatar.png" alt="Richard hanrick" width="80">
        </figure>



          <h1 class="name" title="Richard hanrick">  <?php
$father = "SELECT * FROM guardians";
$PAR = $connection->query($father);

if($PARE = $PAR-> fetch_assoc())
{
	echo  $PARE['par_name'];

}
?> <br></h1>
          
          <select id="classes" class="input_filed" onchange="showTable()">
            <option value="" selected>اختر اسم الابن</option>
            <option value="class1">الابن الاول</option>
            <option value="class2">الابن الثاني</option>
            
          </select>
          
         <!-- <p class="title"></p> -->
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

              <a href="tel:+967776294103" class="contact-link"> <?php
$father1 = "SELECT * FROM guardians";
$PAR1 = $connection->query($father1);

if($PARE1 = $PAR1-> fetch_assoc())
{
	echo $PARE1['phone_par'];

}


?></a>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="location-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Location</p>

              <address><?php
$father2 = "SELECT * FROM guardians";
$PAR2 = $connection->query($father2);

if($PARE2 = $PAR2-> fetch_assoc())
{
	echo $PARE2['address'];

}


?></address>
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

    <div class="main-content">

<!--
  - #NAVBAR
-->

<nav class="navbar">

  <ul class="navbar-list">

    <li class="navbar-item">
      <button class="navbar-link  active" data-nav-link>الاعدادات</button>
    </li>

    <li class="navbar-item">
      <button class="navbar-link"><a href="index.php" class="social-link">الصفحة الرئيسية</a></button>
    </li>
   
        </ul>

      </nav>

    <article class="about  active" data-page="دفتر المتابعة">

<header>
  <h2 class="h2 article-title">الاعدادات</h2>
</header>
<br><br>
<section class="testimonials">
<button class="btns" ><a href="tcpass.php" class="social-link" >تغير كلمة السر</a></button>
<br>
<br>

<button class="btns"></button>
<br>
<br>

<button class="btns"></button>


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
