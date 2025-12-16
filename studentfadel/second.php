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
            <button class="navbar-link  active" data-nav-link>الواجبات</button>
          </li>
         
          <li class="navbar-item">
            <button class="navbar-link" onclick="goback()" data-nav-link>الرجوع الى الصفحة الرئيسية</button>
          </li>
        
<!--
          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>الحظور والغياب</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>النتائج</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>الاشعارات</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>ملاحظات المدرسين</button>
          </li>
-->
        </ul>

      </nav>





      <!--
        - #ABOUT
      -->

      <article class="about  active" data-page="الواجبات">

        <header>
          <h2 class="h2 article-title">جميع الواجبات</h2>
        </header>

      
<body>
  <div class="select-subject-form">
    <select id="subjectSelect" onchange="displayAssignments()"> 
      <option value="">اختر المادة</option>
      <option value="رياضيات">رياضيات</option>
      <option value="جغرافيا">جغرافيا</option>
      <option value="لغة عربية">لغة عربية</option>
      <option value="قرآن">قرآن</option>
      <option value="تربية وطنية">تربية وطنية</option>
    </select>
  </div>

  <div id="assignmentsTable" class="assignments-table">
    <h2 id="subjectTitle"></h2>
    <table>
      <tr>
        <th>اسم الواجب</th>
        <th>تاريخ الواجب</th>
      </tr>
    </table>
  </div>

  <script> 
    var assignments = {
      "رياضيات": [
        { name: "واجب 1", date: "2024-02-15" },
        { name: "واجب 2", date: "2024-02-18" }
      ],
      "جغرافيا": [
        { name: "واجب 3", date: "2024-02-20" },
        { name: "واجب 4", date: "2024-02-25" }
      ],
      "لغة عربية": [
        { name: "واجب 5", date: "2024-03-01" },
        { name: "واجب 6", date: "2024-03-05" }
      ],
      "قرآن": [
        { name: "واجب 5", date: "2024-03-01" },
        { name: "واجب 6", date: "2024-03-05" }
      ],
      "تربية وطنية": [
        { name: "واجب 5", date: "2024-03-01" },
        { name: "واجب 6", date: "2024-03-05" }
      ]
      
    };

    function displayAssignments() {
      var subjectSelect = document.getElementById('subjectSelect');
      var subject = subjectSelect.value;
      var subjectTitle = document.getElementById('subjectTitle');
      var assignmentsTable = document.querySelector('#assignmentsTable table');
      var assignmentsTableDiv = document.getElementById('assignmentsTable');

      if (subject) {
        subjectTitle.textContent = subject;

        var assignmentsData = assignments[subject];
        assignmentsTable.innerHTML = '<tr><th>اسم الواجب</th><th>تاريخ الواجب</th></tr>';

        for (var i = 0; i < assignmentsData.length; i++) {
          var row = assignmentsTable.insertRow(-1);
          var nameCell = row.insertCell(0);
          var dateCell = row.insertCell(1);

          nameCell.innerHTML = assignmentsData[i].name;
          dateCell.innerHTML = assignmentsData[i].date;
        }

        assignmentsTableDiv.style.display = 'block';
      } else {
        assignmentsTableDiv.style.display = 'none';
      }
    }
  </script>
</body>


      </article>





      <!--
        - #RESUME
      -->

      <article class="resume" data-page="الرجوع الى الصفحة الرئيسية">

      </article>





      <!--
        - #PORTFOLIO
      -->

      <article class="portfolio" data-page="الحظور والغياب">


        

        <header>
          <h2 class="h2 article-title">الحضور</h2>
        </header>
  

        
        <section class="projects">
          <div class="filter-select-box">


            
            <button class="filter-select" data-select>

              <div class="select-value" data-selecct-value>Select category</div>

              <div class="select-icon">

                
                <ion-icon name="chevron-down"></ion-icon>
              </div>

            </button>

          </div>

          <table id="attendanceTable" dir="rtl">
            <thead>
              <tr>
                <th>اسم الطالب</th>
                <th>حالة الحضور</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>اسم الطالب</td>
                <td>حاضر / غائب</td>
              </tr>
              
            </tbody>
          </table>
        
        <!--  <button class="btns" onclick="processAttendance()">أرسل</button>
      -->
      <br>
      <hr>
      <br>
      <br>
      
      
      <h1 class="h11">
        التقرير الشهري للحظور والغياب
      </h1>  
      <br>
      <br>

      
      

 <table id="attendanceTable" dir="rtl">
            <thead>
              <tr>
                <th>عدد ايام الحظور</th>
                <th>عدد ايام الغياب</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>عدد الايام</td>
                <td>عدد الايام</td>
              </tr>
              
            </tbody>
          </table>




          <!----
          <ul class="filter-list">

            <li class="filter-item">
              <button class="active" data-filter-btn>All</button>
            </li>

            <li class="filter-item">
              <button data-filter-btn>Web design</button>
            </li>

            <li class="filter-item">
              <button data-filter-btn>Applications</button>
            </li>

            <li class="filter-item">
              <button data-filter-btn>Web development</button>
            </li>

          </ul>
