<?php
// استعلام لاسترداد جميع الصفوف من جدول classes
$query = "SELECT class_name FROM classes";

// استدعاء الوظيفة المسؤولة عن تنفيذ الاستعلام واسترجاع النتائج
$result = mysqli_query($connection, $query);

// التحقق من وجود نتائج
if (mysqli_num_rows($result) > 0) {
    // إنشاء قائمة HTML المنسدلة
    echo '<select>';
    
    // عرض أسماء الصفوف فقط
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<option>' . $row['class_name'] . '</option>';
    }
    
    echo '</select>';
} else {
    echo 'لا توجد صفوف متاحة حاليًا.';
}

// إغلاق الاتصال بقاعدة البيانات
mysqli_close($connection);
?>
<?php
// استعلام لاسترداد جميع الصفوف من جدول classes
$query = "SELECT sec_name FROM sections";

// استدعاء الوظيفة المسؤولة عن تنفيذ الاستعلام واسترجاع النتائج
$result = mysqli_query($connection, $query);

// التحقق من وجود نتائج
if (mysqli_num_rows($result) > 0) {
    // إنشاء قائمة HTML المنسدلة
    echo '<select>';
    
    // عرض أسماء الصفوف فقط
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<option>' . $row['sec_name'] . '</option>';
    }
    
    echo '</select>';
} else {
    echo 'لا توجد شعب متاحة حاليًا.';
}

// إغلاق الاتصال بقاعدة البيانات
mysqli_close($connection);
?>