<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;

?>


<!-- Features-->
<section id="features" class="space-section">
    <div class="container">
        <h1 class="features-title"><?= Yii::t('app', 'Thompson school как<br/><span>Лучший Выбор</span>') ?></h1>
        <div class="features-block">
            <div class="row">
                <div class="col-lg-6 features-item wow fadeInLeft">
                    <div class="row">
                        <div class="col-2 icon wow fadeInLeft" data-wow-delay="0.3s"><img src="/web/img/icons/reason-1.png" /><span class="number-bg">1</span></div>
                        <div class="col-10 mt-3 text">
                            <h5><?= Yii::t('app', 'Инновационный подход') ?></h5>
                            <p><?= Yii::t('app', 'Thompson school использует оригинальные и интересные пути обучения, которые не дадут заскучать.') ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 features-item wow fadeInLeft">
                    <div class="row">
                        <div class="col-2 icon wow fadeInLeft" data-wow-delay="0.6s"><img src="/web/img/icons/reason-2.png" /><span class="number-bg">2</span></div>
                        <div class="col-10 mt-3 text">
                            <h5 class="wow fadeInLeft"><?= Yii::t('app', 'Проверенные материалы') ?></h5>
                            <p><?= Yii::t('app', 'В процессе курсов используются только стопроцентно гарантированные материалы.') ?></p>
                        </div>
                    </div>
                </div>
                <div class="w-100"></div>
                <div class="col-lg-6 features-item wow fadeInLeft">
                    <div class="row">
                        <div class="col-2 icon wow fadeInLeft" data-wow-delay="0.9s"><img src="/web/img/icons/reason-3.png" /><span class="number-bg">3 </span></div>
                        <div class="col-10 mt-3 text">
                            <h5 class="wow fadeInLeft"><?= Yii::t('app', '100% результат') ?></h5>
                            <p><?= Yii::t('app', 'Команда Thompson school сделает все, чтобы каждый ученик несомненно видел результат своих стараний.') ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 features-item mb-0 wow fadeInLeft">
                    <div class="row">
                        <div class="col-2 icon wow fadeInLeft" data-wow-delay="1.2s"><img src="/web/img/icons/reason-4.png" /><span class="number-bg">4 </span></div>
                        <div class="col-10 mt-3 text">
                            <h5 class="wow fadeInLeft"><?= Yii::t('app', 'Дружная атмосфера') ?></h5>
                            <p><?= Yii::t('app', 'Наша школа не просто группа очень интерестных людей, а целая семья!') ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-bottom">
        <div class="circle-down"></div>
    </div>
</section>
<!-- Why our courses-->
<section id="why">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 why-item wow fadeInLeft">
                <h1 class="why-title"><?= Yii::t('app', 'Почему <span>вам нужны</span><br />наши курсы?') ?></h1>
                <p><?= Yii::t('app', 'Мы не просто учебный центр, а одна большая семья с единственной целью — помочь нашим студентам в достижении их цели!') ?></p>
                <p><?= Yii::t('app', 'С нами вы точно сможете изучить языки максимально эффективно и в максимально короткий срок. Вас ждут: профессиональные и крутые преподаватели, доброжелательная администрация, интерактивные занятия и мощная доза мотивации!') ?></p>
            </div>
            <div class="col-lg-6 video">
                <div class="circle-wrapper">
                    <div class="circle circle-1 wow zoomIn">
                        <div class="circle circle-2 wow zoomIn"></div>
                        <div class="circle circle-3 wow zoomIn"></div>
                    </div>
                </div>
                <a class="video-button" data-toggle="modal" data-target="#video-modal"><span class="triangle"></span></a>
            </div>
        </div>
    </div>
    <div class="section-bottom">
        <div class="circle-down"></div>
    </div>
