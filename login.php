<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <title>الدخول</title>
</head>
<body>
    
     <div class="container">
        <div class="box">
        <div class="box-login" id="login">
            <div class="top-header">
                <center>
                    <img class="an" src="a.png" alt="">
                </center>
                <h3>مرحباً بك</h3>
                <h2>مدرسة الرواد ترحب بكم</h2>
            </div>
            <div class="input-group">

            <?php
include "connection.php"; // تعديل لتوافق معلومات اتصال قاعدة البيانات الخاصة بك

// التحقق من حالة النموذج المرسل
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $phoneNumber = $_POST['phone_number'];
    $password = $_POST['password'];

    // التحقق من نوع الحساب وتنفيذ التحقق المناسب
    $studentQuery = "SELECT * FROM students WHERE phone_id = '$phoneNumber' AND pass_stu = '$password'";
    $teacherQuery = "SELECT * FROM teachers WHERE phone_tea = '$phoneNumber' AND pass_tea = '$password'";
    $parentQuery = "SELECT * FROM guardians WHERE phone_par = '$phoneNumber' AND pass_par = '$password'";

    $studentResult = $connection->query($studentQuery);
    $teacherResult = $connection->query($teacherQuery);
    $parentResult = $connection->query($parentQuery);

    if ($studentResult->num_rows > 0) {
        // تحويل المستخدم إلى صفحة الطالب
        header("Location: student/index.php", true);
        exit();
    } elseif ($teacherResult->num_rows > 0) {
        // تحويل المستخدم إلى صفحة المدرس
        header("Location: teacher/index.php", true);
        exit();
    } elseif ($parentResult->num_rows > 0) {
        // تحويل المستخدم إلى صفحة ولي الأمر
        header("Location: father/index.php", true);
        exit();
    }

    echo '<h1>'."فشل تسجيل الدخول. يرجى التحقق من رقم الهاتف وكلمة المرور.".'<h1>';
}
?>

            <form id="loginform" action="" method="POST">
<div class="input-field">
   <input type="text" class="input-box"  id="phone" oninput="restrictToNumbers(this)" name="phone_number"  inputmode="numeric" placeholder="رقم الهاتف" required>
   
</div>
<div class="input-field">
   <input type="password" class="input-box" id="logPassword" name="password" placeholder="كلمة المرور " required>
   
   <div class="eye-area">
    <div  class="eye-box" onclick="myLogPassword()">
     <i class="fa-regular fa-eye" id="eye"></i>
     <i class="fa-regular fa-eye-slash" id="eye-slash"></i>
  </div>
</div>
</div>
<div class="remember">
   <input type="checkbox" id="formCheck" class="check">
   <label for="formCheck">تذكرني</label>
</div>
<div class="input-field">
   <input type="submit" class="input-submit" name="log" value="تسجيل الدخول" required>
</div>
<div class="forgot">
   <a href="#">نسيت الرمز؟</a>
</div>
</form>
</div>
</div>
<?php
include "connection.php"; // تعديل لتوافق معلومات اتصال قاعدة البيانات الخاصة بك

