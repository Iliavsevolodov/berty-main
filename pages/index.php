<?php require_once('blocks/head.php') ?>
<?php require_once ('blocks/top.php') ?>
    <main class="container">
        <?php require_once ('blocks/panel.php') ?>
        <div class="content">
            <div class="verify">
                <p>Пожалуйста, <a href="#" class="green">пройдите верификацию</a> для того , чтобы
                    пользоваться всем функционалом
                    кошелька Berty &nbsp;Wallet. </p>
                <button class="verify-close"><img src="/assets/img/icons/close.svg" alt="close button"></button>
            </div>
            <div class="balance-content">
                <div class="balance-left">
                    <div class="shadow d-flex justify-content-between all-accounts">
                        <h3>Все счета</h3>
                        <ul class="all-accounts-list">
                            <li class="bg">
                                <a href="#">
                                    <img src="/assets/img/icons/ruble-green.svg" alt="">
                                    <span>30 989.70</span>
                                </a>
                            </li>
                            <li class="bg">
                                <a href="#">
                                    <span>100.12</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="shadow question">
                        <p>Если у вас появились вопросы, вы можете обратится с &nbsp;ними
                            в <a href="#" class="green">службу поддержки</a>. </p>
                    </div>
                    <div class="shadow balance-story">
                        <div class="balance-story-head">
                            <h3>История</h3>
                            <span>27 июня 2019</span>
                        </div>
                        <hr>
                        <ul class="balance-story-body">
                            <li>
                                <a href="#">
                                    <div class="d-flex">
                                        <svg width="22" height="17" viewBox="0 0 22 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M21.5832 5.61354C21.7508 5.4763 22 5.60469 22 5.82161V14.875C22 16.0481 21.0761 17 19.9375 17H2.0625C0.923828 17 0 16.0481 0 14.875V5.82604C0 5.60469 0.244922 5.48073 0.416797 5.61797C1.3793 6.38828 2.65547 7.36667 7.03828 10.6471C7.94496 11.3289 9.47458 12.7633 11 12.7545C12.534 12.7677 14.0938 11.3024 14.966 10.6471C19.3488 7.36667 20.6207 6.38385 21.5832 5.61354ZM11 11.3333C11.9969 11.351 13.432 10.0406 14.1539 9.50052C19.8558 5.23724 20.2898 4.86536 21.6047 3.80286C21.8539 3.60365 22 3.29375 22 2.96615V2.125C22 0.951823 21.0761 0 19.9375 0H2.0625C0.923828 0 0 0.951823 0 2.125V2.96615C0 3.29375 0.146094 3.59922 0.395312 3.80286C1.71016 4.86094 2.14414 5.23724 7.84609 9.50052C8.56797 10.0406 10.0031 11.351 11 11.3333Z" fill="#4C4C4C"/>
                                        </svg>
                                        <p style="margin-left: 17px;">Перевод на petrpetrovich@gmail.com</p>
                                    </div>
                                    <span>10,50 ₽</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="d-flex">
                                        <svg width="22" height="17" viewBox="0 0 22 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M21.5832 5.61354C21.7508 5.4763 22 5.60469 22 5.82161V14.875C22 16.0481 21.0761 17 19.9375 17H2.0625C0.923828 17 0 16.0481 0 14.875V5.82604C0 5.60469 0.244922 5.48073 0.416797 5.61797C1.3793 6.38828 2.65547 7.36667 7.03828 10.6471C7.94496 11.3289 9.47458 12.7633 11 12.7545C12.534 12.7677 14.0938 11.3024 14.966 10.6471C19.3488 7.36667 20.6207 6.38385 21.5832 5.61354ZM11 11.3333C11.9969 11.351 13.432 10.0406 14.1539 9.50052C19.8558 5.23724 20.2898 4.86536 21.6047 3.80286C21.8539 3.60365 22 3.29375 22 2.96615V2.125C22 0.951823 21.0761 0 19.9375 0H2.0625C0.923828 0 0 0.951823 0 2.125V2.96615C0 3.29375 0.146094 3.59922 0.395312 3.80286C1.71016 4.86094 2.14414 5.23724 7.84609 9.50052C8.56797 10.0406 10.0031 11.351 11 11.3333Z" fill="#4C4C4C"/>
                                        </svg>
                                        <p style="margin-left: 17px;">Перевод на petrpetrovich@gmail.com</p>
                                    </div>
                                    <span>10,50 ₽</span>
                                </a>
                            </li>
                        </ul>
                        <hr>
                        <a href="#" class="green show-all-story">Посмотреть все операции</a>
                    </div>
                </div>
                <div class="balance-news">
                    <div class="news-cards">
                        <a href="#" class="news-card">
                            <h3>Переведи деньги другу за такси
                            </h3>
                            <p>Без комиссии внутри системы Berty Wallet</p>
                            <img src="/assets/img/taxi.png" alt="">
                        </a>
                        <a href="#" class="news-card">
                            <h3>Получай оплату за свои услуги
                            </h3>
                            <p>Просто отправь ссылку клиенту -
                                зачисление проходит моментально</p>
                            <img src="/assets/img/konditer.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
<?php require_once ('blocks/footer.php') ?>