<!DOCTYPE html>
<html lang="en-US">

<head>
    <base href="../">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <?php include '../templates/_seo.php'; ?>
    <link rel="stylesheet" href="css/main.css" />
</head>

<body class="page__body">
    <?php include '../templates/_preloader.php'; ?>

    <main class="page__wrapper">
        <?php include '../templates/_header.php'; ?>

        <?php
        $title = "Provider";
        $sub_title = 'Hoe maak je een storting in online casino iDEAL?Hoe maak je een storting in online casino iDEAL?';
        ?>

        <?php include '../templates/_hero.php'; ?>
        <article class="page page__container">
            <div class="container">


                <?php $games = array(
                    array("url" => "#", "img" => "../img/games/game1.jpg", "name" => "The Dog House Megaways", "provider" => "Northern Lights Gaming", "min_bet" => "0.5", "max_win" => "x100000000", "rating" => "5.0", "likes" => "false"),
                    array("url" => "#", "img" => "../img/games/game1.jpg", "name" => "The Dog House Megaways", "provider" => "Northern Lights Gaming", "min_bet" => "0.5", "max_win" => "x100000000", "rating" => "5.0", "likes" => "false"),
                    array("url" => "#", "img" => "../img/games/game1.jpg", "name" => "The Dog House Megaways", "provider" => "Northern Lights Gaming", "min_bet" => "0.5", "max_win" => "x100000000", "rating" => "5.0", "likes" => "false"),
                    array("url" => "#", "img" => "../img/games/game1.jpg", "name" => "The Dog House Megaways", "provider" => "Northern Lights Gaming", "min_bet" => "0.5", "max_win" => "x100000000", "rating" => "5.0", "likes" => "false"),
                ); ?>


                <section>
                    <h2>
                        Slots
                    </h2>
                    <div class="box__wrap">
                        <?php include '../templates/_card-game.php'; ?>
                    </div>
                </section>

                <section>
                    <h2>
                        Roulette
                    </h2>
                    <div class="box__wrap">
                        <?php include '../templates/_card-game.php'; ?>
                    </div>
                </section>

                <section>
                    <h2>
                        Text Block
                    </h2>
                    <p>
                        Red Ventures (includes “us,” “we,” or “our”) is a portfolio of brands and digital platforms
                        (such as mobile and/or TV applications) that connect people with information to help make some
                        of life’s most important decisions. Some examples of Red Ventures’ brands are Allconnect,
                        Bankrate, CNET, MyMove, Online MBA, and The Points Guy. For the purposes of this Privacy Policy,
                        the websites, apps, and products provided by Red Ventures will be referred to as the “Services.”
                        Certain Red Ventures Services have different privacy policies (such as our Healthline Media
                        Sites and Services in Brazil), you should check each Service for its specific policy before use.
                    </p>
                    <p>
                        This Privacy Policy describes the type of personal information that we may collect for our own
                        purposes; how we use, protect, and share that information; and the choices that you have. By
                        using the Services, you acknowledge the information collection practices and purposes outlined
                        in this Privacy Policy. Any capitalized terms used, but not defined, in this Privacy Policy have
                        the meanings provided in the Terms of Use of the applicable Services.
                    </p>
                    <p>
                        In some circumstances, a Red Ventures company may receive or process Personal Information on
                        behalf of a client. In those situations, the privacy policy of the client will apply.
                    </p>
                </section>

                <?php include '../templates/_author.php'; ?>


            </div>
        </article>

    </main>
    <?php include '../templates/_btn-to-top.php'; ?>
    <?php include '../templates/_footer.php'; ?>
    <?php include '../templates/_svg.php'; ?>

</body>

</html>