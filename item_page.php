<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rattan</title>
    <link rel="stylesheet" href="css/style.css">


</head>
<body>
<div class="wrapper">
    <?php
    include('header.php')
    ?>
    <div class="main">
        <section class="item_page">
            <div class="container">
                <h1>Крісло Верона</h1>
            </div>
            <div class="container goods_item">
                <div class="left_side">
                    <div class="slider-main">
                        <div class="slider-main_item">
                            <a href="images/t1.jpeg" data-fancybox="gallery">
                                <img data-lazy="images/t1.jpeg" alt="">
                            </a>
                        </div>
                        <div class="slider-main_item">
                            <a href="images/t2.jpeg" data-fancybox="gallery">
                                <img data-lazy="images/t2.jpeg" alt="">
                            </a>
                        </div>
                        <div class="slider-main_item">
                            <a href="images/t3.jpeg" data-fancybox="gallery">
                                <img data-lazy="images/t3.jpeg" alt="">
                            </a>
                        </div>
                        <div class="slider-main_item">
                            <a href="images/t1.jpeg" data-fancybox="gallery">
                                <img data-lazy="images/t1.jpeg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="slider-little">
                        <div class="slider-little_item">
                            <img data-lazy="images/t1.jpeg" alt="">
                        </div>
                        <div class="slider-little_item">
                            <img data-lazy="images/t2.jpeg" alt="">
                        </div>
                        <div class="slider-little_item">
                            <img data-lazy="images/t3.jpeg" alt="">
                        </div>
                        <div class="slider-little_item">
                            <img data-lazy="images/t1.jpeg" alt="">
                        </div>
                    </div>
                    <div class="delivery_payment_info">
                        <div class="payment_info">
                            <h5>Оплата</h5>
                            <p>Готівкою кур'єру<br>Накладеним платежем<br>Безготівковий розрахунок<br>На картку
                                «Приватбанку»</p>
                        </div>
                        <div class="delivery_info">
                            <h5>Доставка</h5>
                            <p>Самовивезення з м. Тячів<br>Доставка «Новою поштою»<br>Відправлення будь-якою кур'єрською
                                фірмою</p>
                        </div>
                    </div>
                </div>
                <div class="central_side">
                    <h3>Характеристики</h3>
                    <div class="item_parameters">
                        <div class="parameters_name">
                            <p class="parameters">Глибина</p>
                            <p class="parameters">Ширина</p>
                            <p class="parameters">Висота</p>
                            <p class="parameters">Висота подушки</p>
                            <p class="parameters">Матреіал каркасу</p>
                        </div>
                        <div class="parameters_info">
                            <p class="parameters">84 см</p>
                            <p class="parameters">78 см</p>
                            <p class="parameters">86 см</p>
                            <p class="parameters">18 см</p>
                            <p class="parameters">Алюміній</p>
                        </div>
                    </div>
                    <h3>Вибір текстилю</h3>
                    <div class="textile_variants">
                        <div class="variant_item">
                            <img src="images/textile.jpg" alt="">
                        </div>
                        <div class="variant_item">
                            <img src="images/textile.jpg" alt="">
                        </div>
                        <div class="variant_item">
                            <img src="images/textile.jpg" alt="">
                        </div>
                        <div class="variant_item">
                            <img src="images/textile.jpg" alt="">
                        </div>
                        <div class="variant_item">
                            <img src="images/textile.jpg" alt="">
                        </div>
                        <div class="variant_item">
                            <img src="images/textile.jpg" alt="">
                        </div>


                    </div>
                    <h3>Вибір ротангу</h3>
                    <div class="rattan_variants">
                        <div class="variant_item">
                            <img src="images/textile.jpg" alt="">
                        </div>
                        <div class="variant_item">
                            <img src="images/textile.jpg" alt="">
                        </div>
                        <div class="variant_item">
                            <img src="images/textile.jpg" alt="">
                        </div>
                        <div class="variant_item">
                            <img src="images/textile.jpg" alt="">
                        </div>
                        <div class="variant_item">
                            <img src="images/textile.jpg" alt="">
                        </div>
                        <div class="variant_item">
                            <img src="images/textile.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="right_side">
                    <div class="price_row_up">
                        <p class="item_page_price">8 530 грн</p>
                        <form>
                            <div class="value-button" id="decrease" onclick="decreaseValue()" value="Decrease Value">
                                <svg width="16" height="2" viewBox="0 0 16 2" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.0312 0.328613H0.96875C0.882812 0.328613 0.8125 0.394908 0.8125 0.475935V1.58085C0.8125 1.66187 0.882812 1.72817 0.96875 1.72817H15.0312C15.1172 1.72817 15.1875 1.66187 15.1875 1.58085V0.475935C15.1875 0.394908 15.1172 0.328613 15.0312 0.328613Z"
                                          fill="black"/>
                                </svg>

                            </div>
                            <input type="number" id="number" value="0"/>
                            <div class="value-button" id="increase" onclick="increaseValue()" value="Increase Value">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.41406 3.39893H10.5859C10.6901 3.39893 10.7422 3.44803 10.7422 3.54625V16.5105C10.7422 16.6087 10.6901 16.6579 10.5859 16.6579H9.41406C9.3099 16.6579 9.25781 16.6087 9.25781 16.5105V3.54625C9.25781 3.44803 9.3099 3.39893 9.41406 3.39893Z"
                                          fill="black"/>
                                    <path d="M3.4375 9.32861H16.5625C16.6667 9.32861 16.7188 9.37772 16.7188 9.47593V10.5808C16.7188 10.6791 16.6667 10.7282 16.5625 10.7282H3.4375C3.33333 10.7282 3.28125 10.6791 3.28125 10.5808V9.47593C3.28125 9.37772 3.33333 9.32861 3.4375 9.32861Z"
                                          fill="black"/>
                                </svg>

                            </div>
                        </form>
                    </div>
                    <div class="price_row_down">
                        <a href="#">Купити</a>
                        <a href="#">Придбати в один клік</a>
                    </div>
                </div>
            </div>
<!--            <div class="container">-->
<!--                <div class="test_div">-->
<!--                    <a href="images/t1.jpeg" data-fancybox="gallery" data-caption="Caption for single image">-->
<!--                        <img src="images/t1.jpeg"alt=""/>-->
<!--                    </a>-->
<!--                    <a href="images/t2.jpeg" data-fancybox="gallery" data-caption="Caption for single image">-->
<!--                        <img src="images/t2.jpeg"alt=""/>-->
<!--                    </a>-->
<!--                </div>-->
<!--            </div>-->
        </section>
    </div>
    <?php
    include('footer.php')
    ?>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/18846f0aad.js" crossorigin="anonymous"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/jquery.fancybox.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>

