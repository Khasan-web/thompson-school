<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;

?>


<!-- Features-->
<section id="features" class="space-section">
    <div class="container">
        <h1 class="features-title">Thompson school, как<br /><span>Лучший Выбор</span></h1>
        <div class="features-block">
            <div class="row">
                <div class="col-lg-6 features-item">
                    <div class="row">
                        <div class="col-2 icon"><img src="/web/img/icons/reason-1.png" /><span class="number-bg">1</span></div>
                        <div class="col-10 mt-3 text">
                            <h5>Инновационный подход</h5>
                            <p>Thompson school использует оригинальные и интересные пути обучения, которые не датут заскучать.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 features-item">
                    <div class="row">
                        <div class="col-2 icon"><img src="/web/img/icons/reason-2.png" /><span class="number-bg">2</span></div>
                        <div class="col-10 mt-3 text">
                            <h5>Проверенные материалы</h5>
                            <p>В процессе курсов используются только стопроценто работающие материалы дающие полные знания.</p>
                        </div>
                    </div>
                </div>
                <div class="w-100"></div>
                <div class="col-lg-6 features-item">
                    <div class="row">
                        <div class="col-2 icon"><img src="/web/img/icons/reason-3.png" /><span class="number-bg">3 </span></div>
                        <div class="col-10 mt-3 text">
                            <h5>100% результат</h5>
                            <p>Команда Thompson school сделает все что-бы каждый ученик несомненно видел результат своих стараний.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 features-item mb-0">
                    <div class="row">
                        <div class="col-2 icon"><img src="/web/img/icons/reason-4.png" /><span class="number-bg">4 </span></div>
                        <div class="col-10 mt-3 text">
                            <h5>Дружная атмосфера</h5>
                            <p>Наша школа не просто группа очень интерестных людей, а целая семья!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Why our courses-->
<section id="why">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 why-item">
                <h1 class="why-title">Почему <span>вам нужны</span><br />наши курсы</h1>
                <p>Мы не просто учебный центр, а одна большая семья с единственной целью, помочь нашим студентам в достижении их цели! </p>
                <p>С нами вы точно сможете изучить языки максимально эффективно и максимально в короткий срок. Вас ждёт: профессиональные и крутые преподаватели, доброжелательная администрация, интерактивные занятия и мощная доза мотивации!</p>
            </div>
            <div class="col-lg-6 video">
                <div class="circle-wrapper">
                    <div class="circle circle-1">
                        <div class="circle circle-2">
                            <div class="circle circle-3">
                                <div class="circle circle-4"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="video-button" data-toggle="modal" data-target="#video-modal"><span class="triangle"></span></a>
            </div>
        </div>
    </div>
</section>
<!-- Course-info-->
<section id="course-info">
    <div class="container">
        <div class="row center">
            <div class="col-lg-10 col-md-12 col-sm-12 course-info-item">
                <div class="row center">
                    <div class="col-lg-4 col-md-5 col-sm-5 col-10 tabcontent">
                        <div class="tabcontent-item" id="rocket">
                            <h4>Интенсивный Английский</h4>
                            <p>Интенсивный Английский (Intensive English) - Курсы английского языка с самого начального до продвинутого. Курс включает в себя speaking club, debate club и movie time. </p>
                            <p class="course-amount">6 courses</p><span class="triangle"></span>
                        </div>
                        <div class="tabcontent-item" id="ielts" style="display:block">
                            <h4>IELTS</h4>
                            <p>С базовыми знаниями английского языка достигайте всех желаемых результатов, от 4.5 до 8.0+. В курсы входят Massive Practice, Speaking Club и Movie Time</p>
                            <p class="course-amount">4 courses</p><span class="triangle"></span>
                        </div>
                        <div class="tabcontent-item" id="it">
                            <h4>Другие языки</h4>
                            <p>LANGUAGE BOOM - Говорите на нескольких языках вместе с Thompson School</p>
                            <p class="course-amount">4 courses</p><span class="triangle"></span>
                        </div>
                        <div class="tabcontent-item" id="other-lang">
                            <h4>Другие экзамены</h4>
                            <p>Подготовка к различным экзменам для образования в США<br />- SAT<br />- GMAT</p><span class="triangle"></span>
                        </div>
                        <div class="tabcontent-item" id="plus">
                            <h4>Математика</h4>
                            <p>Курсы для получения знаний в математики для поступления в ВУЗы. Обучение проводиться на русском языке или на английском языке для поступления в международные ВУЗы.</p>
                            <p class="course-amount">2 courses</p><span class="triangle"></span>
                        </div>
                    </div>
                    <div class="w-100"></div>
                    <div class="col-lg-10 m-auto tab">
                        <div class="row">
                            <div class="col-2 center offset-1">
                                <button class="btn tablinks" id="one" onclick="openCity(event, 'rocket')"><img src="/web/img/icons/course-info-1.png" /></button>
                            </div>
                            <div class="col-2 center">
                                <button class="btn tablinks" id="two" onclick="openCity(event, 'ielts')"><img src="/web/img/icons/course-info-2.png" /></button>
                            </div>
                            <div class="col-2 center">
                                <button class="btn tablinks" id="three" onclick="openCity(event, 'it')"><img src="/web/img/icons/course-info-3.png" /></button>
                            </div>
                            <div class="col-2 center">
                                <button class="btn tablinks" id="four" onclick="openCity(event, 'other-lang')"><img src="/web/img/icons/course-info-4.png" /></button>
                            </div>
                            <div class="col-2 center">
                                <button class="btn tablinks" id="five" onclick="openCity(event, 'plus')"><img src="/web/img/icons/course-info-5.png" /></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Courses-->
