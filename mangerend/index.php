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
               <a href="resume"> <h4 class="h4 service-item-title">اعدادات الحساب </h4></a>

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

          <ul class="service-list">

            <li class="service-item">

              <div class="service-icon-box">
                
              </div>

              <div class="service-content-box">
                <br>
                <h4 class="h4 service-item-title">تسجيل طالب جديد</h4>

              </div>

            </li>

            <li class="service-item">

              <div class="service-icon-box">
                
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">تسجيل الطلاب المنتقلين</h4>

              </div>

            </li>

            <li class="service-item">

              <div class="service-icon-box">
               
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title"> نقل الطالب من صف الى صف</h4>

              </div>

            </li>

            <li class="service-item">

              <div class="service-icon-box">
               
              </div>

              <div class="service-content-box">
                <button class="navbar-link" data-nav-link>
                <h4 class="h4 service-item-title">تعديل بيانات الطلاب </h4>
              </button>
                
              </div>

            </li>
            <li class="service-item">

              <div class="service-icon-box">
               
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title"> تعديل بيانات اولياء الامور </h4>

                
              </div>

            </li>

            <li class="service-item">

              <div class="service-icon-box">
                
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">استيراد البيانات من ملف اكسل</h4>

              </div>

            </li>

            <li class="service-item">

              <div class="service-icon-box">
                
              </div>

              <div class="service-content-box">
              <h4 class="h4 service-item-title">تقارير القبول و التسجيل  </h4>

              </div>

            </li>

          </ul>
        </section>

      </article>





      <!--
        - #PORTFOLIO
      -->

      <article class="portfolio" data-page="الادارة">

        <header>
          <h2 class="h2 article-title">الشؤون المالية و الادارية</h2>
        </header>

        <section class="projects">





          <form action="#" class="form" data-form>
  
             
  



            <style>
              .search-field {
                display: none;
                
              }
          #studentGrade{
            background-color: rgba(127, 255, 212, 0);
            color: #000;
          }
              
          
            </style>
            
           
<center>

            <button class="btnreport" onclick="showStudentSearch()">الشؤون المالية</button>
            <button class="btnreport" onclick="showTeacherSearch()">الشؤون الإدارية</button>
            <button class="btnreport" onclick="showGuardianSearch()">شؤون الموظفين</button>
            <button class="btnreport" onclick="showGuardianSearch()">شؤون الطلاب</button>
          <br>
            <div id="student" class="search-field">
              <label for="studentGrade">اختر الصف:</label>
              <select id="studentGrade" class="form-input">
                <option value="1">الصف الأول</option>
                <option value="2">الصف الثاني</option>
                <option value="3">الصف الثالث</option>
                <option value="4">الصف الرابع</option>
              </select>
              <br><br>
              <label for="studentSearchType">اختر نوع البحث:</label>
              <br><br>
              <button class="btnreport" onclick="setStudentSearchType('name')">باسم الطالب</button>
              <button class="btnreport" onclick="setStudentSearchType('number')">برقم الطالب</button>
              <button class="btnreport" onclick="setStudentSearchType('id')">بـ ID الطالب</button>
              <br><br>
              <label for="studentQuery">استعلام الطالب:</label>
              <input class="form-input" type="text" id="studentQuery">
              <br><br>
              <button class="btnreport" onclick="submitStudentQuery()">ابحث</button>
              <button class="btnreport" onclick="hideSearch()">الغاء</button>
            </div>
          
            <div id="teacher" class="search-field">
              <label for="teacherSearchType">اختر نوع البحث:</label>
              <br><br>
              <button class="btnreport" onclick="setTeacherSearchType('name')">باسم المدرس</button>
              <button class="btnreport" onclick="setTeacherSearchType('number')">برقم المدرس</button>
              <button class="btnreport" onclick="setTeacherSearchType('id')">بـ ID المدرس</button>
              <br><br>
              <label for="teacherQuery">استعلام المدرس:</label>
              <input class="form-input" type="text" id="teacherQuery">
              <br><br>
              <button class="btnreport" onclick="submitTeacherQuery()">ابحث</button>
              <button class="btnreport" onclick="hideSearch()">الغاء</button>
            </div>
          
            <div id="guardian" class="search-field">
              <label for="guardianSearchType">اختر نوع البحث:</label>
              <br><br>
              <button class="btnreport" onclick="setGuardianSearchType('name')">باسم ولي الأمر</button>
              <button class="btnreport" onclick="setGuardianSearchType('number')">برقم ولي الأمر</button>
              <button class="btnreport" onclick="setGuardianSearchType('id')">بـ ID ولي الأمر</button>
              <br><br>
              <label for="guardianQuery">استعلام ولي الأمر:</label>
              <input class="form-input" type="text" id="guardianQuery">
              <br><br>
              <button class="btnreport" onclick="submitGuardianQuery()">ابحث</button>
              <button class="btnreport" onclick="hideSearch()">الغاء</button>
              
            </div>
          
        </center>
      
        
            <script>
