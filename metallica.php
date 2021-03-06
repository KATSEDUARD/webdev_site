<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Metallica</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/metallica.css">
    <link rel="icon" href="images/metallica/favicon.png" type="image/png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cuprum&display=swap">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div id="left-block" class="col-lg-6 col-sm-12">
                <div class="row">
                    <div id="carousel" class="carousel slide col-lg-12 col-sm-12" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="images/metallica/covers/kill_em_all.jpeg">
                                <div class="carousel-caption d-none d-md-block">
                                    <h1>kill `em all</h1>
                                    <a target="blank" href="https://www.youtube.com/playlist?list=OLAK5uy_ldzMFmDA1sFzoH15lmeU29A5DVgi9RAM8"><button type="button" class="btn btn-light btn-lg">Послухати альбом</button></a>
                                    <button type="button" data-album="0" class="btn btn-light btn-lg fragment">Прослухати фрагмент</button>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="images/metallica/covers/ride_the_lightning.jpg">
                                <div class="carousel-caption d-none d-md-block">
                                    <h1>ride the lightning</h1>
                                    <a target="blank" href="https://www.youtube.com/playlist?list=OLAK5uy_k4yeBNbCJLDBeqj_QsTlpRoncOxmGLQDo"><button type="button" class="btn btn-light btn-lg">Послухати альбом</button></a>
                                    <button type="button" data-album="1" class="btn btn-light btn-lg fragment">Прослухати фрагмент</button>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="images/metallica/covers/master_of_puppets.jpg">
                                <div class="carousel-caption d-none d-md-block">
                                    <h1>master of puppets</h1>
                                    <a target="blank" href="https://www.youtube.com/playlist?list=OLAK5uy_lHtcjdo7MU4A3Tt3MuErEdEOOqs4UgngE"><button type="button" class="btn btn-light btn-lg">Послухати альбом</button></a>
                                    <button type="button" data-album="2" class="btn btn-light btn-lg fragment">Прослухати фрагмент</button>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="images/metallica/covers/and_justice_for_all.jpg">
                                <div class="carousel-caption d-none d-md-block">
                                    <h1>...and justice for all</h1>
                                    <a target="blank" href="https://www.youtube.com/playlist?list=OLAK5uy_kwDDSWKgSgMcCmR7XGOZ7KTyxK-XJO-fo"><button type="button" class="btn btn-light btn-lg">Послухати альбом</button></a>
                                    <button type="button" data-album="3" class="btn btn-light btn-lg fragment">Прослухати фрагмент</button>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="images/metallica/covers/metallica.jpg">
                                <div class="carousel-caption d-none d-md-block">
                                    <h1>metallica</h1>
                                    <a target="blank" href="https://www.youtube.com/playlist?list=OLAK5uy_l3qf_fJNreo3L6_ZPIaLOquqfTda--gZc"><button type="button" class="btn btn-light btn-lg">Послухати альбом</button></a>
                                    <button type="button" data-album="4" class="btn btn-light btn-lg fragment">Прослухати фрагмент</button>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="images/metallica/covers/load.jpg">
                                <div class="carousel-caption d-none d-md-block">
                                    <h1>load</h1>
                                    <a target="blank" href="https://www.youtube.com/playlist?list=OLAK5uy_n-mEUSh6MZyPh940SH5_xbrbbARqMlwH0"><button type="button" class="btn btn-light btn-lg">Послухати альбом</button></a>
                                    <button type="button" data-album="5" class="btn btn-light btn-lg fragment">Прослухати фрагмент</button>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="images/metallica/covers/reload.jpg">
                                <div class="carousel-caption d-none d-md-block">
                                    <h1>reload</h1>
                                    <a target="blank" href="https://www.youtube.com/playlist?list=OLAK5uy_lEprCyUMjnrY7JNpS0jozE9CvpzgP0TsQ"><button type="button" class="btn btn-light btn-lg">Послухати альбом</button></a>
                                    <button type="button" data-album="6" class="btn btn-light btn-lg fragment">Прослухати фрагмент</button>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="images/metallica/covers/st_anger.jpg">
                                <div class="carousel-caption d-none d-md-block">
                                    <h1>st. Anger</h1>
                                    <a target="blank" href="https://www.youtube.com/playlist?list=OLAK5uy_nvaYLo9AG_rZyqkXzYlkJfLjBuZS84bIU"><button type="button" class="btn btn-light btn-lg">Послухати альбом</button></a>
                                    <button type="button" data-album="7" class="btn btn-light btn-lg fragment">Прослухати фрагмент</button>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="images/metallica/covers/death_magnetic.jpeg">
                                <div class="carousel-caption d-none d-md-block">
                                    <h1>death magnetic</h1>
                                    <a target="blank" href="https://www.youtube.com/playlist?list=OLAK5uy_n0TUfvlyGxmK7I2oJBSKwKfQjs0TQ1MGY"><button type="button" class="btn btn-light btn-lg">Послухати альбом</button></a>
                                    <button type="button" data-album="8" class="btn btn-light btn-lg fragment">Прослухати фрагмент</button>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="images/metallica/covers/hardwired.jpg">
                                <div class="carousel-caption d-none d-md-block">
                                    <h1>hardwired... to self-destruct</h1>
                                    <a target="blank" href="https://www.youtube.com/playlist?list=OLAK5uy_kSExSWD7EMYCgDWtx5l1FUhsyQGNHMG2M"><button type="button" class="btn btn-light btn-lg">Послухати альбом</button></a>
                                    <button type="button" data-album="9" class="btn btn-light btn-lg fragment">Прослухати фрагмент</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="right-block" class="col-lg-6 col-sm-12">
                <div class="menu" id="menu">
                    <div class="row">
                        <div class="link-item col-lg-3 text-center">
                            <a class="item-a" href="index.php">Home</a>
                        </div>
                        <div class="link-item col-lg-3 text-center">
                            <div class="dropdown">
                                <a onclick='window.location.href = "bands.php"' class="dropdown-toggle item-a" id="dropdownMenuButton" data-toggle="dropdown" onmouseover='mouseover_button(event)' onmouseout='mouseout_button(event)'>Bands</a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" onmouseover='mouseover_menu(event)' onmouseout='mouseout_menu(event)'>
                                    <a class="dropdown-item" href="maiden.php">IRON MAIDEN</a>
                                    <a style="font-size: 25px !important; padding-bottom: 0 !important; padding-top: 0 !important;" class="dropdown-item active" href="metallica.php">Metallic<span class='flip_H' style="color: white;">A</span></a>
                                    <a class="dropdown-item" href="megadeth.php">MEGADETH</a>
                                    <a class="dropdown-item" href="rammstein.php">RAMMSTEIN</a>
                                </div>
                            </div>
                        </div>
                        <div class="link-item col-lg-3 text-center">
                            <a class="item-a" href="news.php">News</a>
                        </div>
                        <div class="link-item col-lg-3 text-center">
                            <a class="item-a" href="account.php">Account</a>
                        </div>
                    </div>
                </div>
                <div id="content-wrapper" class="content-wrapper">
                    <div class="row">
                        <img src="images/metallica/logo.png" class="col-lg-12">
                    </div>
                    <p><b>Metallica</b> - американський метал-гурт з Лос-Анджелеса, Каліфорнія, яка грає в жанрі
                        треш-метал та хеві-метал. Разом з Slayer,
                        Megadeth та Anthrax входять до «великої четвірки треш-металу».
                        Заснований в 1981 році, коли Джеймс Хетфілд відгукнувся на оголошення
                        барабанщика Ларса Ульріха, розміщене у місцевій газеті.
                        Гурт продав понад 100 мільйонів альбомів по всьому світу. <br><br>
                        Metallica отримала свою назву, коли Рон Куінтана попросив Ларса Ульріха допомогти йому вибрати
                        назву для свого нового журналу про американських та британських хеві-метал гуртів. Куінтана мав
                        такі варіанти як «Metallica», «Metal Mania» і «Hesse». Ульріх збагнув, що «Metallica» буде
                        відмінною назвою для гурту та сказав Рону,
                        що така назва навряд чи кому-небудь сподобається.
                        <br><br>
                        <a target="blank" href="https://uk.wikipedia.org/wiki/Metallica">Прочитати більше на
                            Вікіпедії</a>
                    </p>
                    <div class="player">
                        <button class="button_p" id="play"><i class="fas fa-play"></i></button>
                        <button class="button_p" id="mute"><i class="fas fa-volume-up"></i></button>
                        <input type="range" id="volume" value="100" min="0" max="100" step="1" />
                        <input type="range" disabled id="slider" value="0" min="0" max="" />
                        <button class="button_p" id="close"><i class="fas fa-times"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="js/initbt.js"></script>
    <script src="js/fonts.js"></script>
    <script src="js/player.js"></script>
    <script src="https://kit.fontawesome.com/5c78eed0ca.js" crossorigin="anonymous"></script>

</body>

</html>