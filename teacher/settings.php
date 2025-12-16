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
            <button class="navbar-link  active" data-nav-link>إعدادات الحساب</button>
          </li>


          <li class="navbar-item">
            <a href="index.php"> <button class="navbar-link" data-nav-link>الصفحه الرئيسية</button></a>
          </li>
        </ul>

      </nav>
    




      <!--
        - #ABOUT
      -->
      

    
  <article class="about active" data-page="إعدادات الحساب">
  <header>
    <h2 class="h2 article-title">إعدادات الحساب</h2>
  </header>
  <section class="about-text" dir="rtl">
    <section class="contact-form">
      <h3 class="h3 form-title">تغيير كلمة المرور</h3>
      <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // استلام القيم المرسلة من النموذج
        $oldPassword = $_POST['old_password'];
        $newPassword = $_POST['new_password'];
        $confirmPassword = $_POST['confirm_password'];
        
       
/*
        $dir = "images/";
	$target_file = $dir.basename($_FILES["image"]["name"]);
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        $file=$_FILES['image']['tmp_name'];
        $picture=$_FILES['image']['name'];
        if($picture == "")
        {
          echo "<script>alert('من فضلك اختر صورة')</script>";
        } else {
      
          if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
              echo "<script>alert('PNG, JPG, and JPEG are allowed!')</script>";
          } else 
          $image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
			$image_name= addslashes($_FILES['image']['name']);

			move_uploaded_file($_FILES["image"]["tmp_name"], $dir . $_FILES["image"]["name"]);

        }

*/

          
        // التحقق من صحة كلمة المرور القديمة
        $user_id = 10; // استبدلها بالقيمة المناسبة لمعرف المستخدم الحالي
        $sql = "SELECT user_pass FROM users WHERE user_id='$user_id'";
        $result = $connection->query($sql);

       

        if ($result->num_rows > 0) {
          $row = $result->fetch_assoc();
          $storedPassword = $row['user_pass'];

          if ($oldPassword == $storedPassword) {
            // التحقق من تطابق كلمة المرور الجديدة وتأكيدها
            if ($newPassword == $confirmPassword) {
              // تحديث كلمة المرور الجديدة في قاعدة البيانات
              $sql = "UPDATE users SET user_pass='$newPassword' WHERE user_id='$user_id'";
              if ($connection->query($sql) === TRUE) {
                echo "تم تحديث كلمة المرور بنجاح!";
              } else {
                echo "حدث خطأ أثناء تحديث كلمة المرور: " . $connection->error;
              }
            } else {
              echo "كلمة المرور الجديدة وتأكيدها غير متطابقتين!";
            }
          } else {
            echo "كلمة المرور القديمة غير صحيحة!";
          }
        } else {
          echo "حدث خطأ أثناء جلب كلمة المرور الحالية من قاعدة البيانات";
        }
      }
      ?>
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="form" >
      
      <div class="input-wrapper">
          <input type="password" name="old_password" class="form-input" placeholder="كلمة المرور القديمة" required>
        
   
          <input type="password" name="new_password" class="form-input" placeholder="كلمة المرور الجديدة" required>
       </div> <center>
      
          <input type="password" name="confirm_password" class="form-input" placeholder="تأكيد كلمة المرور الجديدة" required>
        </center>
        <br>
        <div class="input-wrapper">
          <button type="submit"  class="btnreport">حفظ كلمة المرور</button>
        </div>
         
        
            

          
      </form>
      <style>
    
    .custom{
      background: var(--bg-gradient-jet);
      position: relative;
      padding: 0px 15%;
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
weight:100%;
    
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
      left: 5em;
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
margin-top:-25px;

    }
    
       </style>
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


     <center>
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
    </center>
    </section>
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