<section id="courses">
    <div class="container">
        <p class="course-amount">4 courses</p>
        <div class="course-slider">
            <div class="course-slider-item">
                <h5>ielts achieve</h5><span class="sm btn">4 месяца</span>
                <p>Курс направлен на изучение основ и структуры IELTS EXAM. Результат 6.5+.</p>
                <p class="duration">Длительность:<span class="btn">4 месяца</span></p><a class="more" href="#">Подробнее</a>
            </div>
            <div class="course-slider-item">
                <h5>ielts complete</h5><span class="sm btn">3 месяца</span>
                <p>Углубленный курс, с целью повысить все модули IELTS Резултат 7.0+.</p>
                <p class="duration">Длительность:<span class="btn">3 месяца</span></p><a class="more" href="#">Подробнее</a>
            </div>
            <div class="course-slider-item">
                <h5>ielts max</h5><span class="sm btn">2 месяца</span>
                <p>Новые структуры экзамена, интерактивные зантяия и в 2 раза больше практики!</p>
                <p class="duration">Длительность:<span class="btn">2 месяца</span></p><a class="more" href="#">Подробнее</a>
            </div>
            <div class="course-slider-item">
                <h5>ielts something</h5><span class="sm btn">1 месяца</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, sed.</p>
                <p class="duration">Длительность:<span class="btn">1 месяца</span></p><a class="more" href="#">Подробнее</a>
            </div>
        </div>
    </div>
</section>
<!-- Take Course-->
<section id="take-test" class="space-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 left">
                <h1>Пройди тест и узнай<br class="hide-on-mob" /><span>что выбрать</span></h1>
                <p>Пройдите тест, после которого мы определим ваш<br class="hide-on-mob" />уровень и наиболее подходящие курс под ваши знания <br />и цели!</p>
            </div>
            <div class="col-lg-5 right">

                <?php $form = ActiveForm::begin([
                    'options' => [
                        'class' => 'w-100'
                     ]
                ]); ?>

                <div class="form-group col-lg-12 col-md-10">
                    <label class="form-label" for="name_first">Ваше имя</label>
                    <?= $form->field($model, 'fio')->textInput(['maxlength' => true, 'class' => 'form-control form-input', 'id' => 'name_first'])->label(false) ?>
                </div>

                <div class="form-group col-lg-12 col-md-10">
                    <label class="form-label" for="phone_first">Номер телефона</label>
                    <?= $form->field($model, 'tel')->textInput(['maxlength' => true, 'class' => 'form-control form-input', 'id' => 'phone_first'])->label(false) ?>
                </div>

                <div class="center">
                    <?= Html::submitButton('Подобрать курс!', ['class' => 'test-button btn']) ?>
                    <div class="for-call"><span><img src="/web/img/icons/order-call.png" /></span><a class="call" href="#" data-toggle="modal" data-target="#order-call">заказать звонок</a></div>
                </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>
        <!-- Modal-for-order-call	-->
        <div class="modal fade" id="order-call" tabindex="-1" role="dialog" aria-labelledby="order-call-label" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="order-call-label">Order Call</h5>
                    </div>
                    <div class="modal-body">

                        <form action="">
                            <div class="form-group col-lg-12 col-md-10" style="margin-top: 20px">
                                <label class="form-label" for="modal-name">Ваше имя</label>
                                <input class="form-control form-input" id="modal-name" type="text" />
                            </div>
                            <div class="form-group col-lg-12 col-md-10">
                                <label class="form-label" for="modal-phone">Номер телефона</label>
                                <input class="form-control form-input" id="modal-phone" type="text" />
                            </div>
                            <div class="center"><a class="modal-btn btn" href="#" style="background: #a61d31; color:#fff; font-size: 14px; padding: 7px 40px; font-weight: 500; border-radius: 20px; margin-bottom: 20px">Send</a></div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Comments-->
