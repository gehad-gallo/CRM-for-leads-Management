<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> 4level1 خليج 6 مستويات اونلاين في مجموعة</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Alexandria&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    <header>
        <a href="#" class="header__register--link">سجل الان</a>
        <a href="#" class="header__logo">
            <img src="{{asset('assets/images/white-logo.png')}}" alt="logo">
        </a>
    </header>

    <section class="hero__image">
        <div class="hero__image--overlay"></div>
        <div class="hero__image--content">
            <div class="hero__image--content-text">
                <h2>طوّر <span class="orange-color">لغتك الإنجليزية</span></h2>
                <h3>
                    من الصفر مع الأكاديمية <span class="orange-color">رقم 1 في أفريقيا</span> والشرق الأوسط</h3>
                <p class="content-text__desc">احصل مجانا علي مكالمة مع استشاري اللغة الانجليزية من 4level1</p>
                <div class="hero__image--content-levels">
                    <img src="{{asset('assets/images/bg-1-min.jpg')}}" alt="man">
                    <p>6 مستويات اونلاين في مجموعة + <br>
                    Digital Materials</p>
                    <div class="price__container">
                        <div class="price__overlay"></div>
                        <div class="price__container--levels">
                            <span class="levels-price__actual">160$</span>
                            <span class="levels-price__original">300$</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero__image--content-form">
                <p class="hero__image--content-form-desc">سجل الآن في دورة اللغة الإنجليزية الأونلاين</p>
                <form action="{{route('insert.client00')}}" method="post">
                    @csrf
                    <div class="form-item">
                        <label for="">الاسم</label>
                        <input type="text" name="name">
                    </div>
                    <input type="text" name="coming_from" value="" hidden>
                    <div class="form-item">
                        <label for="">رقم الهاتف</label>
                        <input type="text" name="phone">
                    </div>
                    <button class="submit-btn" type="submit">اشترك الأن</button>
                </form>
                <p class="content-form__terms">بضغطك على الزر أعلاه، فأنت توافق على <a href="">الشروط والأحكام</a></p>
                
            </div>
        </div>
    </section>

    <section class="courses__description">
        <div class="courses__description--content">
            <div class="content__right">
                <h3 class="content__title red-color">العرض الاونلاين داخل مجموعة<span class="d-block blue-color"> 6 مستوي + Digital Materials</span></h3>

                <ul class="content__list">
                    <li class="content__list--item">العدد في المجموعة من 3-5 أفراد.</li>
                    <li class="content__list--item">محاضرتان اسبوعيا - المحاضرة 90 دقيقة.</li>
                    <li class="content__list--item">اختبار تحديد مستوى مجاني.</li>
                    <li class="content__list--item">8 محاضرات للمستوي.</li>
                    <li class="content__list--item">برنامج ال 4achiever مجانا لحل التمارين والاسئلة</li>
                    <li class="content__list--item">كتاب ال smart book الذكي مجانا</li>
                </ul>
            </div>
            <div class="content__left">
                <h3 class="content__title red-color">عرض خاص لمدة محدودة لدورات اللغة الإنجليزية.<span class="d-block blue-color"> تشمل الدورات الميزات التالية:</span></h3>

                <ul class="content__list">
                    <li class="content__list--item">11 مستوى للغة الإنجليزية حتى المستوى B1.</li>
                    <li class="content__list--item">شهادة معتمدة من معهد Pearson البريطاني.</li>
                    <li class="content__list--item">الدراسة علي منهج ‘Top Notch’ العالمي.</li>
                    <li class="content__list--item">تطبيق 4achiever لحل التمارين وتتبع مستواك</li>
                    <li class="content__list--item">تطبيق smartbook يحتوي علي فيديو وصوتيات للمنهج</li>
                    <li class="content__list--item">ضمان 4level1 : يمكنك اعادة المستوي مجانا</li>
                </ul>
            </div>
        </div>
    </section>

    <div class="level">
        <h2>حدد مستواك الان <span>مجانا</span>!</h2>
    </div>

    <div class="better_job">
        <p class="better_job--title">منهج 4level1 تم بنائه ليحقق لك احلامك</p>
        <div class="better_job--content">
            <div class="better_job--item">
                <i class="better_job--icon fa fa-home" aria-hidden="true"></i>
                <span>وظيفة افضل</span>
            </div>
            <div class="better_job--item">
                <i class="better_job--icon fa fa-plane" aria-hidden="true"></i>
                <span>السفر إلى الخارج</span>
            </div>
            <div class="better_job--item">
                <i class="better_job--icon fa fa-university" aria-hidden="true"></i>
                <span>تعليم جامعي عالي</span>
            </div>
        </div>
    </div>

    <div class="classes">
        <div class="classes__content">
            <div class="classes__content--title">
                <span class="blue-color">فصول</span> <br>
                <span class="orange-color">محادثة مباشرة</span> <br>
                <span class="blue-color">مع معلمين معتمدين</span>
            </div>
            <!--  -->
            <!-- <div class="classes__img-container2">
                <img src="images/girl-laptop-min.png" alt="">
            </div> -->
            <!--  -->
            <div class="classes__content--item large-card">
                <p>نوفر لك بيئة تعلم سهلة ومرنة من منزلك كما لو كنت فى فصل حقيقي، ومنهج دولي، يضمن لك الوصول لمرحلة الاستقلال اللغوي.</p>
                <i class="classes__content--icon fa fa-home" aria-hidden="true"></i>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                    <div class="classes__content--item small-card">
                        <h3 class="u-margin-bottom-1x">منهج عالمي</h3>
                        <p>نعتمد في تدريس اللغة الانجليزيـة على منهج عالمي.</p>
                        <i class="classes__content--icon fa fa-graduation-cap" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                    <div class="classes__content--item small-card">
                        <h3 class="u-margin-bottom-1x">ضمان حقيقي</h3>
                        <p>يمكن للطالب إعادة المستوى مجانًا، لضمان تحقيق الاستفادة.</p>
                        <i class="classes__content--icon fa fa-id-card-o" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="classes__img-container">
            <img src="{{asset('assets/images/girl-laptop-min.png')}}" alt="">
        </div>
    </div>
    <div class="teaching-methods">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                <div class="classes__content--item small-card">
                    <h3 class="u-margin-bottom-1x">طرق التدريس</h3>
                    <p>نعتمد على طرق تدريس تفاعلية بأسلوب ممتع وعلمي.</p>
                    <i class="classes__content--icon fa fa-desktop" aria-hidden="true"></i>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                <div class="classes__content--item small-card">
                    <h3 class="u-margin-bottom-1x">تقييم دوري</h3>
                    <p>نقيّم مستوى الطلاب بشكل دوري.</p>
                    <i class="classes__content--icon fa fa-tasks" aria-hidden="true"></i>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                <div class="classes__content--item small-card">
                    <h3 class="u-margin-bottom-1x">مرونة المواعيد</h3>
                    <p>يمكن للدارس إختيار المواعيد المناسبة له.</p>
                    <i class="classes__content--icon fa fa-calendar" aria-hidden="true"></i>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                <div class="classes__content--item small-card">
                    <h3 class="u-margin-bottom-1x">شهادة إتمام</h3>
                    <p>نمنح الطلاب شهادات إجتياز بعد النجاح في الإختبار بعد كل مستوى</p>
                    <i class="classes__content--icon fa fa-certificate" aria-hidden="true"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="feedback">
        <div class="feedback__header">
            <i class="feedback__header--icon fa fa-star" aria-hidden="true"></i>
            <h2 class="feedback__header--title">تقييمات المستخدمين</h2>
            <p class="feedback__header--desc blue-color">ان قصص نجاح طلابنا هي أكثر ما يلهمنا ويحفزنا!!</p>
        </div>
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="10000">
                <div class="carousel-item-head">
                    <img src="{{asset('assets/images/أسماء.jpg')}}" class="d-block" alt="...">
                    <h6>أسماء محمود</h6>
                </div>
                <div class="carousel-item-body">
                    <p>مستوايا اختلف تماما في فترة قليلة جدا وبقيت بعرف اتكلم انجليزي من غير لجلجة ولا بقيت بفكر او اخد وقت في الترجمة برشحه لكل الناس بجد</p>
                </div>
              </div>
              <div class="carousel-item" data-bs-interval="2000">
                <div class="carousel-item-head">
                    <img src="{{asset('assets/images/احمد-محمد-min.jpg')}}" class="d-block" alt="...">
                    <h6>أحمد محمد</h6>
                </div>
                <div class="carousel-item-body">
                    <p>
                        بجد انصح اي شخص بجد انو لو عاوز يتعلم انجليزي يقدم في 4level1
                        من احسن المدرسين اليي في مصر بجد والتوفيق لي الجميع</p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="carousel-item-head">
                    <img src="{{asset('assets/images/زينب.jpg')}}" class="d-block" alt="...">
                    <h6>زينب سمير</h6>
                </div>
                <div class="carousel-item-body">
                    <p>
                        عمري ما خدت كورس وكملته للاخر الا الكورس ده مع 4level1
                        بجد بيخلوك تحب اللغة وتستنى المحاضرة</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="feedback__footer">
            <h3>ابدأ بتحديد مستواك الآن</h3>
            <button>سجل الأن</button>
        </div>
    </div>
    <div class="accordion accordion-flush" id="accordionFlushExample">
        <div class="accordion__header">
            <h3 class="accordion__header--title">اذا كنت تحتاج لمعرفة المزيد</h3>
            <p class="accordion__header--desc">هنا ستجد الأسئلة الأكثر شيوعا حول دوراتنا لتعلم اللغة الانجليزية عبر الانترنت</p>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                ما هي طريقة الدراسة عبر الإنترنت؟
            </button>
          </h2>
          <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">سوف يقوم الدارس بحضور لايڤ مباشر مع المدرس بإستخدام برنامج zoom .</div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-2" aria-expanded="false" aria-controls="flush-2">
                ما هو أهم ما يميز الدراسة عن بُعد مع 4level1؟
            </button>
          </h2>
          <div id="flush-2" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">أننا نعتمد في التدريس على منهج تفاعلي بين الطالب والمدرس مما لا يدع أي مجال للملل أو الشعور بالمسافات وستشعر كأنك تعيش تجربة فصل حقيقية.</div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-3" aria-expanded="false" aria-controls="flush-3">
                ما هو عدد المستويات للدورة كاملةً؟
            </button>
          </h2>
          <div id="flush-3" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">تتكون دورة اللغة الإنجليزية الأونلاين من ١١ مستوى، تنقسم إلى ٢ مستويات تمهيدية و ٦ مستويات أساسية، و٣ مستويات محادثة.</div>
          </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-4" aria-expanded="false" aria-controls="flush-4">
                هل الدراسة جماعية أم فردية؟
              </button>
            </h2>
            <div id="flush-4" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">يتوفر لدينا فصول أونلاين جماعية (من 3-5) أفراد.. وكذلك فصول أونلاين برايفت (فردية)./div>
            </div>
        </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-5" aria-expanded="false" aria-controls="flush-5">
                هل يوجد اختبار تحديد مستوى؟
              </button>
            </h2>
            <div id="flush-5" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">نعم، يخضع الدارس لإختبار تحديد مستوى – مجانًا تمامًا- لتحديد المستوى المناسب للبدء منه.</div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-6" aria-expanded="false" aria-controls="flush-6">
                هل سأحصل على شهادة بعد إتمام المستويات؟
              </button>
            </h2>
            <div id="flush-6" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">يحصل الدارس على شهادة من 4level1 بعد كل مستوى بشرط اجتياز الاختبار التقييمي الخاص بكل مستوى.</div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-7" aria-expanded="false" aria-controls="flush-7">
                ما هي المواعيد المتاحة للدراسة؟
              </button>
            </h2>
            <div id="flush-7" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">يتوفر لدى 4level1 مواعيد مختلفة لتناسب جميع الأفراد.</div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-8" aria-expanded="false" aria-controls="flush-8">
                ماهي تكلفة المستوى الواحد الأونلاين خارج العروض؟
              </button>
            </h2>
            <div id="flush-8" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">تكلفة المستوى الواحد هو 130 دولار امريكي للكورس البرايفت (الخاص).</div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-9" aria-expanded="false" aria-controls="flush-9">
                ما هو الـ 4achiever والـ Smart Book؟
              </button>
            </h2>
            <div id="flush-9" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">بمجرد الحجز في دورة اللغة الإنجليزية أونلاين مع 4level1 سيحصل الدارس على إمكانية الوصول لـ:
                تطبيق 4achiever المجاني مخصص لحل التمارين اليومية وتتبع تقدم الطالب.
                تطبيق Smart Book المجاني يحتوي علي المنهج الذي يتم دراسته في شكل فيديوهات وصوتيات.</div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="footer__content">
            <img src="{{asset('assets/images/white-logo.png')}}" alt="logo">
            <div class="footer__content--text">
                <p>تأسست أكاديمية 4LEVEL1 في عام 2016 ، لتقديم دورات اللغة الإنجليزية لمنطقة الشرق الأوسط وافريقيا.</p>
                <p>العنوان: 18/4 د تقسيم اللاسيلكي-المعادي
                    سياسة الاسترداد</p>
            </div>
            <div class="footer__content--social">
                <p>قسّط مع سهولة</p>
                <img src="{{asset('assets/images/souhoola-white-logo.png')}}" alt="">
                <span class="d-block footer__content--mail">contact@4level1.com</span>
                <span class="d-block footer__content--desc">كلمنا من جميع انحاء العالم</span>
                <span class="d-block footer__content--phone">966118349649</span>
                <span class="d-block footer__content--egypt">داخل مصر</span>
                <span class="d-block footer__content--hotline">15819</span>
                <div class="footer__content--social-icons">
                    <i class="social-icon fa fa-facebook"></i>
                    <i class="social-icon fa fa-twitter"></i>
                    <i class="social-icon fa fa-instagram"></i>
                    <i class="social-icon fa fa-youtube"></i>
                    <i class="social-icon fa fa-linkedin"></i>
                    <i class="social-icon fa fa-snapchat"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="subscribe-now">
        <h3>تعلم اللغة الإنجليزية <span class="orange-color">الدورة المميزة</span></h3>
        <button>اشترك الأن</button>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>