const studentData = {
  1: {
    semester1: [
      { name: 'طالب 1', subject1: 90, subject2: 85, subject3: 95 },
      { name: 'طالب 2', subject1: 80, subject2: 75, subject3: 85 },
      { name: 'طالب 3', subject1: 95, subject2: 90, subject3: 92 }
    ],
    semester2: [
      { name: 'طالب 4', subject1: 88, subject2: 92, subject3: 85 },
      { name: 'طالب 5', subject1: 76, subject2: 80, subject3: 78 },
      { name: 'طالب 6', subject1: 82, subject2: 88, subject3: 90 }
    ]
  },
  2: {
    semester1: [
      { name: 'طالب 7', subject1: 92, subject2: 90, subject3: 95 },
      { name: 'طالب 8', subject1: 85, subject2: 78, subject3: 88 },
      { name: 'طالب 9', subject1: 90, subject2: 86, subject3: 92 }
    ],
    semester2: [
      { name: 'طالب 10', subject1: 78, subject2: 85, subject3: 80 },
      { name: 'طالب 11', subject1: 92, subject2: 88, subject3: 90 },
      { name: 'طالب 12', subject1: 84, subject2: 80, subject3: 82 }
    ]
  },
  3: {
    semester1: [
      { name: 'طالب 13', subject1: 86, subject2: 90, subject3: 92 },
      { name: 'طالب 14', subject1: 92, subject2: 85, subject3: 89 },
      { name: 'طالب 15', subject1: 88, subject2: 92, subject3: 90 }
    ],
    semester2: [
      { name: 'طالب 16', subject1: 78, subject2: 85, subject3: 80 },
      { name: 'طالب 17', subject1: 92, subject2: 88, subject3: 90 },
      { name: 'طالب 18', subjectيبدو أن جزءًا من الكود الخاص بك قد انقطع. لكن يمكنني مساعدتك في فهم الفكرة العامة وتوضيح الخطوات اللازمة.

لإضافة زرين للاختيار بين الفصل الدراسي الأول والفصل الدراسي الثاني، يمكنك استخدام العناصر HTML و JavaScript. في الشيفرة أعلاه، قدمت لك مثالًا بسيطًا يتضمن اختيار الصف وزرين للاختيار بين الفصلين.

في الجزء HTML، يتم إنشاء عنصر `select` الذي يحتوي على خيارات للاختيار بين الصفوف الدراسية، ويتم إنشاء زرين `button` يعبران عن الفصلين الدراسيين.

ثم في الجزء JavaScript، يتم استخدام كائن `studentData` لتخزين بيانات الطلاب والمواد الدراسية المرتبطة بهم. يمكنك استبدال هذه البيانات بالمعلومات الفعلية التي تحتاجها.

عند تغيير الصف أو الفصل الدراسي المحدد، يمكنك استخدام الأحداث (event) في JavaScript لتحديث الجدول وعرض بيانات الطلاب المناسبة.

يرجى ملاحظة أن الشيفرة المقدمة هي مجرد مثال بسيط وتحتاج إلى تطويرها بمزيد من الوظائف والتحسينات وفقًا لاحتياجاتك الفعلية.