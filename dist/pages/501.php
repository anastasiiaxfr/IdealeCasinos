<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <?php include '../templates/_seo.php'; ?>
    <link rel="stylesheet" href="../css/main.css" />
</head>

<body class="page__body">

    <?php include '../templates/_preloader.php'; ?>

    <main class="page__wrapper page__error">

        <section class="section hero">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-7">
                        <h2 class="hero__title">
                            Ooops!
                        </h2>
                        <h1 class="hero__subtitle">
                            501
                        </h1>
                        <p class="hero__description">
                            Seems like your experiment went wrong.
                        </p>


                        <?php
                        $list = array(
                            array("title" => "Online Casinos", "icon" => "i1", "url" => "#"),
                            array("title" => "Games", "icon" => "i6", "url" => "#"),
                            array("title" => "Bonuses", "icon" => "i5", "url" => "#"),
                            array("title" => "Betaalmethodes", "icon" => "i4", "url" => "#"),
                            array("title" => "Guides", "icon" => "i2", "url" => "#"),
                            array("title" => "Blog", "icon" => "i3", "url" => "#"),
                        );
                        ?>
                        <?php include '../templates/_chip.php'; ?>

                    </div>
                    <div class="col-lg-6 col-md-5 d-none d-md-block">
                        <div class="hero__img">
                            <img src="../img/501.png" alt="ALT" width="542" height="491">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <article class="section related">
            <div class="container">
                <h2>
                    Otherwise, Check out top rated casinos on our website
                </h2>

                <?php
                        $cards = array(
                            array("url" => "#", "img" => "../img/casinos/casino1.jpg", "label" => "Holland Casino NL", "title" => "250% up to NZ$ 480 + 80 FS", "btn" => "View Bonuses", "rating" => "5.0"),
                            array("url" => "#", "img" => "../img/casinos/casino2.jpg", "label" => "Kansino", "title" => "250% up to NZ$ 480 + 80 FS", "btn" => "View Bonuses", "rating" => "5.0"),
                            array("url" => "#", "img" => "../img/casinos/casino3.jpg", "label" => "777.nl", "title" => "250% up to NZ$ 480 + 80 FS", "btn" => "View Bonuses", "rating" => "5.0"),
                            array("url" => "#", "img" => "../img/casinos/casino4.jpg", "label" => "Circus.nl", "title" => "250% up to NZ$ 480 + 80 FS", "btn" => "View Bonuses", "rating" => "5.0"),
                        );
                ?>
                <section class="card__wrap">
                    <?php include '../templates/_card.php'; ?>
                </section>

            </div>
        </article>


    </main>

    <?php include '../templates/_btn-to-top.php'; ?>
    <?php include '../templates/_svg.php'; ?>
</body>

</html>