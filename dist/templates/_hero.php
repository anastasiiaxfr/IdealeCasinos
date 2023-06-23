<section class="page__hero">
    <div class="container">

        <div class="page__hero-inner">
        <div class="page__hero-content">
            <?php echo "<h1> $title </h1>"; ?>

            <div class="page__hero-meta">
                <?php if (isset($rating)) {?>
                <?php include '../templates/_rating.php';?>
                <?php }?>
                <?php if (isset($author)) {?>
                <div>
                    <?php echo "Written by: <b> $author </b>"; ?>
                </div>
                <?php }?>
                <?php if (isset($updated)) {?>
                <div>
                    <?php echo "Updated: <b> $updated </b>"; ?>
                </div>
                <?php }?>
            </div>

            <?php echo "<p> $sub_title </p>"; ?>

            <?php if (isset($cat)) {?>
            <div class="cat__wrap">
                <?php foreach ($cat as $item) {?>
                <a class="cat" href="<?php echo $item['url']; ?>">
                    <?php echo $item['cat']; ?>
                </a>
                <?php }?>
            </div>
            <?php }?>
        </div>

        <?php if (isset($hero_img)) {?>
        <div class="page__hero-img">
            <img src="<?php echo $hero_img; ?>" alt="<?php echo $title; ?>" width="" height="">
        </div>
        <?php }?>

    </div>

    </div>
</section>