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
          
          <p class="aa">
            اختر الطالب
            <select name="" id="opti">
              <option value="0"> </option>
              <option value="1">الطالب1 </option>
              <option value="2"> الطالب2</option>
              <option value="3"> الطالب3 </option>
              <option value="3"> الطالب4</option>
              <option value="3"> الطالب5</option>
              <option value="3">الطالب6 </option>
              <option value="3">الطالب7 </option>
              <option value="3"> الطالب8</option>
              <option value="3">الطالب9</option>
              <option value="3">الطالب10</option>

            </select>
          </p>



          <form id="studentForm">
            <label for="attendance">حالة الحضور:</label>
            <select id="attendance">
                <option value="متواجد">حاضر</option>
                <option value="مستأذن">مستأذن</option>
                <option value="غائب">غائب</option>
            </select>
            
            <br />
            
            <label for="participation">حالة المشاركة:</label>
            <select id="participation">
                <option value="مشارك">مشارك</option>
                <option value="غير مشارك">غير مشارك</option>

            </select>
            
            <br />
            <label for="TT">حالة التكليف:</label>
            <select id="TT">
                <option value="تم الكتابة">تم</option>
                <option value="لم يكتب">لم يكتب</option>
            </select>
            <br />
            
            <label for="disciplinary" >الانظباط:</label>
            <input type="text" class="form-input" id="disciplinary" placeholder="أدخل مستوى الانظباط من 100">
            
            <br />
            
            <button type="submit" class="btnreport">تقييم</button>
        </form>
        
        
        </section>
<script>

  
document.getElementById('studentForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    var attendance = document.getElementById('attendance').value;
    var participation = document.getElementById('participation').value;
    var costs = document.getElementById('costs').value;
    var disciplinary = document.getElementById('disciplinary').value;
    
    // تقوم بإجراء تقييم الطالب ومعالجة البيانات هنا
    
    console.log('الحضور: ' + attendance);
    console.log('المشاركة: ' + participation);
    console.log('التكاليف: ' + TT);
    console.log('الانظباط: ' + disciplinary);
    
    // يمكنك إضافة المنطق الخاص بتقييم الطالب الخاص بك هنا
    
});
</script>


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