<?php
include "connection.php";
session_start();
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


<?php

    if(isset( $_SESSION['status'])){
      echo "<h4>".$_SESSION['status']."</h4>";
      unset( $_SESSION['status']);
     
    }

?>


  <!--
    - #MAIN
  -->

  <main>

    <!--
      - #SIDEBAR
  -->
  <style>
    
.custom{
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
  height: 40px;

  display: inline-block;
  
  text-decoration: none;
  z-index: 1;
}

.custom span {
  margin: 10px;
}

.custom::before {
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

.custom:hover {
  color: #ffffff;
  border: 2px solid rgb(9, 105, 195);
}

.custom:hover::before {
  box-shadow: inset 0 0 0 10em rgb(40, 144, 241);
}
.custom input[type="file"]{
  width: 100%;
  height: 100%;
  opacity: 0;
}

   </style>
     <aside class="sidebar" data-sidebar>

<div class="sidebar-info">

<figure class="avatar-box">
<div class="image-container" id="image-preview">
<img src="get_image.php" alt="الصورة التلقائية" width="80">
</div>
</figure>
<form action="upload.php" method="post" enctype="multipart/form-data">

<div class="custom">
    اختر الصورة
        <input type="file" name="image" accept="image/*" onchange="previewImage(event)">
        </div>
        <input type="submit"  class="btnreport" value="حفظ">
    </form>

<div class="info-content">
<h1 class="name" title="Richard hanrick">

<?php
        $father = "SELECT * FROM teachers";
$PAR = $connection->query($father);

if($PARE = $PAR-> fetch_assoc())
{
echo  $PARE['tea_name'];

}
?>
<br>
</h1>

<a href="settings.php"><botton class="title" >إعدادات الحساب</botton></a>
</div>

<button class="info_more-btn" data-sidebar-btn>
<span>إظهار</span>

<ion-icon name="chevron-down"></ion-icon>
</button>

</div>

<div class="sidebar-info_more">

<div class="separator"></div><br>

<ul class="contacts-list">

<li class="contact-item">

  <div class="icon-box">
    <ion-icon name="mail-outline"></ion-icon>
  </div>

  <div class="contact-info">
    <p class="contact-title">ID</p>

    <a href="الإيميل" class="contact-link">
    
    <?php
       $father = "SELECT * FROM teachers";
$PAR = $connection->query($father);

if($PARE = $PAR-> fetch_assoc())
{
echo  $PARE['tea_id'];

}
?>
   </a>
  </div>

</li>
<div class="separator"></div>
<li class="contact-item">

  <div class="icon-box">
    <ion-icon name="phone-portrait-outline"></ion-icon>
  </div>

  <div class="contact-info">
    <p class="contact-title">الهاتف</p>

    <a href="tel:+9677777777" class="contact-link">
   
    <?php
       $father = "SELECT * FROM teachers";
$PAR = $connection->query($father);

if($PARE = $PAR-> fetch_assoc())
{
echo  $PARE['phone_tea'];

}
?>
    </a>
  </div>

</li>
<div class="separator"></div>
<li class="contact-item">

  <div class="icon-box">
    <ion-icon name="calendar-outline"></ion-icon>
  </div>

  <div class="contact-info">
    <p class="contact-title">مادة</p>

    <time datetime="1982-06-23">
   
    <?php 
       $father = "SELECT * FROM subjects where sub_id=1";
$PAR = $connection->query($father);

if($PARE = $PAR-> fetch_assoc())
{
echo  $PARE['sub_name'];

}
?>
    </time>
  </div>

</li>
<div class="separator"></div>
</ul>


<!-- 
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
 -->


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
            <button class="navbar-link  active" data-nav-link>إداره الفصول والطلاب</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>الحصص</button>
          </li>

          <!-- <li class="navbar-item">
            <button class="navbar-link" data-nav-link>الحضور</button>
          </li>
 -->
          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>التقارير</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>التواصل</button>
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

        <section class="about-text">
            

 <?php

// التحقق من إرسال النموذج
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['class'] = $_POST['class'];
    $_SESSION['section'] = $_POST['section'];
    $_SESSION['subject'] = $_POST['subject'];
}
?>

 <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <p class="aa">
        اختر الصف
        <select name="class" id="opti">
        <option value=""></option>
            <option value="1">أول</option>
            <option value="2">ثاني</option>
            <option value="ثالث">ثالث</option>
            <option value="رابع">رابع</option>
            <option value="خامس">خامس</option>
            <option value="سادس">سادس</option>
            <option value="السابع">السابع</option>
            <option value="الثامن">الثامن</option>
            <option value="التاسع">التاسع</option>
            <option value="اول ثانوي">اول ثانوي</option>
            <option value="ثاني ثانوي">ثاني ثانوي</option>
            <option value="ثالث ثانوي">ثالث ثانوي</option>
        </select>
    </p>

    <p class="aa">
        اختر الشعبة
        <select name="section" id="opti">
        <option value=""></option>
            <option value="1">أ</option>
            <option value="2">ب</option>
            <option value="ج">جـ</option>
        </select>
    </p>

    
        <p class="aa">
            اختر المادة
            <select name="subject" id="opti">
            <option value=""></option>
                <option value="قران">قران</option>
                <option value="اسلامية">اسلامية</option>
                <option value="عربي">عربي</option>
                <option value="رياضيات">رياضيات</option>
                <option value="علوم">علوم</option>
                <option value="اجتماعيات">اجتماعيات</option>
                <option value="تاريخ">تاريخ</option>
                <option value="جغرافيا">جغرافيا</option>
                <option value="وطنية">وطنية</option>
                <option value="كيمياء">كيمياء</option>
                <option value="احياء">احياء</option>
                <option value="فيزياء">فيزياء</option>
                <option value="English">English</option>
            </select>
        </p>
        
        <input class="btnreport" type="submit" value="اختيار">
    
