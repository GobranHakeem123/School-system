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
            <button class="navbar-link  active" data-nav-link>ارسال اشعار عام</button>
          </li>


          <li class="navbar-item">
            <a href="index.php"> <button class="navbar-link" data-nav-link>الصفحه الرئيسية</button></a>
          </li>
        </ul>

      </nav>





      <!--
        - #ABOUT
      -->

      <article class="about  active" data-page="الإشعارات">

        <header>
          <h2 class="h2 article-title">الإشعارات</h2>
        </header>

        <section class="about-text"  dir="rtl">


          <section class="contact-form">

            <h3 class="h3 form-title">اشعارات عامه</h3>
  <style>
#recipients{
background-color: rgba(0, 255, 255, 0);
color: black;
}


  </style>



            <form action="#" class="form" data-form>
  
              
              <script>
                function sendNotification() {
                    var notification = document.getElementById("notification").value;
                    var recipients = document.getElementById("recipients").value;
                    
                    // قم بكتابة الكود اللازم لإرسال الإشعار هنا
                    if (notification === "") {
                        alert("يرجى كتابة الإشعار");
                    } else {
                        // قم بإرسال الإشعار للمستلم المحدد هنا
                        if (recipients === "students") {
                            alert("تم إرسال الإشعار '" + notification + "' للطلاب");
                        } else if (recipients === "teachers") {
                            alert("تم إرسال الإشعار '" + notification + "' للمدرسين");
                        } else if (recipients === "parents") {
                            alert("تم إرسال الإشعار '" + notification + "' لأولياء الأمور");
                        }else if (recipients === "all") {
                            alert("تم الارسال الى الإشعار  '" + notification + "' لكل المستخدمين");
                        }
                    }
                }
            </script>
        </head>
        <body>
          
            
            
            <textarea id="notification" rows="4" cols="50" class="form-input"  placeholder="اكتب هنا..."></textarea>
            <br><br>
            
            <label for="recipients">اختر المستلم:</label>
            <select id="recipients" class="form-input">
                <option value="students">الطلاب</option>
                <option value="teachers">المدرسين</option>
                <option value="parents">أولياء الأمور</option>
                <option value="all">الجميع </option>
            </select>
            <br><br>
            
            <button class="btnreport" onclick="sendNotification()">إرسال الإشعار</button>



               
              </form>
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