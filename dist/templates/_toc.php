<?php
$toc = array(
    array("title" => "Casino Summary", "url" => "#"),
    array("title" => "Fair Play Casino Bonuses", "url" => "#"),
    array("title" => "Fair Play Casino Bonuses", "url" => "#"),
    array("title" => "Fair Play Casino Bonuses", "url" => "#"),
    array("title" => "Fair Play Casino Bonuses", "url" => "#"),
    array("title" => "Fair Play Casino Bonuses", "url" => "#"),
    array("title" => "Fair Play Casino Bonuses", "url" => "#"),
    array("title" => "Fair Play Casino Bonuses", "url" => "#"),
    array("title" => "Fair Play Casino Bonuses", "url" => "#"),
    array("title" => "Fair Play Casino Bonuses", "url" => "#"),
    array("title" => "Fair Play Casino Bonuses", "url" => "#"),
    array("title" => "Fair Play Casino Bonuses", "url" => "#"),
    array("title" => "Fair Play Casino Bonuses", "url" => "#"),
);
?>

<section class="toc">
    <div class="toc__container">
        <b class="">Jump to</b>
        <div class="toc__box">
            <div class="scroller scroller-left">
                <svg class="icon" width="15" height="15">
                    <use xlink:href="#arr-left"></use>
                </svg>
            </div>
            <div class="toc__wrapper">
                <div class="wrapper-nav">
                    <div class="toc__inner list">
                        <?php foreach ($toc as $i => $item) { ?>
                            <a href="<?php echo $item['url']; ?>" class="toc__item <?php echo ($i === 0) ? 'active' : ''; ?>">
                                <svg class="" width="20" height="20">
                                    <use xlink:href="#cup"></use>
                                </svg>
                                <?php echo $item['title']; ?>
                            </a>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="scroller scroller-right">
                <svg class="icon" width="15" height="15">
                    <use xlink:href="#arr-right"></use>
                </svg>
            </div>
        </div>
    </div>
</section>
<!--Scrollable libs-->
<script src="../lib/tabs/move.min.js"></script>
<script src="../lib/tabs/scrollable-tabs.min.js"></script>