</form>

<?php
    // عرض القيم المخزنة في الجلسة إذا كانت متاحة
    if (isset($_SESSION['class']) && isset($_SESSION['section']) && isset($_SESSION['subject'])) {
        echo "تم اختيار الصف: " . $_SESSION['class'] . "، الشعبة: " . $_SESSION['section'] . "، المادة: " . $_SESSION['subject'];
    }
    ?>
        </section>

       

        <!--
          - service
        -->

        <section class="service">

          <h3 class="h3 service-title"></h3>

          <ul class="service-list">

            <a href="prepartion.php">
              <li class="service-item">

                <div class="service-icon-box">
                  <img src="./assets/images/icon-design.svg
                " alt="design icon" width="40">
                </div>

                <div class="service-content-box">
                  <h4 class="h4 service-item-title">تحضير الطلاب</h4>

                  <p class="service-item-text">
                    حدد حضور الطلاب بكل سهوله
                  </p>
                </div>

              </li>
            </a>
            <a href="homework.php">
              <li class="service-item">

                <div class="service-icon-box">
                  <img src="./assets/images/icon-dev.svg" alt="Web development icon" width="40">
                </div>

                <div class="service-content-box">
                  <h4 class="h4 service-item-title">الواجبات المنزلية</h4>

                  <p class="service-item-text">
                    قم بإرسال واجبات الدروس
                  </p>
                </div>

              </li>
            </a>

            <a href="comment.php">
              <li class="service-item">

                <div class="service-icon-box">
                  <img src="./assets/images/icon-app.svg" alt="mobile app icon" width="40">
                </div>

                <div class="service-content-box">
                  <h4 class="h4 service-item-title">الملاحضات</h4>

                  <p class="service-item-text">
                    اكتب ملاحضاتك للطلاب
                  </p>
                </div>

              </li>
            </a>
            <a href="evaluation.php">
              <li class="service-item">

                <div class="service-icon-box">
                  <img src="./assets/images/icon-photo.svg" alt="camera icon" width="40">
                </div>

                <div class="service-content-box">
                  <h4 class="h4 service-item-title">تقييم الطلاب</h4>

                  <p class="service-item-text">
                    قم بتقييم كل طالب لتحديد الطالب الأفضل .
                  </p>
                </div>
              </li>
            </a>
            <a href="tests.php">
              <li class="service-item">

                <div class="service-icon-box">
                  <img src="./assets/images/icon-photo.svg" alt="camera icon" width="40">
                </div>

                <div class="service-content-box">
                  <h4 class="h4 service-item-title"> الإختبارات</h4>

                  <p class="service-item-text">
                    جدول الإختبارات
                  </p>
                </div>

              </li>
            </a>
            <a href="plan.php">
              <li class="service-item">

                <div class="service-icon-box">
                  <img src="./assets/images/icon-photo.svg" alt="camera icon" width="40">
                </div>

                <div class="service-content-box">
                  <h4 class="h4 service-item-title"> الخطة الدراسية</h4>

                  <p class="service-item-text">
                    الخطة الدراسية لهذا العام
                  </p>
                </div>

              </li>
            </a>


          </ul>

        </section>


        <!--
          - testimonials
        -->

        <section class="testimonials">

          <h3 class="h3 testimonials-title">إعلانات</h3>

          <ul class="testimonials-list has-scrollbar">

            <li class="testimonials-item">
              <div class="content-card" data-testimonials-item>

                <figure class="testimonials-avatar-box">
                  <img src="./assets/images/avatar-1.png" alt="Daniel lewis" width="60" data-testimonials-avatar>
                </figure>

                <h4 class="h4 testimonials-item-title" data-testimonials-title> عنوان الإعلان</h4>

                <div class="testimonials-text" data-testimonials-text>
                  <p>نص الإعلان</p>
                </div>

              </div>
            </li>

            <li class="testimonials-item">
              <div class="content-card" data-testimonials-item>

                <figure class="testimonials-avatar-box">
                  <img src="./assets/images/avatar-2.png" alt="Jessica miller" width="60" data-testimonials-avatar>
                </figure>

                <h4 class="h4 testimonials-item-title" data-testimonials-title>عنوان الإعلان </h4>

                <div class="testimonials-text" data-testimonials-text>
                  <p>نص الإعلان </p>
                </div>

              </div>
            </li>

            <li class="testimonials-item">
              <div class="content-card" data-testimonials-item>

                <figure class="testimonials-avatar-box">
                  <img src="./assets/images/avatar-3.png" alt="Emily evans" width="60" data-testimonials-avatar>
                </figure>

                <h4 class="h4 testimonials-item-title" data-testimonials-title> عنوان الإعلان</h4>

                <div class="testimonials-text" data-testimonials-text>
                  <p>نص الإعلان </p>
                </div>

              </div>
            </li>

            <li class="testimonials-item">
              <div class="content-card" data-testimonials-item>

                <figure class="testimonials-avatar-box">
                  <img src="./assets/images/avatar-4.png" alt="Henry william" width="60" data-testimonials-avatar>
                </figure>

                <h4 class="h4 testimonials-item-title" data-testimonials-title>عنوان الإعلان </h4>

                <div class="testimonials-text" data-testimonials-text>
                  <p>نص الإعلان </p>
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

              <h4 class="h3 modal-title" data-modal-title> عنوان الإعلان</h4>

              <time datetime="2021-06-14"> mmmmmmmmm</time>

              <div data-modal-text>
                <p>نص الإعلان </p>
              </div>

            </div>

          </section>

        </div>


        <!--
          - clients
        --

        <section class="clients">
          <!--
        
        </section>
      -->
      </article>





      <!--
        - #RESUME
      -->

      <article class="resume" data-page="الحصص">

        <header>
          <h2 class="h2 article-title"> <span>جدول الحصص</span> </h2>
        </header>

        <section class="timeline">

          <div class="title-wrapper">
            <div class="icon-box">
              <ion-icon name="book-outline"></ion-icon>
            </div>
            <br>
            <h3 class="h3">قائمة الصفوف</h3>
            <br>


            <br>
            <br><br>

          </div>
          <h1 id="dayOfWeek"> </h1>
          <br><br>
          <?php
