<div class="review__header">
    <div class="review__title">
        Player Reviews 🎰
    </div>

    <?php
    $select = array(
        array("title" => "This Year", "value" => "default"),
        array("title" => "2023", "value" => "2023"),
        array("title" => "2022", "value" => "2022"),
    );
    ?>

    <?php include '../templates/_select.php'; ?>
</div>

<div class="review-stat">
    <div>
        <div class="review-stat__title">
            Total Reviews
        </div>
        <div class="review-stat__val">
            10 k
        </div>
        <div class="review-stat__note">
            Total Reviews this Year
        </div>
    </div>
    <div>
        <div class="review-stat__title">
            Avarage Rating
        </div>
        <div class="review-stat__val">
            <span>
                <svg class="icon" width="15" height="15">
                    <use xlink:href="#star"></use>
                </svg>
                <svg class="icon" width="15" height="15">
                    <use xlink:href="#star"></use>
                </svg>
                <svg class="icon" width="15" height="15">
                    <use xlink:href="#star"></use>
                </svg>
                <svg class="icon" width="15" height="15">
                    <use xlink:href="#star"></use>
                </svg>
                <svg class="icon" width="15" height="15">
                    <use xlink:href="#star"></use>
                </svg>
            </span>
            <b>4.0</b>
        </div>
        <div class="review-stat__note">
            Avarage Rating this Year
        </div>
    </div>
    <div>

        <table class="stat">
            <tr>
                <td>
                    <svg class="icon" width="15" height="15">
                        <use xlink:href="#star"></use>
                    </svg>
                </td>
                <td>
                    5
                </td>
                <td>
                    <input type="range" min="1" max="100" value="50" class="slider">
                </td>
                <td>
                    2k
                </td>
            </tr>
            <tr>
                <td>
                    <svg class="icon" width="15" height="15">
                        <use xlink:href="#star"></use>
                    </svg>
                </td>
                <td>
                    4
                </td>
                <td>
                    <input type="range" min="1" max="100" value="50" class="slider">

                </td>
                <td>
                    2k
                </td>
            </tr>
            <tr>
                <td>
                    <svg class="icon" width="15" height="15">
                        <use xlink:href="#star"></use>
                    </svg>
                </td>
                <td>
                    3
                </td>
                <td>
                    <input type="range" min="1" max="100" value="50" class="slider">

                </td>
                <td>
                    2k
                </td>
            </tr>
            <tr>
                <td>
                    <svg class="icon" width="15" height="15">
                        <use xlink:href="#star"></use>
                    </svg>
                </td>
                <td>
                    2
                </td>
                <td>
                    <input type="range" min="1" max="100" value="50" class="slider">

                </td>
                <td>
                    2k
                </td>
            </tr>
            <tr>
                <td>
                    <svg class="icon" width="15" height="15">
                        <use xlink:href="#star"></use>
                    </svg>
                </td>
                <td>
                    1
                </td>
                <td>
                    <input type="range" min="1" max="100" value="50" class="slider">

                </td>
                <td>
                    2k
                </td>
            </tr>
        </table>
    </div>
</div>

<div class="review__footer">
<?php
    $select = array(
        array("title" => "Sort By", "value" => "Sort By"),
        array("title" => "ASC", "value" => "ASC"),
        array("title" => "DESC", "value" => "DESC"),
    );
    ?>

    <?php include '../templates/_select.php'; ?>
    <button class="btn-main">
        Write A Review
    </button>
</div>



<?php include '../templates/_review-form.php'; ?>
<?php include '../templates/_review-comments.php'; ?>