<?php foreach ($casinos as $i => $item) { ?>
<div class="top-casinos__wrap <?php if ($item['top'] === true && (isset($active) && $active)) echo 'active'; ?>">
    <div class="top-casinos__header">
        <svg class="icon" width="20" height="20">
            <use xlink:href="#trophy"></use>
        </svg>
        <span>
            Casino Of The Month
        </span>
    </div>

    <figure class="top-casinos">
        <a class="top-casinos__img" href="<?php echo $item['review']; ?>">
            <img src="<?php echo $item['img']; ?>" alt="<?php echo $item['title']; ?>">
        </a>
        <div class="top-casinos__content">

            <div class="top-casinos__text">
                <div class="top-casinos__title">
                    <?php echo $item['title']; ?> 
                </div>
                <?php $rating = $item['rating']; ?>
                <?php include '../templates/_rating.php'; ?>
            </div>

            <div class="top-casinos__overlay">
                <a href="<?php echo $item['demo']; ?>" class="top-casinos__btn">
                    Claim Bonus
                </a>
                <a href="<?php echo $item['review']; ?>" class="top-casinos__link">
                    Bonus Voorwaarden
                </a>
            </div>

        </div>
    </figure>

</div>
<?php } ?>