</section>
<!-- Course-info-->
<section id="course-info">
    <div class="wheel-cutter">
        <div id="category-wheel" style="padding: 100px 0;">
            <div class="categories-circle">
                <div class="cutter-element"></div>
                <div class="info-block">
                    <div class="tabcontent-item" id="intensiveEnglish" style="display:block">
                        <h4><?= Yii::t('app', 'Интенсивный Английский') ?></h4>
                        <p><?= Yii::t('app', 'Курсы английского языка, включающие в себя уровни с нулевого  до продвинутого. В курсы также входит speaking club, debate club и movie time.') ?></p>
                        <p class="course-amount">6 courses</p></span>
                    </div>
                    <div class="tabcontent-item" id="ielts">
                        <h4>IELTS</h4>
                        <p><?= Yii::t('app', 'IELTS курс поможет достичь всех желаемых результатов начиная от IELTS BAND 6.0 до 8.0+. Курсы включают в себя Massive Practice, Speaking Club и Movie Time.') ?></p>
                        <p class="course-amount">--</p></span>
                    </div>
                    <div class="tabcontent-item" id="kids">
                        <h4>Thompson kids</h4>
                        <p><?= Yii::t('app', 'Полноценное развитие ребенка по английскому, математике и школьной подготовке.') ?></p>
                        <p class="course-amount">--</p></span>
                    </div>
                    <div class="tabcontent-item" id="otherLangs">
                        <h4><?= Yii::t('app', 'Языки') ?></h4>
                        <p><?= Yii::t('app', 'Начните говорить на более чем нескольких языках и покоряйте мир  вместе с  Thompson School.') ?></p></span>
                        <p class="course-amount">--</p></span>
                    </div>
                    <div class="tabcontent-item" id="otherCourses">
                        <h4><?= Yii::t('app', 'Другие курсы') ?></h4>
                        <p><?= Yii::t('app', 'Подготовка к различным экзаменам для образования в США: <br> - SAT, <br>- GMAT.') ?></p>
                        <p class="course-amount">--</p></span>
                    </div>
                </div>
                <div class="inner-circle"></div>
                <span class="category first tablinks" data-course="intensiveEnglish" onclick="getData(event, 'intensiveEnglish', 6)">
                    <img src="/web/img/icons/course-info-1.png">
                </span>
                <span class="category second tablinks" data-course="ielts" onclick="getData(event, 'ielts', 4)">
                    <img src="/web/img/icons/course-info-2.png">
                </span>
                <span class="category third tablinks" data-course="kids" onclick="getData(event, 'kids', 6)">
                    <img src="/web/img/icons/course-info-3.png">
                </span>
                <span class="category fourth tablinks" data-course="otherLangs" onclick="getData(event, 'otherLangs', 4)">
                    <img src="/web/img/icons/course-info-4.png">
                </span>
                <span class="category fiveth tablinks" data-course="otherCourses" onclick="getData(event, 'otherCourses', 4)">
                    <img src="/web/img/icons/course-info-5.png">
                </span>
            </div>
        </div>
    </div>
    <div class="course-category-mob">
        <span class="category first tablinks active" data-course="intensiveEnglish" onclick="getData(event, 'intensiveEnglish', 6)">
            <img src="/web/img/icons/course-info-1.png">
        </span>
        <span class="category second tablinks" data-course="ielts" onclick="getData(event, 'ielts', 4)">
            <img src="/web/img/icons/course-info-2.png">
        </span>
        <span class="category third tablinks" data-course="kids" onclick="getData(event, 'kids', 6)">
            <img src="/web/img/icons/course-info-3.png">
        </span>
        <span class="category fourth tablinks" data-course="otherLangs" onclick="getData(event, 'otherLangs', 4)">
            <img src="/web/img/icons/course-info-4.png">
        </span>
        <span class="category fiveth tablinks" data-course="otherCourses" onclick="getData(event, 'otherCourses', 4)">
            <img src="/web/img/icons/course-info-5.png">
        </span>
    </div>
