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
        $title = "Bonuses";
        $sub_title = 'Hoe maak je een storting in online casino iDEAL?';
        $author = 'Barry Bridges';
        $updated = 'September 8, 2022';
        $rating = '5.0';

        $cat = array(
            array("cat" => "no deposit bonus", "url" => "#"),
            array("cat" => "cashback bonus", "url" => "#"),
            array("cat" => "match bonus", "url" => "#"),
            array("cat" => "welcome bonus", "url" => "#"),
        ); ?>

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
                            <h2>
                                Casino Bonus Summary
                            </h2>
                            <p>
                                Online gokken is leuk. Maar om geld te winnen, moet je ook geld inzetten. Betalen in een casino met iDEAL is heel eenvoudig. Binnen een paar klikken staat het geld dat je in een online casino gewonnen hebt op je bankrekening. En geld storten van je bankrekening in een iDEAL casino is in een mum van tijd gebeurd. Betalen met iDEAL is dus heel gemakkelijk en een online casino met iDEAL vinden is een fluitje van een cent. iDEAL casino sites zijn daarom erg populair en het aantal casino’s groeit snel. Steeds meer mensen ontdekken deze handige betaalmethode en maken gebruik van een iDEAL betaling. Zeker als je er een kiest uit onze lijst iDEAL casino’s 2023. Betalen met iDEAL werkt precies hetzelfde als bij een ‘gewone’ online aankoop en met onze lijst van casino’s zorgen we ervoor dat je een betrouwbaar casino in Nederland vindt. iDEAL casino’s zijn ook nog eens erg veilig. Helemaal als je er een van onze lijst iDEAL casino 2023 uitzoekt. Betalen met iDEAL werkt precies hetzelfde als bij een ‘gewone’ online aankoop en we zorgen er met onze lijst van casino’s ook nog eens voor dat je als speler in een betrouwbaar casino iDEAL Nederland terecht komt.
                            </p>
                        </section>
                        <?php $bonuses = array(
                            array("url" => "#", "img" => "../img/casinos/top-casinos/casino-1.png", "name" => "Kansino", "deposit" => "1st deposit", "info" => "150% tot €300 + 5% CashBack + 100 Gratis Spins", "review" => "#", "demo" => "#"),
                            array("url" => "#", "img" => "../img/casinos/top-casinos/casino-1.png", "name" => "Kansino", "deposit" => "1st deposit", "info" => "150% tot €300 + 5% CashBack + 100 Gratis Spins", "review" => "#", "demo" => "#"),
                            array("url" => "#", "img" => "../img/casinos/top-casinos/casino-1.png", "name" => "Kansino", "deposit" => "1st deposit", "info" => "150% tot €300 + 5% CashBack + 100 Gratis Spins", "review" => "#", "demo" => "#"),
                        ); ?>
                        <section>
                            <?php include '../templates/_bonus-row.php'; ?>
                            <?php include '../templates/_btn-show-more.php'; ?>
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

    
</body>
</html>