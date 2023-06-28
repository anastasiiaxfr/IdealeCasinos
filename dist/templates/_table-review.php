<?php
$rating = "5.0";
$rt = '<button class="rating">
<svg width="15" height="15">
    <use xlink:href="#star"></use>
</svg>
<b>' . $rating . '</b>
</button>';

$table_review = array(
    array('col1' => 'Casino', 'col2' => '<a href="#" class="table-review__logo">
    <img src="../img/casinos/review-casinos/casino-1.png"> <span>Holland Casino NL</span></a>', 'col3' => '<a href="#" class="table-review__logo">
    <img src="../img/casinos/review-casinos/casino-2.png"> <span>Kansino</span></a>', 'col4' => '<a href="#" class="table-review__logo">
    <img src="../img/casinos/review-casinos/casino-3.png"> <span>777.nl</span></a>', 'col5' => '<a href="#" class="table-review__logo">
    <img src="../img/casinos/review-casinos/casino-4.png"> <span>Circus</span></a>', ),
    array('col1' => 'Rating', 'col2' => $rt, 'col3' => $rt, 'col4' => $rt, 'col5' => $rt),
    array('col1' => 'Bonus', 'col2' => '<b class="table-review__title">250% up to NZ$ 480 + 80 FS</b>', 'col3' => '<b class="table-review__title">250% up to NZ$ 480 + 80 FS</b>', 'col4' => '<b class="table-review__title">250% up to NZ$ 480 + 80 FS</b>', 'col5' => '<b class="table-review__title">250% up to NZ$ 480 + 80 FS</b>'),
    array('col1' => 'Min Deposit', 'col2' => '5$', 'col3' => '5$', 'col4' => '5$', 'col5' => '5$'),
    array('col1' => 'Min Withdrawal', 'col2' => '25$', 'col3' => '25$', 'col4' => '25$', 'col5' => '25$'),
    array('col1' => 'Payment  Methods', 'col2' => '<b class="pm">
    <svg class="icon" width="40" height="20">
    <use xlink:href="#visa"></use>
    </svg>
    <svg class="icon" width="40" height="20">
    <use xlink:href="#pay"></use>
    </svg>
    <svg class="icon" width="40" height="20">
    <use xlink:href="#mc"></use>
    </svg>
    <svg class="icon" width="40" height="20">
    <use xlink:href="#visa"></use>
    </svg>
    </b>', 'col3' => '<b class="pm">
    <svg class="icon" width="40" height="20">
    <use xlink:href="#visa"></use>
    </svg>
    <svg class="icon" width="40" height="20">
    <use xlink:href="#pay"></use>
    </svg>
    <svg class="icon" width="40" height="20">
    <use xlink:href="#mc"></use>
    </svg>
    <svg class="icon" width="40" height="20">
    <use xlink:href="#visa"></use>
    </svg>
    </b>', 'col4' => '<b class="pm">
    <svg class="icon" width="40" height="20">
    <use xlink:href="#visa"></use>
    </svg>
    <svg class="icon" width="40" height="20">
    <use xlink:href="#pay"></use>
    </svg>
    <svg class="icon" width="40" height="20">
    <use xlink:href="#mc"></use>
    </svg>
    <svg class="icon" width="40" height="20">
    <use xlink:href="#visa"></use>
    </svg>
    </b>', 'col5' => '<b class="pm">
    <svg class="icon" width="40" height="20">
    <use xlink:href="#visa"></use>
    </svg>
    <svg class="icon" width="40" height="20">
    <use xlink:href="#pay"></use>
    </svg>
    <svg class="icon" width="40" height="20">
    <use xlink:href="#mc"></use>
    </svg>
    <svg class="icon" width="40" height="20">
    <use xlink:href="#visa"></use>
    </svg>
    </b>', ),
    array('col1' => 'Currency Suport', 'col2' => '<a href="#">License Name</a> <a href="#">License Name2</a>', 'col3' => '<a href="#">License Name</a> <a href="#">License Name2</a>', 'col4' => '<a href="#">License Name</a> <a href="#">License Name2</a>', 'col5' => '<a href="#">License Name</a> <a href="#">License Name2</a>'),
    array('col1' => 'Currency Suport', 'col2' => 'EUR, UAH, USD, <a href="#" class="table-review__more">+56 more</a>', 'col3' => 'EUR, UAH, USD <a href="#" class="table-review__more">+56 more</a>', 'col4' => 'EUR, UAH, USD <a href="#" class="table-review__more">+56 more</a>', 'col5' => 'EUR, UAH, USD <a href="#">+56 more</a>'),
    array('col1' => 'Visit', 'col2' => '<a href="#" class="table-review__btn">Claim Bonus</a>', 'col3' => '<a href="#" class="table-review__btn">Claim Bonus</a>', 'col4' => '<a href="#" class="table-review__btn">Claim Bonus</a>', 'col5' => '<a href="#" class="table-review__btn">Claim Bonus</a>'),
    )
;?>

<table class="table-review">
    <tbody>
    <?php foreach ($table_review as $i => $item) {?>
        <tr>
            <?php foreach ($item as $col => $value) {?>
                <td><?php echo $value; ?></td>
            <?php }?>
        </tr>
    <?php }?>
    </tbody>
</table>