</section>
<!-- Courses-->
<section id="courses" class="red-arrows">
    <div class="container">
        <div class="intensiveEnglish category">
            <!-- Intensive English -->
            <div class="course-slider-item" data-course="intensiveEnglish">
                <h5>Beginner |А1|</h5>
                <p><?= Yii::t('app', 'Первая ступень знаний в английском языке.') ?></p>
                <p class="duration"><?= Yii::t('app', 'Длительность:') ?><span class="btn">3 <?= Yii::t('app', 'мес.') ?></span></p>
            </div>
            <div class="course-slider-item" data-course="intensiveEnglish">
                <h5>Elementary |А1|</h5>
                <p><?= Yii::t('app', 'Знание английского языка на бытовом уровне.') ?></p>
                <p class="duration"><?= Yii::t('app', 'Длительность:') ?><span class="btn">3 <?= Yii::t('app', 'мес.') ?></span></p>
            </div>
            <div class="course-slider-item" data-course="intensiveEnglish">
                <h5>Pre-Intermediate |А2|</h5>
                <p><?= Yii::t('app', '«Путевка» в дальнейшее совершенствование своих знаний.') ?></p>
                <p class="duration"><?= Yii::t('app', 'Длительность:') ?><span class="btn">3 <?= Yii::t('app', 'мес.') ?></span></p>
            </div>
            <div class="course-slider-item" data-course="intensiveEnglish">
                <h5>Intermediate |B1|</h5>
                <p><?= Yii::t('app', 'Знание английского выше «среднего».') ?></p>
                <p class="duration"><?= Yii::t('app', 'Длительность:') ?><span class="btn">3 <?= Yii::t('app', 'мес.') ?></span></p>
            </div>
            <div class="course-slider-item" data-course="intensiveEnglish">
                <h5>Upper-intermediate |B2|</h5>
                <p><?= Yii::t('app', '«Прямой путь» к сдаче IELTS , TOEFL и т.д.') ?></p>
                <p class="duration"><?= Yii::t('app', 'Длительность:') ?><span class="btn">3 <?= Yii::t('app', 'мес.') ?></span></p>
            </div>
            <div class="course-slider-item" data-course="intensiveEnglish">
                <h5>Advanced |C1|</h5>
                <p><?= Yii::t('app', 'Шаг до владения английским на уровне носителя.') ?></p>
                <p class="duration"><?= Yii::t('app', 'Длительность:') ?><span class="btn">3 <?= Yii::t('app', 'мес.') ?></span></p>
            </div>
        </div>
        <div class="ielts category">
            <!-- IELTS -->
            <div class="course-slider-item" data-course="ielts">
                <h5>IELTS SPEED UP</h5>
                <p><?= Yii::t('app', 'Переход с уровня Pre-intermediate на IELTS 6.0+.') ?></p>
                <p class="duration"><?= Yii::t('app', 'Длительность:') ?><span class="btn">2 <?= Yii::t('app', 'мес.') ?></span></p>
            </div>
            <div class="course-slider-item" data-course="ielts">
                <h5>IELTS ACHIEVE</h5>
                <p><?= Yii::t('app', 'Переход с уровня Intermediate на IELTS 6.5+.') ?></p>
                <p class="duration"><?= Yii::t('app', 'Длительность:') ?><span class="btn">3 <?= Yii::t('app', 'мес.') ?></span></p>
            </div>
            <div class="course-slider-item" data-course="ielts">
                <h5>IELTS 7+</h5>
                <p><?= Yii::t('app', 'Переход с уровня Upper-intermediate на 7.0+.') ?></p>
                <p class="duration"><?= Yii::t('app', 'Длительность:') ?><span class="btn">3 <?= Yii::t('app', 'мес.') ?></span></p>
            </div>
            <div class="course-slider-item" data-course="ielts">
                <h5>IELTS MAX</h5>
                <p><?= Yii::t('app', 'Переход с уровня Advanced до IELTS 8.0+.') ?></p>
                <p class="duration"><?= Yii::t('app', 'Длительность:') ?><span class="btn">3 <?= Yii::t('app', 'мес.') ?></span></p>
            </div>
        </div>
        <div class="kids category">
            <!-- Kids -->
            <div class="course-slider-item" data-course="kids">
                <h5>English for kids</h5>
                <p><?= Yii::t('app', 'Базовый английский по всем уровням.') ?></p>
                <p class="duration"><?= Yii::t('app', 'Длительность:') ?><span class="btn">4 <?= Yii::t('app', 'мес.') ?></span></p>
            </div>
            <div class="course-slider-item" data-course="kids">
                <h5>Maths for kids</h5>
                <p><?= Yii::t('app', 'Математика для детей от 7 до 13 лет.') ?></p>
                <p class="duration"><?= Yii::t('app', 'Длительность:') ?><span class="btn">4 <?= Yii::t('app', 'мес.') ?></span></p>
            </div>
            <div class="course-slider-item" data-course="kids">
                <h5>Getting Ready for School</h5>
                <p><?= Yii::t('app', 'Подготовительный курс к школе.') ?></p>
                <p class="duration"><?= Yii::t('app', 'Длительность:') ?><span class="btn">4 <?= Yii::t('app', 'мес.') ?></span></p>
            </div>
            <div class="course-slider-item" data-course="kids">
                <h5>Cambridge Assessment English Courses </h5>
                <p><?= Yii::t('app', 'Подготовка детей к тестам CAE.') ?></p>
                <p class="duration"><?= Yii::t('app', 'Длительность:') ?><span class="btn">3 <?= Yii::t('app', 'мес.') ?></span></p>
            </div>
            <div class="course-slider-item" data-course="kids">
                <h5>Robotics </h5>
                <p><?= Yii::t('app', 'Азы робототехники для детей от 5 лет.') ?></p>
                <p class="duration"><?= Yii::t('app', 'Длительность:') ?><span class="btn">3 <?= Yii::t('app', 'мес.') ?></span></p>
            </div>
            <div class="course-slider-item" data-course="kids">
                <h5>Mental Arithmetic </h5>
                <p><?= Yii::t('app', 'Направление  математики для детей с  5 до 16 лет, а также их родителей.') ?></p>
                <p class="duration"><?= Yii::t('app', 'Длительность:') ?><span class="btn">1 <?= Yii::t('app', 'год') ?></span></p>
            </div>
        </div>
        <div class="otherLangs category">
            <!-- Other langs -->
            <div class="course-slider-item" data-course="otherLangs">
                <h5>Russian</h5>
                <p><?= Yii::t('app', 'Русский язык для всех уровней.') ?></p>
                <p class="duration"><?= Yii::t('app', 'Длительность:') ?><span class="btn"><?= Yii::t('app', 'От уровня') ?></span></p>
            </div>
            <div class="course-slider-item" data-course="otherLangs">
                <h5>Turkish</h5>
                <p><?= Yii::t('app', 'Турецкий язык для всех уровней.') ?></p>
                <p class="duration"><?= Yii::t('app', 'Длительность:') ?><span class="btn"><?= Yii::t('app', 'От уровня') ?></span></p>
            </div>
            <div class="course-slider-item" data-course="otherLangs">
                <h5>Korean</h5>
                <p><?= Yii::t('app', 'Корейский язык для всех уровней.') ?></p>
                <p class="duration"><?= Yii::t('app', 'Длительность:') ?><span class="btn"><?= Yii::t('app', 'От уровня') ?></span></p>
            </div>
            <div class="course-slider-item" data-course="otherLangs">
                <h5>German</h5>
                <p><?= Yii::t('app', 'Немецкий язык для всех уровней.') ?></p>
                <p class="duration"><?= Yii::t('app', 'Длительность:') ?><span class="btn"><?= Yii::t('app', 'От уровня') ?></span></p>
            </div>
        </div>
        <div class="otherCourses category">

            <!-- other courses -->
            <div class="course-slider-item" data-course="otherCourses">
                <h5>SAT</h5>
                <p><?= Yii::t('app', 'Подготовка к тестам SAT для поступления на бакалавриат в США.') ?></p>
                <p class="duration"><?= Yii::t('app', 'Длительность:') ?><span class="btn"><?= Yii::t('app', 'От уровня') ?></span></p>
            </div>
            <div class="course-slider-item" data-course="otherCourses">
                <h5>GMAT </h5>
                <p><?= Yii::t('app', 'Подготовка к тестам GMAT  для  поступления на магистратуру  в США.') ?></p>
                <p class="duration"><?= Yii::t('app', 'Длительность:') ?><span class="btn"><?= Yii::t('app', 'От уровня') ?></span></p>
            </div>
            <div class="course-slider-item" data-course="otherCourses">
                <h5>Maths </h5>
                <p><?= Yii::t('app', 'Подготовка к вступительным тестам в ВУЗы.') ?></p>
                <p class="duration"><?= Yii::t('app', 'Длительность:') ?><span class="btn"><?= Yii::t('app', 'От уровня') ?></span></p>
            </div>
            <div class="course-slider-item" data-course="otherCourses">
                <h5>Maths in English </h5>
                <p><?= Yii::t('app', 'Подготовка к вступительным тестам в международные ВУЗы.') ?></p>
                <p class="duration"><?= Yii::t('app', 'Длительность:') ?><span class="btn"><?= Yii::t('app', 'От уровня') ?></span></p>
            </div>
        </div>
    </div>
