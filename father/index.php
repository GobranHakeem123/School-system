<?php
include("connection.php");

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
<style>
.social-link{
  color: #fff;
}
  </style>
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
   
        <button class="info_more-btn" data-sidebar-btn>
          <span>عرض باقي البيانات</span>

          <ion-icon name="chevron-down"></ion-icon>
        </button>

     
        <figure class="avatar-box">
          <img src="./assets/images/my-avatar.png" alt="Richard hanrick" width="80">
        </figure>



          <h1 class="name" title="Richard hanrick">  <?php
$father = "SELECT * FROM guardians";
$PAR = $connection->query($father);

if($PARE = $PAR-> fetch_assoc())
{
	echo  $PARE['par_name'];

}
?> <br></h1>
          
          <select id="classes" class="input_filed" onchange="showTable()">
            <option value="" selected>اختر اسم الابن</option>
            <option value="class1">الابن الاول</option>
            <option value="class2">الابن الثاني</option>
            
          </select>
          
         <!-- <p class="title"></p> -->
        </div>


      <div class="sidebar-info_more">

        <div class="separator"></div>

        <ul class="contacts-list">

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="mail-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Email</p>

              <a href="ahmedalmesbahi550@gmail.com" class="contact-link">ahmedalmesbahi550@gmail.com</a>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="phone-portrait-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Phone</p>

              <a href="tel:+967776294103" class="contact-link"> <?php
$father1 = "SELECT * FROM guardians";
$PAR1 = $connection->query($father1);

if($PARE1 = $PAR1-> fetch_assoc())
{
	echo $PARE1['phone_par'];

}


?></a>
            </div>

          </li>

         

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="location-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Location</p>

              <address><?php
$father2 = "SELECT * FROM guardians";
$PAR2 = $connection->query($father2);

if($PARE2 = $PAR2-> fetch_assoc())
{
	echo $PARE2['address'];

}


?></address>
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
            <button class="navbar-link  active" data-nav-link>دفتر المتابعة</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>رسوم التسجيل</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>الحظور والغياب</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>النتائج</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>الاشعارات</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>استفسارات</button>
          </li>

          <li class="navbar-item">
            <button ><a class="social-link" href="aadadat.php" >الاعدادات</a></button>
          </li>
        </ul>

      </nav>





      <!--
        - #ABOUT
      -->

      <article class="about  active" data-page="دفتر المتابعة">

        <header>
          <h2 class="h2 article-title">دفتر المتابعة</h2>
        </header>
       <br><br>
       <section class="testimonials">



<ul class="testimonials-list has-scrollbar">

  <li class="testimonials-item">
    <div class="content-card" data-testimonials-item>

      <figure class="testimonials-avatar-box">
        <img src="./assets/images/avatar-1.png" alt="Daniel lewis" width="60" data-testimonials-avatar>
      </figure>

      <h4 class="h4 testimonials-item-title" data-testimonials-title>اسم المعلم</h4>

      <div class="testimonials-text" data-testimonials-text>
        <p>
          السيرة الذاتية للمعلم
        </p>
      </div>

    </div>
  </li>

  <li class="testimonials-item">
    <div class="content-card" data-testimonials-item>

      <figure class="testimonials-avatar-box">
        <img src="./assets/images/avatar-2.png" alt="Jessica miller" width="60" data-testimonials-avatar>
      </figure>

      <h4 class="h4 testimonials-item-title" data-testimonials-title>اسم المعلم</h4>

      <div class="testimonials-text" data-testimonials-text>
        <p>السيرة الذاتية للمعلم

        </p>
      </div>

    </div>
  </li>

  <li class="testimonials-item">
    <div class="content-card" data-testimonials-item>

      <figure class="testimonials-avatar-box">
        <img src="./assets/images/avatar-3.png" alt="Emily evans" width="60" data-testimonials-avatar>
      </figure>

      <h4 class="h4 testimonials-item-title" data-testimonials-title>اسم المعلم</h4>

      <div class="testimonials-text" data-testimonials-text>
        <p>
          السيرة الذاتية للمعلم
        </p>
      </div>

    </div>
  </li>

  <li class="testimonials-item">
    <div class="content-card" data-testimonials-item>

      <figure class="testimonials-avatar-box">
        <img src="./assets/images/avatar-4.png" alt="Henry william" width="60" data-testimonials-avatar>
      </figure>

      <h4 class="h4 testimonials-item-title" data-testimonials-title>اسم المعلم</h4>

      <div class="testimonials-text" data-testimonials-text>
        <p>
          السيرة الذاتية للمعلم
        </p>
      </div>

    </div>
  </li>

</ul>

