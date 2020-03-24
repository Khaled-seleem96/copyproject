@extends('user.layouts.app')
@section('title','About')
@section('user')

    <style>
        body
        {
            background-image: url(img/about.jpg);
            animation-duration: 6000s;
        }
        
    </style>

    <div >
        <img src="img/3.jpg" alt="background image" width="100%" height="400px">
    </div>
    <br><br>
    <h2 class="text" style="text-align: center;">من نحن</h2>
    <hr style="text-align: center;border: 2px rgba(255, 207, 79,1) solid;width: 3%;">
    <div class="container color"  data-aos="fade-right">
        <div class="about1">
            <div class="row"> 
                <div class="col-md-6">
                        <img src="img/logo.png" width="100%" alt="">
                </div>
                <div class="col-md-6">
                    <p class="tsec1">تقدم مؤسسة جناح الأميرة للمقاولات والديكور والمفروشات التصميم الداخلي
                        التي انفردت بة منذ أن تأسست في عام 2001 م لتقدم لكم الديكور الداخلي
                        الذي يناسب جميع الأذواق بمفهوم عصري غير تقليدي حيث تنفرد بة مبنية
                        على أسس لتلبية احتياجات المكان وبأسعار منافسة ومتناولة لكل من يقصدها
                        نحن متميزون في جميع الأعمال وبأسلوب راقي معتمدون على خبرتنا الطويلة في
                        هذا المجال .</p>
                        <h5 class="text" style="   float: right;">خدماتنا: </h5>
                        <p class="tsec1">
                            الإبداع , الاحتراف , الانفراد والتميز , لمقدرتنا بالتميز بتفاصيل التصميم وتنفيذ
                            كافه الديكورات والمفروشات لكي نقدم لكم أرق التصاميم الداخلية بتفاصيلها
                            على الطراز الحديث.</p>
                            
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="container"  data-aos="fade-left"> 
        <div class="about1">
            <div class="row"> 
                <div class="col-md-6">
                    <h5 class="text" style="   float: right;">معاييرنا:</h5>
                        <p class="tsec1">
                        الجودة , الكلفة , الوقت , وتتبعنا المعايير الهندسية في التصميم والتنفيذ مع
                        التزامنا بالجودة التي هي من أساس نجاحنا.
                            </p>
                            <h5 class="text" style="   float: right;">رؤيتنا:</h5>
                            <p class="tsec1">
                        الصدق , الجودة , وتتبع كل المعايير الهندسية في التصميم والتنفيذ مع الالتزام
                        والوفاء بالجودة كما حثنا علية رسولنا الكريم مجد صل الله علية وسلم (الحديث
                        هو: إن الله يحب إذا عمل أحدكم عملا أن يتقنه .أخرجه أبو يعلى والطبراني» وقد صححه الألباني في
                        الصحيحة).
                            </p>
                            <h5 class="text" style="   float: right;">اهدافنا:</h5>
                    <p class="tsec1">
                        أن نحقق رغباتكم وفق ميزانياتكم ... لاننا نعمل لفهم وتلبية ماهي
                        احتياجاتكم لتطبيقها على أرض الواقع وتوفير أقصى قدر من الراحة .
                        </p> 
                </div>
                <div class="col-md-6 " style="display: flex;justify-content: center;">
                            <img src="img/first-section1.jpg" width="85%" alt="">
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="container" data-aos="fade-up">
        <h3 class="text" style="text-align: center;">نبذه من أعمالنا</h3>
        <br><br>
        <div class="about1">
            <div class="row"> 
                
                 <div class="col-md-6">
                    <ul class="tsec1" style="display: inline-block;">
                            
                        <li>بوابة قوات الطوارئ الخاصة بالعاصمة المقدسة</li>
                        <li>مشروع أبراج الراجحي</li>
                        <li> قصر العميد</li>
                        <li>مركز القيادة والسيطرة بالامن العام بمنى مصلح الجميعي</li>
                        <li>مجمع فلل اللواء يحي والمهندس مشعل وأبنائهم الزايدي بمخطط الزايدي</li>
                        <li>قصر بدر البديوي</li>
                        
                    </ul>
                            

                </div> 
                <div class="col-md-6">
                        <ul class="tsec1" style="display: inline-block;">
                            <li>مدينة التدريب العسكرية بمكة</li>
                            <li>قصر الشيخ غرم الله الزهراني</li>
                            <li>مجموعة الفقيه للاستثمار والتطوير العقاري</li>
                            <li>فيلا اللواء جمعة الزهراني مدير السجون</li>
                            <li>مجالس استقبال الأستاذ عادل كعكي</li>
                            <li> مقهى رودال</li>
                            <li>مقهى وكافي شوب أوبسس</li>
                        </ul>  
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="container" data-aos="fade-down">
        <h3 class="text" style="   text-align: center;">كلمة المؤسسة</h3>
        <br>
        <div class="about1">
            <div class="row"> 
                <div class="col-md-12">
                    <p class="tsec1">
                        
                        الحمد لله والصلاة والسلام على سيدنا وحبيبنا محمد علية أفضل الصلاة والسلام
                        عندما قررت بفتح معرض الديكور كنت حريص بأن أقدم أفضل ماهو موجود
                        لعملاني الكرام من الجودة والصدق لاحتياج مكة المكرمة لمعرض مميز لتميز
                        اهل مكة بالفن والذوق لعدم وجود معرض لاضطرارهم لذاهب لجدة وأن يكون
                        هذا المعرض انطلاقة مميزة بحيث يقصدها كل مهتم لتميز منزلة او محلة
                        التجاري وأن انفرد بالتميز وأن يكون المعرض يلبي كل احتياجات العميل
                        بالتصميم والديكور والأثاث
                    </p>
                <h4>هاني بن محمد الحارثي</h4>
                </div>
                
            </div>
        </div>
    </div>
    <br>
 @endsection