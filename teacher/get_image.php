<?php
$filename = 'uploads/new_image.png';  // اسم الملف الجديد

// التحقق من وجود الصورة
if (file_exists($filename)) {
    // إرسال رأس الاستجابة المناسب لعرض الصورة
    header('Content-Type: image/png');
    header('Content-Length: ' . filesize($filename));

    // عرض الصورة
    readfile($filename);
} else {
    // إرسال الصورة التلقائية في حالة عدم وجود الصورة الجديدة
    $defaultImage = 'a.png';
    header('Content-Type: image/jpeg');
    header('Content-Length: ' . filesize($defaultImage));
    readfile($defaultImage);
}
?>
