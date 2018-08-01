<?php require "includes/header.php"; ?>
<!--todo https://zpl.io/b6MAYjW
alokazay@gmail.com
333333

Хост: crm-erp.ru
Имя пользователя: admin_valek
Пароль: Z38Lp5msx5
-->
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
                <div class="table-top-info">
                    <a href="orders.php">Назад к схеме</a>
                    <div class="about-table active">
                        <div class="name">
                            <div class="table-name">Стол №1</div>
                            <div class="table-name-two">Чилл-аут</div>
                            <div class="status"></div>
                        </div>
                    </div>
                    <div class="table-pic"></div>
                </div>
                <div class="table-waiter-info">
                    <div class="row">
                        <div class="col">
                            <div class="row dashboard-container">
                                <div class="top-block rating">
                                    <div class="info big-text"><span class="rating">4.9</span></div>
                                    <div class="info small-text">Рейтинг стола</div>
                                </div>
                                <div class="graf"><img src="img/graf-green.PNG" alt="graf"></div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row dashboard-container">
                                <div class="top-block waiter">
                                    <div class="info big-text"><span class="waiter-name">Майкл</span>%</div>
                                    <div class="info small-text">официант</div>
                                </div>
                                <div class="graf"><img src="img/graf-green.PNG" alt="graf"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-history">
                    <div class="current-process">
                        <div class="name">Кальян-мастер готовит кальян</div>
                        <div class="loader"></div>
                    </div>
                    <ul class="processes">
                        <li>
                            <div class="branch"></div>
                            <div class="process">Кальян-мастер готовит кальян</div>
                            <div class="time">16:42</div>
                        </li>
                        <li>
                            <div class="branch"></div>
                            <div class="process">Заказ готовится</div>
                            <div class="time">16:40</div>
                        </li>
                        <li>
                            <div class="branch"></div>
                            <div class="process">Майкл назначен официантом</div>
                            <div class="time">16:17</div>
                        </li>
                        <li>
                            <div class="branch"></div>
                            <div class="process">Гости определились с заказом</div>
                            <div class="time">16:48</div>
                        </li>
                        <li>
                            <div class="branch"></div>
                            <div class="process">Открыт заказ <span>№0094</span></div>
                            <div class="time">15:37</div>
                        </li>
                        <li>
                            <div class="branch"></div>
                            <div class="process">Стол забронирован Perye Polo</div>
                            <div class="time">12:11</div>
                        </li>
                    </ul>
                </div>
                <div class="table-bottom btn-group">
                    <button type="button" class="btn btn-outline btn-close-table">Закрыть и отправить чек</button>
                    <button type="button" class="btn btn-link btn-settings-table">Настройки стола</button>
                </div>
            </div>
        </div>
        <div class="col-8">
            <div class="order-for-table">
                <div class="order-top">
                    <div class="title-section"><p>Заказ</p> <br> Заказ <span>№0094</span></div>
                    <div class="information-guests">
                        <ul>
                            <li class="empty">
                                <div class="avatar"></div>
                            </li>
                            <li class="empty">
                                <div class="avatar"></div>
                            </li>
                            <li>
                                <div class="avatar"></div>
                            </li>
                            <li>
                                <div class="avatar"></div>
                            </li>
                            <li>
                                <div class="avatar"></div>
                            </li>
                            <li>
                                <div class="avatar"></div>
                            </li>
                        </ul>
                    </div>
                </div>
                <hr class="hr">
                <div class="order-items"></div>
                <table>
                    <thead>
                    <tr>
                        <th>Название позиции</th>
                        <th>Цена</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td data-label="Название позиции">Кальян дня</td>
                        <td data-label="Цена">1 200 Р</td>
                        <td data-label="Количество">х1</td>
                    </tr>
                    <tr>
                        <td data-label="Название позиции">Чайная церемония на 6 персон</td>
                        <td data-label="Цена">3 200 Р</td>
                        <td data-label="Количество">х1</td>
                    </tr>
                    <tr>
                        <td data-label="Название позиции">Кальян на грйпруте от мастера</td>
                        <td data-label="Цена">1 700 Р</td>
                        <td data-label="Количество">х1</td>
                    </tr>
                    <tr>
                        <td data-label="Название позиции">Вода Evian 0.47</td>
                        <td data-label="Цена">310 Р</td>
                        <td data-label="Количество">х2</td>
                    </tr>
                    <tr>
                        <td data-label="Название позиции">Чизкейк из Пекана</td>
                        <td data-label="Цена">510 Р</td>
                        <td data-label="Количество">х1</td>
                    </tr>
                    <tfoot>
                    <tr>
                        <td >Итого</td>
                        <td >6920 Р</td>
                        <td ></td>
                    </tr>
                    </tfoot>
                    </tbody>
                </table>
                <hr class="hr">
            </div>
            <div class="chat">
                <div class="chat-top">
                    <div class="title-section">Чат заказа</div>
                    <div class="count">3 участника</div>
                </div>
                <div class="input-group">
                    <input  class="form-control" placeholder="Введите сообщение...">
                    <span class="input-group-append" ><button class="btn btn-chat-submit" type="button">Отправить</button></span>
                </div>
                <div class="chat-messages">
                    <div class="mes">
                        <div class="mes-information">
                            <div class="avatar"></div>
                            <div class="name">Юра</div>
                            <div class="position">Кальян-мастер</div>
                            <div class="time">15:48</div>
                        </div>
                        <div class="mess-text">Вижу, спасибо! Хорошо</div>
                    </div>
                    <div class="mes">
                        <div class="mes-information">
                            <div class="avatar"></div>
                            <div class="name">Сергей</div>
                            <div class="position">Управляющий</div>
                            <div class="time">15:48</div>
                        </div>
                        <div class="mess-text">Вижу, спасибо! ХорошоЮра, посмотри заказ. Это гости с Китая, о которых я тебе говорил. Обновляй кальяны пока они не покинут заведение.</div>
                    </div>
                </div>
            </div>
        </div> <!--/col-8 end-->
    </div> <!--/row end-->
</section>

<?php require "includes/st-content-blocks-end.html"; ?>

<?php require "includes/footer-scripts.html"; ?>

<?php require "includes/footer.html"; ?>
