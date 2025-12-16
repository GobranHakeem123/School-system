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
            <button class="navbar-link  active" data-nav-link>الكنترول</button>
          </li>


          <li class="navbar-item">
            <a href="index.php"> <button class="navbar-link" data-nav-link>الصفحه الرئيسية</button></a>
          </li>
        </ul>

      </nav>





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