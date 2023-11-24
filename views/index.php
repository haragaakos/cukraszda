<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sweet-Cake Cukrászda</title>
    <!-- swiper linkje  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!-- cdn ikon linkje  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- css fájl linkje  -->
    <link rel="stylesheet" href="./views/style.css">
</head>

<body>

<link rel="stylesheet" href="./views/header.css">
<header class="header">
        <div class="logoContent">
            <a href="#" class="logo"><img src="images/logo.png" alt=""></a>
            <h1 class="logoName">Sweet Cake </h1>
        </div>

        <nav class="navbar">
            <a href="#home">Kezdőoldal</a>
            <a href="#product">Termékek</a>
            <a href="./views/rating.php">Vélemények</a>
            <a href="#contact">Kapcsolat</a>
            <a href="./views/login.php">Bejelentkezés/Regisztráció</a>
        </nav>

        <div class="icon">
            <i class="fas fa-search" id="search"></i>
            <i class="fas fa-bars" id="menu-bar"></i>
        </div>

        <div class="search">
            <input type="search" placeholder="search...">
        </div>
    </header>

    <!-- kezdőoldal (home) szekció kezdete  -->
    <section class="home" id="home">
        <div class="homeContent">
            <h2>Finom sütemények mindenkinek! </h2>
            <p>
                Üdvözöljük Önöket a Sweet Cake Cukrászdában, ahol az édesség és kényeztetés találkozik egyedi ízekben és kreatív desszertekben!
                Mi, a Sweet Cake csapata, szenvedélyesen hiszünk abban, hogy az élet különleges pillanatait édes élvezetekkel kell megünnepelni.
                Cukrászdánkban olyan élményeket kínálunk, amelyeknél nem csak az ízek, de az illatok és a látvány is elvarázsolja Önöket.
                Kézműves szellemiségünknek és minőségi alapanyagainknak köszönhetően minden süteményünk egy kis műalkotás. A legfinomabb csokoládék,
                friss gyümölcsök és gondosan válogatott alapanyagok segítségével olyan édességeket készítünk, amelyek nem csupán jóízűek, de egyediek is.
                A Sweet Cake Cukrászda olyan hely, ahol a hagyományok és az innováció találkozik. Megtalálható nálunk a klasszikus torták és sütemények
                mellett az szezonális különlegességek is, amelyekkel mindig friss és izgalmas ízvilágot kínálunk.
                Büszkék vagyunk arra, hogy barátságos kiszolgálással és hangulatos környezettel várjuk vendégeinket. 
                Legyen szó egy családi ünnepről, baráti találkozóról vagy éppen egy kis kényeztetésről, nálunk mindig megtalálhatják a tökéletes édességet.
                Várjuk Önöket szeretettel a Sweet Cake Cukrászdában, ahol az édes élet egy csipetnyi varázslattal válik még élvezetesebbé!
            </p>
            <div class="home-btn">
                <a href="#"><button>Bővebben</button></a>
            </div>
        </div>
    </section>

    <!-- kezdőoldal (home) szekció vége -->

    <!-- termékek (product) szekció kezdete -->
    <section class="product" id="product">
        <div class="heading">
            <h2>Termékeink</h2>
        </div>
        <div class="swiper product-row">
            <div class="swiper-wrapper">
                <div class="swiper-slide box">
                    <div class="img">
                        <img src="images/csokitorta.jpg" alt="">
                    </div>
                    <div class="product-content">
                        <h3>Nagy csokitorta</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa adipisci reiciendis assumenda.
                        </p>
                        <div class="orderNow">
                            <button>Rendelés</button>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="img">
                        <img src="images/csokitorta2.jpg" alt="">
                    </div>
                    <div class="product-content">
                        <h3>Nagyon nagy csokitorta</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa adipisci reiciendis assumenda.
                        </p>
                        <div class="orderNow">
                            <button>Rendelés</button>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="img">
                        <img src="images/Rákóczitúrós.jpg" alt="">
                    </div>
                    <div class="product-content">
                        <h3>Rákóczi túrós</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa adipisci reiciendis assumenda.
                        </p>
                        <div class="orderNow">
                            <button>Rendelés</button>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="img">
                        <img src="images/Franciakrémes2.jpg" alt="">
                    </div>
                    <div class="product-content">
                        <h3>Franciakrémes</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa adipisci reiciendis assumenda.
                        </p>
                        <div class="orderNow">
                            <button>Rendelés</button>
                        </div>
                    </div>
                </div>

            </div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="swiper product-row">
            <div class="swiper-wrapper">
                <div class="swiper-slide box">
                    <div class="img">
                        <img src="images/cake1.png" alt="">
                    </div>
                    <div class="product-content">
                        <h3>Nagyon finom csokitorta</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa adipisci reiciendis assumenda.
                        </p>
                        <div class="orderNow">
                            <button>Rendelés</button>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="img">
                        <img src="images/cake1.png" alt="">
                    </div>
                    <div class="product-content">
                        <h3>Finom csokitorta</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa adipisci reiciendis assumenda.
                        </p>
                        <div class="orderNow">
                            <button>Rendelés</button>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="img">
                        <img src="images/cake2.png" alt="">
                    </div>
                    <div class="product-content">
                        <h3>Nagyon finom csokitorta</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa adipisci reiciendis assumenda.
                        </p>
                        <div class="orderNow">
                            <button>Rendelés</button>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="img">
                        <img src="images/cake3.png" alt="">
                    </div>
                    <div class="product-content">
                        <h3>Epres torta</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa adipisci reiciendis assumenda.
                        </p>
                        <div class="orderNow">
                            <button>Rendelés</button>
                        </div>
                    </div>
                </div>

            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <!-- termékek (product) szekció vége   -->

    <!-- blogok szekció kezdete  -->
    <section class="blogs" id="blogs">

        <div class=" swiper blogs-row">
            <div class="swiper-wrapper">
                <div class=" swiper-slide box">
                    <div class="img">
                        <img src="images/blog-img1.png" alt="">
                    </div>
                    <div class="content">
                        <h3>Muffin</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi dolorum voluptatum
                            corporis accusamus aperiam fugiat tempora blanditiis labore dolor aliquid maxime nobis
                            laborum sed soluta voluptatibus aspernatur natus, dicta quisquam.</p>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam ab ullam reiciendis sint
                            eaque at.</p>
                        <a href="#blogs" class="btn">Bővebben</a>
                    </div>
                </div>
                <div class=" swiper-slide box">
                    <div class="img">
                        <img src="images/blog-img2.png" alt="">
                    </div>
                    <div class="content">
                        <h3>Karamelles torta</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi dolorum voluptatum
                            corporis accusamus aperiam fugiat tempora blanditiis labore dolor aliquid maxime nobis
                            laborum sed soluta voluptatibus aspernatur natus, dicta quisquam.</p>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam ab ullam reiciendis sint
                            eaque at.</p>
                        <a href="#blogs" class="btn">Bővebben</a>
                    </div>
                </div>
                <div class=" swiper-slide box">
                    <div class="img">
                        <img src="images/blog-img3.png" alt="">
                    </div>
                    <div class="content">
                        <h3>Oroszkrém torta</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi dolorum voluptatum
                            corporis accusamus aperiam fugiat tempora blanditiis labore dolor aliquid maxime nobis
                            laborum sed soluta voluptatibus aspernatur natus, dicta quisquam.</p>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam ab ullam reiciendis sint
                            eaque at.</p>
                        <a href="#blogs" class="btn">Bővebben</a>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>


        </div>
    </section>

    <!-- blogok szekció vége  -->

    <!-- hírlevél szekció kezdete  -->

    <section class="newsletter">
        <form action="">
            <h3>Iratkozz fel hírlevelünkre!</h3>
            <input type="email" name="" placeholder="Írd be az e-mail címed!" id="" class="box">
            <input type="button" value="Feliratkozás" class="box2">
        </form>
    </section>

    <!-- hírlevél vége  -->

    <?php
        include("footer.php")
    ?>

    <!-- swiper linkje  -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- javascript fájl linkje  -->
    <script src="./views/index.js"></script>


</body>

</html>