
<style>
        .section {
            display: none;
        }
        section.active {
            display: block;
        }
        .nav-buttons {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
            
        }
        .nav-buttons button {
            margin: 0 10px;
            padding: 10px 20px;
            font-size: 16px;
            background-color: #f2f2f2;
            border: none;
            cursor: pointer;
            display: inline-block;
            background: var(--bg-gradient-jet);
  position: relative;
  padding: 5px 15px;
  align-items: center;
  font-size: 17px;
  font-weight: 600;
  text-decoration: none;
  cursor: pointer;
  border: 1px solid rgb(40, 144, 241);
  border-radius: 25px;
  outline: none;
  overflow: hidden;
  color: rgb(40, 144, 241);
  transition: color 0.3s 0.1s ease-out;
  text-align: center;


  display: inline-block;
  margin-right: 10px;
  text-decoration: none;
        }
        .nav-buttons button.active {
            background-color: #333;
            color: #fff;
        }
        .content {
    display: none;
}

.content.active {
    display: block;
}
/*
.nav-btn.active {
    // تنسيق الزر النشط 
}
*/
#button,.btnback {
    
    background: var(--bg-gradient-jet);
    position: relative;
    padding: 5px 15px;
    align-items: center;
    font-size: 17px;
    font-weight: 600;
    text-decoration: none;
    cursor: pointer;
    border: 1px solid rgb(40, 144, 241);
    border-radius: 25px;
    outline: none;
    overflow: hidden;
    color: rgb(40, 144, 241);
    transition: color 0.3s 0.1s ease-out;
    text-align: center;
  
  
    display: inline-block;
    margin-right: 10px;
    text-decoration: none;
  }
  
  #button span {
    margin: 5px;
  }
  
  #button::before {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    margin: auto;
    content: '';
    border-radius: 50%;
    display: block;
    width: 20em;
    height: 20em;
    left: -5em;
    text-align: center;
    transition: box-shadow 0.5s ease-out;
    z-index: -1;
  
  }
  
  #button:hover {
    color: #ffffff;
    border: 2px solid rgb(9, 105, 195);
  }
  
  #button:hover::before {
    box-shadow: inset 0 0 0 10em rgb(40, 144, 241);
  }
          .content {
              display: none;
              margin: 10px;
          }
          .month{ display: block;}
          #semester1,#semester2{ display: inline-block;
              width: 150px;
              height: 40px;
              margin: 10px;
              background-color:#fff;
              text-align: center;
              line-height: 40px;
              cursor: pointer;}
    </style>

    <header>
        
        <div class="nav-buttons">
            <button class="nav-link active" data-target="#studata">تعديل بيانات الطلاب</button>
            <button class="nav-link" data-target="#studelete">حذف طالب</button>
            <button class="nav-link" data-target="#exportfile">استيراد من ملف اكسل </button>
            <button class="nav-link" data-target="#report"> تقارير القبول والتسجيل</button>
        </div>
    </header>

    <main>
        <section id="studata"  class="section">
           

        </section>

        <section id="studelete" class="section">
        <section class="about-text"  dir="rtl">


<section class="contact-form">

  <h3 class="h3 form-title">حذف طالب</h3>

<style>
#educational-level{
background-color: rgba(127, 255, 212, 0);
      color: #000;
}
</style>


  <form action="#" class="form" data-form>

    

   
    <!--  <input class="form-input" type="text" id="student-id" name="student-id" required  placeholder="رقم الطالب">
      <br>
