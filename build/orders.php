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
                <div class="title-section  active-orders" >Активные заказы <a href="#" class="number-orders">3</a></div>
                <div class="orders">
                    <ul>
                        <li class="table confirmation closed">
                            <div class="table-top"><a href="#"><span class="table-name">Стол №3</span>&nbsp;<span class="table-name-two"></span><span class="status"></span></a><div class="people-count"><span class="number">1</span>&nbsp;<span class="people-category">гость</span></div></div>
                            <div class="table-info-block"> <!--Подсвечивается синим если класс подтверждение-->
                                <div class="order-list"> <!--невидим если класс закрыт / видим если класс закрыт отсутствует-->
                                </div>
                                <div class="closed-info"> <!--видим если класс закрыт / не видим если класс закрыт отсутствует-->
                                    <div class="closed-text">Гость оплатил чек и покинул заведение</div>
                                    <div class="order-total-check">Сумма заказа <span>4700</span> рублей</div>
                                </div>
                                <div class="status-id-row">
                                        <div class="status">Оплачен</div>
                                        <div class="rating">Рейтинг: <span>5</span></div> <!--видим если класс закрыт / не видим если класс закрыт отсутствует-->
                                        <div class="order-id">#0094</div>
                                </div>
                            </div>
                            <div class="table-bottom">
                                    <div class="table-action"><a href="#">Подтвердить и закрыть</a></div>
                                    <div class="waiter">Сергей</div>
                            </div>
                            <hr class="hr">
                        </li>
                        <li class="table active">
                            <div class="table-top"><a href="#"><span class="table-name">Стол №1</span>&nbsp;<span class="table-name-two">Чилл-аут</span><span class="status"></span></a><div class="people-count"><span class="number">6</span>&nbsp;<span class="people-category">гостей</span></div></div>
                            <div class="table-info-block">
                                <div class="order-list">
                                    <div class="order-item">
                                        <div class="item">Кальян дня</div>
                                        <div class="count">x<span>1</span></div>
                                    </div>
                                    <div class="order-item">
                                        <div class="item">Чайная церемония на 6 персон</div>
                                        <div class="count">x<span>1</span></div>
                                    </div>
                                    <div class="order-item">
                                        <div class="item">Кальян на грейпфруте от мастера</div>
                                        <div class="count">x<span>1</span></div>
                                    </div>
                                    <div class="order-item">
                                        <div class="item">Вода Evian 0.47</div>
                                        <div class="count">x<span>2</span></div>
                                    </div>
                                    <div class="order-item">
                                        <div class="item">Чизкек из Пекана</div>
                                        <div class="count">x<span>1</span></div>
                                    </div>
                                    <div class="order-item -note">Просили подать воду сразу</div> <!--видим при статусе активный-->
                                </div>
                                <div class="closed-info">
                                    <div class="closed-text"></div>
                                    <div class="order-total-check">Сумма заказа <span></span> рублей</div>
                                </div>
                                <div class="status-id-row">
                                        <div class="status">Готовится...</div>
                                        <div class="rating">Рейтинг: <span></span></div>
                                        <div class="order-id">#0091</div>
                                </div>
                            </div>
                            <div class="table-bottom">
                                    <div class="table-action disabled"><a href="#">Открыт 47 минут назад</a></div>
                                    <div class="waiter">Майкл</div>
                            </div>
                            <hr class="hr">
                        </li>
                        <li class="table active new"> <!--когда статус нью добаляются черточки в перечне заказов и убирается количество каунт-->
                            <div class="table-top"><a href="#"><span class="table-name">Стол №5</span>&nbsp;<span class="table-name-two"></span><span class="status"></span></a><div class="people-count"><span class="number">6</span>&nbsp;<span class="people-category">гостей</span></div></div>
                            <div class="table-info-block">
                                <div class="order-list">
                                    <div class="order-item">
                                        <div class="item">Кальян дня от кальян-мастера</div>
                                        <div class="count">x<span>0</span></div>
                                    </div>
                                    <div class="order-item">
                                        <div class="item">Чай на двух персон</div>
                                        <div class="count">x<span>0</span></div>
                                    </div>
                                    <div class="order-item -note"></div> <!--скрыт без статуса активный-->
                                </div>
                                <div class="closed-info">
                                    <div class="closed-text"></div>
                                    <div class="order-total-check">Сумма заказа <span></span> рублей</div>
                                </div>
                                <div class="status-id-row">
                                        <div class="status">Ожидает подтверждения</div>
                                        <div class="rating">Рейтинг: <span></span></div>
                                        <div class="order-id">#0094</div>
                                </div>
                            </div>
                            <div class="table-bottom">
                                    <div class="table-action"><a class="" href="#">Открыт 2 часа назад</a></div>
                                    <div class="waiter">Сергей (Это вы)</div>
                            </div>
                            <hr class="hr">
                        </li>
                        <li class="table lecture-hall">
                            <div class="table-top"><a href="#"><span class="table-name">Лекторий</span>&nbsp;<span class="table-name-two"></span><span class="status"></span></a><div class="people-count"><span class="number">6</span>&nbsp;<span class="people-category">гостей</span></div></div>
                            <div class="table-info-block">
                                <div class="status-id-row">
                                        <div class="status">Проходит семинар</div>
                                        <div class="rating">Рейтинг: <span></span></div>
                                        <div class="order-id">#0094</div>
                                </div>
                            </div>
                            <div class="table-bottom">
                                    <div class="table-action disabled"><a  href="#">16:00 - 21:00</a></div>
                                    <div class="waiter">2 сотрудника</div>
                            </div>
                            <hr class="hr">
                        </li>
                        <li class="table covorking reserved"> <!--если резервд то блок бледный-->
                            <div class="table-top"><a href="#"><span class="table-name">Коворгинг</span>&nbsp;<span class="table-name-two"></span><span class="status"></span></a><div class="people-count"><span class="number">2</span>&nbsp;<span class="people-category">гостя</span></div></div>
                            <div class="table-info-block">
                                <div class="status-id-row">
                                        <div class="status">Забронирован на 27:00</div>
                                        <div class="rating">Рейтинг: <span></span></div>
                                        <div class="order-id">#0091</div>
                                </div>
                            </div>
                            <div class="table-bottom">
                                    <div class="table-action disabled"><a  href="#">Открыто 47  минут назад</a></div>
                                    <div class="waiter">2 сотрудника</div>
                            </div>
                            <hr class="hr">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-8">
            <div class="orders-plan">
                <div class="title-section">Схема зала</div>
                <div class="plan"></div>
            </div>
            <div class="dashboard">
                <div class="top">
                    <div class="row dashboard-containers">
                        <div class="col">
                            <div class="row dashboard-container">
                                <div class="top-block orders">
                                    <div class="info big-text"><span class="guests-count">97</span></div>
                                    <div class="info small-text">заказов</div>
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
                                <div class="top-block ">
                                    <div class="info big-text"><span class="number">-13</span>%</div>
                                    <div class="info small-text">время ожидания</div>
                                </div>
                                <div class="graf"><img src="img/graf-green.PNG" alt="graf"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!--/dashboard end-->
        </div> <!--/col-8 end-->
    </div> <!--/row end-->
</section>

<?php require "includes/st-content-blocks-end.html"; ?>

<?php require "includes/footer-scripts.html"; ?>

<?php require "includes/footer.html"; ?>
