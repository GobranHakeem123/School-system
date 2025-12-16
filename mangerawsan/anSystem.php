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





      <!--
        - #ABOUT
      -->

      <article class="about  active" data-page="الإشعارات">

        <header>
          <h2 class="h2 article-title">إداره النظام</h2>
        </header>

        <section class="about-text"  dir="rtl">


          <section class="contact-form">

            <h3 class="h3 form-title">إداره النظام </h3>





            
 
<style>.form-input{
  background-color: rgba(127, 255, 212, 0);
            color: #000;
}</style>


            <button class="btnreport" id="executeButton" onclick="toggleForm()">إضافة جدول الحصص</button>
          <!--   <button id="executeButton" onclick="exitCode()">تنفيذ الأكواد</button>-->

<form id="addSubjectForm" action="add_subject.php" method="post" style="display: none;">
    <label for="subject_name">اسم المادة:</label>
    <input class="form-input" type="text" id="subject_name" name="subject_name" required>
    <br>
    <label for="time">الوقت:</label>
    <input class="form-input" type="time" id="time" name="time" required>
    <br>
    <label for="teacher_name">اسم الاستاذ:</label>
    <input class="form-input" type="text" id="teacher_name" name="teacher_name" required>
    <br>
    <label for="day">اليوم:</label>
    <select class="form-input" id="day" name="day" required>
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
    <input class="btnreport" type="submit" value="تعديل">
</form>

<table>
    <tr>
        <th>اليوم</th>
        <th>الحصة الأولى</th>
        <th>الحصة الثانية</th>
        <th>الحصة الثالثة</th>
    </tr>
</table>
    <!-- 
    <?php/*
    // مصفوفة بأيام الأسبوع
    $days = array('السبت', 'الأحد', 'الاثنين', 'الثلاثاء', 'الأربعاء', 'الخميس');

    // اتصال بقاعدة البيانات
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "School_db";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // التحقق من اتصال قاعدة البيانات
    if ($conn->connect_error) {
        die("فشل الاتصال بقاعدة البيانات: " . $conn->connect_error);
    }

    // استعلام لاسترداد البيانات من قاعدة البيانات
    $sql = "SELECT * FROM lessons_table";
    $result = $conn->query($sql);

    // إنشاء الصفوف وتعبئة البيانات
    for ($i = 0; $i < count($days); $i++) {
        echo '<tr>';
        echo '<td>' . $days[$i] . '</td>';

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                if ($row['اليوم'] === $days[$i]) {
                    echo '<td>' . $row['الحصة_الأولى'] . '</td>';
                    echo '<td>' . $row['الحصة_الثانية'] . '</td>';
                    echo '<td>' . $row['الحصة_الثالثة'] . '</td>';
                    break;
                }
            }
        } else {
           echo '<td></td>';
            echo '<td></td>';
            echo '<td></td>';
        }

        echo '</tr>';
    }

    $conn->close();
    */?> -->

<script>
        function toggleForm() {
            var form = document.getElementById("addSubjectForm");
            if (form.style.display === "none") {
                form.style.display = "block";
            } else {
                form.style.display = "none";
            }
        }
    </script>

<!--  -->


<!--  -->
    <button class="btnreport" id="toggleCodeButton" onclick="toggleCode()"> إضافة مدرس جديد</button>

    <div id="teacherCode" style="display: none;>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // معالجة بيانات المدرس هنا
            $teacher_name = $_POST['teacher_name'];
            $teacher_position = $_POST['teacher_position'];
            $teacher_department = $_POST['teacher_department'];
            $teacher_salary = $_POST['teacher_salary'];

            // تنفيذ الخطوات اللازمة لحفظ بيانات المدرس في قاعدة البيانات

            // عرض رسالة النجاح
            echo '<p>تمت إضافة المدرس بنجاح!</p>';
        }
        ?>

        <form  action="?" method="post">
            <label for="teacher_name">اسم المدرس:</label>
            <input class="form-input" type="text" id="teacher_name" name="teacher_name" required>
            <br>
            <label for="teacher_position">المنصب:</label>
            <input class="form-input" type="text" id="teacher_position" name="teacher_position" required>
            <br>
            <label for="teacher_department">القسم:</label>
            <input class="form-input" type="text" id="teacher_department" name="teacher_department" required>
            <br>
            <label for="teacher_salary">الراتب:</label>
            <input class="form-input" type="text" id="teacher_salary" name="teacher_salary" required>
            <br>
            <input class="btnreport" type="submit" value="إضافة المدرس">
        </form>
    </div>

    <script>
        function toggleCode() {
            var codeDiv = document.getElementById("teacherCode");
            var tButton = document.getElementById("toggleCodeButton");
            if (codeDiv.style.display === "none") {
                codeDiv.style.display = "block";
                tButton.textContent = "إخفاء بيانات المدرس";
            } else {
                codeDiv.style.display = "none";
                tButton.textContent = "إظهار بيانات المدرس";
               
            }
        }
    </script>
<!--  -->

<button class="btnreport" id="toggleDataButton" onclick="toggleData()">تعديل بيانات المدرس</button>

