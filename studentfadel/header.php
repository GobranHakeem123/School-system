<?php
include "connection.php";
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