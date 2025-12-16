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
<script>
//اختيار صورة المستخدم
function previewImage(event) {
  var imageContainer = document.getElementById('image-preview');
  imageContainer.innerHTML = '';  // حذف الصورة التلقائية الحالية (إذا كانت موجودة)

  var file = event.target.files[0];
  var reader = new FileReader();
  reader.onload = function (e) {
      var img = document.createElement('img');
      img.setAttribute('src', e.target.result);
      img.setAttribute('alt', 'الصورة المختارة');
      img.setAttribute('style', 'max-width: 100%; max-height: 100%;');
      imageContainer.appendChild(img);
      saveImage(e.target.result);  // حفظ الصورة على الخادم
  };
  reader.readAsDataURL(file);
}

function saveImage(imageData) {
  var xhr = new XMLHttpRequest();
  xhr.open('POST', 'save_image.php', true);
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  xhr.onreadystatechange = function () {
      if (xhr.readyState === 4 && xhr.status === 200) {
          console.log('تم حفظ الصورة بنجاح.');
      }
  };
  xhr.send('imageData=' + imageData);
}
</script>
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

<a href="settings.php"><botton class="title">إعدادات الحساب</botton></a>
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