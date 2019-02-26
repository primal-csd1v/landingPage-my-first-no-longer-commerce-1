<?php
require "includes/head.php"
?>



<a name="lifting"></a>
<div class="global">
    <main>

        <!--<a href="#arrow"><input type="button" class="arrow" value="Наверх"></a>-->


        <div id="cont">
            <div id="progress"></div>
        </div>
<!--First Page-->
        <div class="first-block-container">
       <!--<img src="img/10.jpg" alt="">-->
            <div class="first-block-logo">
                <h3><?php print $ini['label'];?></h3>
                <h1><?php print $ini['dr'];?></h1>
                <p><?php print $ini['dq'];?></p>
            </div>
            <!--<div class="first-block-svg">-->
                <!--<img src="svg/gym.svg" alt="">-->
            <!--</div>-->

            <div class="b1-wrapper">
                <div class="first-block-tagline">
                    <div><h1><?php print $ini['centralWords'];?></h1></div>
                    <br>
                    <div class="first-block-tagline-h5"><h5>

                            <?php print $ini['centralMerch'];?>

                        </h5></div>
                </div>
                <br>
                <div class="first-block-submit">
                    <input class="modal-trigger" type="button" value="Записаться"><br><br>
                    <!--<div><h5>Запишитесь на одно бесплатное
                        групповое занятие</h5></div><br>-->
                    <div class="hr"><h5><a href="#yakor">Что такое кроссфит?</a></h5></div>
                </div>
            </div>


            <div class="first-block-sponsor-container">

                <div class="chat-svg">

                </div>

                <div class="chat-container">

                    <div class="chat-h1">
                        <div class="chat-label">

                        </div>

                        <div class="chat-ms">
                        <h3>ScuderiaGYM</h3>
                        </div>
                        <div class="chat-h5">
                            <h5>Привет! Оставь свой номер телефона или почту и мы свяжемся с тобой как можно скорее, и ответим на все твои вопросы.</h5>
                        </div>
                    </div>
                    <div class="chat-text">
                        <input type="text" id="cht" placeholder="Введите сообщение...">
                        <input type="button" id="cht2" value="Отправить">
                        <div class="loader" style="margin-left: 160px"><img src="gif/5.gif" alt=""></div>
                        <div class="X"></div>
                    </div>
                </div>

                <script type="text/javascript">


                    function cls() {
                        $(".loader").fadeOut();
                        $(".chat-text").append("<div class='mar' style='margin-left: 130px'><br><h3 style='color: green'>Отправлено...</h3></div>");
                    }

                    $(".loader").hide();
                    $("#cht2").click(function () {
                        $(".X").hide();
                        $("#cht, #cht2").fadeOut(200);
                        $(".loader").show();
                        setTimeout(cls,2000);

                    });
                </script>
                <!--<div class="first-block-sponsor">-->
                    <!--<img src="svg/nike.svg" alt="">-->
                <!--</div>-->
            </div>
        </div>
<!--First Page-->

