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
        <h2 class="h2 article-title"> تحضير الطلاب</h2>
        </header>

        <section class="about-text">
          <section class="projects">
            <div class="filter-select-box">
  
  
  
            </div>
  












            <?php

// التحقق من إعدادات الجلسة
if (!isset($_SESSION['class']) || !isset($_SESSION['section']) || !isset($_SESSION['subject'])) {
    // إعادة التوجيه إلى صفحة أخرى إذا لم يتم تحديد الصف أو الشعبة أو المادة
    header("Location: index.php");
    exit;
}

// استعراض أسماء الطلاب
echo "<pre>"."<p>صف:" . $_SESSION['class'] ."   ". "شعبة:" . $_SESSION['section'] ."   ". "مادة:" . $_SESSION['subject'] ."<pre>". "</p>";

// استعراض أسماء الطلاب من قاعدة البيانات
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Schools_db";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("فشل الاتصال بقاعدة البيانات: " . $conn->connect_error);
}
mysqli_set_charset($conn,'utf8');
$class = $_SESSION['class'];
$section = $_SESSION['section'];

$sql = "SELECT * FROM students WHERE class_id = '$class' AND ser_id = '$section'";
$result = $conn->query($sql);

// عرض نموذج التحضير وتحديد حالة الحضور لكل طالب
echo "<form method='post'>";
echo "<table>";
echo "<tr><th>اسم الطالب</th><th>حالة الحضور</th></tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row['stu_name'] . "</td>";
    echo "<td>";
    echo "<select name='attendance[" . $row['stu_name'] . "]'>";
    echo "<option value='حاضر'>حاضر</option>";
    echo "<option value='غائب'>غائب</option>";
    echo "<option value='مستأذن'>مستأذن</option>";
    echo "</select>";
    echo "</td>";
    echo "</tr>";
}

echo "</table>";
echo "<input class='btnreport' type='submit' value='حفظ التحضير'>";
echo "</form>";

// حفظ بيانات حالة الحضور في قاعدة البيانات
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $attendanceData = $_POST['attendance'];

    // توليد التاريخ والوقت الحالي
    $currentDate = date("Y-m-d");
    $currentDay = date("l");

    foreach ($attendanceData as $studentName => $attendanceStatus) {
        // استعلام SQL لإدخال بيانات الحضور في جدول student_attendance
        $sql = "INSERT INTO student_attendance ( result_atten, stu_id, tea_id, sub_id, sha_id, date, day) 
                VALUES ( '$attendanceStatus', (SELECT stu_id FROM students WHERE stu_name = '$studentName'), 
                'tea_id', 'sub_id', 'sha_id', '$currentDate', '$currentDay')";

        if ($conn->query($sql) !== TRUE) {
            echo "حدث خطأ أثناء حفظ حالة الحضور للطالب: " . $studentName;
        }
    }

    echo "تم حفظ حالة الحضور بنجاح!";
}







// استعراض تقرير الحضور للطلاب
echo "<h2>تقرير الحضور</h2>";

$sql_report = "SELECT stu_id, result_atten, date FROM student_attendance WHERE date = '$currentDate'";
$result_report = $conn->query($sql_report);

echo "<table>";
echo "<tr><th>اسم الطالب</th><th>حالة الحضور</th><th>التاريخ</th></tr>";

while ($row_report = $result_report->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row_report['stu_id'] . "</td>";
    echo "<td>" . $row_report['result_atten'] . "</td>";
    echo "<td>" . $row_report['date'] . "</td>";
    echo "</tr>";
}

echo "</table>";

?>




  
  
  
          </section>
          <br><br>
          <!-- 
<button class="btnreport">
  تقرير الحضور
</button> -->

        </section>
</article>


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