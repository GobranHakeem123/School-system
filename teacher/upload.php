<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['image'])) {
    $targetDirectory = 'uploads/';  // المجلد الذي ستتم فيه حفظ الصورة
    $targetFile = $targetDirectory . basename($_FILES['image']['name']);
    $uploadOk = true;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // التحقق من أن الملف هو صورة
    $check = getimagesize($_FILES['image']['tmp_name']);
    if ($check === false) {
        echo 'الملف المحدد ليس صورة.';
        $uploadOk = false;
    }

    // التحقق من أن الصورة غير موجودة بالفعل
    if (file_exists($targetFile)) {
        echo 'الصورة موجودة بالفعل.';
        $uploadOk = false;
    }

    // التحقق من حجم الصورة (يمكنك تعديل الحجم حسب الاحتياجات)
    if ($_FILES['image']['size'] > 500000) {
        echo 'حجم الصورة كبير جدًا.';
        $uploadOk = false;
    }

    // قبول أنواع الملفات التي ترغب فيها (يمكنك تعديلها حسب الاحتياجات)
    if ($imageFileType !== 'jpg' && $imageFileType !== 'png' && $imageFileType !== 'jpeg' && $imageFileType !== 'gif') {
        echo 'يسمح فقط بملفات JPG, JPEG, PNG, GIF.';
        $uploadOk = false;
    }

    // التحقق من حالة الرفع
    if ($uploadOk) {
        if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)) {
            echo 'تم رفع الصورة بنجاح.';
            echo '<br>';
            echo '<img src="' . $targetFile . '" alt="الصورة المرفوعة">';
        } else {
            echo 'حدث خطأ أثناء رفع الصورة.';
        }
    }
}
?>
