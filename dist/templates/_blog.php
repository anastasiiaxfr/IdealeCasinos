<div class="slider__slide f-carousel__slide">
    <a class="blog" href="<?php echo $item['url']; ?>">

        <div class="blog__img">
            <img src="<?php echo $item['img']; ?>" alt="<?php echo $item['cat']; ?>" width="300" height="150">
            <div class="blog__img-overlay">
                <button class="blog__cat">
                    <?php echo $item['cat']; ?>
                </button>
            </div>
        </div>
        <div class="blog__container">
            <div class="blog__meta">
                <div class="blog__meta-date">
                    <svg class="icon" width="20" height="20">
                        <use xlink:href="#calendar"></use>
                    </svg>
                    <span><?php echo $item['date']; ?></span>
                </div>
                <div class="blog__meta-read">
                    <svg class="icon" width="20" height="20">
                        <use xlink:href="#clock"></use>
                    </svg>
                    <span><?php echo $item['read']; ?>mins</span>
                </div>
            </div>
            <div class="blog__content">
                <?php echo $item['title']; ?>
            </div>
            <div class="blog__footer">
                <div class="blog__auth">
                    <div class="blog__auth-ava">
                        <img src="../img/other/ava.png" alt="ALT" width="50" height="50">
                    </div>
                    <div class="blog__auth-name">
                        By <?php echo $item['author']; ?>
                    </div>
                </div>
            </div>

        </div>
    </a>
</div>