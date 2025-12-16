<!DOCTYPE html>
<html>
<head>
    <title>سجل الدرجات الشهرية</title>
</head>
<body>
    <h1>سجل الدرجات الشهرية</h1>

    <form method="POST" action="insert_grade.php">
        <label for="class">اختر الصف الدراسي:</label>
        <select id="class" name="class">
            <option value="1">الصف الأول</option>
            <option value="2">الصف الثاني</option>
            <option value="3">الصف الثالث</option>
        </select>

        <label for="student">اسم الطالب:</label>
        <input type="text" id="student" name="student">

        <label for="grade">الدرجة:</label>
        <input type="text" id="grade" name="grade">

        <input type="submit" value="إضافة">
    </form>

    <table>
        <thead>
            <tr>
                <th>اسم الطالب</th>
                <th>الدرجة</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // اتصال بقاعدة البيانات
            $host = 'localhost';
            $username = 'اسم_المستخدم';
            $password = 'كلمة_المرور';
            $dbname = 'اسم_قاعدة_البيانات';

            $conn = new mysqli($host, $username, $password, $dbname);
            if ($conn->connect_error) {
                die("فشل الاتصال: " . $conn->connect_error);
            }

            // استعراض البيانات
            $sql = "SELECT * FROM grades";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["student"] . "</td><td>" . $row["grade"] . "</td></tr>";
                }
            } else {
                echo "<tr><td colspan='2'>لا توجد بيانات لعرضها</td></tr>";
            }

            $conn->close();
            ?>
        </tbody>
        <tfoot>
            <tr>
                <td>المجموع</td>
                <td>
                    <?php
                    // اتصال بقاعدة البيانات
                    $conn = new mysqli($host, $username, $password, $dbname);
                    if ($conn->connect_error) {
                        die("فشل الاتصال: " . $conn->connect_error);
                    }

                    // حساب المجموع
                    $sql = "SELECT SUM(grade) AS total FROM grades";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        echo $row["total"];
                    } else {
                        echo "0";
                    }

                    $conn->close();
                    ?>
                </td>
            </tr>
            <tr>
                <td>المعدل</td>
                <td>
                    <?php
                    // اتصال بقاعدة البيانات
                    $conn = new mysqli($host, $username, $password, $dbname);
                    if ($conn->connect_error) {
                        die("فشل الاتصال: " . $conn->connect_error);
                    }

                    // حساب المعدل
                    $sql = "SELECT AVG(grade) AS average FROM grades";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        echo $row["average"];
                    } else {
                        echo "0";
                    }

                    $conn->close();
                    ?>
                </td>
            </tr>
        </tfoot>
    </table>
</body>
</html>