<section id="comments" class="space-section">
    <div class="container">
        <div class="comment-slider">
            <div class="comment-slider-item">
                <div class="row center">
                    <div class="block col-lg-7"><img class="avatar" src="/web/img/comment-avatar.png" /><span class="quote"><img src="/web/img/icons/quote.png" /></span>
                        <p class="text">«Я очень благодарна THOMPSON SCHOOL и их курсу Speed Up за такие замечательные уроки и просто идеальных педагогов! За какие-то 2 месяца, уровень моего английского значительно вырос, что позволило мне сдать IELTS EXAM на невообразимые для меня 6.0 баллов. Это дало мне возможность подавать документы во многие международные ВУЗы! Моя мечта сбылась!»</p>
                        <p class="name">Родитель <span>Nikki Fenn</span></p>
                    </div>
                </div>
            </div>
            <div class="comment-slider-item">
                <div class="row center">
                    <div class="block col-lg-7"><img class="avatar" src="/web/img/comment-avatar.png" /><span class="quote"><img src="/web/img/icons/quote.png" /></span>
                        <p class="text">«THOMPSON SCHOOL- Это отличный выбор для изучения английского языка. Школа найдёт подход ко всем и каждому. Мне очень нравятся уроки и мой учитель. Я вижу прогресс в своём английском, который я совсем не знал ранее, и это самое главное для меня!»</p>
                        <p class="name">Ученик <span>Nikki Menn </span></p>
                    </div>
                </div>
            </div>
            <div class="comment-slider-item">
                <div class="row center">
                    <div class="block col-lg-7"><img class="avatar" src="/web/img/comment-avatar.png" /><span class="quote"><img src="/web/img/icons/quote.png" /></span>
                        <p class="text">«Я хочу поблагодарить учебный центр, которому мы доверили своего ребёнка пол года назад, за высокий профессионализм и конечно, за бдительность и любовь к детям. Каждый раз мой сын возвращается домой после THOMPSON KIDS и на эмоциях рассказывает о том, что он узнал на уроке, о своих новых друзьях и развивающих играх, в которые они играют на уроках! Учительница по английскому в школе стала очень часто хвалить сына, ведь уровень его знаний значительно вырос. Теперь у моего ребёнка твёрдая 5 по его ныне любимому в школе предмету!»</p>
                        <p class="name">Родитель <span>Nikki Menn </span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="circle-wrapper col-lg-12">
        <div class="circle circle-1">
            <div class="circle circle-2">
                <div class="circle circle-3"></div>
            </div>
        </div>
    </div>
</section>
<!-- Team-->
<section id="team" class="space-section">
    <div class="container">
        <h1>Встречайте команду<br /><span>Thompson school</span></h1>
        <div class="row">
            <div class="team-item col-lg-4 col-md-4 col-sm-6 col-8"><img src="/web/img/team-harry.png" />
                <div>
                    <h4>Harry Thompson</h4>
                    <h5>IELTS Instructor</h5>
                </div>
            </div>
            <div class="team-item col-lg-4 col-md-4 col-sm-6 col-8"><img src="/web/img/team-asror.png" />
                <div>
                    <h4>Asror Toshev</h4>
                    <h5>IELTS Instructor</h5>
                </div>
            </div>
            <div class="team-item col-lg-4 col-md-4 col-sm-6 col-8"><img src="/web/img/team-shakh.png" />
                <div>
                    <h4>Shakhzoda Bakhodirova</h4>
                    <h5>IELTS Instructor</h5>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Target-->