-->
          <!--
            <ul class="select-list">

              <li class="select-item">
                <button data-select-item>All</button>
              </li>

              <li class="select-item">
                <button data-select-item>Web design</button>
              </li>

              <li class="select-item">
                <button data-select-item>Applications</button>
              </li>

              <li class="select-item">
                <button data-select-item>Web development</button>
              </li>

            </ul>


          <ul class="project-list">

            <li class="project-item  active" data-filter-item data-category="web development">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/project-1.jpg" alt="finance" loading="lazy">
                </figure>

                <h3 class="project-title">Finance</h3>

                <p class="project-category">Web development</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web development">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/project-2.png" alt="orizon" loading="lazy">
                </figure>

                <h3 class="project-title">Orizon</h3>

                <p class="project-category">Web development</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web design">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/project-3.jpg" alt="fundo" loading="lazy">
                </figure>

                <h3 class="project-title">Fundo</h3>

                <p class="project-category">Web design</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="applications">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/project-4.png" alt="brawlhalla" loading="lazy">
                </figure>

                <h3 class="project-title">Brawlhalla</h3>

                <p class="project-category">Applications</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web design">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/project-5.png" alt="dsm." loading="lazy">
                </figure>

                <h3 class="project-title">DSM.</h3>

                <p class="project-category">Web design</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web design">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/project-6.png" alt="metaspark" loading="lazy">
                </figure>

                <h3 class="project-title">MetaSpark</h3>

                <p class="project-category">Web design</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web development">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/project-7.png" alt="summary" loading="lazy">
                </figure>

                <h3 class="project-title">Summary</h3>

                <p class="project-category">Web development</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="applications">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/project-8.jpg" alt="task manager" loading="lazy">
                </figure>

                <h3 class="project-title">Task Manager</h3>

                <p class="project-category">Applications</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web development">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/project-9.png" alt="arrival" loading="lazy">
                </figure>

                <h3 class="project-title">Arrival</h3>

                <p class="project-category">Web development</p>

              </a>
            </li>

          </ul>
