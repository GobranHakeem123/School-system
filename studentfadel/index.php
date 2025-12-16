<!DOCTYPE html>
<?php
include "connection.php";
?>
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
<script>
  
function goback(){
  window.history.back();
}
</script>
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
          <h1 class="name" title="Richard hanrick">
          <?php
          $father0 = "SELECT * FROM students";
$PAR0 = $connection->query($father0);

if($PARE0 = $PAR0-> fetch_assoc())
{
	echo  $PARE0['stu_name'];

}
?>
&nbsp;مرحبا بك يا  


          </h1>


<center>
          <a href="settings.php"><botton class="title" id="btnsetting" >إعدادات الحساب</botton></a>
          </center>
        </div>

        <button class="info_more-btn" data-sidebar-btn>
          <span>عرض الحساب </span>

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
              <p class="contact-title">الصف و الشعبة</p>

              <a class="contact-link">

              <?php
$father1 = "SELECT * FROM students";
$PAR1 = $connection->query($father1);

if($PARE1 = $PAR1-> fetch_assoc())
{
  echo "الصف ";
	echo  $PARE1['class_id'];
  echo " الشعبة ";
  echo $PARE1['ser_id'];

}


?>


              </a>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="phone-portrait-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">الهاتف</p>

              <a  class="contact-link">
                
              <?php
$father1 = "SELECT * FROM students";
$PAR1 = $connection->query($father1);

if($PARE1 = $PAR1-> fetch_assoc())
{
	echo $PARE1['phone_id'];

}


?>
              
              
              </a>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="calendar-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">رقم الطالب</p>

              <time>

              <?php
$father2 = "SELECT * FROM students";
$PAR2 = $connection->query($father2);

if($PARE2 = $PAR2-> fetch_assoc())
{
	echo $PARE2['stu_id'];

}


?>


              </time>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="location-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">الرقم المدرسي</p>

              <address>
              <?php
$father2 = "SELECT * FROM students";
$PAR2 = $connection->query($father2);

if($PARE2 = $PAR2-> fetch_assoc())
{
	echo $PARE2['stu_id'];

}


?>



              </address>
            </div>

          </li>

        </ul>

        <div class="separator"></div>

      

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
            <button class="navbar-link  active" data-nav-link>الصفحة الرئيسية</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>التقييم</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>الحضور</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>جدول النتائج</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>الملاحظات</button>
          </li>

        </ul>

      </nav>





      <!--
        - #ABOUT
      -->

      <article class="about  active" data-page="الصفحة الرئيسية">

        <header>
          <h2 class="h2 article-title">الصفحة الرئيسية</h2>
        </header>

        <section class="about-text">


        </section>

        <!--
          - service
        -->

        <section class="service">
          <h1 id="dayOfWeek"></h1>
          <br>

          <?php
// بيانات الاتصال بقاعدة البيانات
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Schools_db";


#include "connection.php";
// بيانات الاتصال بقاعدة البيانات

// إنشاء اتصال
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn,'utf8');
// التحقق من الاتصال
if ($conn->connect_error) {
    die("فشل الاتصال: " . $conn->connect_error);
}

// استعراض البيانات من جدول الجدول الزمني
$sql = "SELECT * FROM `subjects`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // عرض البيانات في جدول HTML
    echo '<table style=" direction: rtl;">';
    echo "<tr><th>الحصص</th><th>الحصص</th><th>الحصة 1</th><th>الحصة 2</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["sub_id"] . "</td></th><td>" . $row["sub_name"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "لا توجد نتائج";
}

