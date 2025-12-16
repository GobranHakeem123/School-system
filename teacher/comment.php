
<?php
 include "connection.php";

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

    
    <?php
    include "header.php";
    
    ?>



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
            <button class="navbar-link  active" data-nav-link>إداره الفصول والطلاب</button>
          </li>


          <li class="navbar-item">
            <a href="index.php"> <button class="navbar-link" data-nav-link>الصفحه الرئيسية</button></a>
          </li>
        </ul>

      </nav>
    




      <!--
        - #ABOUT
      -->
      

      <article class="about  active" data-page="إداره الفصول والطلاب">

        <header>
          <h2 class="h2 article-title">إداره الفصول والطلاب</h2>
        </header>

        <section class="about-text"  dir="rtl">


          <section class="contact-form">

            <h3 class="h3 form-title">الملاحضات</h3>
  
            <form action="#" class="form" data-form>
  
              <div class="input-wrapper">
             
                <input type="text" name="fullname" class="form-input" placeholder="اسم الطالب " required data-form-input>
              
  
                <input type="password" name="email" class="form-input" placeholder="الصف " required data-form-input>
              </div>
             
              <textarea name="message" class="form-input" placeholder="اكتب الملاحظة" required data-form-input></textarea>
  
              <button class="form-btn" type="submit" disabled data-form-btn>
                <ion-icon name="paper-plane"></ion-icon>
                <span>ارسال</span>
              </button>
  
            </form>
  </article>
  </div>
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