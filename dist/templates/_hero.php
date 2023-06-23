<section class="page__hero">
	<div class="container">

    <?php 
        echo "<h1> $title </h1>";
    ?>

    <div class="page__hero-meta">
        <?php include '../templates/_rating.php'; ?>
        <div>
            <?php echo "Written by: <b> $author </b>"; ?>
        </div>
        <div>
            <?php echo "Updated: <b> $updated </b>"; ?>
        </div>
    </div>

    <?php 
        echo "<p> $sub_title </p>";
    ?>

    <?php if (isset($cat)) { ?>
        <div class="cat__wrap">
            <?php foreach ($cat as $item) { ?>
                <a class="cat" href="<?php echo $item['url']; ?>"><?php echo $item['cat']; ?></a>
            <?php } ?>
        </div>
    <?php } ?>

	</div>
</section>