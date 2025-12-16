<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['imageData'])) {
    $imageData = $_POST['imageData'];
    $imageData = str_replace('data:image/png;base64,', '', $imageData);
    $imageData = str_replace(' ', '+', $imageData);
    $decodedImage = base64_decode($imageData);
    $filename = 'uploads/new_image.png';  // اسم الملف الجديد

    if (file_put_contents($filename, $decodedImage)) {
        echo 'تم حفظ الصورة بنجاح.';
    } else {
        echo 'حدث خطأ أثناء حفظ الصورة.';
    }
}
?>