// التحقق من حالة النموذج المرسل
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $accountNumber = $_POST['account_number'];
    $phoneNumber = $_POST['phone_number'];

    // التحقق من نوع الحساب وتنفيذ التحقق المناسب
    $studentQuery = "SELECT * FROM students WHERE account_stu = '$accountNumber' AND phone_id = '$phoneNumber'";
    $teacherQuery = "SELECT * FROM teachers WHERE account_tea = '$accountNumber' AND phone_tea = '$phoneNumber'";
    $parentQuery = "SELECT * FROM guardians WHERE account_par = '$accountNumber' AND phone_par = '$phoneNumber'";

    $studentResult = $connection->query($studentQuery);
    $teacherResult = $connection->query($teacherQuery);
    $parentResult = $connection->query($parentQuery);

    if ($studentResult->num_rows > 0) {
        // تحويل المستخدم إلى صفحة الطالب
        header("Location:student/index.php",true);
        exit();
    } elseif ($teacherResult->num_rows > 0) {
        // تحويل المستخدم إلى صفحة المدرس
        header("Location:teacher/index.php",true);
        exit();
    } elseif ($parentResult->num_rows > 0) {
        // تحويل المستخدم إلى صفحة ولي الأمر
        header("Location:father/index.php",true);
        exit();
    } else {
        echo '<h1>'."فشل تسجيل الدخول. يرجى التحقق من رقم الحساب ورقم الهاتف.".'<h1>';
    }
}
?>
            <!---------------------------- register --------------------------------------->

          <div class="box-register" id="register">
            <div class="top-header">
                <center>
                    <img class="an" src="a.png" alt="">
                </center>
                <h3>الدخول لأول مرة</h3>
                <h2>مدرسة الرواد ترحب بكم</h2>
            </div>
            <div class="input-group">
            <form id="loginform" action="" method="POST">
                 <div class="input-field">
                    <input type="text" class="input-box" id="regphone" name="phone_number" oninput="restrictToNumbers(this)"  inputmode="numeric" placeholder="رقم الهاتف" required>
                   
                 </div>
                 <div class="input-field">
                    <input type="password" class="input-box" id="num_account" name="account_number"    inputmode="numeric" placeholder="رقم الحساب"oninput="restrictToNumbers(this)"    required>
                   
                    <div class="eye-area">
                      <div  class="eye-box" onclick="myRegPassword()">
                       <i class="fa-regular fa-eye" id="eye-2"></i>
                       <i class="fa-regular fa-eye-slash" id="eye-slash-2"></i>
                    </div>
                  </div>
                 </div>
                 
                 <div class="remember">
                    <input type="hidden" id="formCheck2" class="check">
                    <label for="formCheck2">رقم الحساب يتم اخذه من اداره المدرسة</label>
                 </div>
                 <div class="input-field">
                    <input type="submit" class="input-submit" name="login_submit" value="إنشاء الحساب" required>
                 </div>
                 </form>
            </div>
         </div>
         <div class="switch">
            <a href="#" class="login active" onclick="login()">تسجيل الدخول</a>
            <a href="#" class="register" onclick="register()">الدخول لأول مرة</a>
            <div class="btn-active" id="btn"></div>
         </div>
         
        </div>
        
     </div>
<script>
function restrictToNumbers(inputElement) {
    inputElement.value = inputElement.value.replace(/[^0-9]/g, '');
}

function myLogPassword() {
    var logPasswordInput = document.getElementById("logPassword");
    var eyeIcon = document.getElementById("eye");
    var eyeSlashIcon = document.getElementById("eye-slash");
    
    if (logPasswordInput.type === "password") {
        logPasswordInput.type = "text";
        eyeIcon.style.display = "none";
        eyeSlashIcon.style.display = "block";
    } else {
        logPasswordInput.type = "password";
        eyeIcon.style.display = "block";
        eyeSlashIcon.style.display = "none";
    }
}
</script>
     <script>
        var x = document.getElementById('login');
        var y = document.getElementById('register');
        var z = document.getElementById('btn');

        function login(){
            x.style.left = "27px";
            y.style.right = "-350px";
            z.style.left = "0px";
        }
        function register(){
            x.style.left = "-350px";
            y.style.right = "25px";
            z.style.left = "150px";
        }


   // View Password codes

         
      
        function myLogPassword(){

         var a = document.getElementById("logPassword");
         var b = document.getElementById("eye");
         var c = document.getElementById("eye-slash");

         if(a.type === "password"){
            a.type = "text";
            b.style.opacity = "0";
            c.style.opacity = "1";
         }else{
            a.type = "password";
            b.style.opacity = "1";
            c.style.opacity = "0";
         }

        }

        function myRegPassword(){
    
         var d = document.getElementById("num_account");
         var b = document.getElementById("eye-2");
         var c = document.getElementById("eye-slash-2");
 
         if(d.type === "password"){
            d.type = "text";
            b.style.opacity = "0";
            c.style.opacity = "1";
         }else{
            d.type = "password";
            b.style.opacity = "1";
            c.style.opacity = "0";
         }

        }
        //السماح بإدخال الارقام فقط
        function restrictToNumbers(input) {
      var regex = /[^0-9]/g;
      input.value = input.value.replace(regex, '');
    }

    // تحقق من صحة إدخال الأرقام
    function validateInput() {
      var phoneNumber = document.getElementById('regphone').value;
      var accountNumber = document.getElementById('num_account').value;

      var phoneNumberRegex = /^\d+$/;
      var accountNumberRegex = /^\d+$/;

      if (!phoneNumberRegex.test(phoneNumber) || !accountNumberRegex.test(accountNumber)) {
        alert('يرجى إدخال أرقام صحيحة فقط.');
        return false;
      }

      // تقدم بنجاح
      return true;
    }
     </script>
     <style type="text/css" media="all">
         /* POPPINS FONT */
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');
:root{
    --bg-gradient-onyx: linear-gradient(to bottom right,
      hsl(157, 68%, 23%) 3%,
      hsl(128, 24%, 50%) 97%);
      --bg-gradient-jet: linear-gradient(to bottom right,
      hsl(179, 48%, 16%) 0%,
      hsla(240, 2%, 11%, 0) 100%), hsl(240, 2%, 13%);


}

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'poppins',sans-serif;
}
body{
    /* background: linear-gradient(#b8abea,#907cd4,#6c4be2); */
    background: url("a.png");
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
    padding: 20px;
   background: var(--bg-gradient-jet);
}
.container{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 120٪;
    margin-top: 20px;
   
}
.box{
    display: flex;
    flex-direction: row;
    position: relative;
    padding: 60px 20px 30px 20px;
    height: 620px;
    width: 350px;
    border-radius: 30px;
    background-color: rgba(250, 250, 250, 0.119);
    -webkit-backdrop-filter: blur(15px);
    backdrop-filter: blur(15px);
    border: 3px solid rgba(21, 62, 3, 0.312);
    overflow: hidden;
    
}
.box-login{
    position: absolute;
    width: 85%;
    left: 27px;
    transition: .5s ease-in-out;
}
.box-register{
    position: absolute;
    width: 85%;
    right: -350px;
    transition: .5s ease-in-out;
}
.top-header{
    text-align: center;
    margin: 30px 0;
}
.top-header h3{
    font-size: 22px;
    font-weight: 600;
    margin-bottom: 8px;
}
.input-group{
     width: 100%;
    
}
.input-field{
    margin: 12px 0;
    position: relative;
}

