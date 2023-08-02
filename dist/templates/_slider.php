<div class="slider__wrap">
<div class="f-carousel <?php if (isset($slids_class)) {
                            echo $slids_class;
                        } ?>">
    <?php foreach ($slids as $i => $item) { ?>
        <div class="slider__slide f-carousel__slide">
            <div class="slider__img">
                <img src="<?php echo $item['img']; ?>" alt="<?php echo $item['alt']; ?>" width="300" height="150">
            </div>
        </div>
    <?php } ?>
</div>
</div>