function hideSearch() {
                document.getElementById("student").style.display = "none";
                document.getElementById("teacher").style.display = "none";
                document.getElementById("guardian").style.display = "none";
              }
          
              function hideSearch() {
                document.getElementById("teacher").style.display = "none";
                document.getElementById("student").style.display = "none";
                document.getElementById("guardian").style.display = "none";
              }
          
             function hideSearch() {
                document.getElementById("guardian").style.display = "none";
                document.getElementById("student").style.display = "none";
                document.getElementById("teacher").style.display = "none";
              }









              function showStudentSearch() {
                document.getElementById("student").style.display = "block";
                document.getElementById("teacher").style.display = "none";
                document.getElementById("guardian").style.display = "none";
              }
          
              function showTeacherSearch() {
                document.getElementById("teacher").style.display = "block";
                document.getElementById("student").style.display = "none";
                document.getElementById("guardian").style.display = "none";
              }
          
             function showGuardianSearch() {
                document.getElementById("guardian").style.display = "block";
                document.getElementById("student").style.display = "none";
                document.getElementById("teacher").style.display = "none";
              }
          
              function setStudentSearchType(type) {
                document.getElementById("studentQuery").placeholder = "ابحث بواسطة " + type;
              }
          
              function setTeacherSearchType(type) {
                document.getElementById("teacherQuery").placeholder = "ابحث بواسطة " + type;
              }
          
              function setGuardianSearchType(type) {
                document.getElementById("guardianQuery").placeholder = "ابحث بواسطة " + type;
              }
          
              function submitStudentQuery() {
                var grade = document.getElementById("studentGrade").value;
                var searchType = document.getElementById("studentQuery").placeholder;
                var query = document.getElementById("studentQuery").value;
                
                // هنا يمكنك إضافة الكود الخاص بإرسال البيانات للخادم
                // يمكنك استخدام AJAX أو أي تقنية أخرى لإرسال البيانات
                
                console.log("Grade: " + grade);
                console.log("Search Type: " + searchType);
                console.log("Query: " + query);
              }
          
              function submitTeacherQuery() {
                var searchType = document.getElementById("teacherQuery").placeholder;
                var query = document.getElementById("teacherQuery").value;
                
                // هنا يمكنك إضافة الكود الخاص بإرسال البيانات للخادم
                // يمكنك استخدام AJAX أو أي تقنية أخرى لإرسال البيانات
                
                console.log("Search Type: " + searchType);
                console.log("Query: " + query);
              }
          
              function submitGuardianQuery() {
                var searchType = document.getElementById("guardianQuery").placeholder;
                var query = document.getElementById("guardianQuery").value;
                
                // هنا يمكنك إضافة الكود الخاص بإرسال البيانات للخادم
                // يمكنك استخدام AJAX أو أي تقنية أخرى لإرسال البيانات
                
                console.log("Search Type: " + searchType);
                console.log("Query: " + query);
              }
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

    <div id="button1-content" class="content">
        <!-- محتوى زر 1 يظهر هنا -->
        <label for="class">اختر الصف:</label>
  <select class="class">
    <option value="1">الصف الأول</option>
    <option value="2">الصف الثاني</option>
    <option value="3">الصف الثالث</option>
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
        <label for="class">اختر الصف:</label>
  <select class="class">
    <option value="1">الصف الأول</option>
    <option value="2">الصف الثاني</option>
    <option value="3">الصف الثالث</option>
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
        <select class="class">
    <option value="1">الصف الأول</option>
    <option value="2">الصف الثاني</option>
    <option value="3">الصف الثالث</option>
    <select>
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