<?php require "includes/header.php"; ?>

<!--    Start of the container in the nav-left.html-->
<?php require "includes/nav-left.html"; ?>
<!--    continue of the container in the nav-left.html-->

<div class="psevdosidebar row d-mobil-none">
    <div class="col-4 width-sidebar bg-sidebar"></div>
    <div class="col-8"></div>
</div>
<?php require "includes/nav-top-mobile.html"; ?>
<section>
    <div class="row">
        <div class="col-4 width-sidebar">
            <div class="sidebar">
                <div class="today-date">Сегодня <span>25 июля</span></div>
                <div class="tasks_title">У вас <a href="#">7 активных задач</a></div>
                <div class="tasks">
                    <ul>
                        <li class="active">
                            <div class="task-title">Встретить гостей на входе</div>
                            <div class="task-info">Прямо сейчас</div>
                        </li>
                        <li>
                            <div class="task-title">Новое сообщение от Евгения</div>
                            <div class="task-info"><a class="open" href="#">Перейти в чат</a><a class="close" href="#">Закрыть</a>
                            </div>
                        </li>
                        <li>
                            <div class="task-title">Пять минут до встречи</div>
                            <div class="task-info">Встретить нового гостя на входе</div>
                        </li>
                        <li>
                            <div class="task-title">Подготовить стол №5</div>
                            <div class="task-info">Гость прибудет в 16:00</div>
                        </li>
                        <li>
                            <div class="task-title">Митап сотрудников</div>
                            <div class="task-info">За прошедший день, в 16:00</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-8" style="overflow: auto;">
            <div class="dashboard">
                <div class="top">
                    <div class="row dashboard-containers">
                        <div class="col">
                            <div class="row dashboard-container">
                                <div class="top-block guests">
                                    <div class="info big-text"><span class="guests-count">209</span></div>
                                    <div class="info small-text">гостей</div>
                                </div>
                                <div class="graf"><img src="img/graf-red.PNG" alt="graf"></div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row dashboard-container">
                                <div class="top-block rating">
                                    <div class="info big-text"><span class="rating-count">+0.19</span>%</div>
                                    <div class="info small-text">рейтинг</div>
                                </div>
                                <div class="graf"><img src="img/graf-green.PNG" alt="graf"></div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row dashboard-container">
                                <div class="top-block rating">
                                    <div class="info big-text"><span class="number">18</span> столов <span
                                                class="total_number">24</span>
                                    </div>
                                    <div class="info small-text">занято</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="schedule">
                    <hr class="hr">
                    <div class="schedule-nav">
                        <p>Планируемые&nbsp;события</p>
                        <a class="schedule-link" href="#">График&nbsp;сотрудников</a>
                        <button type="button" class="btn btn-outline btn-full-schedule">Полный календарь</button>
                    </div>
                    <div class="schedule-container">
                        <div class="schedule-vue">
                            <div class="not-dot blue" style="left: 23.1%;">
                                <div class="circle"></div>
                                <div class="dot-info"></div>
                            </div>
                            <div class="not-dot violet" style="left: 77%;">
                                <div class="circle"></div>
                                <div class="dot-info">Учет табака</div>
                            </div>
                            <div class="scheduled-task blue first-level"
                                 style="width: calc((220 / 495) * 100%);left: 23%;"><a href="#">Лекция «Growthhacking
                                    network»</a>
                                <div class="tip">
                                    <div class="tip-container">
                                        <div class="title">
                                            <a href="#">Лекция «Growthhacking
                                                network»</a>
                                            <div class="time">c 18:00 до 23:00</div>
                                        </div>
                                        <div class="bottom-info">
                                            <div class="participant"><span>12</span> участников</div>
                                            <div class="status">Заказ готовится</div>
                                        </div>
                                        <div class="pick-color-group"><label for="task-color1">
                                                <svg aria-hidden="true" data-prefix="fas"
                                                     data-icon="chevron-down"
                                                     class="svg-inline--fa fa-chevron-down fa-w-14" role="img"
                                                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                    <path
                                                            fill="currentColor"
                                                            d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
                                                </svg>
                                                <span class="task-color"></span></label><input type="color"
                                                                                               value="#4990e2" hidden
                                                                                               id="task-color1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="scheduled-task blue first-level"
                                 style="width: calc((70 / 495) * 100%);left: 80%;"><a href="#">Кинопоказ</a>
                                <div class="tip" style="display: none;">
                                    <div class="tip-container">
                                        <div class="title">
                                            <a href="#">Кинопоказ</a>
                                            <div class="time">c 18:00 до 23:00</div>
                                        </div>
                                        <div class="bottom-info">
                                            <div class="participant"><span>12</span> участников</div>
                                            <div class="status">Заказ готовится</div>
                                        </div>
                                        <div class="pick-color-group"><label for="task-color2">
                                                <svg aria-hidden="true" data-prefix="fas"
                                                     data-icon="chevron-down"
                                                     class="svg-inline--fa fa-chevron-down fa-w-14" role="img"
                                                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                    <path
                                                            fill="currentColor"
                                                            d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
                                                </svg>
                                                <span class="task-color"></span></label><input type="color"
                                                                                               value="#fefad2" hidden
                                                                                               id="task-color2">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="scheduled-task yellow second-level"
                                 style="width: calc((166 / 495) * 100%);left: 62%;"><a href="#">Бронь коворкинга</a>
                                <div class="tip">
                                    <div class="tip-container">
                                        <div class="title">
                                            <a href="#">Бронь коворкинга</a>
                                            <div class="time">c 18:00 до 23:00</div>
                                        </div>
                                        <div class="bottom-info">
                                            <div class="participant"><span>12</span> участников</div>
                                            <div class="status">Заказ готовится</div>
                                        </div>
                                        <div class="pick-color-group"><label for="task-color3">
                                                <svg aria-hidden="true" data-prefix="fas"
                                                     data-icon="chevron-down"
                                                     class="svg-inline--fa fa-chevron-down fa-w-14" role="img"
                                                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                    <path
                                                            fill="currentColor"
                                                            d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
                                                </svg>
                                                <span class="task-color"></span></label><input type="color"
                                                                                               value="#fefad2" hidden
                                                                                               id="task-color3">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="time-line-container">
                                <div class="time-line -main" style="left: 4.1%">
                                    <div class="time">6:00</div>
                                    <div class="line"></div>
                                </div>
                                <div class="time-line -main" style="left: 43.4%;">
                                    <div class="time">16:00</div>
                                    <div class="line"></div>
                                </div>
                                <div class="time-line -main" style="left: 88.9%;">
                                    <div class="time">23:00</div>
                                    <div class="line"></div>
                                </div>
                            </div>
                            <div class="time-line-container -hover">
                                <div class="time-line -hover" style="left: 36%;">
                                    <div class="time">14:57</div>
                                    <div class="line"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="hr">
                </div>
                <div class="notes">
                    <div class="row">
                        <div class="col-3">
                            <div class="title">Напоминания</div>
                        </div>
                        <div class="col-9">
                            <div class="checkboxes-container">
                                <div class="notification-group">
                                    <div class="сustom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">
                                            <span class="time">14:00</span>Встретить спикеров лекции</label>
                                        <div class="not-dot blue"></div>
                                    </div>

                                </div>
                                <div class="notification-group">
                                    <div class="сustom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck2">
                                        <label class="custom-control-label" for="customCheck2">
                                            <span class="time">23:30</span>Учет табака</label>
                                        <div class="not-dot violet"></div>
                                    </div>

                                </div>
                                <div class="notification-group ">
                                    <div class="сustom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck3" checked>
                                        <label class="custom-control-label" for="customCheck3">
                                            <span class="time">11:00</span>Выдать почту Максиму</label>
                                        <div class="not-dot black"></div>
                                    </div>

                                </div>
                            </div>
                            <button type="button" class="btn btn-outline btn-add-notification">Добавить…</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="history-container">


    <div class="history-wrapper">
        <div class="row top-callendar">
            <div class="col-4 width-sidebar"></div>
            <div class="col-8">
                <div class="row top-callendar-row">
                    <div class="with_callendar title-section">Активность за <!--<form method="post">--><label
                                class="callendar-dropdown d-none">сегодня<i>
                                <svg aria-hidden="true" data-prefix="fas"
                                     data-icon="chevron-down"
                                     class="svg-inline--fa fa-chevron-down fa-w-14" role="img"
                                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path
                                            fill="currentColor"
                                            d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
                                </svg>
                            </i></label><input id="datepicker" type="text" hidden><!--</form>--><span
                                class="date d-none">6&nbsp;июля</span>
                    </div>
                    <div class="title-section-link link_full_history"><a href="dashboard-history.php">Полная история активности</a></div>
                </div>
            </div>

        </div>

        <div class="table-history-activity"> <!--wrapper for list of history-->
            <div class="row table-title d-mobil-none">
                <div class="col-4 width-sidebar name">Клиент</div>
                <div class="col-5 process">Экшн</div> <!--todo спросить название колонки-->
                <div class="col-3 time">Время</div>
            </div>
            <div class="row">
                <div class="col-4 width-sidebar hr-col">
                    <hr class="hr d-mobil-none">
                </div>
                <div class="col-8 hr-col -two">
                    <hr class="hr">
                </div>
            </div>
            <div class="main-table"> <!--main-table wrapper-->
                <div class="item ">
                    <div class="row main-item">
                        <hr class="hr ">
                        <div class="col-4 width-sidebar name">
                            <span class="avatar-guest"></span>
                            <span class="name-guest">Евгений Формин</span><br>
                            <span class="email-guest"><a href="mailto:eug-f@gmail.com">eug-f@gmail.com</a></span>
                        </div>
                        <div class="col-5 process">
                            <div class="li">Приглашен пользователем Майк Ковальски</div>
                        </div>
                        <div class="col-3 time">
                            <div class="li">16:30</div>
                        </div>
                    </div>
                    <div class="row sub-item -info">
                        <div class="col-4 width-sidebar "></div>
                        <div class="col-8 process ">
                            <div class="li">John и еще трое приглашенных гостей прибудут в переговорку к 23:00</div>
                            <div class="li -action-links ">
                                <a class="action -first" href="#">Создать напоминание</a><a class="action -second" href="#">Открыть
                                    чек заказа</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item ">
                    <div class="row main-item">
                        <hr class="hr ">
                        <div class="col-4 width-sidebar name">
                            <span class="avatar-guest"></span>
                            <span class="name-guest">John</span><br>
                            <span class="email-guest"><a href="mailto:suarez@gmail.com">suarez@gmail.com</a></span>
                        </div>
                        <div class="col-5 process">
                            <div class="li">Сел за столом №28</div>
                        </div>
                        <div class="col-3 time">
                            <div class="li">15:32</div>
                        </div>
                    </div>
                    <div class="row sub-item">
                        <div class="col-4 width-sidebar "></div>
                        <div class="col-5 process">

                            <div class="li">Забронировал стол №17 на 21:00</div>

                        </div>
                        <div class="col-3 time">

                            <div class="li">14:30</div>

                        </div>
                    </div>
                    <div class="row sub-item -info ">
                        <div class="col-4 width-sidebar "></div>
                        <div class="col-8 process ">
                            <div class="li">John и еще трое приглашенных гостей прибудут в переговорку к 23:00</div>
                            <div class="li -action-links ">
                                <a class="action -first" href="#">Создать напоминание</a><a class="action -second" href="#">Открыть
                                    чек заказа</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item -info-block">
                    <div class="row main-item">
                        <hr class="hr ">
                        <div class="col-4 width-sidebar name">
                            <span class="avatar-guest"></span>
                            <span class="name-guest">Евгений Формин</span><br>
                            <span class="email-guest"><a href="mailto:eug-f@gmail.com">eug-f@gmail.com</a></span>
                        </div>
                        <div class="col-5 process">
                            <div class="li">Приглашен пользователем Майк Ковальски</div>
                        </div>
                        <div class="col-3 time">
                            <div class="li">16:25</div>
                        </div>
                    </div>
                    <div class="row sub-item">
                        <div class="col-4 width-sidebar "></div>
                        <div class="col-5 process">

                            <div class="li">Забронировал стол №17 на 21:00</div>

                        </div>
                        <div class="col-3 time">

                            <div class="li">16:25</div>

                        </div>
                    </div>
                    <div class="row sub-item -info active">
                        <div class="col-4 width-sidebar "></div>
                        <div class="col-8 process ">
                            <div class="li">John и еще трое приглашенных гостей прибудут в переговорку к 23:00</div>
                            <div class="li -action-links ">
                                <a class="action -first" href="#">Создать напоминание</a><a class="action -second" href="#">Открыть
                                    чек заказа</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item ">
                    <div class="row main-item">
                        <hr class="hr ">
                        <div class="col-4 width-sidebar name">
                            <span class="avatar-guest"></span>
                            <span class="name-guest">Суарез Мигос</span><br>
                            <span class="email-guest"><a href="mailto:suarez@gmail.com">suarez@gmail.com</a></span>
                        </div>
                        <div class="col-5 process">
                            <div class="li">Забронировал стол №17 на 21:00</div>
                        </div>
                        <div class="col-3 time">
                            <div class="li">2 минуты назад</div>
                        </div>
                    </div>
                    <div class="row sub-item">
                        <div class="col-4 width-sidebar "></div>
                        <div class="col-5 process">

                            <div class="li">Оплата абонемента</div>

                        </div>
                        <div class="col-3 time">

                            <div class="li">27 минут назад</div>

                        </div>
                    </div>
                    <div class="row sub-item -info ">
                        <div class="col-4 width-sidebar "></div>
                        <div class="col-8 process ">
                            <div class="li">John и еще трое приглашенных гостей прибудут в переговорку к 23:00</div>
                            <div class="li -action-links ">
                                <a class="action -first" href="#">Создать напоминание</a><a class="action -second" href="#">Открыть
                                    чек заказа</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item ">
                    <div class="row main-item">
                        <hr class="hr ">
                        <div class="col-4 width-sidebar name">
                            <span class="avatar-guest"></span>
                            <span class="name-guest">Croissant</span><br>
                            <span class="email-guest"><a href="mailto:cro@mail.ru">cro@mail.ru</a></span>
                        </div>
                        <div class="col-5 process">
                            <div class="li">Вышел из заведения и оплатил заказ</div>
                        </div>
                        <div class="col-3 time">
                            <div class="li">16:30</div>
                        </div>
                    </div>
                    <div class="row sub-item -info ">
                        <div class="col-4 width-sidebar "></div>
                        <div class="col-8 process ">
                            <div class="li">John и еще трое приглашенных гостей прибудут в переговорку к 23:00</div>
                            <div class="li -action-links ">
                                <a class="action -first" href="#">Создать напоминание</a><a class="action -second" href="#">Открыть
                                    чек заказа</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="loading-div d-none"><!--loading div-->
                    <div class="loading-text">Загрузка...</div>
                </div><!--/loading-div   -->
            </div> <!--/main-table-->
        </div> <!--/table-history-->

        <div class="row bottom-paginator">
            <a class="load-more" href="#">Загрузить еще</a>
            <ul class="paginator d-none">
                <li><a class="active" href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">6</a></li>
            </ul>
        </div>
    </div>
</section>

<?php require "includes/st-content-blocks-end.html"; ?>

<?php require "includes/footer-scripts.html"; ?>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript"
        src="libs/datepicker/datepicker-ru.js"></script>

<?php require "includes/footer.html"; ?>
