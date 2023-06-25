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
        $title = "Games";
        $sub_title = '<a href="#">Casino’s met Ideal</a> maken dit gemakkelijk voor u, aangezien we deze casino’s vermelden op basis van de regio waaruit u het bezoek. Op deze manier, als je browst vanuit het Verenigd Koninkrijk, zullen we je alleen de juiste casino’s laten zien die zijn gelicentieerd door de United Kingdom Gambling Commission of Malta Gambling Commission en als u uit Nederland bezoekt degene die een licentie hebben in Nederland. Show More';
        $author = 'Barry Bridges';
        $updated = 'September 8, 2022';
        $rating = '5.0';
        ?>

        <?php include '../templates/_hero.php'; ?>

        <?php
        $tabs = array(
            array("tab" => "Roulette", "url" => "#"),
            array("tab" => "Blackjack", "url" => "#"),
            array("tab" => "Gokkasten", "url" => "#"),
            array("tab" => "Baccarat", "url" => "#"),
            array("tab" => "Craps", "url" => "#"),
            array("tab" => "Keno", "url" => "#"),
            array("tab" => "Bingo", "url" => "#"),
            array("tab" => "Poker", "url" => "#"),
        ); ?>


        <article class="page page__container">
            <div class="container">

                <div class="page__main">
                    <div class="page__data">
                        <?php $games = array(
                            array("url" => "#", "img" => "../img/games/game1.jpg", "name" => "The Dog House Megaways", "provider" => "Northern Lights Gaming", "min_bet" => "0.5", "max_win" => "x100000000", "rating" => "5.0", "likes" => "false"),
                            array("url" => "#", "img" => "../img/games/game1.jpg", "name" => "The Dog House Megaways", "provider" => "Northern Lights Gaming", "min_bet" => "0.5", "max_win" => "x100000000", "rating" => "5.0", "likes" => "false"),
                            array("url" => "#", "img" => "../img/games/game1.jpg", "name" => "The Dog House Megaways", "provider" => "Northern Lights Gaming", "min_bet" => "0.5", "max_win" => "x100000000", "rating" => "5.0", "likes" => "false"),
                            array("url" => "#", "img" => "../img/games/game1.jpg", "name" => "The Dog House Megaways", "provider" => "Northern Lights Gaming", "min_bet" => "0.5", "max_win" => "x100000000", "rating" => "5.0", "likes" => "false"),
                            array("url" => "#", "img" => "../img/games/game1.jpg", "name" => "The Dog House Megaways", "provider" => "Northern Lights Gaming", "min_bet" => "0.5", "max_win" => "x100000000", "rating" => "5.0", "likes" => "false"),
                            array("url" => "#", "img" => "../img/games/game1.jpg", "name" => "The Dog House Megaways", "provider" => "Northern Lights Gaming", "min_bet" => "0.5", "max_win" => "x100000000", "rating" => "5.0", "likes" => "false"),
                        ); ?>

                        <section>

                            <nav class="tab__wrap">
                                <?php foreach ($tabs as $item) { ?>
                                    <button class="tab">
                                        <?php echo $item['tab']; ?>
                                    </button>
                                <?php } ?>
                            </nav>
                            <div class="tab__container">
                                <div class="tab__item tab__item--base">
                                    
                                    <div class="box__wrap">
                                        <?php include '../templates/_card-game.php'; ?>
                                    </div>

                                </div>
                            </div>
                       
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
                    </div>

                    <aside class="page__sidebar">
                        <?php include '../templates/_sidebar.php'; ?>
                    </aside>
                </div>

            </div>
        </article>

    </main>
    <?php include '../templates/_btn-to-top.php'; ?>
    <?php include '../templates/_footer.php'; ?>
    <?php include '../templates/_svg.php'; ?>

    <script>
        const tabs = document.querySelectorAll(".tab");
        const tabs_item = document.querySelectorAll(".tab__item");

        tabs[0].classList.add('tab--active');
        tabs_item[0].classList.add('tab__item--active');

        for (let i = 0; i < tabs.length; i++) {
            tabs[i].addEventListener("click", (event) => {

                let tab = event.target.parentElement.children;
                for (let c = 0; c < tab.length; c++) {
                    tab[c].classList.remove("tab--active");
                }
                tabs[i].classList.add("tab--active");
                let tab_item = event.target.parentElement.nextElementSibling.children;
                for (let j = 0; j < tab_item.length; j++) {
                    tab_item[j].classList.remove("tab__item--active");
                }
                tabs_item[i].classList.add("tab__item--active");

            });
        }
    </script>

</body>
</html>