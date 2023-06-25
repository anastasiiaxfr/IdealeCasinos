<section class="home__hero">
    <div class="container">

    <div class="home__hero-inner">
        <div class="home__hero-content">
            <?php echo "<h1> $title </h1>"; ?>
            <?php echo "<p> $sub_title </p>"; ?>

            <?php if (isset($list)) {?>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/_chip.php'; ?>
            <?php }?>
        </div>

        <?php if (isset($img)) {?>
        <div class="home__hero-img">
            <img src="<?php echo $img; ?>" alt="<?php echo $title; ?>" width="" height="">
        </div>
        <?php }?>

    </div>

    </div>
</section>