</section>
<!-- Take Course-->
<section id="take-test" class="space-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 left">
                <h1><?= Yii::t('app', 'Пройди тест и узнай, <br class="hide-on-mob" /><span>что выбрать</span>!') ?></h1>
                <p><?= Yii::t('app', 'Пройдите тест, после которого мы определим ваш <br class="hide-on-mob" />уровень и наиболее подходящие курс под ваши знания <br />и цели!') ?></p>
            </div>
            <div class="col-lg-5 right">

                <?php $form = ActiveForm::begin([
                    'options' => [
                        'class' => 'w-100'
                    ]
                ]); ?>

                <div class="form-group col-lg-12 col-md-10  offset-md-1">
                    <label class="form-label" for="name_first"><?= Yii::t('app', 'Ваше имя') ?></label>
                    <?= $form->field($model, 'fio')->textInput(['maxlength' => true, 'class' => 'form-control form-input', 'id' => 'name_first'])->label(false) ?>
                </div>

                <div class="form-group col-lg-12 col-md-10  offset-md-1">
                    <label class="form-label" for="phone_first"><?= Yii::t('app', 'Номер телефона') ?></label>
                    <?= $form->field($model, 'tel')->textInput(['maxlength' => true, 'class' => 'form-control form-input', 'id' => 'phone_first'])->label(false) ?>
                </div>

                <div class="center">
                    <?= Html::submitButton(Yii::t('app', 'Подобрать курс'), ['class' => 'test-button btn']) ?>
                    <div class="for-call"><span><img src="/web/img/icons/order-call.png" /></span><a class="call" href="#" data-toggle="modal" data-target="#order-call"><?= Yii::t('app', 'Заказать звонок') ?></a></div>
                </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>
    </div>
    <div class="section-bottom">
        <div class="circle-down"></div>
    </div>
