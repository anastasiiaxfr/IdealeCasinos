<?php if (isset($type) && $type === "lg") { ?>
    <button class="rating--lg">
        <?php for ($i = 0; $i < 4; $i++) { ?>
            <svg width="20" height="20">
                <use xlink:href="#star"></use>
            </svg>
        <?php } ?>
        <svg width="20" height="20">
            <use xlink:href="#star-disable"></use>
        </svg>
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