<?php
include "connection.php";
mysqli_set_charset($connection,'utf8');
?>
<!DOCTYPE html>
<html>

<head>
    <title>بيانات المدرسين</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <h1>بيانات المدرسين</h1>

    <?php
    // الاتصال بقاعدة البيانات
   
    if (!$connection) {
        die('فشل الاتصال بقاعدة البيانات: ' . mysqli_connect_error());
    }

    // استعلام SQL لاسترجاع بيانات المدرسين
    $query = "SELECT * FROM teachers";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die('خطأ في استعلام قاعدة البيانات: ' . mysqli_error($connection));
    }

    // عرض البيانات في جدول
    if (mysqli_num_rows($result) > 0) {
        echo '<table>
                <tr>
                    <th>الرقم</th>
                    <th>الاسم</th>
                    <th>الهاتف</th>
                    <th>المنصب  </th>
                </tr>';

        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>
                    <td>' . $row['tea_id'] . '</td>
                    <td>' . $row['tea_name'] . '</td>
                    <td>' . $row['phone_tea'] . '</td>
                    <td>' . $row['tea_postion'] . '</td>
                </tr>';
        }

        echo '</table>';
    } else {
        echo 'لا توجد بيانات متاحة.';
    }

    // إغلاق اتصال قاعدة البيانات
    mysqli_close($connection);
    ?>
</body>

</html>