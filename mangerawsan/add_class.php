<?php
// اتصال بقاعدة البيانات
$servername = "localhost"; // اسم الخادم
$username = "root"; // اسم المستخدم للوصول إلى قاعدة البيانات
$password = ""; // كلمة مرور المستخدم
$dbname = "schools"; // اسم قاعدة البيانات

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("فشل الاتصال بقاعدة البيانات: " . $conn->connect_error);
}

// استلام البيانات المرسلة من النموذج
$class_name = $_POST['class_name'];

// إدخال البيانات في جدول الصفوف
$sql = "INSERT INTO classes (class_name) VALUES ('$class_name')";
if ($conn->query($sql) === TRUE) {
    echo "تمت إضافة الصف بنجاح";
} else {
    echo "حدث خطأ أثناء إضافة الصف: " . $conn->error;
}