</section>
<!-- Comments-->
<section id="comments" class="space-section">
    <div class="container">
        <div class="comment-slider">
            <div class="comment-slider-item">
                <div class="row center">
                    <div class="block col-lg-7"><img class="avatar" src="/web/img/parent.jpg" /><span class="quote"><img src="/web/img/icons/quote.png" /></span>
                        <p class="text"><?= Yii::t('app', '«Я хочу поблагодарить учебный центр, которому мы доверили своего ребёнка пол года назад, за высокий профессионализм и конечно, за бдительность и любовь к детям. Каждый раз мой сын возвращается домой после THOMPSON KIDS и на эмоциях рассказывает о том, что он узнал на уроке, о своих новых друзьях и развивающих играх, в которые они играют на уроках! Учительница по английскому в школе стала очень часто хвалить сына, ведь уровень его знаний значительно вырос. Теперь у моего ребёнка твёрдая 5 по его ныне любимому в школе предмету!»') ?></p>
                        <p class="name"><?= Yii::t('app', 'Родитель') ?> <span>Ильнара Авазова </span></p>
                    </div>
                </div>
            </div>
            <div class="comment-slider-item">
                <div class="row center">
                    <div class="block col-lg-7"><img class="avatar" src="/web/img/student.jpg" /><span class="quote"><img src="/web/img/icons/quote.png" /></span>
                        <p class="text"><?= Yii::t('app', '«THOMPSON SCHOOL- Это отличный выбор для изучения английского языка. Школа найдёт подход ко всем и каждому. Мне очень нравятся уроки и мой учитель. Я вижу прогресс в своём английском, который я совсем не знала ранее, и это самое главное для меня!»') ?></p>
                        <p class="name"><?= Yii::t('app', 'Ученик') ?> <span>Севара Асомиддинова </span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="circle-wrapper col-lg-12">
        <div class="circle circle-1 wow zoomIn"></div>
        <div class="circle circle-2 wow zoomIn"></div>
        <div class="circle circle-3 wow zoomIn"></div>
    </div>
    <div class="section-bottom">
        <div class="circle-down"></div>
    </div>
