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
            <button class="navbar-link  active" data-nav-link>عرض التقارير العامة</button>
          </li>


          <li class="navbar-item">
            <a href="index.php"> <button class="navbar-link" data-nav-link>الصفحه الرئيسية</button></a>
          </li>
        </ul>

      </nav>





      <!--
        - #ABOUT
      -->

      <article class="about  active" data-page="التقارير">

        <header>
          <h2 class="h2 article-title">التقارير</h2>
        </header>
        <section class="blog-posts">

        


<section class="sectionreport" dir="rtl">


 
  
  <button class="btnreport"> تقرير حضورالموظفين</button>
  
  <button class="btnreport"> تقارير نهاية الفصل الدراسي الاول</button>
  <button class="btnreport"> تقارير نهاية الفصل الدراسي الثاني</button>
  <button class="btnreport"> تقارير المصروفات</button>
  <button class="btnreport"> تقارير الصندوق</button>
  <button class="btnreport"> تقارير الموارد المالية</button>
  </section>
  <br><br>

 

<form action="">
<div class="body3" dir="rtl">
  <div class="wrapper">
    <div class="invoice_wrapper">
      <div class="header">
        <div class="logo_invoice_wrap">
          <div class="logo_sec">
            <img class="img2" src="avatar-1.png" alt="code logo">
            <div class="title_wrap">
              <p class="title bold">n_school</p>
              <p class="sub_title">loction</p>
            </div>
          </div>
          <div class="invoice_sec">
            <p class="invoice bold"> تقرير الحضور</p>
            <p class="invoice_no">
              <span class="bold">من تاريخ :  </span>
              <span> fromdate</span>
            </p>
            <p class="date">
              <span class="bold">إلى تاريخ :  </span>
              <span> todate </span>
            </p>
          </div>
        </div>
        <div class="bill_total_wrap">
          <div class="bill_sec">
            <p> تقرير</p> 
                  <p class="bold name">الحضور والغياب  </p>
                <span>
                   اليوميه والاسبوعية والشهريه<br/>
                  
                </span>
          </div>
          <div class="total_wrap">
            <p>مجموع الغياب</p>
                  <p class="bold price">طالب:</p>
          </div>
        </div>
      </div>
      <div class="body2">
      
      
    <div class="main_table">
          <div class="table_header">
            <div class="row">
              <div class="col col_no">م</div>
              <div class="col col_des">الصف</div>
              <div class="col col_price">عدد الطلاب </div>
              <div class="col col_qty"> عدد الحضور</div>
              <div class="col col_total">عدد الغياب</div>
            
        </div>
          </div>
          <div class="table_body">
            <div class="row">
              <div class="col col_no">
                <p>01</p>
              </div>
              <div class="col col_des">
                <p class="bold">name_class</p>
              </div>
              <div class="col col_price">
                <p>count</p>
              </div>
              <div class="col col_qty">
                <p>count</p>
              </div>
              <div class="col col_total">
                <p>count</p>
              </div>
              
              </div>
              
            </div>
            
            
          
        </div>
        <div class="paymethod_grandtotal_wrap">
          <div class="paymethod_sec">
            <p class="bold"> techer_name</p>
            <p>last_name</p>
          </div>
        
        </div>
      </div>
      <!--<div class="footer">
        <p>نشكرك لاستخدامك تطبيق NUM</p>
        <div class="terms">
              <p class="tc bold"> معلومات عن مطور البرنامج</p>
              <p>تم تطويره بواسطة المهندس : نجيب مراد  <br> للاستفسار ولاستعلام يمكنك التواصل على الرقم +967772339262</p>
          </div>
      </div>-->
    </div>
  </div>
  </div>

</form>



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