.input-box{
    width: 100%;
    height: 50px;
    font-size: 15px;
    color: #000000;
    border: none;
    border-radius: 10px;
    padding: 7px 45px 0 20px;
    background: #fff;
    backdrop-filter: blur(2px);
    outline: none;
    border: 2px solid rgba(10, 10, 10, 0.549);
}
.input-field label{
    position: absolute;
    left: 20px;
    top: 15px;
    font-size: 15px;
    transition: .3s ease-in-out;
}
.input-box:focus ~ label,.input-box:valid ~ label{
    top: 2px;
    font-size: 10px;
    color: #c12828;
    font-weight: 500;
}
.remember{
    display: flex;
    font-size: 13px;
    margin: 12px 0 30px 0;
    color: #000000;
    
}
.check{
    margin-right: 8px;
    width: 14px;
    text-align: center;
    color: black;
}
.input-submit{
    width: 100%;
    height: 50px;
    font-size: 15px;
    font-weight: 500;
    border: none;
    border-radius: 10px;
    background: var(--bg-gradient-onyx);
    color: #fff;
    box-shadow: 0px 4px 20px rgba(62, 9, 9, 0.144);
    cursor: pointer;
    transition: .4s;
}
.input-submit:hover{
    background:  var(--bg-gradient-jet);
    box-shadow: 0px 4px 20px rgba(62, 9, 9, 0.32);
}
.forgot{
    text-align: center;
    font-size: 14px;
    font-weight: 500;
    margin-top: 10px;
}
.forgot a{
    text-decoration: none;
    color: #c12828;
}
.switch{
    display: flex;
    position: absolute;
    bottom: 50px;
    left: 25px;
    width: 85%;
    height: 50px;
    background: rgba(255, 255, 255, 0.16);
    backdrop-filter: 10px;
    border-radius: 10px;
    box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
    overflow: hidden;
}
.switch a{
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 14px;
    font-weight: 500;
    color: #fff;
    text-decoration: none;
    width: 50%;
    height: 50px;
    border-radius: 10px;
    z-index: 10;
}
#btn{
    position: absolute;
    bottom: 0px;   
    left: 0px;
    width: 145px;
    height: 50px;
    background: var(--bg-gradient-jet);
    border-radius: 10px;
    box-shadow: 2px 0px 12px rgba(0, 0, 0, 0.1);
    transition: .5s ease-in-out;
}



.eye-area{
    position: absolute;
    top: 25px;
    right: 25px;
}
.eye-box{
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    
}
i{
    position: absolute;
    color: #444444;
    cursor: pointer;
}
#eye,#eye-2{
    opacity: 1;
}
#eye-slash,#eye-slash-2{
    opacity: 0;}
@media only screen and (max-width: 576px){
    .box{
        margin: 0 5px;
    }
    #btn{
        position: absolute;
        width: 153px;
    }
}

    
img{
    width: 65px;
    height: 65px;
    margin-bottom: 5px;
    border-radius: 50%;
    display: flex;
    justify-content: center;
   
}

.an{
width: 100px;
height: 100px;
margin-top: -70px;
}
#loginpass{
    margin-top: 70%;
}

     </style>
</body>
</html>
