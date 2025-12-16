<?php 
include "connection.php";
session_start(); ?>
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
<!--          <style>
            table {
              border-collapse: collapse;
              width: 100%;
              display: block;
            }
        
            th, td {
              border: 1px solid black;
              padding: 8px;
              text-align: center;
              width: 50%;
            }
        
            th {
              background-color: rgba(211, 211, 211, 0);
            }
        
            
        
            .add-assignment-form {
              margin-top: 10px;
            }

            input{
              background: var(--eerie-black-2);
  color: var(--light-gray);
  display: flex;
  justify-content: space-between;
  align-items: center;
  width: 100%;
  padding: 12px 16px;
  border: 1px solid var(--jet);
  border-radius: 14px;
  font-size: var(--fs-6);
  font-weight: var(--fw-300);
}

button{




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
  margin-top: 10px;
}

button span {
  margin: 10px;
}

button::before {
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

button:hover {
  color: #ffffff;
  border: 2px solid rgb(9, 105, 195);
}

button:hover::before {
  box-shadow: inset 0 0 0 10em rgb(40, 144, 241);
}
button{

align-items: center;

}






            
          
          </style>
  
          <h1>إرسال الصور والنصوص</h1>
    
          <input class="btnreport"  type="file" id="imageInput" />
  <br><br><br>
          <button onclick="displaySubjects()"><h1>اختر المادة </h1></button><br>
  <div id="subjects" style="display: block;">
    <button  onclick="displayAssignments('math')">رياضيات</button>
    <button  onclick="displayAssignments('science')">علوم</button>
    <button  onclick="displayAssignments('english')">انجليزي </button>
    <button  onclick="displayAssignments('history')">تاريخ</button>
    <button  onclick="displayAssignments('geography')">خغرافيا</button>
    <button  onclick="displayAssignments('art')">عربي</button>
  </div><br>
  <div id="assignments" style="display: none;"></div>
  
  <script>
    var assignments = {
      math: [
        { name: 'واجب 1', date: '2024-02-15' },
        { name: 'واجب 2', date: '2024-02-18' }
      ],
      science: [
        { name: 'واجب 1', date: '2024-02-16' },
        { name: 'واجب 2', date: '2024-02-20' }
      ],
      english: [
        { name: 'واجب 1', date: '2024-02-17' },
        { name: 'واجب 2', date: '2024-02-22' }
      ],
      history: [
        { name: 'واجب 1', date: '2024-02-19' },
        { name: 'واجب 2', date: '2024-02-24' }
      ],
      geography: [
        { name: 'واجب 1', date: '2024-02-21' },
        { name: 'واجب 2', date: '2024-02-26' }
      ],
      art: [
        { name: 'واجب 1', date: '2024-02-23' },
        { name: 'واجب 2', date: '2024-02-28' }
      ]
    };
  
    function displaySubjects() {
      var subjectsDiv = document.getElementById('subjects');
      subjectsDiv.style.display = 'block';
    }
  
    function displayAssignments(subject) {
      var assignmentsDiv = document.getElementById('assignments');
      assignmentsDiv.style.display = 'block';
  
      var table = document.createElement('table');
      var tableHeader = document.createElement('tr');
      var th1 = document.createElement('th');
      th1.textContent = ' الواجب';
      var th2 = document.createElement('th');
      th2.textContent = 'تاريخ الواجب';
  
      tableHeader.appendChild(th1);
      tableHeader.appendChild(th2);
      table.appendChild(tableHeader);
  
      for (var i = 0; i < assignments[subject].length; i++) {
        var assignment = assignments[subject][i];
        var row = document.createElement('tr');
        var td1 = document.createElement('td');
        td1.textContent = assignment.name;
        var td2 = document.createElement('td');
        td2.textContent = assignment.date;
  
        row.appendChild(td1);
        row.appendChild(td2);
        table.appendChild(row);
      }
  
      assignmentsDiv.innerHTML = '';
      assignmentsDiv.appendChild(table);
  
      var addAssignmentForm = document.createElement('form');
      addAssignmentForm.className = 'add-assignment-form';
      var assignmentNameInput = document.createElement('input');
      assignmentNameInput.type = 'text';
      assignmentNameInput.placeholder = 'اكتب الواجب';
      var assignmentDateInput = document.createElement('input');
      assignmentDateInput.type = 'date';
      var submitButton = document.createElement('button');
    
      submitButton.textContent = 'إرسال';
      submitButton.type = 'button';
      submitButton.addEventListener('click', function() {
        var assignmentName = assignmentNameInput.value;
        var assignmentDate = assignmentDateInput.value;
        if (assignmentName && assignmentDate) {
          assignments[subject].push({ name: assignmentName, date: assignmentDate });
          displayAssignments(subject);
          assignmentNameInput.value = '';
          assignmentDateInput.value = '';
        } else {
          alert('يرجى ملء جميع الحقول');
        }
      });
  
      addAssignmentForm.appendChild(assignmentNameInput);
      addAssignmentForm.appendChild(assignmentDateInput);
      addAssignmentForm.appendChild(submitButton);
      assignmentsDiv.appendChild(addAssignmentForm);
    }
  </script>
   -->
 
   <?php
#session_start();

// التحقق من وجود قيم في الجلسة
if (!isset($_SESSION['class']) || !isset($_SESSION['section']) || !isset($_SESSION['subject'])) {
    // إعادة التوجيه إلى صفحة اختيار المدرس والصف والشعبة والمادة
    header('Location: index.php');
    exit();
}

// الاتصال بقاعدة البيانات
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Schools_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// التحقق من الاتصال
if ($conn->connect_error) {
    die("فشل الاتصال بقاعدة البيانات: " . $conn->connect_error);
}

// التحقق من إرسال النموذج
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // استلام البيانات من النموذج
    $homework = $_POST["homework"];

    // توليد تاريخ إرسال الواجب
    $dateHome = date("Y-m-d");

    // إدخال البيانات في جدول "assignments"
    $sql = "INSERT INTO assignments ( homework, date_home) VALUES ( '$homework', '$dateHome')";

    if ($conn->query($sql) === TRUE) {
        echo "تم إرسال الواجب بنجاح!";
    } else {
        echo "حدث خطأ أثناء إرسال الواجب: " . $conn->error;
    }
}

