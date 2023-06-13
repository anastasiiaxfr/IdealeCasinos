<?php foreach ($cards as $item) {
    $url = $item['url'];
    $img = $item['img'];
    $title = $item['title'];
    $label = $item['label'];
    $btn = $item['btn'];
    $rating = $item['rating'];

    echo "<figure class='card'>
        <a href='$url' class='card__img'>
            <img src='$img' alt='$label'>
        </a>
        <figcaption class='card__content'>

            <div class='card__header'>

                <span class='rating'>
                    <svg class='ratin__icon' width='15' height='15'>
                        <use xlink:href='#star'></use>
                    </svg>
                    $rating
                </span>

                <a href='$url' class='card__label'>
                $label
                </a>
            </div>
            <div class='card__text'>
                <a href='$url' class='card__title'>
                $title
                </a>
            </div>
            <div class='card__footer'>
                <a href='$url' class='card__btn'>
                $btn
                </a>
            </div>
        </figcaption>
    </figure>";
}
