
<?php foreach ($str as $i => $item) { ?>
<div class="f-carousel__slide slider__slide">
<figure class="str__card">
    <div class="str__card-img">
        <img src="<?php echo $item['img']; ?>" alt="<?php echo $item['title']; ?>">
    </div>
    <figcaption class="str__card-content">
        <div class="str__card-header">
            <div class="str__card-num">
            <?php echo $item['num']; ?>
            </div>
            <span>
            <?php echo $item['title']; ?>
            </span>
        </div>
        <div class="str__card-description">
        <?php echo $item['desc']; ?>
        </div>
    </figcaption>
</figure>
</div>
<?php } ?>
