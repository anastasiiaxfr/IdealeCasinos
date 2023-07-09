<?php if (isset($type)) { ?>
    <button class="rating--lg">
        <?php for ($i = 0; $i < 5; $i++) { ?>
            <svg width="15" height="15">
                <use xlink:href="#star"></use>
            </svg>
        <?php } ?>
        <b><?php echo $rating; ?></b>
    </button>
<?php } else { ?>
    <button class="rating">
        <svg width="15" height="15">
            <use xlink:href="#star"></use>
        </svg>
        <b><?php echo $rating; ?></b>
    </button>
<?php } ?>