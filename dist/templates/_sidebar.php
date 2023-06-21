<div class="page__sidebar-inner">
    <section>
        <h3>
            🎰 Top 3 Casinos
        </h3>
        <?php $casinos = array(
            array("img" => "../img/casinos/top-casinos/casino-1.png", "title" => "VoltSlot", "rating" => "5.0", "demo" => "#", "review" => "#", "top" => true),
            array("img" => "../img/casinos/top-casinos/casino-1.png", "title" => "Bets.io", "rating" => "5.0", "demo" => "#", "review" => "#", "top" => false),
            array("img" => "../img/casinos/top-casinos/casino-2.png", "title" => "Bets.io", "rating" => "5.0", "demo" => "#", "review" => "#", "top" => false),
        ); ?>
        <?php include '../templates/_top-casinos.php';?>

    </section>

    <section>
        <h3>
            Links
        </h3>

        <?php $links = array(
            array("url" => "#", "title" => "No Wager No Deposit Bonuses"),
            array("url" => "#", "title" => "No Deposit Sign Up Bonuses"),
            array("url" => "#", "title" => "No Deposit Welcome Bonuses"),
            array("url" => "#", "title" => "Free Chips"),
            array("url" => "#", "title" => "Free Cash No Deposit"),
            array("url" => "#", "title" => "No Deposit Coupon Codes"),
            array("url" => "#", "title" => "Free Bets No Deposit"),
            array("url" => "#", "title" => "Exclusive No Deposit Bonuses"),
        ) ?>

        <nav class="page__sidebar-links">
            <?php foreach ($links as $i => $item) { ?>
                <a href="<?php echo $item['url']; ?>" class="<?php echo ($i === 0) ? 'active' : ''; ?>">
                    <?php echo $item['title']; ?>
                </a>
            <?php } ?>
        </nav>
    </section>

</div>