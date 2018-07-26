<?php require "includes/header.php"; ?>
    <!--    Start of the container in the nav-left.html-->
<?php require "includes/nav-left.html"; ?>
    <!--    continue of the container in the nav-left.html-->
<?php require "includes/nav-top-mobile.html"; ?>

<!--    <div class="table-order-wrapper">-->
    <section class="dashboard top">
        <div class="row">
            <div class="col-6">
                <div class="info big-text"><span class="number">2</span> заказа</div>
                <div class="info small-text">Будут готовы через 15 минут</div>
            </div>
            <div class="col-6">
                <div class="info big-text"><span class="number">18</span> столов <span class="total_number">24</span>
                </div>
                <div class="info small-text">занято</div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="row waiters-row">
                    <div class="info small-text waiter-info">Сегодня обслуживают</div>
                    <div class="waiter_div">
                        <div class="waiter"><span class="online active"></span></div>
                        <div class="waiter"><span class="online active"></span></div>
                        <div class="waiter"><span class="online active"></span></div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="info big-text"><span class="number">+0.19</span>%</div>
                <div class="info small-text">рейтинг</div>
            </div>
        </div>
    </section>
    <section class="active-orders">
        <div class="title-section">Активные заказы</div>
        <div class="orders-wrapper">
            <ul class="orders" id="TouchScroller">
                <li>
                    <div class="zakaz-title">Заказ №<span>789</span>&nbsp;(Стол №<span>7</span>)</div>
                    <div class="link_status_div">
                        <div class="link"><a href="">Подробнее</a></div>
                        <div class="status">Выполняется</div>
                    </div>
                </li>
                <li>
                    <div class="zakaz-title">Заказ №<span>790</span>&nbsp;(Стол №<span>7</span>)</div>
                    <div class="link_status_div">
                        <div class="link"><a href="">Подробнее</a></div>
                        <div class="status">Выполняется</div>
                    </div>
                </li>
                <li>
                    <div class="zakaz-title">Заказ №<span>791</span>&nbsp;(Стол №<span>7</span>)</div>
                    <div class="link_status_div">
                        <div class="link"><a href="">Подробнее</a></div>
                        <div class="status">Выполняется</div>
                    </div>
                </li>
                <li>
                    <div class="zakaz-title">Заказ №<span>792</span>&nbsp;(Стол №<span>7</span>)</div>
                    <div class="link_status_div">
                        <div class="link"><a href="">Подробнее</a></div>
                        <div class="status">Выполняется</div>
                    </div>
                </li>
                <li>
                    <div class="zakaz-title">Заказ №<span>789</span>&nbsp;(Стол №<span>7</span>)</div>
                    <div class="link_status_div">
                        <div class="link"><a href="">Подробнее</a></div>
                        <div class="status">Выполняется</div>
                    </div>
                </li>
                <!--                <li class="no-id"></li>-->
            </ul>
        </div>
    </section>
    <section class="hall_layout">
        <div class="title-section">Схема зала <span class="title-section-link"><a
                        href="#">Открыть на весь экран</a></span>
        </div>
        <div class="hall_layout_wrapper">
            <img src="img/Tablesplan.jpg" alt="plan" style="height: 100%;">
        </div>
    </section>
    <section class="history_orders">
        <div class="row top-callendar">
            <div class="with_callendar title-section">История заказов за <!--<form method="post">--><label
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
                        class="date">6&nbsp;июля</span>
            </div>
            <div class="title-section-link link_full_history"><a href="#">Полная история активности</a></div>
        </div>
        <div class="table-history-activity"> <!--wrapper for list of history-->
            <div class="row table-title d-mobil-none">
                <div class="col-4 name">Имя</div>
                <div class="col-5 process">Комментарий</div> <!--todo спросить название колонки-->
                <div class="col-3 time">Время</div>
            </div>
            <div class="main-table"> <!--main-table wrapper-->
                <div class="row item">
                    <div class="col-4 name">
                        <span class="avatar-guest"></span>
                        <span class="name-guest">Суарез</span><br>
                        <span class="email-guest"><a href="mailto:suarez@gmail.com">suarez@gmail.com</a></span>
                    </div>
                    <div class="col-5 process">
                        Забронировал стол №17 на 21:00
                    </div>
                    <div class="col-3 time">
                        2 минуты назад
                    </div>
                </div>
                <div class="row item">
                    <div class="col-4 name">
                        <span class="avatar-guest"></span>
                        <span class="name-guest">Мила</span><br>
                        <span class="email-guest"><a href="mailto:mila@gmail.com">mila@gmail.com</a></span>
                    </div>
                    <div class="col-5 process">
                        Получил заказ
                    </div>
                    <div class="col-3 time">
                        27 минут назад
                    </div>
                </div>
                <div class="row item">
                    <div class="col-4 name">
                        <span class="avatar-guest"></span>
                        <span class="name-guest">Croissant</span><br>
                        <span class="email-guest"><a href="mailto:cro@mail.ru">cro@mail.ru</a></span>
                    </div>
                    <div class="col-5 process">
                        Вышел из заведения и оплатил заказ
                    </div>
                    <div class="col-3 time">
                        16:30
                    </div>
                </div>
                <div class="row item">
                    <div class="col-4 name">
                        <span class="avatar-guest"></span>
                        <span class="name-guest">Евгений Формин</span><br>
                        <span class="email-guest"><a href="mailto:eug-f@gmail.com">eug-f@gmail.com</a></span>
                    </div>
                    <div class="col-5 process">
                        Приглашен пользователем Майк Ковальски
                    </div>
                    <div class="col-3 time">
                        16:25
                    </div>
                </div>
                <div class="row item">
                    <div class="col-4 name">
                        <span class="avatar-guest"></span>
                        <span class="name-guest">John</span><br>
                        <span class="email-guest"><a href="mailto:john@gmail.com">john@gmail.com</a></span>
                    </div>
                    <div class="col-5 process">
                        Сел за столом №28
                    </div>
                    <div class="col-3 time">
                        15:32
                    </div>
                </div>
                <div class="row item">
                    <div class="col-4 name">
                        <span class="avatar-guest"></span>
                        <span class="name-guest">Суарез Мигос</span><br>
                        <span class="email-guest"><a href="mailto:suarez@gmail.com">suarez@gmail.com</a></span>
                    </div>
                    <div class="col-5 process">
                        Забронировал стол №17 на 21:00
                    </div>
                    <div class="col-3 time">
                        14:30
                    </div>
                </div>
                <div class="loading-div d-none"><!--loading div-->
                    <div class="loading-text">Загрузка...</div>
                </div><!--/loading-div   -->
            </div> <!--/main-table-->
        </div> <!--/table-history-->
        <div class="row bottom-paginator">
            <a class="link" href="#">Загрузить еще</a>
            <ul class="paginator">
                <li><a class="active" href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">6</a></li>
            </ul>
        </div>
    </section>


    <?php require "includes/st-content-blocks-end.html"; ?>
    <?php require "includes/footer-scripts.html"; ?>
    <!--    <script src="https://code.jquery.com/jquery-migrate-3.0.1.js"></script>-->
    <script type="text/javascript"
            src="libs/malihu-custom-scrollbar-plugin-master/jquery.mousewheel-3.0.6.min.js"></script>
    <script type="text/javascript"
            src="libs/malihu-custom-scrollbar-plugin-master/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script type="text/javascript"
            src="libs/datepicker/datepicker-ru.js"></script>
    <script type="text/javascript">

           /* var $datepicker = $("#datepicker");
            var widget = $datepicker.datepicker( "widget" );
            //общие настройки
            $datepicker.datepicker({
                showOn: "button",
                buttonImageOnly: false,
                buttonText: "сегодня&nbsp;<svg aria-hidden=\"true\" data-prefix=\"fas\"\n" +
                "                     data-icon=\"chevron-down\"\n" +
                "                     class=\"svg-inline--fa fa-chevron-down fa-w-14\" role=\"img\"\n" +
                "                     xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 448 512\"><path\n" +
                "                            fill=\"currentColor\"\n" +
                "                            d=\"M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z\"></path></svg>",
                showOtherMonths: true,
                selectOtherMonths: true,
                navigationAsDateFormat: true
            });
            //русификация
            $datepicker.datepicker($.datepicker.regional["ru"]);
            $datepicker.datepicker( "setDate", new Date() );

           ;
            if (widget.length>0) {
                var calendar = $('#ui-datepicker-div');
                if (calendar.length>0) {
                    calendar.appendTo($('.with_callendar'));
                } else {
                    console.log('-1');
                }
            }*/
     /*   $('.ui-datepicker-trigger').on('click', function () {
            var calendar = $('#ui-datepicker-div');
            if(calendar){
                calendar.appendTo('.with_callendar');
            } else {
                console.log('-1');
            }

        });*/



       /* var putMonthNaav = (function(){
            var dateTitle, navmonth, namearrmonth;
                dateTitle = $('.ui-datepicker-title .ui-datepicker-month');
                navmonth ={};
                namearrmonth = [ "Январь","Февраль","Март","Апрель","Май","Июнь",
                    "Июль","Август","Сентябрь","Октябрь","Ноябрь","Декабрь" ];
//                switch (dateTitle === )

        });*/
//        console.log($datepicker.val());

            /*$(document).ready(function () {




                $(".orders-wrapper").mCustomScrollbar({
                    axis: "x",
                    autoExpandScrollbar: true,
                    autoHideScrollbar: true,
                    keyboard: {enable: true},
                    contentTouchScroll: true,
                    documentTouchScroll: true,
                    advanced: {
                        autoExpandHorizontalScroll: true,
                        updateOnSelectorChange: "#TouchScroller li"
                    }
                });
            });*/
//            $('a.ui-datepicker-prev').text('fgdfgd');
    </script>

<?php require "includes/footer.html"; ?>