#$conn->close();
?>

          <table>
              <th>الحصص</th>
              <th>الحصة 1</th>
              <th>الحصة 2</th>
              <th>الحصة 3</th>
              <th>الحصة 4</th>
              <th>الحصة 5</th>
              <th>الحصة 6</th>
      
            </tr>
            <tr>
              <th>المادة</th>
              <td id="subject1"></td>
              <td id="subject2"></td>
              <td id="subject3"></td>
              <td id="subject4"></td>
              <td id="subject5"></td>
              <td id="subject6"></td>

            </tr>
            <tr>
              <th>الوقت</th>
              <td id="time1"></td>
              <td id="time2"></td>
              <td id="time3"></td>
              <td id="time4"></td>
              <td id="time5"></td>
              <td id="time6"></td>

            </tr>
          </table>

          <script>
            setInterval(updateTable, 24 * 60 * 60 * 1000);

            updateTable();

            function updateTable() {
              const daysOfWeek = ['مهام يوم : الأحد', 'مهام يوم : الاثنين', 'مهام يوم : الثلاثاء', 'مهام يوم : الأربعاء', 'الخميس', 'الجمعة', 'مهام يوم : السبت'];

              const timetable = [
                { subject: 'لغة عربية', time: '8:00' },
                { subject: 'رياضيات', time: '8:40' },
                { subject: 'E', time: '9:20' },
                { subject: 'تاريخ', time: '10:20' },
                { subject: 'ثقافة وطنية ', time: '11:00' },
                { subject: 'جغرافيا', time: '11:40' }
              ];

              const currentDate = new Date();
              const currentDayOfWeek = daysOfWeek[currentDate.getDay()];

              document.getElementById('dayOfWeek').innerHTML = currentDayOfWeek;

              for (let i = 0; i < timetable.length; i++) {
                const subjectElement = document.getElementById(`subject${i + 1}`);
                const timeElement = document.getElementById(`time${i + 1}`);
                subjectElement.innerHTML = timetable[i].subject;
                timeElement.innerHTML = timetable[i].time;
              }
            }
          </script>

          <h2>واجبات اليوم</h2>
          <br>
          <table id="taskTable">
            <tr>
              <th>التاريخ</th>
              <th>المادة</th>
              <th>الواجب</th>
            </tr>
            <!-- الصفوف ستتم إضافتها وتحديثها باستخدام JavaScript -->
          </table>
          
          <script>
            // توليد تاريخ جديد
            function generateDate() {
              var currentDate = new Date();
              var date = currentDate.getDate();
              var month = currentDate.getMonth() + 1;
              var year = currentDate.getFullYear();
              return date + "/" + month + "/" + year;
            }

            // إضافة صف جديد إلى الجدول
            function addRowToTable(date, subject, homework) {
              var table = document.getElementById("taskTable");
              var row = table.insertRow(-1);
              var dateCell = row.insertCell(0);
              var subjectCell = row.insertCell(1);
              var homeworkCell = row.insertCell(2);
              dateCell.innerHTML = date;
              subjectCell.innerHTML = subject;
              homeworkCell.innerHTML = homework;
            }

            // تحديث محتويات الجدول
            function updateTable() {
              // يمكنك استبدال هذا الجزء بطريقة للحصول على محتويات الجدول من مصدر خارجي، مثل قاعدة البيانات أو ملف JSON
              var tableData = [
                { date: generateDate(), subject: "اللغة العربية", homework: "قراءة صفحات 10-20" },
                { date: generateDate(), subject: "الرياضيات", homework: "حل التمرين 3-4" },
                { date: generateDate(), subject: "العلوم", homework: "إعداد تقرير عن النباتات" }
              ];

              for (var i = 0; i < tableData.length; i++) {
                addRowToTable(tableData[i].date, tableData[i].subject, tableData[i].homework);
              }
            }

            // تحديث الجدول كل 24 ساعة
            setInterval(function () {
              var table = document.getElementById("taskTable");
              while (table.rows.length > 0) {
                table.deleteRow(1);
              }
              updateTable();
            }, 24 * 60 * 60 * 1000); // تحديث كل 24 ساعة

            // تحديث الجدول عند تحميل الصفحة
            window.onload = function () {
              updateTable();
            };
          </script>
          <br><br><br>
          <A href="7dayes.php">
            <li class="service-item" onclick="toggleArticle3()">

              <div class="service-icon-box">
                <img src="./assets/images/icon-design.svg
    " alt="design icon" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">جدول الحصص الأسبوعي</h4>

                <p class="service-item-text">
                  فلتلقي نظرة على جدولك!
                </p>

              </div>

            </li>
          </A>
          <br><br>
          <A href="second.php">
            <li class="service-item" onclick="toggleArticle3()">

              <div class="service-icon-box">
                <img src="./assets/images/icon-design.svg
    " alt="design icon" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">جميع الواجبات</h4>

                <p class="service-item-text">
                  فلتتأكد من جميع واجباتك!
                </p>

              </div>

            </li>
          </A>
        <!--
            <li class="service-item" >

              <div class="service-icon-box">
                <img src="./assets/images/icon-photo.svg" alt="camera icon" width="40">
              </div>
