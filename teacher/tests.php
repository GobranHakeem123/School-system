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
            <button class="navbar-link  active" data-nav-link>الإختبارات</button>
          </li>


          <li class="navbar-item">
            <a href="index.php"> <button class="navbar-link" data-nav-link>الصفحه الرئيسية</button></a>
          </li>
        </ul>

      </nav>





      <!--
        - #ABOUT
      -->

      <article class="about  active" data-page="الإختبارات">

        <header>
          <h2 class="h2 article-title">الإختبارات</h2>
        </header>

        <section class="about-text"  dir="rtl">
<style>
  table{
    display: block;
  }
</style>
          <button id="monthlyButton">اختبارات شهرية</button>
          <button id="oralButton">اختبارات شفهية</button>
          <button id="midtermButton">اختبارات نصفية</button>
          
          <div id="tableContainer"></div>
          
          <script>
            // الحصول على زر الاختبارات الشهرية وإضافة حدث النقر عليه
            const monthlyButton = document.getElementById("monthlyButton");
            monthlyButton.addEventListener("click", displayMonthlyTable);
          
            // الحصول على زر الاختبارات الشفهية وإضافة حدث النقر عليه
            const oralButton = document.getElementById("oralButton");
            oralButton.addEventListener("click", displayOralTable);
          
            // الحصول على زر الاختبارات النصفية وإضافة حدث النقر عليه
            const midtermButton = document.getElementById("midtermButton");
            midtermButton.addEventListener("click", displayMidtermTable);
          
            // عرض جدول الاختبارات الشهرية
            function displayMonthlyTable() {
              const tableContainer = document.getElementById("tableContainer");
              tableContainer.innerHTML = `
                <table>
                  <tr>
                    <th>اسم الطالب</th>
                    <th>درجة الشهر الأول</th>
                    <th>درجة الشهر الثاني</th>
                    <th>درجة الشهر الثالث</th>
                    <th>جمع الدرجات</th>
                  </tr>
                  <tr>
                    <td>${getStudentName()}</td>
                    <td><input type="number" oninput="calculateTotalGrade(this)" /></td>
                    <td><input type="number" oninput="calculateTotalGrade(this)" /></td>
                    <td><input type="number" oninput="calculateTotalGrade(this)" /></td>
                    <td><input type="number" readonly /></td>
                  </tr>
                </table>
              `;
            }
          
            // عرض جدول الاختبارات الشفهية
            function displayOralTable() {
              const tableContainer = document.getElementById("tableContainer");
              tableContainer.innerHTML = `
                <table>
                  <tr>
                    <th>اسم الطالب</th>
                    <th>الشهر الأول</th>
                    <th>درجة الشهر الأول</th>
                    <th>الشهر الثاني</th>
                    <th>درجة الشهر الثاني</th>
                    <th>الشهر الثالث</th>
                    <th>درجة الشهر الثالث</th>
                    <th>جمع الدرجات</th>
                  </tr>
                  <tr>
                    <td>${getStudentName()}</td>
                    <td><input type="text" /></td>
                    <td><input type="number" oninput="calculateTotalGrade(this)" /></td>
                    <td><input type="text" /></td>
                    <td><input type="number" oninput="calculateTotalGrade(this)" /></td>
                    <td><input type="text" /></td>
                    <td><input type="number" oninput="calculateTotalGrade(this)" /></td>
                    <td><input type="number" readonly /></td>
                  </tr>
                </table>
              `;
            }
          
            // عرض جدول الاختبارات النصفية
            function displayMidtermTable() {
              const tableContainer = document.getElementById("tableContainer");
              tableContainer.innerHTML = `
                <table>
                  <tr>
                    <th>اسم الطالب</th>
                    <th>درجة الاختبار</th>
                    <th>النتيجة</th>
                  </tr>
                  <tr>
                    <td>${getStudentName()}</td>
                    <td><input type="number" oninput="calculateTotalGrade(this)" /></td>
                    <td>
                      <select>
                        <option value="ناجح">ناجح</option>
                        <option value="راسب">راسب</option>
                        <option value="مقبول">مقبول</option>
                        <option value="ضعيف">ضعيف</option>
                      </select>
                    </td>
                  </tr>
                </table>
              `;
            }
          
            // دالة لجمع الدرجات
            function calculateTotalGrade(input) {
              const row = input.parentNode.parentNode;
              const gradeInputs = row.querySelectorAll("input[type='number']");
              let totalGrade = 0;
              for (let i = 0; i < gradeInputs.length; i++) {
                const grade = parseInt(gradeInputs[i].value);
                if (!isNaN(grade)) {
                  totalGrade += grade;
                }
              }
              const totalGradeInput = row.querySelector("input[readonly]");
              totalGradeInput.value = totalGrade;
            }
          
            // دالة لاستدعاء اسم الطالب من قاعدة البيانات (يجب استبدال هذا الجزء بطريقة فعلية لاسترداد الاسم من قاعدة البيانات)
            function getStudentName() {
              return "اسم الطالب";
            }
          </script>
        </section>



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