// تأسيس اتصال بقاعدة البيانات
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Schools_db";

$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn, 'utf8');
// التحقق من نجاح الاتصال
if ($conn->connect_error) {
    die("فشل الاتصال بقاعدة البيانات: " . $conn->connect_error);
}

// استعلام SQL لاسترداد البيانات
$sub = "SELECT * FROM subjects";
$sql = "SELECT * FROM lessons_table";
$teachers = "SELECT tea_name FROM teachers";
$classes = "SELECT class_name FROM classes";
$sections = "SELECT sec_name FROM sections";
$result1 = $conn->query($sub);
$result = $conn->query($sql);
$teachersResult = $conn->query($teachers);
$classesResult = $conn->query($classes);
$sectionsResult = $conn->query($sections);

// عرض البيانات في جدول HTML
if ($result->num_rows > 0 && $result1->num_rows > 0 && $teachersResult->num_rows > 0 && $classesResult->num_rows > 0 && $sectionsResult->num_rows > 0) {
    echo '<table style="direction: rtl;">';
    echo "<tr><th>اليوم</th> <th> الحصة</th> <th>المادة</th> <th> الصف</th> <th> الشعبة</th> <th> المدرس</th> <th>الوقت</th></tr>";
    while (($row = $result->fetch_assoc()) && ($row1 = $result1->fetch_assoc()) && ($teacher = $teachersResult->fetch_assoc()) && ($class = $classesResult->fetch_assoc()) && ($section = $sectionsResult->fetch_assoc())) {
        $day = date("l", strtotime($row["date"]));
        $day = arabicDay($day);
        echo "<tr><td>" . $day . "</td><td>" . $row["sha_name"] . "</td><td>" . $row1["sub_name"] . $row["tea_id"] . "</td><td>" . $class["class_name"] . "</td><td>" . $section["sec_name"] . "</td><td>" . $teacher["tea_name"] . "</td><td>" .date("H:i",strtotime($row["time"]))  . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "لا توجد بيانات متاحة";
}

// إغلاق اتصال قاعدة البيانات
$conn->close();

// دالة مساعدة لتحويل اسم اليوم إلى اللغة العربية
function arabicDay($day) {
    $arabicDays = array(
        'Saturday' => 'السبت',
        'Sunday' => 'الأحد',
        'Monday' => 'الاثنين',
        'Tuesday' => 'الثلاثاء',
        'Wednesday' => 'الأربعاء',
        'Thursday' => 'الخميس',
        'Friday' => 'الجمعة'
    );
    return $arabicDays[$day];
}
?>



<script>
setInterval(updateTable, 24 * 60 * 60 * 1000);

updateTable();

function updateTable() {
  const daysOfWeek = [' جدول يوم:الأحد', ' جدول يوم:الاثنين', ' جدول يوم:الثلاثاء ', ' جدول يوم:الأربعاء', ' جدول يوم:الخميس', ' جدول يوم:الجمعة', ' جدول يوم: السبت'];

  const timetable = [
    { subject: ' اول', time: '  08:00    ' },
    { subject: 'ثاني', time: '09:15 ' },
    { subject: 'ثالث', time: '10:30 ' },
    { subject: 'رابع', time: '11:45' },
    { subject: ' خامس ', time: '01:00' },
    { subject: 'سادس', time: '02:15' }
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

          <br>




          <button class=" btnreport"> عرض الجدول الاسبوعي </button>
          <script>
            document.querySelector('.btntableclass').addEventListener('click', generateHomeworkReport);

            function generateHomeworkReport() {
              const homeworkReport = [];
              const tableRows = document.querySelectorAll('#tableclass tr:not(:first-child)');

              tableRows.forEach((row) => {
                const lesson = row.querySelector('td:first-child').innerText;
                const subject = row.querySelector('td:nth-child(2)').innerText;
                const time = row.querySelector('td:nth-child(3)').innerText;
                const homework = row.querySelector('td:nth-child(4) textarea').value.trim();

                homeworkReport.push({
                  lesson: lesson,
                  subject: subject,
                  time: time,
                  homework: homework
                });
              });

              const reportWindow = window.open('', '_blank');
              reportWindow.document.write('<html><head><title>تقرير الواجبات</title></head><body>');
              reportWindow.document.write('<h1>تقرير الواجبات</h1>');
              reportWindow.document.write('<table>');
              reportWindow.document.write('<tr><th>الحصة</th><th>المادة</th><th>الوقت</th><th>الواجب</th></tr>');

              homeworkReport.forEach((homework) => {
                reportWindow.document.write(`<tr><td>${homework.lesson}</td><td>${homework.subject}</td><td>${homework.time}</td><td>${homework.homework}</td></tr>`);
              });

              reportWindow.document.write('</table>');
              reportWindow.document.write('</body></html>');
              reportWindow.document.close();
            }
          </script>


          <br>
          </ul>


        </section>

      </article>





      

      <!--
        - #BLOG
      -->

      <article class="blog" data-page="التقارير">

        <header>
          <h2 class="h2 article-title">صفحة التقارير</h2>
        </header>

        <section class="blog-posts">

        


            <section class="sectionreport" dir="rtl">

          
              <button class="btnreport">تقرير الاختبارات الشهريه</button>
              <button class="btnreport">تقرير الاختبارات الشفهيه</button>
              <button class="btnreport">تقرير الواجبات</button>
              <button class="btnreport">تقرير الحضور</button>
              <br><br>
              <button class="btnreport">تقرير المواظبة</button>
              <button class="btnreport"> تقارير نهاية الفصل الدراسي</button>
              </section>
              <br><br><br><br>
              <ul class="blog-posts-list">
             





             
<form action="" method="POST">
    <div class="body3" dir="rtl">
        <div class="wrapper">
            <div class="invoice_wrapper">
                <!-- الكود المتبقي للنموذج هنا -->
                <div class="header">
                    <div class="logo_invoice_wrap">
                      <div class="logo_sec">
                        <img class="img2" src="avatar-1.png" alt="code logo">
                        <div class="title_wrap">
                        <p class="title bold">          

                         </p>

                          <p class="sub_title">
                          

                          
                          </p>
                        </div>
                      </div>
                      <div class="invoice_sec">
                        <p class="invoice bold">
                      
                        
                        تقرير الحضور</p>
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
                        <p>مجموع الغياب
                       
 </p>
                              <p ID="ATTCOUNT" class="bold price">


                              </p>
                      </div>
                    </div>
                  </div>
                  <div class="body2">
                  
                  
                <div class="main_table">
                    <div class="table_header">
                        <div class="row">
                            <div class="col col_no">
                              م
                            
                            </div>
                            <div class="col col_des">اسم الصف</div>
                            <div class="col col_price">عدد الطلاب</div>
                            <div class="col col_qty">عدد الحضور</div>
                            <div class="col col_total">عدد الغياب</div>
                        </div>
                    </div>
                    <div class="table_body">

                       
                            <div class="row">
                                <div class="col col_no">
                                    <p></p>
                                </div>
                                <div class="col col_des">
                                    <p class="bold"><?php
                                    $s="SELECT class_name FROM classes";
                                    $result = $connection->query($s);
                                    if($row = $result->fetch_assoc())
                                    {
                                      
                                    
                                    echo  $row["class_name"];
                                    }
                                    else{
                                    echo "none";
                                    }
                                    ?></p>
                                </div>
                                <div class="col col_price">
                                    <p><?php 
                                    $sql = "SELECT COUNT(stu_name)AS stu_num  FROM students";
                                   
                                    
                                    $result = $connection->query($sql);
                                    if($row = $result->fetch_assoc())
                                    {
                                      
                                    
                                    echo  $row["stu_num"];
                                    }
                                    else{
                                    echo "none";
                                    }
                                    ?></p>
                                </div>
                                <div class="col col_qty">
                                    <p><?php 
                                    $sql = "SELECT COUNT(CASE WHEN result_atten = 'حاضر' THEN 1 END)AS stu_num  FROM student_attendance";
                                   
                                    
                                    $result = $connection->query($sql);
                                    if($row = $result->fetch_assoc())
                                    {
                                      
                                    
                                    echo  $row["stu_num"];
                                    }
                                    else{
                                    echo "none";
                                    }
                                    ?></p>
                                </div>
                                <div class="col col_total">
                                    <p><?php 
                                    $sql = "SELECT COUNT(CASE WHEN result_atten='غائب' THEN 1 END)AS stu_num  FROM student_attendance";
                                   
                                    
                                    $result = $connection->query($sql);
                                    if($row = $result->fetch_assoc())
                                    {
                                     
                                    $total=$row["stu_num"];
                                    echo  $total;
                                    }
                                    else{
                                    echo "none";
                                    }
                                    ?></p>
                                </div>
                            </div>
                            

                    </div>
                </div>

                <!-- الكود المتبقي للنموذج هنا -->
            </div>
        </div>
    </div>
</form>















      </article>




      <!--
        - #CONTACT
      -->

      <article class="contact" data-page="التواصل">

        <header>
          <h2 class="h2 article-title">الإستفسار</h2>
        </header>

        

        <section class="contact-form">

          <h3 class="h3 form-title">الاستفسارات </h3>

          <form action="#" class="form" data-form>

            <div class="input-wrapper">
<!--
              <input type="text" name="fullname" class="form-input" placeholder="الاسم الكامل" required data-form-input>


              <input type="password" name="email" class="form-input" placeholder="" required data-form-input>-->
            </div>

            <textarea name="message" class="form-input" placeholder="اكتب الرساله" required data-form-input></textarea>

            <button class="btnreport" type="submit" disabled data-form-btn>
              <ion-icon name="paper-plane"></ion-icon>
              <span>ارسال</span>
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
  </form>
</body>

</html>
