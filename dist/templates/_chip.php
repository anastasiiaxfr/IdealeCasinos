<div class="chip__wrap">
    <?php foreach ($list as $item) {
        $title = $item['title'];
        $url = $item['url'];

        echo "<a href='$url' class='chip'>";
        if (isset($item['icon'])) {
            echo "<svg class='chip__icon' width='24' height='24'>
                <use xlink:href='#{$item['icon']}'></use>
              </svg>";
        }
        echo "<span class='chip__label'>$title</span>";
        echo "</a>";
    } ?>
</div>