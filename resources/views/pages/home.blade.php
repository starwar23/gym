@extends('layout.app')

@section('main')
    <section class="hero-section">
        <div class="hero-items owl-carousel">
            <div class="single-hero-item set-bg" data-setbg="img/hero-slider/hero-1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="hero-text">
                                <h2>Присоединяйтесь к нам сейчас</h2>
                                <h1>ФИТНЕС И СПОРТ</h1>
                                <a href="#" class="primary-btn">Читать далее</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-hero-item set-bg" data-setbg="img/hero-slider/hero-2.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="hero-text">
                                <h2>Присоединяйтесь к нам сейчас</h2>
                                <h1>ФИТНЕС И СПОРТ</h1>
                                <a href="#" class="primary-btn">Читать далее</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-hero-item set-bg" data-setbg="img/hero-slider/hero-3.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="hero-text">
                                <h2>Присоединяйтесь к нам сейчас</h2>
                                <h1>ФИТНЕС И СПОРТ</h1>
                                <a href="#" class="primary-btn">Читать далее</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="feature-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="feature-item set-bg" data-setbg="img/feature/feature-1.jpg">
                        <h3>ГРУППОВЫЕ ЗАНЯТИЯ</h3>
                        <a href="#" class="primary-btn f-btn">Читать далее</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-item set-bg" data-setbg="img/feature/feature-2.jpg">
                        <h3>ПЕРСОНАЛЬНОЕ ТРЕНИРОВКИ</h3>
                        <a href="#" class="primary-btn f-btn">Читать далее</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-item set-bg" data-setbg="img/feature/feature-3.jpg">
                        <h3>СПОРТИВНОЕ ПИТАНИЕ</h3>
                        <a href="#" class="primary-btn f-btn">Читать далее</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="home-about spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-text">
                        <h2>ДОБРО ПОЖАЛОВАТЬ В CROSSFIT</h2>
                        <p class="short-details">CrossFit - это ультрасовременная функциональная фитнес-система, которая
                            может помочь обычным мужчинам..</p>
                        <p class="long-details">Добиться успеха на самом деле не так уж трудно. Здесь, в России, есть
                            значительная часть населения, которая действительно хочет и нуждается в
                            успехе, чтобы быть трудной! Для тех из вас, кто серьезно относится к тому, чтобы иметь
                            больше, делать больше, отдавать больше и быть больше.</p>
                        <a href="#" class="primary-btn about-btn">Узнать больше</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="{{asset('img/home-about.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="classes-section">
        <div class="class-title set-bg" data-setbg="{{asset('img/classes-title-bg.jpg')}}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 m-auto text-center">
                        <div class="section-title pl-lg-4 pr-lg-4 pl-0 pr-0">
                            <h2>ВЫБЕРИТЕ СВОЮ ПРОГРАММУ</h2>
                            <p>Наши эксперты по кроссфиту могут помочь вам открыть для себя новые тренировочные техники
                                и упражнения, которые обеспечивают динамичную и эффективную тренировку всего тела.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="classes-item set-bg" data-setbg="img/classes/class-1.jpg">
                        <h4>КРОССФИТ УРОВЕНЬ 1</h4>
                        <p>Начальный уровень, для начинающих спортсменов</p>
                        <a href="#" class="primary-btn class-btn">Подробнее</a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="classes-item set-bg" data-setbg="img/classes/class-2.jpg">
                        <h4>УЧЕБНЫЙ ЛАГЕРЬ</h4>
                        <p>Обучение, в спортивном лагере с опытными тренерами</p>
                        <a href="#" class="primary-btn class-btn">Подробнее</a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="classes-item set-bg" data-setbg="img/classes/class-3.jpg">
                        <h4>ЭНЕРГЕТИЧЕСКИЙ ВЗРЫВ</h4>
                        <p>Взрывная тренировка, на грани ваших возможностей </p>
                        <a href="#" class="primary-btn class-btn">Подробнее</a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="classes-item set-bg" data-setbg="img/classes/class-4.jpg">
                        <h4>КЛАССИЧЕСКИЙ БОДИБИЛДИНГ</h4>
                        <p>Создавать свое тело, каждый день, каждую минуту</p>
                        <a href="#" class="primary-btn class-btn">Подробнее</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="classtime-section class-time-table spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <h2>РАСПИСАНИЕ ЗАНЯТИЙ</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="timetable-controls">
                        <ul>
                            <li class="active" data-tsfilter="all">Все классы</li>
                            <li data-tsfilter="crossfit">кроссфит</li>
                            <li data-tsfilter="lunge">упражнение с мячом</li>
                            <li data-tsfilter="ppsr">ppsr</li>
                            <li data-tsfilter="walls">Мэри</li>
                            <li data-tsfilter="candy">Энджи</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="classtime-table">
                <table>
                    <thead>
                    <tr>
                        <th></th>
                        <th>Понедельник</th>
                        <th>Вторник</th>
                        <th>Среда</th>
                        <th>Четверг</th>
                        <th>Пятница</th>
                        <th>Суббота</th>
                        <th>Воскресенье</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="workout-time">10.00</td>
                        <td class="hover-bg ts-item" data-tsmeta="crossfit">
                            <span>10.00 - 14.00</span>
                            <h6>кроссфит</h6>
                        </td>
                        <td></td>
                        <td class="hover-bg ts-item" data-tsmeta="crossfit">
                            <span>10.00 - 15.00</span>
                            <h6>кроссфит</h6>
                        </td>
                        <td></td>
                        <td class="hover-bg ts-item" data-tsmeta="lunge">
                            <span>10.00 - 13.00</span>
                            <h6>упражнение с мячом</h6>
                        </td>
                        <td></td>
                        <td class="hover-bg ts-item" data-tsmeta="lunge">
                            <span>10.00 - 13.30</span>
                            <h6>упражнение с мячом</h6>
                        </td>
                    </tr>
                    <tr>
                        <td class="workout-time">14.00</td>
                        <td></td>
                        <td class="hover-bg ts-item" data-tsmeta="lunge">
                            <span>14.00 - 17.00</span>
                            <h6>упражнение с мячом</h6>
                        </td>
                        <td></td>
                        <td class="hover-bg ts-item" data-tsmeta="crossfit">
                            <span>14.00 - 17.00</span>
                            <h6>кроссфит</h6>
                        </td>
                        <td></td>
                        <td class="hover-bg ts-item" data-tsmeta="walls">
                            <span>14.00 - 15.30</span>
                            <h6>МЭРИ</h6>
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="workout-time">16.00</td>
                        <td class="hover-bg ts-item" data-tsmeta="lunge">
                            <span>16.00 - 18.00</span>
                            <h6>упражнение с мячом</h6>
                        </td>
                        <td></td>
                        <td class="hover-bg ts-item" data-tsmeta="candy">
                            <span>16.00 - 19.00</span>
                            <h6>Энджи</h6>
                        </td>
                        <td></td>
                        <td class="hover-bg ts-item" data-tsmeta="candy">
                            <span>16.00 - 19.00</span>
                            <h6>Энджи</h6>
                        </td>
                        <td class="hover-bg ts-item" data-tsmeta="ppsr">
                            <span>16.00 - 17.00</span>
                            <h6>Ppsr</h6>
                        </td>
                        <td class="hover-bg ts-item" data-tsmeta="murph">
                            <span>16.00 - 20.00</span>
                            <h6>murph</h6>
                        </td>
                    </tr>
                    <tr>
                        <td class="workout-time">18.00</td>
                        <td class="hover-bg ts-item" data-tsmeta="walls">
                            <span>18.00 - 20.00</span>
                            <h6>МЭРИ</h6>
                        </td>
                        <td class="hover-bg ts-item" data-tsmeta="ppsr">
                            <span>18.00 - 20.00</span>
                            <h6>ppsr</h6>
                        </td>
                        <td></td>
                        <td class="hover-bg ts-item" data-tsmeta="chelsea">
                            <span>18.00 - 22.00</span>
                            <h6>Chelsea</h6>
                        </td>
                        <td></td>
                        <td class="hover-bg ts-item" data-tsmeta="annie">
                            <span>18.00 - 22.00</span>
                            <h6>annie</h6>
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="workout-time">20.00</td>
                        <td class="hover-bg ts-item" data-tsmeta="lunge">
                            <span>21.00 - 23.00</span>
                            <h6>упражнение с мячом</h6>
                        </td>
                        <td class="hover-bg ts-item" data-tsmeta="walls">
                            <span>20.00 - 22.00</span>
                            <h6>МЭРИ</h6>
                        </td>
                        <td class="hover-bg ts-item" data-tsmeta="walls">
                            <span>20.30 - 23.00</span>
                            <h6>МЭРИ</h6>
                        </td>
                        <td></td>
                        <td class="hover-bg ts-item" data-tsmeta="crossfit">
                            <span>22.00 - 23.00</span>
                            <h6>кроссфит</h6>
                        </td>
                        <td></td>
                        <td class="hover-bg ts-item" data-tsmeta="crossfit">
                            <span>21.00 - 23.00</span>
                            <h6>кроссфит</h6>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <section class="price-section spad set-bg" data-setbg="img/price-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Выберите свой тариф</h2>
                    </div>
                    <div class="toggle-option">
                        <ul>
                            <li>Monthly</li>
                            <li>
                                <label class="switch">
                                    <input type="checkbox" checked>
                                    <span class="slider"></span>
                                </label>
                            </li>
                            <li>Years</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-price-plan">
                        <h4>обычный</h4>
                        <div class="price-plan">
                            <h2>1500 <span>₽</span></h2>
                            <p>месяц</p>
                        </div>
                        <ul>
                            <li>Неограниченный доступ в тренажерный зал</li>
                            <li>1 занятие в неделю</li>
                            <li>Пакет с бесплатной питьевой водой</li>
                            <li>1 Бесплатное персональное обучение</li>
                        </ul>
                        <a href="#" class="primary-btn price-btn">начать</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-price-plan">
                        <h4>профессиональный</h4>
                        <div class="price-plan">
                            <h2>2000 <span>₽</span></h2>
                            <p>месяц</p>
                        </div>
                        <ul>
                            <li>Неограниченный доступ в тренажерный зал</li>
                            <li>2 занятия в неделю</li>
                            <li>Пакет с бесплатной питьевой водой</li>
                            <li>2 бесплатных персональных тренинга</li>
                        </ul>
                        <a href="#" class="primary-btn price-btn">начать</a>
                        <div class="tic-text">
                            <i class="fa fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-price-plan">
                        <h4>Совершенный</h4>
                        <div class="price-plan">
                            <h2>5000 <span>₽</span></h2>
                            <p>месяц</p>
                        </div>
                        <ul>
                            <li>Неограниченный доступ в тренажерный зал</li>
                            <li>6 занятий в неделю</li>
                            <li>Пакет с бесплатной питьевой водой</li>
                            <li>5 бесплатных персональных тренировок</li>
                        </ul>
                        <a href="#" class="primary-btn price-btn">начать</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="chooseus-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>ПОЧЕМУ ВЫБИРАЮТ НАС</h2>
                        <p>Наши спортивные эксперты и новейшее спортивное оборудование - это выигрышная комбинация.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="choose-item">
                        <img src="img/icons/chose-icon-1.png" alt="">
                        <h5>Поддержка 24/24</h5>
                        <p>Один из лучших способов сделать свою тренировку ужасной - это быть одному</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="choose-item">
                        <img src="img/icons/chose-icon-2.png" alt="">
                        <h5>Наши тренеры</h5>
                        <p>Всегда помогут, даже в самой сложной ситуации, они наше богатство</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="choose-item">
                        <img src="img/icons/chose-icon-3.png" alt="">
                        <h5>Персонализированные тренировки</h5>
                        <p>Чтобы преуспеть в любом начинании, вы должны оставаться в курсе...но неважно, чего это будет
                            стоить!</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="choose-item">
                        <img src="img/icons/chose-icon-4.png" alt="">
                        <h5>Наше оборудование</h5>
                        <p> Лучшее оборудовании в окрестностях, приходите убедитесь</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="choose-item">
                        <img src="img/icons/chose-icon-5.png" alt="">
                        <h5>Занятия ежедневно</h5>
                        <p>Будет свободное время, приходите, не тратье свободное время в пустую</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="choose-item">
                        <img src="img/icons/chose-icon-6.png" alt="">
                        <h5>Контроль питания</h5>
                        <p>Помогаем, соблюдать правильное питание, которые поможет достигнуть новых рекордов</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="video-section set-bg" data-setbg="img/video-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="video-text">
                        <h2>ТРЕНАЖЕРНЫЙ ЗАЛ В ЦЕНТРЕ ГОРОДА</h2>
                        <a href="https://www.youtube.com/watch?v=X_9VoqR5ojM" class="play-btn video-popup">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section Begin -->
    <section class="blog-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <h2>ИЗ НАШЕГО БЛОГА</h2>
                        <p>Список всех новостей и событий, которые происходят, связанных с нами</p>
                    </div>
                </div>
            </div>
            <div class="row blog-gird">
                <div class="grid-sizer"></div>
                <div class="col-lg-4 col-md-6 grid-item">
                    <div class="blog-item large-item set-bg" data-setbg="img/blog/blog-1.jpg">
                        <a href="#" class="blog-text">
                            <div class="categories">Тренажерный зал и кроссфит</div>
                            <h5>Многие люди подписываются на партнерские программы</h5>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grid-item">
                    <div class="blog-item instagram-item">
                        <a href="#" class="instagram-text">
                            <div class="categories">Тренажерный зал и кроссфит <i class="fa fa-instagram"></i></div>
                            <h5>Следите за нашими занятиями в тренажерном зале в Instagram # BodyBuilding # photo</h5>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grid-item">
                    <div class="blog-item small-item set-bg" data-setbg="img/blog/blog-2.jpg">
                        <a href="#" class="blog-text">
                            <div class="categories">Тренажерный зал и кроссфит</div>
                            <h5>Работает ли кроссфит</h5>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grid-item">
                    <div class="blog-item large-item xls-large set-bg" data-setbg="img/blog/blog-3.jpg">
                        <a href="#" class="blog-text">
                            <div class="categories">Тренажерный зал и кроссфит</div>
                            <h5>Многие люди подписываются на партнерские программы</h5>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grid-item">
                    <div class="blog-item large-item set-bg" data-setbg="img/blog/blog-4.jpg">
                        <a href="#" class="blog-text">
                            <div class="categories">Тренажерный зал и кроссфит</div>
                            <h5>Многие люди подписываются на партнерские программы</h5>
                        </a>
                        <div class="play-btn">
                            <a href="https://www.youtube.com/watch?v=X_9VoqR5ojM" class="play-in-btn video-popup">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grid-item">
                    <div class="blog-item small-item set-bg" data-setbg="img/blog/blog-5.jpg">
                        <a href="#" class="blog-text">
                            <div class="categories">Тренажерный зал и кроссфит</div>
                            <h5>Варианты приема вашего анаболика от одного Дня до 10 Дней</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

    <!-- Cta Section Begin -->
    <section class="cta-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cta-text">
                        <h3>Начните сегодня</h3>
                        <p>Новое специальное предложение! За 2000₽ безлимитного посещения тренажерного зала в течение
                            первой недели и 50% для нашего участника!</p>
                    </div>
                    <a href="#" class="primary-btn cta-btn">Начать сейчас</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Cta Section End -->
    <div class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d188618.51311104256!2d-71.236572!3d42.381647!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1576756626784!5m2!1sen!2sbd"
            height="590" style="border: 0" allowfullscreen=""></iframe>
        <div class="map-contact-detalis">
            <div class="open-time">
                <h5>Режим работы:</h5>
                <ul>
                    <li>Будни: <span>06:30 - 11:00</span></li>
                    <li>Суббота: <span>07:00 - 22:00</span></li>
                    <li>Воскресенье: <span>09:00 - 18:00</span></li>
                </ul>
            </div>
            <div class="map-contact-form">
                <h5>связаться с нами</h5>
                <form action="#">
                    <input type="text" placeholder="Имя">
                    <input type="text" class="phone" placeholder="Телефон">
                    <textarea placeholder="Сообщение"></textarea>
                    <button type="submit" class="site-btn">Отправить</button>
                </form>
            </div>
        </div>
    </div>
@endsection