<section id="target" class="space-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 left">
                <h1>А вы готовы начать<br />свое <span>незабываемое</span><br />обучение?</h1>
                <p>Становясь частью Thompson school, вы делаете огромнейший вклад в себя и в свое будущее, где вы будете успешно применять те знания, которые получите. Как первый шаг, пройдите тест для определения вашего курса!</p>
                <p>Если вы родитель закажите звонок, мы свяжемся с вами и обсудим все детали будущего образования ваших детей в Thompson school.</p>
            </div>
            <div class="col-lg-5 right">


                <?php $form = ActiveForm::begin(); ?>

                <div class="form-group col-lg-12 col-md-10">
                    <label class="form-label" for="name">Ваше имя</label>
                    <?= $form->field($model, 'fio')->textInput(['maxlength' => true, 'class' => 'form-control form-input', 'id' => 'name'])->label(false) ?>
                </div>

                <div class="form-group col-lg-12 col-md-10">
                    <label class="form-label" for="phone">Номер телефона</label>
                    <?= $form->field($model, 'tel')->textInput(['maxlength' => true, 'class' => 'form-control form-input', 'id' => 'phone'])->label(false) ?>
                </div>

                <div class="center">
                    <?= Html::submitButton('Подобрать курс!', ['class' => 'test-button btn']) ?>
                    <div class="for-call"><span><img src="/web/img/icons/order-call.png" /></span><a class="call" href="#" data-toggle="modal" data-target="#order-call">заказать звонок</a></div>
                </div>

                <?php ActiveForm::end(); ?>



                <div class="circle-wrapper">
                    <div class="circle circle-1">
                        <div class="circle circle-2">
                            <div class="circle circle-3"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal-for-order-call			-->
        <div class="modal fade" id="order-call" tabindex="-1" role="dialog" aria-labelledby="order-call-label" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="order-call-label">Order Call</h5>
                    </div>
                    <div class="modal-body">
                        <form action="">
                            <div class="form-group col-lg-12 col-md-10" style="margin-top: 20px">
                                <label class="form-label" for="modal-name">Ваше имя</label>
                                <input class="form-control form-input" id="modal-name" type="text" />
                            </div>
                            <div class="form-group col-lg-12 col-md-10">
                                <label class="form-label" for="modal-phone">Номер телефона</label>
                                <input class="form-control form-input" id="modal-phone" type="text" />
                            </div>
                            <div class="center"><a class="modal-btn btn" href="#" style="background: #a61d31; color:#fff; font-size: 14px; padding: 7px 40px; font-weight: 500; border-radius: 20px; margin-bottom: 20px">Send</a></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact-->
<section id="contact">
    <div class="container">
        <h1> <span>Наши контакты </span>и форма <br class="hide-on-mob" />обратной связи</h1>
        <div class="row center">
            <div class="col-lg-3 address">
                <div class="row">
                    <div class="address-item col-lg-12 col-md-6">
                        <h5>Номер Телефона</h5>
                        <p>+998 78 122 10 10</p>
                    </div>
                    <div class="address-item col-lg-12 col-md-6">
                        <h5>Адрес</h5>
                        <p>15/2 Chilonzor District<br />Tashkent, UZ 100121</p>
                    </div>
                    <div class="address-item col-lg-12 col-md-6">
                        <h5>E-mail</h5>
                        <p>Support@thompson.com</p>
                    </div>
                    <div class="address-item col-lg-12 col-md-6 display-inline-block"><a href="https://www.instagram.com/thompson_uz/"><img src="/web/img/icons/instagram.png" /></a><a href="https://www.facebook.com/thompsonschooluz/"><img src="/web/img/icons/facebook.png" /></a><a href="#"><img src="/web/img/icons/twitter.png" /></a></div>
                </div>
            </div>
            <div class="col-lg-6 form">
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="form-label" for="name-contact">Имя</label>
                            <input class="form-input form-control" id="name-contact" type="text" />
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-label" for="phone-contact">Номер телефон</label>
                            <input class="form-input form-control" id="phone-contact" type="text" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="email">Почта</label>
                        <input class="form-input form-control" id="email" type="email" />
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="message">Сообщение</label>
                        <input class="form-input form-control" id="message" type="text" />
                    </div>
                    <div class="for-btn"><a class="btn" href="#">Send</a></div>
                </form>
            </div>
        </div>
        <div class="cooperate col-lg-6">
            <div class="row">
                <div class="col-lg-6 col-md-8">
                    <p class="pb-2">Хотите сотрудничать <br> с Thompson school?</p>
                </div>
                <div class="col-lg-6 col-md-8">
                    <h4 class="text-white pt-3">+998 (97) 718-07-06</h4>
                </div>
            </div>
        </div>
    </div>
</section>