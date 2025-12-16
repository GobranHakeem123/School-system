<?php
// تعيين قيمة الصف الدراسي من النموذج
$classId = $_POST['class'];

// تعيين متغيرات اتصال قاعدة البيانات
$host = 'اسم المستضيف';
$username = 'اسم المستخدم';
$password = 'كلمة المرور';
$dbname = 'اسم قاعدة البيانات';

// إنشاء اتصال بقاعدة البيانات
$conn = new mysqli($host, $username, $password, $dbname);

// التحقق من نجاح الاتصال
if ($conn->connect_error) {
    die("فشل الاتصال بقاعدة البيانات: " . $conn->connect_error);
}


// إدخال بيانات الطالب في جدول "students"

$studentName = $_POST['studentName'];
$guardianName = $_POST['guardianName'];

$sql = "INSERT INTO students (studentName, guardianName, classId) VALUES ('$studentName', '$guardianName', $classId)";

if ($conn->query($sql) === TRUE) {
    echo "تم إضافة الطالب بنجاح";
} else {
    echo "حدث خطأ أثناء إضافة الطالب: " . $conn->error;
}

// إغلاق اتصال قاعدة البيانات
$conn->close();
?>