</section>

        <section class="about-text">
 <table id="lessonsTable" dir="rtl" class="table" style="font-size:20px" ;="" cellpadding="2" align="right" >
  <tr id="rowclass1" class="auto-style19" ;="" class="ttt">
  <tr><td>المادة</td>
              
              <?php $sql ="SELECT * FROM subjects";
              $query = $connection->query($sql);
              while($row = $query-> fetch_assoc())
              {
                echo   "<td>".$row['sub_name']."</td>";
              
              }
              ?>
            
            </tr>
            <tr><td>الواجب</td>
              
              <?php $sql1 ="SELECT * FROM assignments";

$query1 = $connection->query($sql1);
while($row1 = $query1-> fetch_assoc())
{
	echo "<td>".$row1['homework']."</td>";

}
              ?>
            
            </tr>
            <tr><td>ملاحظة اضافية</td>
              
              <?php $sql ="SELECT * FROM assignments";
              $query = $connection->query($sql);
              while($row = $query-> fetch_assoc())
              {
                echo   "<td>".$row['date_home']."</td>";
              
              }
              ?>
            
            </tr>
            </table>
           
        </section>


        <!--
          - testimonials
        -->

       

        <!--
          - testimonials modal
        -->

        <div class="modal-container" data-modal-container>

          <div class="overlay" data-overlay></div>

          <section class="testimonials-modal">

           <!----> <button class="modal-close-btn" data-modal-close-btn>
              <ion-icon name="close-outline"></ion-icon>
            </button>

            <div class="modal-img-wrapper">
              <figure class="modal-avatar-box">
                <img src="./assets/images/avatar-1.png" alt="Daniel lewis" width="80" data-modal-img>
              </figure>

              <img src="./assets/images/icon-quote.svg" alt="quote icon">
            </div>

            <div class="modal-content">

              <h4 class="h3 modal-title" data-modal-title>اسم المعلم</h4>

              <time datetime="2021-06-14">14 June, 2021</time>

              <div data-modal-text>
                <p>
                 السيرة الذاتية للمعلم
                </p>
              </div>

            </div>

          </section>

        </div>


        <!--
          - clients
        -->

        <section class="clients">

      
        </section>

      </article>





      <!--
        - #RESUME
      -->

      <article class="resume" data-page="رسوم التسجيل">

        <header>
          <h2 class="h2 article-title"> <span>الرسوم</span> </h2>
        </header>

        <section class="timeline">
          <aside class="sidebar" data-sidebar>

            <div class="sidebar-info">
      
              <figure class="avatar-box">
              <!--  <img src="./assets/images/my-avatar.png" alt="Richard hanrick" width="80">-->
              </figure>
      
              <div class="info-content">
                <h1 class="name" title="Richard hanrick"> رسوم التسجيل<br></h1>
                <p class="title"><?php $mony = "SELECT * FROM tuition_fees";
$mony1 = $connection->query($mony);

if($mony2 = $mony1-> fetch_assoc())
{
	echo  $mony2['count_mony'];

}
?></p>
                   
              </div>
      
       
            </div>
      
          </aside>
          <aside class="sidebar" data-sidebar>

            <div class="sidebar-info">
      
              <figure class="avatar-box">
              <!--  <img src="./assets/images/my-avatar.png" alt="Richard hanrick" width="80">-->
              </figure>
      
              <div class="info-content">
                <h1 class="name" title="Richard hanrick"> المبلغ الذي تم دفعة<br></h1>
      
                <p class="title"><?php $mony11 = "SELECT * FROM tuition_fees";
$mony12 = $connection->query($mony11);

if($mony23 = $mony12-> fetch_assoc())
{
	echo  $mony23['set_mony'];

}
?></p>
              </div>
            </div>
          </aside>
        </aside>
        <aside class="sidebar" data-sidebar>

          <div class="sidebar-info">
    
            <figure class="avatar-box">
            <!--  <img src="./assets/images/my-avatar.png" alt="Richard hanrick" width="80">-->
            </figure>
    
            <div class="info-content">
              <h1 class="name" title="Richard hanrick">المتبقي من الرسوم<br></h1>
    
              
              <p class="title">السعر المتبقي</p>
            </div>
          </div>
        </aside>
      
     
          
        </section>

      </article>





      <!--
        - #PORTFOLIO
      -->

      <article class="portfolio" data-page="الحظور والغياب">


        

        <header>
          <h2 class="h2 article-title">الحضور</h2>
        </header>
  

        
        <section class="projects">
          <div class="filter-select-box">


            
            <button class="filter-select" data-select>

              <div class="select-value" data-selecct-value>Select category</div>

              <div class="select-icon">

                
                <ion-icon name="chevron-down"></ion-icon>
              </div>

            </button>

          </div>

          <table id="attendanceTable" dir="rtl">
            <thead>
              <tr>
                <th>اسم الطالب</th>
                <th>حالة الحضور</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><?php
