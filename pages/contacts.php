<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacts</title>
    <link rel="stylesheet" href="/css_pages/contacts_style.css">
</head>
<body>
    <div class="top">
        <div class="wrapper">
            <?php
                include('../inc/header.php');
            ?>
            <div class="center">
                    <h1>MyMoscow</h1>
                    <p>агенство интересных маршрутов</p>
                    <p class="center_text">-Контакты-</p>
            </div>
            <div class="menu-button">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
    <main>
        <section class="main_wrapper">
            <h2 class="heading-text">Контакты</h2>   
            <div>
                <p class="about_Moscow">Мы - команда тех, кто любит историю и любит Москву.</p>
                <p class="about_Moscow">Москва – это не только место по «заколачиванию денег» и 
                    «взращиванию карьеры», а еще и бесконечно красивые памятники природы, заказники, 
                    парки, заповедники. Активный отдых в Москве и Подмосковье – это отличная возможность 
                    вырваться из душного мегаполиса куда-нибудь в «дебри», навстречу приключениям. К счастью, 
                    не все Подмосковье еще «облагорожено» асфальтными дорожками и высоченными коттеджными 
                    заборами. Еще встречаются места, настолько глухие и далекие, что, очутившись там, 
                    кажется, что ты – первый человек, ступивший на эту землю.
                </p>
                <p class="about_Moscow">
                    Там, где не проедет автомобилист и даже велосипедист, найдет лазейку и откроет 
                    для себя все красоты 100% бездорожья турист, проводящий свой активный отдых в Подмосковье.
                </p>
            </div>
            <div class="block-managers">
                <div class="managers-item indent-item">
                    <div class="photo-manager man"></div>
                    <div class="info-of-manager">
                        <p class="name_manager">Александр Рыбаков</p>
                        <p class="post_manager">директор</p>
                        <p class="letter_manager">По всем вопросам пишите на почту:</p>
                        <p class="email_manager">rybakov@mymoscow.ru</p>
                    </div>
                </div>
                <div class="managers-item">
                    <div class="photo-manager woman"></div>
                    <div class="info-of-manager">
                        <p class="name_manager">Елена Белкина</p>
                        <p class="post_manager">руководитель корпоративного отдела</p>
                        <p class="letter_manager">По вопросам корпоративных экскурсий:</p>
                        <p class="email_manager">belkina@mymoscow.ru</p>
                    </div>
                </div>
            </div>
            <div class="contacts-form">
                <div class="contacts-form-item indent-item">
                    <div class="contact-item">
                        <div class="icon-contact adress-agency"></div>
                        <p class="text-contact">Москва,<br>Большая Спасская 12</p>
                    </div>
                    <div class="contact-item">
                        <div class="icon-contact email-agency"></div>
                        <p class="text-contact">E-mail:<br>moscow@mymoscow.ru</p>
                    </div>
                    <div class="contact-item">
                        <div class="icon-contact telephone-agency"></div>
                        <p class="text-contact">Телефон:<br>8 (495) 626-46-00</p>
                    </div>
                </div>
                <div class="contacts-form-item">
                    <form method="POST" action="/form.php" autocomplete="off">
                        <p>Напишите нам</p>
                        <div class="form-item">
                            <input type="text" name="userName" minlength="3" maxlength="33" placeholder="ФИО" required>
                        </div>
                        <div class="form-item">
                            <input type="email" name="email" placeholder="E-mail" required> 
                        </div>
                        <div class="form-item">
                            <textarea maxlength="300" name="question" placeholder="Ваше сообщение" required></textarea>
                        </div>
                        <div class="form-item">
                            <input type="submit" value="отправить">
                        </div>  
                    </form>
                </div>
            </div>
        </section>
        <div class="yandex-map">
            <iframe src="https://yandex.ru/map-widget/v1/?ll=37.648248%2C55.776012&mode=search&ol=geo&ouri=ymapsbm1%3A%2F%2Fgeo%3Fll%3D37.648%252C55.776%26spn%3D0.001%252C0.001%26text%3D%25D0%25A0%25D0%25BE%25D1%2581%25D1%2581%25D0%25B8%25D1%258F%252C%2520%25D0%259C%25D0%25BE%25D1%2581%25D0%25BA%25D0%25B2%25D0%25B0%252C%2520%25D0%2591%25D0%25BE%25D0%25BB%25D1%258C%25D1%2588%25D0%25B0%25D1%258F%2520%25D0%25A1%25D0%25BF%25D0%25B0%25D1%2581%25D1%2581%25D0%25BA%25D0%25B0%25D1%258F%2520%25D1%2583%25D0%25BB%25D0%25B8%25D1%2586%25D0%25B0%252C%252012&utm_source=main_stripe_big&z=18.4" width="100%" height="550px" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe>
        </div>
    </main>
<?php
    include('../inc/footer.php');
?>