</section>
<!-- Team-->
<section id="team" class="space-section red-arrows">
    <div class="container">
        <h1><?= Yii::t('app', 'Встречайте команду<br /><span>Thompson school</span>') ?></h1>
        <div class="team-slider">
            <div class="team-item"><img src="/web/img/harry-team.jpg" />
                <div>
                    <h4>Harry Thompson</h4>
                    <h5>IELTS Instructor</h5>
                </div>
            </div>
            <div class="team-item"><img src="/web/img/1.jpg" />
                <div>
                    <h4>Bekhruz Mukhtorov</h4>
                    <h5>IELTS Instructor</h5>
                </div>
            </div>
            <div class="team-item"><img src="/web/img/2.jpg" />
                <div>
                    <h4>Maftuna Nigmatullaeva</h4>
                    <h5>ESL teacher</h5>
                </div>
            </div>
            <div class="team-item"><img src="/web/img/3.jpg" />
                <div>
                    <h4>Bekhruz Mukhtorov</h4>
                    <h5>IELTS Instructor</h5>
                </div>
            </div>
            <div class="team-item"><img src="/web/img/4.jpg" />
                <div>
                    <h4>Hilola Zhabborova</h4>
                    <h5>IELTS Instructor</h5>
                </div>
            </div>
            <div class="team-item"><img src="/web/img/5.jpg" />
                <div>
                    <h4>Toshev Asrorbek</h4>
                    <h5>IELTS Instructor</h5>
                </div>
            </div>
            <div class="team-item"><img src="/web/img/6.jpg" />
                <div>
                    <h4>Bakhodirova Shakhzoda</h4>
                    <h5>IELTS Instructor</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="section-bottom">
        <div class="circle-down"></div>
    </div>
</section>
<!-- Target-->
<section id="target" class="space-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 left wow fadeInLeft">
                <h1><?= Yii::t('app', 'А вы готовы начать<br />свое <span>незабываемое</span><br />обучение?') ?></h1>
                <p><?= Yii::t('app', 'Становясь частью Thompson school, вы делаете огромнейший вклад в себя и в свое будущее, где вы будете успешно применять те знания, которые получите. Как первый шаг, пройдите тест для определения вашего курса!') ?></p>
                <p><?= Yii::t('app', 'Если вы родитель — закажите звонок. Мы свяжемся с вами и обсудим все детали будущего образования ваших детей в Thompson school.') ?></p>
            </div>
            <div class="col-lg-5 right">


                <?php $form = ActiveForm::begin([
                    'options' => [
                        'class' => 'wow fadeInRight'
                    ]
                ]); ?>

                <div class="form-group col-lg-12 col-md-12">
                    <label class="form-label" for="name"><?= Yii::t('app', 'Ваше имя') ?></label>
                    <?= $form->field($model, 'fio')->textInput(['maxlength' => true, 'class' => 'form-control form-input', 'id' => 'name'])->label(false) ?>
                </div>

                <div class="form-group col-lg-12 col-md-12">
                    <label class="form-label" for="phone"><?= Yii::t('app', 'Номер телефона') ?></label>
                    <?= $form->field($model, 'tel')->textInput(['maxlength' => true, 'class' => 'form-control form-input', 'id' => 'phone'])->label(false) ?>
                </div>

                <div class="center">
                    <?= Html::submitButton(Yii::t('app', 'Подобрать курс'), ['class' => 'test-button btn']) ?>
                    <div class="for-call"><span><img src="/web/img/icons/order-call.png" /></span><a class="call" href="#" data-toggle="modal" data-target="#order-call"><?= Yii::t('app', 'Заказать звонок') ?></a></div>
                </div>

                <?php ActiveForm::end(); ?>



                <div class="circle-wrapper">
                    <div class="circle circle-1 wow zoomIn"></div>
                    <div class="circle circle-2 wow zoomIn"></div>
                    <div class="circle circle-3 wow zoomIn"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-bottom">
        <div class="circle-down"></div>
    </div>
