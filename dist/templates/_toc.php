<?php
$toc = array(
    array("title" => "Casino Summary", "url" => "#"),
    array("title" => "Fair Play Casino Bonuses", "url" => "#"),
    array("title" => "Fair Play Casino Bonuses", "url" => "#"),
    array("title" => "Fair Play Casino Bonuses", "url" => "#"),
    array("title" => "Fair Play Casino Bonuses", "url" => "#"),
    array("title" => "Fair Play Casino Bonuses", "url" => "#"),
    array("title" => "Fair Play Casino Bonuses", "url" => "#"),
);

?>

<section class="toc">
    <div class="toc__inner">
        <b>Jump to</b>
        <?php foreach ($toc as $i => $item) { ?>
        <a href="<?php echo $item['url']; ?>" class="<?php echo ($i === 0) ? 'active' : ''; ?>">
        <svg class="" width="20" height="20">
            <use xlink:href="#cup"></use>
        </svg>
        <?php echo $item['title']; ?>
        </a>
        <?php } ?>
    </div>
</section>