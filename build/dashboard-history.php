<?php require "includes/header.php"; ?>


<!--    Start of the container in the nav-left.html-->
<?php require "includes/nav-left.html"; ?>
<!--    continue of the container in the nav-left.html-->
<div class="psevdosidebar row d-mobil-none">
    <div class="col-4 width-sidebar bg-sidebar"></div>
    <div class="col-8"></div>
</div>
<?php require "includes/nav-top-mobile.html"; ?>

<div class="table-history-activity"> <!--wrapper for list of history-->
    <div class="row table-title">
        <div class="col-4 with_callendar title-section">Активность за <!--<form method="post">--><label
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
        <div class="col-5 title-section-link link_filter">
            <a href="#">Фильтр&nbsp;<svg aria-hidden="true" data-prefix="fas"
                                         data-icon="chevron-down"
                                         class="svg-inline--fa fa-chevron-down fa-w-14" role="img"
                                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path
                            fill="currentColor"
                            d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
                </svg>
            </a></div>
        <div class="col-3 time">Время</div>
    </div>
    <div class="main-table"> <!--main-table wrapper-->

        <div class="item">
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
                    <div class="li">16:25</div>
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
                    <div class="li">16:25</div>
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
    <ul class="paginator">
        <li><a class="active" href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li><a href="#">6</a></li>
    </ul>
</div>

<?php require "includes/st-content-blocks-end.html"; ?>

<?php require "includes/footer-scripts.html"; ?>

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript"
        src="libs/datepicker/datepicker-ru.js"></script>
<?php require "includes/footer.html"; ?>
