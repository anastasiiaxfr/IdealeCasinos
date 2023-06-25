<div class="chip__wrap <?php if (isset($class)) echo $class; ?>">
    <?php foreach ($list as $item) {
        $title = $item['title'];
        $url = $item['url'];
        $icon = $item['icon'];

        echo "<a href='$url' class='chip";
        if (isset($type) && $type === 'link') {
            echo ' chip--white';
        }
        echo "'>";

        if (isset($icon)) {
            echo "<svg class='chip__icon' width='24' height='24'>
                <use xlink:href='#$icon'></use>
              </svg>";
        }

        echo "<span class='chip__label'>$title</span>";
        echo "</a>";
    } ?>
</div>