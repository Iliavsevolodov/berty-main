<?php require_once('blocks/head.php') ?>
<?php require_once ('blocks/top.php') ?>
    <main class="container">
        <?php require_once ('blocks/panel.php') ?>
        <div class="content">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Active</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
            </ul>
            <div class="fill-content" id="tab__fill">
                <div class="fill-form">
                    <form action="#">
                        <div class="choose-account">
                            <div class="select ">
                                <h3>Выберите счёт</h3>
                                <div class="select__header border">
                                    <span class="select__current">
                                        Выберите счет
                                    </span>
                                    <img src="../img/icons/arrow.svg" alt="arrow" class="select__arrow">
                                </div>
                                <div class="select__body">
                                    <div class="select__item">
                                        <img src="../img/icons/ruble-purple.svg" alt="">
                                        <span>0.00 </span>
                                    </div>
                                    <div class="select__item">
                                        <img src="../img/icons/dollar-green.svg" alt="">
                                        <span>0.00 </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="summa">
                            <div class="inputs__summa">
                                <div class="input__summa">
                                    <label for="input__summa">Сумма:</label>
                                    <input type="number" placeholder="Введите сумму" id="input__summa">
                                </div>
                                <div class="input__real-summa">
                                    <label for="input__real-summa">К оплате:</label>
                                    <input type="text" disabled>
                                </div>
                            </div>
                            <div class="comission">Комиссия 5% от суммы пополнения</div>
                        </div>
                        <div class="way-fill">
                            <div class="way-fill-radio">
                                <h3>Способ пополнения:</h3>
                                <div class="way-list">
                                    <div class="way-item">
                                        <a href="#">
                                            <img src="img/icons/mastercard.svg" alt="">
                                        </a>
                                    </div>
                                    <div class="way-item">
                                        <a href="#">
                                            <img src="img/icons/visa.svg" alt="">
                                        </a>
                                    </div>
                                    <div class="way-item">
                                        <a href="#">
                                            <img src="img/icons/advcash.svg" alt="">
                                        </a>
                                    </div>
                                    <div class="way-item">
                                        <a href="#">
                                            <img src="img/icons/payeer.svg" alt="">
                                        </a>
                                    </div>
                                    <div class="way-item">
                                        <a href="#">
                                            <img src="img/icons/perfect-money.svg" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="fill-btn btn">Пополнить на 450 ₽</button>
                    </form>
                </div>
                <div class="fill-right">
                    <ul class="fill-right-list">
                        <li><img src="img/icons/safe.svg" alt="">
                            <p>100% защита соединения</p>
                        </li>
                        <li><img src="img/icons/time.svg" alt="">
                            <p>Моментальное зачисление</p>
                        </li>
                        <li><img src="img/icons/comission.svg" alt="">
                            <p>Низкая коммиссия</p>
                        </li>
                        <li><img src="img/icons/anonymity.svg" alt="">
                            <p>Анонимность перевода</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="fill-content" id="fill__account">
                <div class="fill-form">
                    <form action="#">
                        <div class="choose-account">
                            <div class="select ">
                                <h3>Выберите счёт</h3>
                                <div class="select__header border">
                                    <span class="select__current">
                                        Выберите счет
                                    </span>
                                    <img src="../img/icons/arrow.svg" alt="arrow" class="select__arrow">
                                </div>
                                <div class="select__body">
                                    <div class="select__item">
                                        <img src="../img/icons/ruble-purple.svg" alt="">
                                        <span>0.00 </span>
                                    </div>
                                    <div class="select__item">
                                        <img src="../img/icons/dollar-green.svg" alt="">
                                        <span>0.00 </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="summa">
                            <div class="inputs__summa">
                                <div class="input__summa">
                                    <label for="input__summa">Сумма:</label>
                                    <input type="number" placeholder="Введите сумму" id="input__summa">
                                </div>
                            </div>
                        </div>
                        <div class="inputs__accounts">
                            <div class="input__email">
                                <label for="input__email">E-mail получателя:</label>
                                <input type="text" placeholder="E-mail получателя:" id="input__email" class="border">
                            </div>
                            <div class="input__name-account">
                                <label for="input__name-account">Название счёта</label>
                                <input type="text" placeholder="Название счёта" id="input__name-account" class="border">
                            </div>
                            <div class="comment">
                                <label for="input__comment">Ваш комментарий</label>
                                <textarea placeholder="Ваш комментарий" id="input__comment" class="border"></textarea>
                            </div>
                            <div class="file">
                                <label for="input__file">Загрузите картинку:</label>
                                <input type="file" placeholder="Ваш комментарий" id="input__file">
                            </div>
                        </div>
                        <button type="submit" class="btn">Создать счёт</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

<?php require_once ('blocks/footer.php') ?>