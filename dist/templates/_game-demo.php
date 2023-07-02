<?php $info = array(
    array("title" => "Min Bet", "value" => "0,5"),
    array("title" => "RTP", "value" => "100%"),
    array("title" => "Reels", "value" => "1000000"),
    array("title" => "Paylines", "value" => "10000000"),
    array("title" => "Max Win", "value" => "x100000000"),
    array("title" => "Max Win", "value" => "x100000000"),
); ?>

<div class="game-demo">
    <div class="game-demo__view">
        <div class="game-demo__img">
            <img src="../img/games/review/game-0.jpg" alt="ALT" width="600" height="300">
        </div>
        <div class="game-demo-overlay">
            <div class="game-demo-overlay-header">
                <div class="game-demo-overlay-header__inner">
                    <?php $rating = "5.0" ;?>
                    <?php include '_rating.php' ;?>

                    <h1 class="game-demo__title">
                    The Dog House Megaways
                    </h1>

                    <?php include '_btn-like.php' ;?>
                </div>
                <div>
                    by <a href="#">Northern Lights Gaming</a>
                </div>
            </div>
            <div class="game-demo-overlay__body">

                <div class="game-demo-cta">
                    <button class='btn-main'>
                        Play For Real
                    </button>
                    <button class='btn-blur'>
                        Play Demo
                    </button>

                    <p class="game-demo-cta__note">
                        Problems with demo? <a href="#">Click Here</a>
                    </p>
                </div>

            </div>
            <div class="game-demo-overlay__footer">

                <div class="game-demo-info__wrapper">
                    <?php foreach ($info as $i => $item) { ?>
                        <div class="game-demo-info">

                            <div class="game-demo-info__title">
                                <?php echo $item['title']; ?>
                            </div>
                            <div class="game-demo-info__val">
                                <?php echo $item['value']; ?>
                            </div>

                        </div>
                    <?php } ?>

                </div>

            </div>
        </div>

    </div>

    <?php $casinos = array(
        array("img" => "../img/casinos/top-casinos/casino-1.png", "title" => "VoltSlot", "rating" => "5.0", "demo" => "#", "review" => "#", "top" => true),
        array("img" => "../img/casinos/top-casinos/casino-1.png", "title" => "Bets.io", "rating" => "5.0", "demo" => "#", "review" => "#", "top" => false),
        array("img" => "../img/casinos/top-casinos/casino-2.png", "title" => "Bets.io", "rating" => "5.0", "demo" => "#", "review" => "#", "top" => false),
    ); ?>

    <aside class="game-demo__sidebar">

        <section>
            <h3>Top where To Play</h3>
            <?php include '../templates/_top-casinos.php'; ?>
        </section>

        <section>
            <h3>Similar Games</h3>
            <?php include '../templates/_top-casinos.php'; ?>
        </section>

    </aside>
</div>