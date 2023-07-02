<?php $games = array(
    array("url" => "#", "img" => "../img/games/game1.jpg", "name" => "The Dog House Megaways", "provider" => "Northern Lights Gaming", "min_bet" => "0.5", "max_win" => "x100000000", "rating" => "5.0", "likes" => "false"),
    array("url" => "#", "img" => "../img/games/game1.jpg", "name" => "The Dog House Megaways", "provider" => "Northern Lights Gaming", "min_bet" => "0.5", "max_win" => "x100000000", "rating" => "5.0", "likes" => "false"),
    array("url" => "#", "img" => "../img/games/game1.jpg", "name" => "The Dog House Megaways", "provider" => "Northern Lights Gaming", "min_bet" => "0.5", "max_win" => "x100000000", "rating" => "5.0", "likes" => "false"),
    array("url" => "#", "img" => "../img/games/game1.jpg", "name" => "The Dog House Megaways", "provider" => "Northern Lights Gaming", "min_bet" => "0.5", "max_win" => "x100000000", "rating" => "5.0", "likes" => "false"),
    array("url" => "#", "img" => "../img/games/game1.jpg", "name" => "The Dog House Megaways", "provider" => "Northern Lights Gaming", "min_bet" => "0.5", "max_win" => "x100000000", "rating" => "5.0", "likes" => "false"),
    array("url" => "#", "img" => "../img/games/game1.jpg", "name" => "The Dog House Megaways", "provider" => "Northern Lights Gaming", "min_bet" => "0.5", "max_win" => "x100000000", "rating" => "5.0", "likes" => "false"),
);?>

<div>
    <?php if (isset($slider_title)) {?>
        <hgroup>
            <h2>
                <?php echo $slider_title; ?>
            </h2>
            <svg class="icon" width="20" height="20">
                <use xlink:href="#arr-rt"></use>
            </svg>
        </hgroup>
    <?php } ;?>

    <div class="blog__wrap swiper <?php if (isset($slider_class)) { echo $slider_class; } else { echo 'swiper-games'; }?>">
        <div class="swiper-wrapper">
            <?php foreach ($games as $i => $item) {?>
                <?php include '_card-game-default.php';?>
            <?php }?>
        </div>
    </div>
</div>