</section>
<!-- Contact-->
<section id="contact" class="red-form">
    <div class="container">
        <h1><?= Yii::t('app', '<span>Наши контакты </span>и форма <br class="hide-on-mob" />обратной связи') ?></h1>
        <div class="row center">
            <div class="col-lg-3 address">
                <div class="row">
                    <div class="address-item col-lg-12 col-md-6">
                        <h5><?= Yii::t('app', 'Номер телефона') ?></h5>
                        <p>+998 78 122 10 10</p>
                    </div>
                    <div class="address-item col-lg-12 col-md-6">
                        <h5><?= Yii::t('app', 'Адрес') ?></h5>
                        <p>15/2 Chilonzor District<br />Tashkent, UZ 100121</p>
                    </div>
                    <div class="address-item col-lg-12 col-md-6">
                        <h5>E-mail</h5>
                        <p>support@thompson.com</p>
                    </div>
                    <div class="address-item col-lg-12 col-md-6 display-inline-block"><a href="https://www.instagram.com/thompson_uz/"><img src="/web/img/icons/instagram.png" /></a><a href="https://www.facebook.com/thompsonschooluz/"><img src="/web/img/icons/facebook.png" /></a><a href="#"><img src="/web/img/icons/twitter.png" /></a></div>
                </div>
            </div>
            <div class="col-lg-6 form" style="z-index: 1">

                <?php $form = ActiveForm::begin([
                    'id' => 'contact-form',
                    'fieldConfig' => [
                        'options' => [
                            'tag' => false,
                        ],
                    ],
                ]); ?>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label class="form-label" for="name-contact"><?= Yii::t('app', 'Ваше имя') ?></label>
                        <?= $form->field($contact_model, 'name')->textInput(['autofocus' => false, 'id' => 'name-contact', 'class' => 'form-input form-control'])->label(false) ?>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="form-label" for="phone-contact"><?= Yii::t('app', 'Номер телефона') ?></label>
                        <?= $form->field($contact_model, 'phone')->textInput(['id' => 'phone-contact', 'class' => 'form-input form-control'])->label(false) ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label" for="email">E-mail</label>
                    <?= $form->field($contact_model, 'email')->textInput(['id' => 'email', 'class' => 'form-input form-control'])->label(false) ?>
                </div>
                <div class="form-group">
                    <label class="form-label" for="message"><?= Yii::t('app', 'Сообщение') ?></label>
                    <?= $form->field($contact_model, 'body')->textarea(['rows' => 6, 'id' => 'message', 'class' => 'form-input form-control'])->label(false) ?>
                </div>


                <div class="form-group for-btn">
                    <?= Html::submitButton(Yii::t('app', 'Отправить'), ['class' => 'btn', 'name' => 'contact-button']) ?>
                </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>
        <div class="cooperate col-lg-6">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <p class="pb-2"><?= Yii::t('app', 'Хотите сотрудничать <br> с Thompson school?') ?></p>
                </div>
                <div class="col-lg-6 col-md-6">
                    <h4 class="text-white pt-3"><?= Yii::t('app', '') ?>+998 (78) 122-10-10</h4>
                </div>
            </div>
        </div>
    </div>
</section>