-->





        </section>

      </article>







      <!--
        - #BLOG
      -->

      <article class="blog" data-page="النتائج">

        <header>
          <h2 class="h2 article-title">نتائج الامتحانات</h2>
        </header>

        <section class="blog-posts">
        
          <!--
          <ul class="blog-posts-list">

            <li class="blog-post-item">
              <a href="#">

                <figure class="blog-banner-box">
                  <img src="./assets/images/blog-1.jpg" alt="Design conferences in 2022" loading="lazy">
                </figure>

                <div class="blog-content">

                  <div class="blog-meta">
                    <p class="blog-category">Design</p>

                    <span class="dot"></span>

                    <time datetime="2022-02-23">Fab 23, 2022</time>
                  </div>

                  <h3 class="h3 blog-item-title">Design conferences in 2022</h3>

                  <p class="blog-text">
                    Veritatis et quasi architecto beatae vitae dicta sunt, explicabo.
                  </p>

                </div>

              </a>
            </li>

            <li class="blog-post-item">
              <a href="#">

                <figure class="blog-banner-box">
                  <img src="./assets/images/blog-2.jpg" alt="Best fonts every designer" loading="lazy">
                </figure>

                <div class="blog-content">

                  <div class="blog-meta">
                    <p class="blog-category">Design</p>

                    <span class="dot"></span>

                    <time datetime="2022-02-23">Fab 23, 2022</time>
                  </div>

                  <h3 class="h3 blog-item-title">Best fonts every designer</h3>

                  <p class="blog-text">
                    Sed ut perspiciatis, nam libero tempore, cum soluta nobis est eligendi.
                  </p>

                </div>

              </a>
            </li>

            <li class="blog-post-item">
              <a href="#">

                <figure class="blog-banner-box">
                  <img src="./assets/images/blog-3.jpg" alt="Design digest #80" loading="lazy">
                </figure>

                <div class="blog-content">

                  <div class="blog-meta">
                    <p class="blog-category">Design</p>

                    <span class="dot"></span>

                    <time datetime="2022-02-23">Fab 23, 2022</time>
                  </div>

                  <h3 class="h3 blog-item-title">Design digest #80</h3>

                  <p class="blog-text">
                    Excepteur sint occaecat cupidatat no proident, quis nostrum exercitationem ullam corporis suscipit.
                  </p>

                </div>

              </a>
            </li>

            <li class="blog-post-item">
              <a href="#">

                <figure class="blog-banner-box">
                  <img src="./assets/images/blog-4.jpg" alt="UI interactions of the week" loading="lazy">
                </figure>

                <div class="blog-content">

                  <div class="blog-meta">
                    <p class="blog-category">Design</p>

                    <span class="dot"></span>

                    <time datetime="2022-02-23">Fab 23, 2022</time>
                  </div>

                  <h3 class="h3 blog-item-title">UI interactions of the week</h3>

                  <p class="blog-text">
                    Enim ad minim veniam, consectetur adipiscing elit, quis nostrud exercitation ullamco laboris nisi.
                  </p>

                </div>

              </a>
            </li>

            <li class="blog-post-item">
              <a href="#">

                <figure class="blog-banner-box">
                  <img src="./assets/images/blog-5.jpg" alt="The forgotten art of spacing" loading="lazy">
                </figure>

                <div class="blog-content">

                  <div class="blog-meta">
                    <p class="blog-category">Design</p>

                    <span class="dot"></span>

                    <time datetime="2022-02-23">Fab 23, 2022</time>
                  </div>

                  <h3 class="h3 blog-item-title">The forgotten art of spacing</h3>

                  <p class="blog-text">
                    Maxime placeat, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  </p>

                </div>

              </a>
            </li>

            <li class="blog-post-item">
              <a href="#">

                <figure class="blog-banner-box">
                  <img src="./assets/images/blog-6.jpg" alt="Design digest #79" loading="lazy">
                </figure>

                <div class="blog-content">

                  <div class="blog-meta">
                    <p class="blog-category">Design</p>

                    <span class="dot"></span>

                    <time datetime="2022-02-23">Fab 23, 2022</time>
                  </div>

                  <h3 class="h3 blog-item-title">Design digest #79</h3>

                  <p class="blog-text">
                    Optio cumque nihil impedit uo minus quod maxime placeat, velit esse cillum.
                  </p>

                </div>

              </a>
            </li>

          </ul>


          -->

        </section>

      </article>




      <!--
        - #CONTACT
      -->

      <article class="contact" data-page="الاشعارات">

        <header>
          <h2 class="h2 article-title">الاشعارات</h2>
        </header>
        
      <!---  <section class="mapbox" data-mapbox>
          <figure>
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d199666.5651251294!2d-121.58334177520186!3d38.56165006739519!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x809ac672b28397f9%3A0x921f6aaa74197fdb!2sSacramento%2C%20CA%2C%20USA!5e0!3m2!1sen!2sbd!4v1647608789441!5m2!1sen!2sbd"
              width="400" height="300" loading="lazy"></iframe>
          </figure>
        </section>
      -->
        <section class="contact-form">
          
         <!-- <h3 class="h3 form-title">Contact Form</h3>

          <form action="#" class="form" data-form>

            <div class="input-wrapper">
              <input type="text" name="fullname" class="form-input" placeholder="Full name" required data-form-input>

              <input type="email" name="email" class="form-input" placeholder="Email address" required data-form-input>
            </div>

            <textarea name="message" class="form-input" placeholder="Your Message" required data-form-input></textarea>

            <button class="form-btn" type="submit" disabled data-form-btn>
              <ion-icon name="paper-plane"></ion-icon>
              <span>Send Message</span>
            </button>

          </form>
        -->
        </section>

      </article>
      
      
      <article class="contact" data-page="ملاحظات المدرسين">

        <header>
          <h2 class="h2 article-title">ملاحظات المدرسين</h2>
        </header>

         <!--  <section class="mapbox" data-mapbox>
       <figure>
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d199666.5651251294!2d-121.58334177520186!3d38.56165006739519!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x809ac672b28397f9%3A0x921f6aaa74197fdb!2sSacramento%2C%20CA%2C%20USA!5e0!3m2!1sen!2sbd!4v1647608789441!5m2!1sen!2sbd"
              width="400" height="300" loading="lazy"></iframe>
          </figure>
        </section>
-->
        <section class="contact-form">
          <table id="attendanceTable" dir="rtl">
            <thead>
              <tr>
                <th>اسم المدرس</th>
                <th>الملاحظة</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>المدرس</td>
                <td>الملاحظة</td>
              </tr>
              <tr>
                <td>المدرس</td>
                <td>الملاحظة</td>
              </tr>
              <tr>
                <td>المدرس</td>
                <td>الملاحظة</td>
              </tr>
              <tr>
                <td>المدرس</td>
                <td>الملاحظة</td>
              </tr>
              <tr>
                <td>المدرس</td>
                <td>الملاحظة</td>
              </tr>
              
            </tbody>
          </table>
        

        <!--  <h3 class="h3 form-title">Contact Form</h3>

          <form action="#" class="form" data-form>

            <div class="input-wrapper">
              <input type="text" name="fullname" class="form-input" placeholder="Full name" required data-form-input>

              <input type="email" name="email" class="form-input" placeholder="Email address" required data-form-input>
            </div>

            <textarea name="message" class="form-input" placeholder="Your Message" required data-form-input></textarea>

            <button class="form-btn" type="submit" disabled data-form-btn>
              <ion-icon name="paper-plane"></ion-icon>
              <span>Send Message</span>
            </button>

          </form>

        </section>

      </article>
-->
    </div>

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