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

        <header>
        
        <div class="nav-buttons">
            <button class="nav-link active"id="button" data-target="#students"> الطلاب</button>
            <button class="nav-link" id="button" data-target="#staff"> الموظفين</button>
            <button class="nav-link" id="button" data-target="#parnet"> اولياء الامور</button>
        </div>
    </header>

    <main>
        <section id="students"  class="section">
            <!-- استعلام االطلاب هنا  -->  
            <section class="clean-block clean-form dark" style="padding-top: 263px;background-color: rgba(246,246,246,0);">
        <h2 class="text-info"><strong>Search Employee</strong></h2>
        <div class="container">
            <form  method="post" action="search.php" style="width: 500px;" >
                <div class="form-group"><input class="form-control" type="text" name="search" placeholder="Enter the employee name:-">
                </div><button class="btn btn-primary btn-block" type="submit">Search</button>
            </form>
        </div>
    </section>
    <!--<section class="clean-block clean-info dark" style="background-color: rgba(246,246,246,0.39);opacity: 1;">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info"><strong>Here are your search results:-</strong></h2>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col" style="background-color: #ffffff;">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>E-mail</th>
                                    <!-- <th style="width: 293px;">Date of Birth</th> 
                                    <th>Role</th>
                                    <th>View</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>-->
<?php
    include 'con';
    if (isset($_POST["search"])) {
    $search = $_POST["search"];
    $sql = "SELECT * FROM `employee` WHERE `Fname` LIKE '%$search%' OR `Lname` LIKE '%$search%'";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {
		echo "<section class='clean-block clean-info dark' style='background-color: rgba(255,255,255,1);border-radius:0;padding-bottom: 0px;'>";
        echo "<div class='container'>";
            echo "<div class='block-heading' style='padding-top: 25px;'>";
                echo "<h2 class='text-info'><strong>Here are your search results:-</strong></h2>";
            echo "</div>";
        echo "</div>";
        echo "<div class='container'>";
            echo "<div class='row'>";
                echo "<div class='col' style='background-color: #ffffff;'>";
                    echo "<div class='table-responsive'>";
		echo "<table class='table'>";
            echo "<thead>";                
                echo "<tr>";
                    echo "<th>Name</th>";
                    echo "<th>E-mail</th>";
                    echo"<th>Role</th>";
                    echo"<th>View</th>";
                    echo"<th>Edit</th>";
                    echo "<th>Delete</th>";
                    echo "</tr>";
                    echo "</thead>";
        while ($row = mysqli_fetch_assoc($result)) {
            $mail= $row['E_email'];
            echo "<tbody>";
            echo "<tr>";
            echo "<td>" . $row["Fname"] ." ". $row["Lname"] . "</td>";
            echo "<td>" . $row["E_email"] . "</td>";
            // echo "<td>" . $row["DOB"] . "</td>";
            echo "<td>" . $row["Role"] . "</td>";
            echo "<td> <a href='view.php?mail=$mail' <button type='button' class='btn btn-info'> View </button> </td>";
            echo "<td> <a href='edit.php?mail=$mail'> <button type='button' class='btn btn-warning'> Edit </button></a> </td>";
            echo "<td> <a href='delete.php?mail=$mail' <button type='button' class='btn btn-danger' onclick='return checkdel()' > Delete </button> </td>";
            echo "</tr>";
            echo "</tbody>";
        }
        echo "</table>";
    } else {
        echo "<h3 class='text-danger text-center'>No results found</h3>";
    }
}
?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

        </section>

        <section id="staff" class="section">
            <!-- استعلام الموظفين هنا-->
           
        </section>

        <section id="parnet" class="section">
            <!--  اولياء الامور استعلام هنا -->
        </section>
    </main>


  <!--
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!--
    - ionicon link
  -->
  <script>
        const navLinks = document.querySelectorAll('.nav-link');
        const sections = document.querySelectorAll('section');

        navLinks.forEach(link => {
            link.addEventListener('click', (event) => {
                const targetId = event.currentTarget.dataset.target;
                const targetSection = document.querySelector(targetId);

                sections.forEach(section => {
                    section.classList.remove('active');
                });

                targetSection.classList.add('active');

                navLinks.forEach(link => {
                    link.classList.remove('active');
                });

                event.currentTarget.classList.add('active');
            });
        });
        const navBtns = document.querySelectorAll('.nav-btn');
const contentSections = document.querySelectorAll('.content');

navBtns.forEach(btn => {
    btn.addEventListener('click', () => {
        // إزالة الفئة النشطة من جميع الأزرار والأقسام
        navBtns.forEach(btn => btn.classList.remove('active'));
        contentSections.forEach(section => section.classList.remove('active'));

        // إضافة الفئة النشطة للزر المضغوط وقسم المحتوى المرتبط به
        const targetContent = document.getElementById(btn.dataset.content);
        btn.classList.add('active');
        targetContent.classList.add('active');
    });
});
    </script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <style>
        section {
            display: none;
        }
        section.active {
            display: block;
        }
        .nav-buttons {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }
        .nav-buttons button {
            margin: 0 10px;
            padding: 10px 20px;
            font-size: 16px;
            background-color: #f2f2f2;
            border: none;
            cursor: pointer;
        }
        .nav-buttons button.active {
            background-color: #333;
            color: #fff;
        }
        .content {
    display: none;
}

.content.active {
    display: block;
}
/*
.nav-btn.active {
    // تنسيق الزر النشط 
}
*/
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
          #button,.btnback {
    
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
  
  #button span {
    margin: 5px;
  }
  
  #button::before {
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
  
  #button:hover {
    color: #ffffff;
    border: 2px solid rgb(9, 105, 195);
  }
  
  #button:hover::before {
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
</body>

</html>