--
              <div class="service-content-box">
                <h4 class="h4 service-item-title"> الكتب الدراسية</h4>

                <p class="service-item-text">
                  تصفح كتبك بكل سهولة
                </p>


          </ul>
    </div>
    </section>
          -->
    <!--
          - testimonials modal
        -->

    <div class="modal-container" data-modal-container>

      <div class="overlay" data-overlay></div>

      <section class="testimonials-modal">

        <button data-modal-close-btn>
        </button>

      </section>

    </div>


    <!--
          - clients
        -->
    </section>

    </article>





    <!--
        - #RESUME
      -->

    <article class="resume" data-page="التقييم">

      <header>
        <h2 class="h2 article-title"> <span>تقييمك</span> </h2>
      </header>

      <section class="timeline">

        <div class="title-wrapper">
          <div class="icon-box">
            <ion-icon name="book-outline"></ion-icon>
          </div>

        </div>


        
        <li class="skills-item">

          <div class="title-wrapper">
            <h5 class="h5">الواجبات </h5>
            <data value="70">70%</data>
          </div>

          <div class="skill-progress-bg">
            <div class="skill-progress-fill" style="width: 70%;"></div>
          </div>

        </li>

        <li class="skills-item">

          <div class="title-wrapper">
            <h5 class="h5"> الحضور</h5>
            <data value="90">90%</data>
          </div>

          <div class="skill-progress-bg">
            <div class="skill-progress-fill" style="width: 90%;"></div>
          </div>

        </li>

        <li class="skills-item">

          <div class="title-wrapper">
            <h5 class="h5"> الإختبارات</h5>
            <data value="50">50%</data>
          </div>

          <div class="skill-progress-bg">
            <div class="skill-progress-fill" style="width: 50%;"></div>
          </div>

        </li>


        <li class="skills-item">

          <div class="title-wrapper">
            <h5 class="h5">التقييم الاسبوعي</h5>
            <data value="50">50%</data>
          </div>

          <div class="skill-progress-bg">
            <div class="skill-progress-fill" style="width: 50%;"></div>
          </div>

        </li>


        <li class="skills-item">

          <div class="title-wrapper">
            <h5 class="h5">التقييم الشهري</h5>
            <data value="50">50%</data>
          </div>

          <div class="skill-progress-bg">
            <div class="skill-progress-fill" style="width: 50%;"></div>
          </div>

        </li>


        <li class="skills-item">

          <div class="title-wrapper">
            <h5 class="h5">التقييم السنوي</h5>
            <data value="5">5%</data>
          </div>

          <div class="skill-progress-bg">
            <div class="skill-progress-fill" style="width: 5%;"></div>
          </div>

        </li>

        </ul>

      </section>

    </article>





    <!--
        - #PORTFOLIO
      -->

    <article class="portfolio" data-page="الحضور">




      <header>
        <h2 class="h2 article-title">الحضور</h2>
      </header>



      <section class="projects">
        



          <button data-select>

          </button>

        
    
        <h2 id="tableTitle"></h2>
        <h1>جدول الحضور والغياب</h1><br>
       