$stu = "SELECT * FROM students";
$stuu = $connection->query($stu);

while($stuu1 = $stuu-> fetch_assoc())
{
	echo $stuu1['stu_name']."<br>"."<br>";

}


?></td>
                <td><?php
$stu = "SELECT * FROM notifications";
$stuu = $connection->query($stu);

while($stuu1 = $stuu-> fetch_assoc())
{
	echo $stuu1['noti']."<br>"."<br>";

}


?></td>
              </tr>
              
            </tbody>
          </table>
        
    
      <br>
      <hr>
      <br>
      <br>
      
      
      <h1 class="h11">
        التقرير الشهري للحظور والغياب
      </h1>  
      <br>
      <br>

      
      

 <table id="attendanceTable" dir="rtl">
            <thead>
              <tr>
                <th>عدد ايام الحظور</th>
                <th>عدد ايام الغياب</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>عدد الايام</td>
                <td>عدد الايام</td>
              </tr>
              
            </tbody>
          </table>









        </section>

      </article>







      <!--
        - #BLOG
      -->

      <article class="blog" data-page="النتائج">

        <header>
          <h2 class="h2 article-title">نتائج الامتحانات</h2>
        </header>
        <table  dir="rtl" class="stu2">
         
            <tr>
              <td>اسم المادة</td>
              <?php $ex = "SELECT * FROM subjects";
$ex1 = $connection->query($ex);

while($ex2 = $ex1-> fetch_assoc())
{
  echo "<td>";
	echo  $ex2['sub_name'];
  echo "</td>";
}
?>
              <td>المجموع</td>
            </tr>
            <tr>
              <td>الدرجة</td>
              <?php $exx = "SELECT * FROM grades";
$ex11 = $connection->query($exx);

while($ex22 = $ex11-> fetch_assoc())
{
  echo "<td>";
	echo  $ex22['result'];
  echo "</td>";
}
?>
              
            </tr>
         
        </table>
        <section class="blog-posts">
         
     

        </section>

      </article>




      <!--
        - #CONTACT
      -->

      <article class="contact" data-page="الاشعارات">

        <header>
          <h2 class="h2 article-title">الاشعارات</h2>
        </header>
        
     
        <section class="contact-form">
          <style>
            .toggle-article {
                display: none;
            }
        </style>
        <script>
            function toggleArticle(articleId) {
                var article = document.getElementById(articleId);
                var otherArticles = document.getElementsByClassName('toggle-article');
    
                // Close all other articles
                for (var i = 0; i < otherArticles.length; i++) {
                    if (otherArticles[i].id !== articleId) {
                        otherArticles[i].style.display = 'none';
                    }
                }
    
                // Toggle the selected article
                article.style.display = (article.style.display === 'none') ? 'block' : 'none';
            }
        </script>
    </head>
    <body>
        <button class="btns1" onclick="toggleArticle('article1')">إشعارات</button>
        
    
        <article id="article1" class="toggle-article">

          <h1> <?php $msg = "SELECT * FROM notes";
$msg1 = $connection->query($msg);

while($msg2 = $msg1-> fetch_assoc())
{
  echo "<td>";
	echo  $msg2['note_text'];
  echo "</td>";
}
?></h1>
       

           </article>
    
       
 
            
          
 
        </section>

      </article>
      
      
      <article class="contact" data-page="استفسارات">

        <header>
          <h4 class="h2 article-title">ملاحظات المدرسين</h4>
        </header>

       
<section class="contact-form">

<h3 class="h3 form-title">إستفسارات</h3>

<form action="#" class="form" data-form  method="post">

  <div class="input-wrapper">
 
    <input type="text" name="fullname"  method="post" class="form-input" placeholder="الاسم الكامل" required data-form-input>
  

    <input type="password" name="email"  class="form-input" placeholder="ID" required data-form-input>
  </div>
 
  <textarea name="message" class="form-input"  placeholder="اكتب الرساله" required data-form-input></textarea>

  <button class="form-btn" type="submit"  name="submit" disabled data-form-btn>
    <ion-icon name="paper-plane"></ion-icon>
    <span>ارسال</span>
  </button>
 
  <?php
$name = $_POST["fullname"];
$pass = $_POST['email'];
$msg = $_POST['message'];
if($_POST['submit'])
{
	if($name == '' &&  $pass == ''){
		echo "<p align=\"center\">يجب ادخال البيانات</p>";
	}
	else{
		$sql = "INSERT INTO 'notes' ('sender_name','id_note','note_text') VALUES ('$name','$msg','$pass')";
		
		if(mysql_query($sql))
		{
			echo "<p align=\"center\">تم ادخال البيانات</p>";
	}
	else{
		echo "<p align=\"center\">يوجد اخطاء</p>";
	}
		
		
	}
	
	
}
?>
 </form>

</section>


       
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