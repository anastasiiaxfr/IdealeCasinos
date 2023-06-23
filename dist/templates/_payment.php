<section class="payment__wrap">
    <?php foreach ($payments as $index => $item) { ?>
    <figure class="payment">
        <a class="payment__img" href="<?php echo $item['url']; ?>">
            <img src="<?php echo $item['img']; ?>" alt="<?php echo $item['title']; ?>">
         </a>
        <div class="payment__content">
        <div class="payment__title">
            <?php echo $item['title']; ?>
        </div>
        <div class="payment__description">
            <?php echo $item['description']; ?>
        </div>
        <a class="payment__cta" href="<?php echo $item['url']; ?>">
            <?php echo $item['btn']; ?>
        </a>
        </div>
    </figure>
    <?php } ?>
</section>