<!-- 
       <table dir="rtl">
       <tr>
            <th>المادة</th>
            <th>الحضور</th>
          </tr>
          <tr>
            <td>لغة عربية</td>
            <td><input type="radio" id="attendance1"></td>
          </tr>
          <tr>
            <td>قرآن</td>
            <td><input type="radio" id="attendance2"></td>
          </tr>
          <tr>
            <td>جغرافيا</td>
            <td><input type="radio" id="attendance3"></td>
          </tr>
          <tr>
            <td>تربية وطنية</td>
            <td><input type="radio" id="attendance4"></td>
          </tr>
          <tr>
            <td>رياضيات</td>
            <td><input type="radio" id="attendance5"></td>
          </tr>
          <tr>
            <td>كيمياء</td>
            <td><input type="radio" id="attendance6"></td>
          </tr>
        </table>
         -->
        <form action="#">
  
        <?php
     
  include 'connection.php';
  // استعلام SQL لاسترداد بيانات الجدول
  $sql = "SELECT * FROM student_attendance";
  $result = MYSQLI_query($connection,$sql);



  $sql1 = "SELECT * FROM subjects";
  $result1 = MYSQLI_query($connection,$sql1);




  echo "<table>";
  echo "<tr>";
  echo "<th>اليوم</th>";
  echo "<th>التاريخ</th>";
  
  while ($row1 = mysqli_fetch_assoc($result1)) {
      echo "<th>" . $row1['sub_name'] . "</th>";
  }
  
  echo "</tr>";
  
  while ($row = mysqli_fetch_assoc($result)) {
      echo "<tr>";
    #  echo "<td>" . $row1['sub_name'] . "</td>";
    echo "<td>" . $row['day'] . "</td>";
      echo "<td>" . $row['date'] . "</td>";
      echo "<td>" . $row['result_atten'] . "</td>";
      echo "</tr>";
  }
  
  echo "</table>";
  
  // إغلاق اتصال قاعدة البيانات
  mysqli_close($connection);
  ?> 
 
  
      </form>
  
     
        <br><br>
        <script>
          // تحديث عنوان الجدول باليوم الحالي
          updateTableTitle();
          
          function updateTableTitle() {
            var currentDate = new Date();
            var options = { weekday: 'long' };
            var currentDay = currentDate.toLocaleDateString('ar-EG', options);
            
            var tableTitle = document.getElementById("tableTitle");
            tableTitle.textContent = currentDay;
          }
        </script>
     
      
        
      
        <h1>اجمالي عدد الحظور والغياب</h1>
        <script>
            function calculateAttendance(subject) {
                var totalAttendance = 0;
                var totalAbsence = 0;
                
                // قم بحساب إجمالي الحضور والغياب للمادة المحددة هنا
                // يمكنك استبدال الكود التالي ببياناتك الفعلية
                
                if (subject === "مادة 1") {
                    totalAttendance = 20;
                    totalAbsence ="-";
                } else if (subject === "مادة 2") {
                    totalAttendance = 18;
                    totalAbsence = 2;
                } else if (subject === "مادة 3") {
                    totalAttendance = 15;
                    totalAbsence = 5;
                }
                // وهكذا لباقي المواد
                
                document.getElementById("attendance").innerHTML = totalAttendance;
                document.getElementById("absence").innerHTML = totalAbsence;
            }
        </script>
   

        
        <select onchange="calculateAttendance(this.value)">
            <option selected disabled>اختر مادة</option>
            <option value="مادة 1"> قران</option>
            <option value="مادة 2">علوم</option>
            <option value="مادة 3">رياضيات</option>
            <!-- وهكذا لباقي المواد -->
        </select>
        
        <h2>إجمالي الحضور: <span id="attendance"></span></h2>
        <h2>إجمالي الغياب: <span id="absence"></span></h2>
 







      </section>

    </article>







    <!--
        - #BLOG
    -->

    <article class="blog" data-page="جدول النتائج">

      <header>
        <h2 class="h2 article-title">جدول النتائج</h2>
      </header>

      <section class="blog-posts">
        
            <title>نتائج الطالب الفصلية</title>
            <style>
        
                /* ترتيب الجدول */
                th:nth-child(1),
                td:nth-child(1) {
                    order: 2;
                }
        
                th:nth-child(2),
                td:nth-child(2) {
                    order: 3;
                }
        
                th:nth-child(3),
                td:nth-child(3) {
                    order: 4;
                }
        
                th:nth-child(4),
                td:nth-child(4) {
                    order: 5;
                }
        
                th:nth-child(5),
                td:nth-child(5) {
                    order: 1;
                }
        
                th:nth-child(6),
                td:nth-child(6) {
                    order: 6;
                }
            </style>
      
        <body>
            <h1>نتائج الطالب الفصلية</h1>
            <table>
                <tr>
                    <th>المعدل</th>
                    <th>الرياضيات</th>
                    <th>العلوم</th>
                    <th>اللغة العربية</th>
                    <th>النتيجة الكلية</th>
                    <th>المادة</th>
                </tr>
                <tr>
                    <td id="average"></td>
                    <td id="mathGrade"></td>
                    <td id="scienceGrade"></td>
                    <td id="arabicGrade"></td>
                    <td id="totalGrade"></td>
                    <th>الدرجة</th>
                </tr>
            </table>
        
            <script>
                // تعريف المتغيرات وتعيين قيمها
                var mathGrade = 90;
                var scienceGrade = 85;
                var arabicGrade = 95;
        
                // قم بتعيين الدرجات في الجدول
                document.getElementById("mathGrade").innerHTML = mathGrade;
                document.getElementById("scienceGrade").innerHTML = scienceGrade;
                document.getElementById("arabicGrade").innerHTML = arabicGrade;
        
                // حساب النتيجة الكلية
                var totalGrade = mathGrade + scienceGrade + arabicGrade;
        
                // حساب المعدل
                var numberOfSubjects = 3; // عدد المواد
                var average = totalGrade / numberOfSubjects;
        
                // قم بتعيين النتيجة الكلية والمعدل في الجدول
                document.getElementById("totalGrade").innerHTML = totalGrade;
                document.getElementById("average").innerHTML = average.toFixed(2); // لجعل المعدل يحتوي على رقمين بعد الفاصلة
            </script>
        </body>
        </html>


      </section>

    </article>




    <!--
        - #CONTACT
      -->

    <article class="contact" data-page="الملاحظات">

      <header>
        <h2 class="h2 article-title">استفسارات</h2>
      </header>

      <section class="contact-form">

        <h3 class="h3 form-title"> التواصل </h3>

        <form action="#" class="form" data-form>
          <textarea name="message" class="form-input" placeholder="اكتب رسالتك" required data-form-input></textarea>

          <button class="form-btn" type="submit" disabled data-form-btn>
            <ion-icon name="paper-plane"></ion-icon>
            <span>ارسال </span>
          </button>

        </form>

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