<!--Two Page-->

        <div class="two-block-container">

            <div class="two-content">
            <div class="two-block-reviews">




                    <div class="review-wrapp">

                            <div class="two-block-reviews-block1">
                                    <h1>Отзывы</h1>
                                </div>
                                <br>

                        <!--SLIDER-->


                        <div class="slider-container">

                            <div id="block-for-slider">
                                <div id="viewport">



                                        <div class="slider-fix">

                                            <div class="arrow-back" id="bck"></div>
                                            <ul id="slidewrapper">
                                        <li class="slide vis slide-1">

                                            <div class="two-block-reviews-block2">
                                                <h3>"Прекрасный тренажерный зал!) Тренеры - потрясающие, всего хватает, атмосфера семейная даже какая то. Всем советую, кто хочет хорошего отношения, не безразличного - все в DX )"</h3>
                                            </div>

                                            <div class="two-block-users">
                                                <div class="two-block-users-img tbi-1"></div>
                                                <div class="two-block-users-name"><h3>Диана Штерн</h3></div>
                                            </div>

                                        </li>

                                        <li class="slide slide-2">

                                            <div class="two-block-reviews-block2">
                                                <h3>"Приобрела абонемент и занятия с тренером в Приложении. Приятно удивлена ценам и предложениям, так же бонусами(скидками). Благодаря квалифицированному подходу результат меня радует, поняла, что не ошиблась с выбором. Тренируюсь дальше…"</h3>
                                            </div>

                                            <div class="two-block-users">
                                                <div class="two-block-users-img tbi-2"></div>
                                                <div class="two-block-users-name"><h3>Nata Alexina</h3></div>
                                            </div>


                                        </li>
                                        <li class="slide slide-3">

                                            <div class="two-block-reviews-block2">
                                                <h3>"Как же мне нравится этот спортзал, все продуманно до мелочей. Раздевалка подкупает конечно, есть все, что нужно девочкам, от личной гигиены до крема, за это отдельное спасибо. В зале хорошая вентиляция, что считаю практически самое важное!!!!!"</h3>
                                            </div>

                                            <div class="two-block-users">
                                                <div class="two-block-users-img tbi-3"></div>
                                                <div class="two-block-users-name"><h3>Вера</h3></div>
                                            </div>

                                        </li>
                                        <li class="slide slide-4">

                                            <div class="two-block-reviews-block2">
                                                <h3>"Настоящие тренажёры "Hammer Strenght"и "Life Fitness",добротная линейка кардиозоны,- мощные дорожки с эллипсоидами.Попросту говоря,таких тренажёров, в плане функциональности,надо ещё поискать. И здесь хозяевам клуба большой респект! "</h3>
                                            </div>

                                            <div class="two-block-users">
                                                <div class="two-block-users-img tbi-4"></div>
                                                <div class="two-block-users-name"><h3>Руслан Денисов</h3></div>
                                            </div>

                                        </li>

                                    </ul>
                                            <div class="arrow-next"> </div>
                                </div>

                                </div>

                            </div>


                        </div>




                        <!--SLIDER-->





                </div>

        </div>
            <br><br><br>




            <br><br><br>

            <div class="two-block-message">
                <div class="two-block-h1"><h1>Запишитесь на бесплатное занятие</h1></div><br><br>
                <input type="button" class="modal-trigger" value="Записаться">
            </div>

            <div class="two-block-info">
                <div class="two-block-h1-2">
                    <a name="yakor"></a>
                    <h1>Что такое кроссфит?</h1>
                </div>
                <div class="two-block-info1"><h4>Кроссфит — брендированная система физической подготовки, созданная Грегом Глассманом. Зарегистрирована в качестве торговой марки корпорацией CrossFit, Inc, основанной Грегом Глассманом и Лорен Дженай в 2000 году</h4></div>
                <br><br><br>
                <hr>
                <br><br>
                <div class="two-block-info2"><h4>Продвигается и как система физических упражнений, и как соревновательный вид спорта. Кроссфит-тренировки включают в себя элементы интервальных тренировок высокой интенсивности, тяжёлой атлетики, плиометрики, пауэрлифтинга, гимнастики, гиревого спорта, упражнений стронгмена, бега и других. </h4></div>
            </div>

            <div class="two-block-h1-3">Что такое DIAXZER?</div>

           <div class="three-fix">


           </div>
            </div>
            <div class="three-block">



            </div>
            <div class="b3-fix">



            <div class="b3-img">
                <div class="b3-cont-contain">
                    <div class="b3-imgg"></div>
                    <br>
                    <h1>Честные цены!</h1><br>
                    <h4>Прозрачная система ценообразования!</h4>
                </div>
                <div class="b3-cont-contain">
                    <div class="b3-imgg b3-i1"></div>
                    <br>
                    <h1>Центр Питера!</h1><br>
                    <h4>Зал находится в 4 минутах ходьбы от м. Достоевская</h4>
                </div>
                <div class="b3-cont-contain">
                    <div class="b3-imgg b3-i2"></div>
                    <br>
                    <h1>Тренировочные программы!</h1><br>
                    <h4>Тренировки для всех: от кроссфит и жиросжигающих занятий до тяжелой атлетики.</h4>
                </div>
                <div class="b3-cont-contain">
                    <div class="b3-imgg b3-i3"></div>
                    <br>
                    <h1>Йога!</h1><br>
                    <h4>Занятия йогой на террассе с прекрасным видом</h4>
                </div>
            </div>

            <div class="b4-cont">
                <div class="b4-xs">
                    <div class="b4-svg"></div><p> - Чётко прописанная программа тренировок для спортсменов любого уровня</p>
                </div>
                <div class="b4-xs">
                    <div class="b4-svg1"></div><p> - Выдающийся тренерский состав</p>
                </div>
            </div>

            <div class="b5"><h1>Расписание тренировок</h1></div>

            <div class="b5-table-container">
                <table border="2">
                    <tr>
                        <td>  </td>
                        <td>Пн</td>
                        <td>Вт</td>
                        <td>Ср</td>
                        <td>Чт</td>
                        <td>Пт</td>
                    </tr>
                    <tr>
                        <td>7:30</td>
                        <td>Кроссфит</td>
                        <td>Кроссфит</td>
                        <td>Силовые. повышение</td>
                        <td>Лайтфит</td>
                        <td>Лайтфит</td>
                    </tr>
                    <tr>
                        <td>8:00</td>
                        <td>Кроссфит</td>
                        <td>Кроссфит</td>
                        <td>Силовые. повышение</td>
                        <td>Лайтфит</td>
                        <td>Лайтфит</td>
                    </tr>
                    <tr>
                        <td>8:30</td>
                        <td>Кроссфит</td>
                        <td>Кроссфит</td>
                        <td>Силовые. повышение</td>
                        <td>Лайтфит</td>
                        <td>Лайтфит</td>
                    </tr>
                    <tr>
                        <td>9:00</td>
                        <td>Кроссфит</td>
                        <td>Кроссфит</td>
                        <td>Кроссфит</td>
                        <td>Силовые. повышение</td>
                        <td>Лайтфит</td>

                    </tr>
                    <tr>
                        <td>9:30</td>
                        <td>Свободный зал</td>
                        <td>Кроссфит</td>
                        <td>Силовые. повышение</td>
                        <td>Лайтфит</td>
                        <td>Лайтфит</td>
                    </tr>
                    <tr>
                        <td>10:00</td>
                        <td>Свободный зал</td>
                        <td>Йога</td>
                        <td>Силовые. повышение</td>
                        <td>Лайтфит</td>
                        <td>Лайтфит</td>
                    </tr>
                    <tr>
                        <td>10:30</td>
                        <td>Свободный зал</td>
                        <td>Йога</td>
                        <td>Силовые. повышение</td>
                        <td>Лайтфит</td>
                        <td>Лайтфит</td>
                    </tr>
                    <tr>
                        <td>11:00</td>
                        <td>Свободный зал</td>
                        <td>Йога</td>
                        <td>Силовые. повышение</td>
                        <td>Йога</td>
                        <td>Свободный зал</td>
                    </tr>
                    <tr>
                        <td>11:30</td>
                        <td>Свободный зал</td>
                        <td>Йога</td>
                        <td>Силовые. повышение</td>
                        <td>Йога</td>
                        <td>Свободный зал</td>
                    </tr>
                    <tr>
                        <td>12:00</td>
                        <td>Свободный зал</td>
                        <td>Йога</td>
                        <td>Силовые. повышение</td>
                        <td>Йога</td>
                        <td>Свободный зал</td>
                    </tr>
                    <tr>
                        <td>12:30</td>
                        <td>Свободный зал</td>
                        <td>Йога</td>
                        <td>Силовые. повышение</td>
                        <td>Свободный зал</td>
                        <td>Йога</td>

                    </tr>
                    <tr>
                        <td>13:00</td>
                        <td>Свободный зал</td>
                        <td>Йога</td>
                        <td>Свободный зал</td>
                        <td>Йога</td>
                        <td>Свободный зал</td>
                    </tr>
                    <tr>
                        <td>13:30</td>
                        <td>Свободный зал</td>
                        <td>Йога</td>
                        <td>Свободный зал</td>
                        <td>Йога</td>
                        <td>Свободный зал</td>
                    </tr>
                    <tr>
                        <td>14:00</td>
                        <td>Свободный зал</td>
                        <td>Йога</td>
                        <td>Свободный зал</td>
                        <td>Йога</td>
                        <td>Свободный зал</td>
                    </tr>
                    <tr>
                        <td>14:30</td>
                        <td>Свободный зал</td>
                        <td>Кардио группа</td>
                        <td>Свободный зал</td>
                        <td>Йога</td>
                        <td>Кардио группа</td>
                    </tr>
                    <tr>
                        <td>15:00</td>
                        <td>Свободный зал</td>
                        <td>Кардио группа</td>
                        <td>Свободный зал</td>
                        <td>Йога</td>
                        <td>Кардио группа</td>
                    </tr>
                    <tr>
                        <td>15:30</td>
                        <td>Свободный зал</td>
                        <td>Кардио группа</td>
                        <td>Свободный зал</td>
                        <td>Йога</td>
                        <td>Кардио группа</td>
                    </tr>
                    <tr>
                        <td>16:00</td>
                        <td>Курс новичков</td>
                        <td>Кардио группа</td>
                        <td>Свободный зал</td>
                        <td>Йога</td>
                        <td>Кардио группа</td>
                    </tr>
                    <tr>
                        <td>16:30</td>
                        <td>Курс новичков</td>
                        <td>Тяжелая атлетика</td>
                        <td>Свободный зал</td>
                        <td>Кардио группа</td>
                        <td>Курс новичков</td>
                    </tr>
                    <tr>
                        <td>17:00</td>
                        <td>Курс новичков</td>
                        <td>Тяжелая атлетика</td>
                        <td>Свободный зал</td>
                        <td>Кардио группа</td>
                        <td>Курс новичков</td>
                    </tr>
                    <tr>
                        <td>17:30</td>
                        <td>Курс новичков</td>
                        <td>Тяжелая атлетика</td>
                        <td>Свободный зал</td>
                        <td>Кардио группа</td>
                        <td>Курс новичков</td>
                    </tr>
                    <tr>
                        <td>18:00</td>
                        <td>Курс новичков</td>
                        <td>Тяжелая атлетика</td>
                        <td>Свободный зал</td>
                        <td>Кардио группа</td>
                        <td>Курс новичков</td>
                    </tr>
                    <tr>
                        <td>18:30</td>
                        <td>Курс новичков</td>
                        <td>Тяжелая атлетика</td>
                        <td>Свободный зал</td>
                        <td>Кардио группа</td>
                        <td>Курс новичков</td>
                    </tr>
                    <tr>
                        <td>19:00</td>
                        <td>Курс новичков</td>
                        <td>Тяжелая атлетика</td>
                        <td>Свободный зал</td>
                        <td>Кардио группа</td>
                        <td>Курс новичков</td>
                    </tr>
                    <tr>
                        <td>19:30</td>
                        <td>Курс новичков</td>
                        <td>Тяжелая атлетика</td>
                        <td>Свободный зал</td>
                        <td>Тяжелая атлетика</td>
                        <td>Свободный зал</td>
                    </tr>
                    <tr>
                        <td>20:00</td>
                        <td>Кроссфит</td>
                        <td>Тяжелая атлетика</td>
                        <td>Свободный зал</td>
                        <td>Тяжелая атлетика</td>
                        <td>Свободный зал</td>
                    </tr>
                    <tr>
                        <td>20:30</td>
                        <td>Кроссфит</td>
                        <td>Тяжелая атлетика</td>
                        <td>Свободный зал</td>
                        <td>Тяжелая атлетика</td>
                        <td>Свободный зал</td>
                    </tr>
                    <tr>
                        <td>21:00</td>
                        <td>Кроссфит</td>
                        <td>Тяжелая атлетика</td>
                        <td>Свободный зал</td>
                        <td>Тяжелая атлетика</td>
                        <td>Свободный зал</td>
                    </tr>
                    <tr>
                        <td>21:30</td>
                        <td>Кроссфит</td>
                        <td>Тяжелая атлетика</td>
                        <td>Свободный зал</td>
                        <td>Тяжелая атлетика</td>
                        <td>Свободный зал</td>
                    </tr>
                    <tr>
                        <td>22:00</td>
                        <td>Кроссфит</td>
                        <td>Тяжелая атлетика</td>
                        <td>Свободный зал</td>
                        <td>Тяжелая атлетика</td>
                        <td>Свободный зал</td>
                    </tr>
                </table>
            </div>
            <div class="b6-contain">
                <div class="b6-h1"><h1>Стоимость карт</h1></div>
                <div class="b6-card-contain">
                    <div class="b6 b6-card"><br><br><br><br>
                        <h1>Карта на 12 посещений</h1>
                        <h1>6500 руб.</h1>
                        <h3>Цена в месяц</h3>
                    </div>
                    <div class="b6 b6-card1">
                        <br><br><br><br>
                        <h1>Карта только на утро</h1>
                        <h1>5500 руб.</h1>
                        <h3>Цена в месяц</h3>
                    </div>
                    <div class="b6 b6-card2">
                        <br><br><br><br>
                        <h1>Карта на месяц</h1>
                        <h1>11 250 руб.</h1>
                        <h3>Цена в месяц</h3>
                    </div>
                    <div class="b6 b6-card3">
                        <br><br><br><br>
                        <h1>Карта на 3 месяца</h1>
                        <h1>20 950 руб.</h1>
                        <h3>Цена в месяц</h3>
                    </div>
                    <div class="b6 b6-card4">
                        <br><br><br><br>
                        <h1>Карта на 6 месяцев</h1>
                        <h1>40 950 руб.</h1>
                        <h3>Цена в месяц</h3>
                    </div>
                    <div class="b6 b6-card5">
                        <br><br><br><br>
                        <h1>Карта на год</h1>
                        <h1>70 950 руб.</h1>
                        <h3>Цена в месяц</h3>
                    </div>
                    <div class="b6 b6-card6">
                        <br><br><br><br>
                        <h1>Йога месяц</h1>
                        <h1>8 950 руб.</h1>
                        <h3>Цена в месяц</h3>
                    </div>
                    <div class="b6 b6-card7">
                        <br><br><br><br>
                        <h1>Вых.дня</h1>
                        <h1>3 950 руб.</h1>
                        <h3>Цена в месяц</h3>
                    </div>
                    <div class="b6 b6-card8">
                        <br><br><br><br>
                        <h1>7 занятий в месяц</h1>
                        <h1>3 250 руб.</h1>
                        <h3>Цена в месяц</h3>
                    </div>
                    <div class="b6 b6-card9">
                        <br><br><br><br>
                        <h1>Лайт месяц</h1>
                        <h1>4 000 руб.</h1>
                        <h3>Цена в месяц</h3>
                    </div>
                </div>
            </div>
            <div class="b6-h1-n2">
                <h1>Разовое посещение 570 руб.</h1>
            </div>
            <hr>



            <div class="b7-contain">
                <div class="b7-soc">
                    <!--<a href="https://www.instagram.com/?hl=ru" target="_blank"><div class="b7-svg b7-n1"></div></a>-->
                    <!--<a href="https://twitter.com/?lang=ru" target="_blank"> <div class="b7-svg b7-n2"></div></a>-->
                    <!--<a href="https://vk.com/" target="_blank"><div class="b7-svg b7-n3"></div></a>-->

                </div>
            </div>







    </div>


        <!--MODAL WINDOW-->

            <form action="dataAnswer/send.php" method="POST">
        <div class="modal-owerlay"></div>
        <div class="modal">
            <div class="modal-content">
                <div class="modal-x"></div>
                <div class="modal-h1">
                    <h1>Получите бесплатную тренировку</h1>
                </div>


                <div class="modal-p">
                    <input id="modal-input" type="text" name="name">
                    <label for="modal-input">Имя</label>
                </div>
                <div class="modal-p1">
                    <input id="modal-input1" type="text" name="lastName">
                    <label for="modal-input1">Фамилия</label>
                </div>
                <div class="modal-p3">
                    <input id="modal-input2" type="text" name="number">
                    <label for="modal-input2">Контактный телефон</label>
                </div>
                <div class="modal-p4">
                    <input id="modal-input3" type="text" name="email" required>
                    <label for="modal-input3">Email</label>
                </div>
                <div class="failed" style="color: red; margin-left: 150px"></div>
                <div class="answer"><img src="gif/checked.svg" style="width: 50px; margin-left: 160px"  alt="" class="svg-answer"><div class="answer__img" style="margin-left:160px"><img src="gif/5.gif" alt=""></div><br><b>Спасибо, мы свяжемся с вами в ближайшее время, так же на почту вам выслана полезнаяинформация</b> <br><br></div>

                <div class="modal-sub">
                    <input class="mb" type="button" value="Отправить" >
                    <input class="mb mb-clear" type="button" value="Очистить">
                </div>

                <script type="text/javascript">
                    function sleeping() {
                        sleep(3);
                    }
                    function hideBar() {
                        $(".answer__img").hide();
                        $(".svg-answer").show();
                    }


                    function preLoad() {

                            $(".modal-p, .modal-p1, .modal-p3, .modal-p4").fadeOut("slow");
                            $(".answer").fadeIn();
                            $(".mb, .mb-clear").hide();
                            setTimeout(hideBar, 2000);



                    }
                    function smert() {
                        die();
                    }

                    function compleat(data) {
                    var data = JSON.parse(data);
                    for(var id in data){
                        $(".answer").innerHTML(data[id]);
                    }
                    }

                    $(document).ready(function () {
//                        $(".answer__img").hide();
                        $(".svg-answer").hide();
                        $(".answer").hide();
                        $(".mb").click(function () {


                        });
                        $(".mb").bind("click",function () {

                           var nameD = $("#modal-input").val();
                             var lastNameD = $("#modal-input1").val();
                                 var numberD = $("#modal-input2").val();
                                var emailD = $("#modal-input3").val();
                                var failed = "";


                                if(nameD.length < 3) {
                                    alert('Имя не менее 3х символов');



                                }
                            if(name.length<3) {failed = "Фамилия не менее 3 символов"}

                            $(".modal-p, .modal-p1, .modal-p3, .modal-p4").fadeOut("slow");



                                                       $.ajax({
                                url:"dataAnswer/send.php",
                                type:"POST",
                                data:({name: $("#modal-input").val(),
                                    lastName:$("#modal-input1").val(),
                                    number:$("#modal-input2").val(),
                                    email:$("#modal-input3").val()
                                }),
                                beforeSend:preLoad,
                                success: compleat
                            });
                        });

                    });

                </script>
                
            </div>
        </div>
            </form>
        <!--MODAL WINDOW-->

<!--Two Page-->
        </div>
        <div class="map-container">
            <div class="map-b">
            <div class="map-b-logo" style="background-image: url('img/dx.jpg');  background-position: center;"></div>
            <div class="map-h1"><h1><?php print $ini['phoneNumber'];?></h1></div>
            <div class="map-p1"><p>М.Владимирская выход. <br> М.Достоевская в сторону часовни. <br> Владимирский проспект, 23, Россия, Санкт-Петербург</p></div>
            <div class="map-p2">будние дни 7:30 - 22:00 <br> выходные 10:00 - 20:00</div>
            </div>



            <div class="map"><div id="map"></div></div></div>
    </main>





    <a href="#lifting"><div class="arrow"></div></a>

</div>
<?php
require "includes/footer-scripts.php";
?>