-->
      <input class="form-input" type="text" id="full-name" name="full-name" required    placeholder="الاسم الكامل">
      
  <!--   <br>
      <input class="form-input" type="date" id="date-of-birth" name="date-of-birth" required   placeholder="تاريخ الميلاد">
      <br>
    
      <input class="form-input" type="text" id="address" name="address" required  placeholder="العنوان">
     --> <br>
      <label for="educational-level">الصف:</label>
      <select class="form-input"  id="educational-level" name="educational-level" required >
        <option value="">اختر الصف</option>
        <option value="الروضة">الاول</option>
        <option value="الابتدائية">الثاني</option>
        <option value="المتوسطة">الثالث</option>
        <option value="الثانوية">الرابع</option>
        <option value="الثانوية">الخامس</option>
        <option value="الثانوية">السادس</option>
        <option value="الثانوية">السابع</option>
        <option value="الثانوية">الثامن</option>
        <option value="الثانوية">لتاسع</option>
        <option value="الثانوية">اول ثانوي</option>
        <option value="الثانوية">ثاني ثانوي</option>
        <option value="الثانوية">ثالث ثانوي</option>
      </select><br><br>
  

<!--  <input type="checkbox" id="birth-certificate" name="documents" value="شهادة الميلاد"> 
<label for="birth-certificate">شهادة الميلاد:</label>


<input type="checkbox" id="previous-certificates" name="documents" value="شهادات الدراسة السابقة">
<label for="previous-certificates">شهادات الدراسة السابقة:</label>
<br>
      
      
      <input class="form-input" type="tel" id="parent-phone" name="parent-phone" required placeholder="رقم هاتف ولي الأمر">
      <br>
     
      <input class="form-input" type="tel" id="student-phone" name="student-phone" placeholder="رقم هاتف الطالب (إن وجد)">
      <br>
      
      <input class="form-input" type="text" id="payment" name="payment" placeholder="رسوم التسجيل">
--> <br>
      <input class="btnreport" type="submit" value="حذف">





     
    </form>
    </section>
        </section>

        <section id="exportfile" class="section">
       



    
        </section>
        <section id="report" class="section">
            
        </section>
    </main>

   
    <script>
        const navLinks = document.querySelectorAll('.nav-link');
        const sections = document.querySelectorAll('.section');

        navLinks.forEach(link => {
            link.addEventListener('click', (event) => {
                const targetId = event.currentTarget.dataset.target;
                const targetSection = document.querySelector(targetId);

                sections.forEach(section => {
                    section.classList.remove('active');
                });

                targetSection.classList.add('active');

                navLinks.forEach(link => {
                    link.classList.remove('active');
                });

                event.currentTarget.classList.add('active');
            });
        });
        const navBtns = document.querySelectorAll('.nav-btn');
const contentSections = document.querySelectorAll('.content');

navBtns.forEach(btn => {
    btn.addEventListener('click', () => {
        // إزالة الفئة النشطة من جميع الأزرار والأقسام
        navBtns.forEach(btn => btn.classList.remove('active'));
        contentSections.forEach(section => section.classList.remove('active'));

        // إضافة الفئة النشطة للزر المضغوط وقسم المحتوى المرتبط به
        const targetContent = document.getElementById(btn.dataset.content);
        btn.classList.add('active');
        targetContent.classList.add('active');
    });
});
    </script>
<!--
<header>
    <center>
    <nav>
    <nav>
    <button class="nav-btn active" id="button"  data-content="home">الصفحة الرئيسية</button>
        <button class="nav-btn"id="button" data-content="employees">بيانات الموظفين</button>
        <button class="nav-btn" id="button" data-content="salaries">الرواتب</button>
        <button class="nav-btn" id="button" data-content="leaves">الإجازات</button>
    </nav>
    </nav>
    </center>
</header>
<main>
    <section id="home" class="content active">-->
        <!-- محتوى الصفحة الرئيسية 
        
        <p>محتوى الصفحة1</p>
        
    </section>
    <section id="employees" class="content">
         محتوى بيانات الموظفين -
        <p>محتوى الصفحة 2</p>
    </section>
    <section id="salaries" class="content">
         محتوى الرواتب --
        <p>محتوى الصفحة 3</p>
    </section>
    <section id="leaves" class="content">
        -- محتوى الإجازات --
        <p>محتوى الصفحة 4</p>
    </section>
</main>
        </section>-->
