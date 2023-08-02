<?php foreach ($games as $item) {
    $url = $item['url'];
    $img = $item['img'];
    $title = $item['name'];
    $provider = $item['provider'];
    $min_bet = $item['min_bet'];
    $max_win = $item['max_win'];
    $rating = $item['rating'];
    $likes = $item['likes'];
    echo "<div class='f-carousel__slide slider__slide'><figure class='box'>
        <div class='box__img'>
            <img src='$img' alt='$title'>

            <div class='box__overlay'>
                <div class='box__cta'>
                <button class='box__icon likes'>
                    <svg width='20' height='20'>
                        <use xlink:href='#heart'></use>
                    </svg>
                </button>";

    include '../templates/_rating.php';

    echo "</div>

               <div class='box__btns'>
               <button class='btn-main'>
               Play Now
           </button>
           <button class='btn-blur'>
               Play Demo
           </button>
               </div>
            </div>
        </div>
        <figcaption class='box__content'>
            <div class='box__text'>
                <a href='$url' class='box__title'>
                    $title
                </a>
                <a href='$url' class='box__info'> <i>by</i> 
                    $provider
                </a>
            </div>
        </figcaption>
    </figure></div>";
}
