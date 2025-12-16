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
            <button class="navbar-link  active" data-nav-link>الاستعلامات  </button>
          </li>


          <li class="navbar-item">
            <a href="index.php"> <button class="navbar-link" data-nav-link>الصفحه الرئيسية</button></a>
          </li>
        </ul>

      </nav>





      <!--
        - #ABOUT
      -->

      <article class="about  active" data-page="استعلام عن...">

        <header>
          <h2 class="h2 article-title">استعلام عن...</h2>
        </header>

        <section class="about-text"  dir="rtl">


          <section class="contact-form">

            <h3 class="h3 form-title">بحث</h3>
  
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

                <button class="btnreport" onclick="showStudentSearch()">استعلام الطالب</button>
                <button class="btnreport" onclick="showTeacherSearch()">استعلام المدرس</button>
                <button class="btnreport" onclick="showGuardianSearch()">استعلام ولي الأمر</button>
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