<div id="teacherData" style="display: none;">
    <?php
    // قم باسترداد بيانات المدرس من قاعدة البيانات هنا وعرضها في النموذج

    // قم بتحديث بيانات المدرس بناءً على البيانات المرسلة من النموذج
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // معالجة بيانات المدرس هنا
        $teacher_name = $_POST['teacher_name'];
        $teacher_position = $_POST['teacher_position'];
        $teacher_department = $_POST['teacher_department'];
        $teacher_salary = $_POST['teacher_salary'];

        // قم بتحديث بيانات المدرس في قاعدة البيانات

        // عرض رسالة النجاح
        echo '<p>تم تحديث بيانات المدرس بنجاح!</p>';
    }
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="teacher_name">اسم المدرس:</label>
        <input class="form-input" type="text" id="teacher_name" name="teacher_name" required>
        <br>
        <label for="teacher_position">المنصب:</label>
        <input class="form-input" type="text" id="teacher_position" name="teacher_position" required>
        <br>
        <label for="teacher_department">القسم:</label>
        <input class="form-input" type="text" id="teacher_department" name="teacher_department" required>
        <br>
        <label for="teacher_salary">الراتب:</label>
        <input class="form-input" type="text" id="teacher_salary" name="teacher_salary" required>
        <br>
        <input  class="btnreport" type="submit" value="تحديث بيانات المدرس">
    </form>
</div>

<script>
    function toggleData() {
        var dataDiv = document.getElementById("teacherData");
        var toggleButton = document.getElementById("toggleDataButton");

        if (dataDiv.style.display === "none") {
            dataDiv.style.display = "block";
            toggleButton.textContent = "إخفاء بيانات المدرس";
        } else {
            dataDiv.style.display = "none";
            toggleButton.textContent = "إظهار بيانات المدرس";
        }
    }
</script>



<!--  -->
<button class="btnreport" id="toggleTableButton" onclick="toggleTable()">تعديل جدول الحصص</button>
<br>
<div >
    <?php
    // قم بجلب بيانات جدول الحصص من قاعدة البيانات هنا وعرضها في الجدول

    // قم بتحديث بيانات جدول الحصص بناءً على البيانات المرسلة من النموذج
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // معالجة بيانات جدول الحصص هنا
        // قم بتحديث بيانات الحصة المحددة بناءً على البيانات المرسلة من النموذج

        // عرض رسالة النجاح
        echo '<p>تم تحديث جدول الحصص بنجاح!</p>';
    }
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<br>
        <table class="table" id="scheduleTable" style="display: none;">
            <tr>
                <td class="btnreport">اليوم</td>
                <td>
                    <select class="form-input" name="day1" required>
                        <option value="">اختر اليوم</option>
                        <option value="الأحد">الأحد</option>
                        <option value="الاثنين">الاثنين</option>
                        <!-- إضافة المزيد من الخيارات اليوم هنا -->
                    </select>
                </td>
            </tr>
            <tr>
                <td class="btnreport">الحصة</td>
                <td>
                    <select class="form-input" name="lesson1" required>
                        <option value="">اختر الحصة</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <!-- إضافة المزيد من الخيارات الحصة هنا -->
                    </select>
                </td>
            </tr>
            <tr>
                <td class="btnreport">المادة</td>
                <td>
                    <select class="form-input" name="subject1" required>
                        <option value="">اختر المادة</option>
                        <option value="مادة 1">مادة 1</option>
                        <option value="مادة 2">مادة 2</option>
                        <!-- إضافة المزيد من الخيارات المادة هنا -->
                    </select>
                </td>
            </tr>
            <tr>
                <td class="btnreport">المدرس</td>
                <td>
                    <select class="form-input" name="teacher1" required>
                        <option value="">اختر المدرس</option>
                        <option value="مدرس 1">مدرس 1</option>
                        <option value="مدرس 2">مدرس 2</option>
                        <!-- إضافة المزيد من الخيارات المدرس هنا -->
                    </select>
                </td>
            </tr>
            <tr>
                <td class="btnreport">الصف</td>
                <td>
                    <select class="form-input" name="grade1" required>
                        <option value="">اختر الصف</option>
                        <option value="اول">اول</option>
                        <option value="ثاني">ثاني</option>
                        <!-- إضافة المزيد من الخيارات الصف هنا -->
                    </select>
                </td>
            </tr>
            <tr>
                <td class="btnreport">الشعبة</td>
                <td>
                    <select class="form-input" name="section1" required>
                        <option value="">اختر الشعبة</option>
                        <option value="ا">ا</option>
                        <option value="ب">ب</option>
                      

                    </select>
                </td>
            </tr>
            <tr>
                <td class="btnreport">الوقت</td>
                <td><input class="form-input" type="time" name="time1" required></td>
            </tr>

           <!--إضافة المزيد من حقول الجدول هنا -->
            <tr>
                <td colspan="2"><button class="btnreport" type="submit">حفظ التغييرات</button></td>
            </tr>
        </table>

    </form>
    </div>

<script>
    function toggleTable() {
        var scheduleTable = document.getElementById('scheduleTable');
        var toggleButton = document.getElementById('toggleTableButton');
        if (scheduleTable.style.display === 'none') {
            scheduleTable.style.display = 'block';
            toggleButton.innerHTML = 'إخفاء جدول الحصص';
        } else {
            scheduleTable.style.display = 'none';
            toggleButton.innerHTML = 'تعديل جدول الحصص';
        }
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