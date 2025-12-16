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

        <style>
        /* Styles for the form */
        form {
            margin-bottom: 20px;
        }
        label {
            display: inline-block;
            width: 100px;
        }
        input[type="text"] {
            width: 200px;
        }
        input[type="submit"] {
            margin-left: 100px;
        }

        /* Styles for the table */
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>
<body>
    <h2>Employee Salary Management</h2>
    <form method="POST">
        <label for="employee_id">Employee ID:</label>
        <input type="text" id="employee_id" name="employee_id">
        <label for="employee_name">Employee Name:</label>
        <input type="text" id="employee_name" name="employee_name">
        <label for="salary">Salary:</label>
        <input type="text" id="salary" name="salary">
        <input type="submit" value="Add Employee">
    </form>

    <?php
    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Extract values from the form
        $employeeId = $_POST["employee_id"];
        $employeeName = $_POST["employee_name"];
        $salary = $_POST["salary"];

        // Validate inputs (you can add more validation if needed)
        if (empty($employeeId) || empty($employeeName) || empty($salary)) {
            echo "Please fill in all the fields.";
        } else {
            // Add the employee to the database (you can replace this with your own logic)
            // Database connection details
            /*
            $servername = "localhost";
            $username = "username";
            $password = "password";
            $dbname = "database";

            // Create a connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
*/
            // Insert the employee record into the database
            $sql = "INSERT INTO employees (staff_id, staff_name, staff_sale) VALUES ('$employeeId', '$employeeName', '$salary')";

            if ($connection->query($sql) === TRUE) {
                echo "Employee added successfully.";
            } else {
                echo "Error: " . $sql . "<br>" . $connection->error;
            }

            // Close the connection
           // $conn->close();
        }
    }
    ?>

    <h2>Employee Salary List</h2>
    <table>
        <tr>
            <th>Employee ID</th>
            <th>Employee Name</th>
            <th>Salary</th>
        </tr>

        <?php
        // Fetch and display employee records from the database (you can replace this with your own logic)
        // Database connection details
        /*
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "schools";

        // Create a connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
*/
        // Fetch all employee records
        $sql = "SELECT * FROM employees";
        $result = $connection->query($sql);

        if ($result->num_rows > 0) {
            // Display each row as a table row
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["salary"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No employees found.</td></tr>";
        }

        // Close the connection
        //$conn->close();
        ?>
    </table>
</body>

</html>