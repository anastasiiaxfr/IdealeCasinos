<?php foreach ($cards as $item) {
    $url = $item['url'];
    $img = $item['icon'];
    $title = $item['title'];

    echo "<a class='box-card' href='$url'>
        <figure class='box-card__img'>
            <img src='$img'>
        </figure>
        <figcaption class='box-card__content'>
            <div class='box-card__title'>
                $title
            </div>
        </figcaption>
    </a>";
}; ?>
