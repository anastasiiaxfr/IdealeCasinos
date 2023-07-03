<div class="blog__wrap swiper <?php if (isset($slids_class)) {echo $slids_class;} else {echo 'swiper-blog';}?>">
    <div class="swiper-wrapper">
        <?php foreach ($slids as $i => $item) {?>
            <?php include '_slide.php';?>
        <?php }?>
    </div>
</div>