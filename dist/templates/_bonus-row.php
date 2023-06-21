<?php foreach ($bonuses as $item) { ?>
    <figure class="bonus-row">
        <div class="bonus-row__inner">
            <a class="bonus-row__img" href="#">
                <img src="<?php echo $item['img']; ?>" alt="<?php echo $item['name']; ?>">
            </a>
            <a class="bonus-row__title" href="#">
                <?php echo $item['name']; ?>
            </a>
            <a class="bonus-row__content" href="#">
                <div class="bonus-row__sup">
                    <?php echo $item['deposit']; ?>
                </div>
                <div class="bonus-row__info">
                    <?php echo $item['info']; ?>
                </div>
            </a>
        </div>

        <div class="bonus-row__cta">
            <a href="<?php echo $item['review']; ?>" class="bonus-row__btn"> Claim Bonus </a>
            <a href="<?php echo $item['demo']; ?>" class="bonus-row__link"> Bonus Voorwaarden </a>
        </div>
    </figure>
<?php } ?>