// إغلاق اتصال قاعدة البيانات
$conn->close();
?>
  
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      
        <textarea class="filter-select" id="homework" name="homework" required  placeholder="اكتب الواجب هنا..."></textarea><br><br>

        <input class="btnreport" type="submit" value="إرسال الواجب">
    </form>
  








<!-- 

<form action="?" method="POST">
   
      
        <input class="filter-select" type="text" name="HM_ID" placeholder="الواجب">

        <input class="filter-select" type="text" name="DEGREE" placeholder="">
        <input class="filter-select" type="date" name="DEADLINE" placeholder="">
        <input class="filter-select" type="text" name="TULTION" placeholder="">
    <input class="btnreport" type="submit" value="إرسال">
</form>
  

<?php/*
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myschool_db";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("فشل الاتصال بقاعدة البيانات: " . $conn->connect_error);
}

$HM_ID = $_POST['HM_ID'];
$DEGREE = $_POST['DEGREE'];
$DEADLINE = $_POST['DEADLINE'];
$TULTION = $_POST['TULTION'];

#$sql = "INSERT INTO homework (hw_id, degree, deadline, tital) VALUES ('$HM_ID', '$DEGREE', '$DEADLINE', '$TULTION')";

$sql = "INSERT INTO `homework`( `sub_id`, `details`,  `degree`, `deadline`,`title`) VALUES ('$HM_ID','$DEADLINE', '$DEGREE','$DEADLINE','$TULTION')";



if ($conn->query($sql) === TRUE) {
    echo "تم إدخال البيانات بنجاح";
} else {
    echo "حدث خطأ أثناء إدخال البيانات: " . $conn->error;
}

$conn->close();
*/?>


 -->
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