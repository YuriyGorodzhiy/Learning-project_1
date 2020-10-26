<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Многостраничный сайт</title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>
    <div class="slider">
        <div class="slider-line">
            <div class="slider-line-item"></div>
            <div class="slider-line-item"></div>
            <div class="slider-line-item"></div>
            <div class="slider-line-item"></div>
            <div class="slider-line-item"></div>
        </div>
        <div class="wrapper top">
            <?php
                include('inc/header.php')
            ?>
            <div class="center">
                    <h1> Необычная Москва</h1>
                    <p>MyMoscow</p>
                    <p>агенство интересных маршрутов</p>
                    <a href="../index.php#about_us" class="center_button">ПОДРОБНЕ О НАС</a>
            </div>
            <div class="slider-button-left">
                <div class="slider-button-item1"></div>
            </div>
            <div class="slider-button-right">
                <div class="slider-button-item2"></div>
            </div>
            <div class="menu-button">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>    
    <main>
        <section class="services wrapper">
            <h2 id="about_us" class="heading-text">Что мы предлагаем?</h2>
            <p class="paragraph_text">
                Наша главная цель -  рассказать о Москве так, чтобы это было интересно всем!
            </p>
            <div class="blocks">
                <div class="blocks-item">
                    <div class="blocks-item-icon map"></div>
                    <div class="text">
                        <h3>необычные маршруты</h3>
                        <p>
                            Мы обязательно порадуем тебя необычными маршрутами Москвы, 
                            которые прокладывают наши опытные гиды. Ты увидишь и узнаешь 
                            о Москве то, что никогда не знал!
                        </p>
                    </div>
                </div>
                <div class="blocks-item">
                    <div class="blocks-item-icon souvenir"></div>
                    <div class="text">
                        <h3>классные сувениры</h3>
                        <p>
                            Отличная новость! У нас появился магазин сувениров! И самое 
                            примечательное, что все эти сувениры мы делаем сами! 
                            Заходи к нам в гости!
                        </p>
                    </div>    
                </div>
                <div class="blocks-item">
                    <div class="blocks-item-icon compass"></div>
                    <div class="text">
                        <h3>интересные экскурсии</h3>
                        <p>
                            За время экскурсий, которых у нас больше 20, ты узнаешь и 
                            увидишь все основные досопримечательности: Кремль, Храм Христа 
                            Спаителя, так и пройдешься по пешеходным улицам Москвы, узнаешь 
                            их историю и сделаешь самые классные фотографии.
                        </p>
                    </div>    
                </div>
                <div class="blocks-item">
                    <div class="blocks-item-icon picture"></div>
                    <div class="text">
                        <h3>фотосессии в москве</h3>
                        <p>
                            Команда MyMoscow рада провести креативные фотосессии в любом 
                            уголке Москвы. Не важно, свадьба у Вас или просто захотелось 
                            добавить в альбом или инстаграм красивых фоток.
                        </p>
                    </div>
                </div>
                <div class="blocks-item">
                    <div class="blocks-item-icon discussion"></div>
                    <div class="text">
                        <h3>новые знакомства</h3>
                        <p>
                            MyMoscow - это целый клуб, где после московских проулок ты 
                            сможешь продолжить общение с теми, кому интересна Москва , 
                            знакомиться с новыми людьми и делиться впечатлениями.
                        </p>
                    </div>    
                </div>
                <div class="blocks-item">
                    <div class="blocks-item-icon sun"></div>
                    <div class="text">
                        <h3>яркие впечатления</h3>
                        <p>
                            Самое важное - это яркие эмоции, которые остануться с тобой 
                            на долгое время! Поэтому в нашей команде мы ждем именно тебя!
                        </p>
                    </div>    
                </div>
            </div>    
        </section>
        <section class="group">
            <div class="group_photo"></div>
            <div class="group_text">
                <p class="group_text_1">КТО МЫ ТАКИЕ</p>
                <p class="group_text_2">Мы - команда тех, кто любит историю и любит Москву.</p>
                <p class="group_text_2">
                    Москва – это не только место по «заколачиванию денег» и «взращиванию карьеры», 
                    а еще и бесконечно красивые памятники природы, заказники, парки, заповедники. 
                    Активный отдых в Москве и Подмосковье – это отличная возможность вырваться из 
                    душного мегаполиса куда-нибудь в «дебри», навстречу приключениям. К счастью, 
                    не все Подмосковье еще «облагорожено» асфальтными дорожками и высоченными 
                    коттеджными заборами. Еще встречаются места, настолько глухие и далекие, что, 
                    очутившись там, кажется, что ты – первый человек, ступивший на эту землю.    
                </p>
                <p class="group_text_2">
                    Там, где не проедет автомобилист и даже велосипедист, найдет лазейку и откроет 
                    для себя все красоты 100% бездорожья турист, проводящий свой активный отдых в Подмосковье.
                </p>
                <a href="../index.php#about_us" class="group_text_botton">Подробнее о нас</a>
            </div>
        </section>
        <section>
            <div class="moscow-in-photos wrapper">
                <h2 class="heading-text">Москва в фотографиях</h2>
                <hr>
                <p class="paragraph_text">
                    Проще всего рассказать обо всем в фотографиях. Смотрите наши фотоотчеты и присылайте нам свои фотографии.
                </p>
            </div>
            <div class="group">
                <div class="photos-moscow photo-moscow-1"></div>
                <div class="photos-moscow photo-moscow-2"></div>
                <div class="photos-moscow photo-moscow-3"></div>
                <div class="photos-moscow photo-moscow-4"></div>
                <div class="photos-moscow photo-moscow-5"></div>
                <div class="photos-moscow photo-moscow-6"></div>
                <div class="photos-moscow photo-moscow-7"></div>
                <div class="photos-moscow photo-moscow-8"></div>
            </div>
        </section>
        <section class="reviews wrapper">
            <h2 id="feedback" class="heading-text">отзывы</h2>
            <hr>
            <div class="block-reviews">
                <div class="block-reviews-item">
                    <p class="review-text">
                        Были с дочкой и подругой на ночной экскурсии. Все таки как много 
                        зависит от экскурсовода! Мы все четыре часа ходили за Станиславом 
                        Симоновым, как кролики. Боялись пропустить хоть одно слово. При 
                        этом моей дочке - которая побывала во многих местах и с детства 
                        искушенная на интересные события - была сильно увлечена.
                    </p>
                    <div class="review-author">
                        <div class="photo-author photo_1"></div>
                        <p class="name-author">Екатерина Васильева</p>
                    </div>

                </div>
                <div class="block-reviews-item">
                    <p class="review-text">
                        Ездили на экскурсию с семиклассниками и родителями. Всем очень 
                        понравилось! Экскурсовод Михаил Борисович очень интересно, необычно 
                        и с юмором рассказывал о Москве 16 века. Гибко подстраивал эксукурсию 
                        под интересы и потребности слушателей, ловко «управлял» подачей 
                        автобуса, не давая нам замёрзнуть.) Огромное спасибо!
                    </p>
                    <div class="review-author">
                        <div class="photo-author photo_2"></div>
                        <p class="name-author">Анна Крушевская</p>
                    </div>
                </div>
            </div>     
        </section>
    </main>    
<?php
    include('inc/footer.php');
?>    
   