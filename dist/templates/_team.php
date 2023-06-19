<section class="team">
    <h2>
        Our Team
    </h2>

    <?php $chips = array(
    array("name" => "First Name Last Name", "job" => "Occupation", "location" => "Kyiv, Ukraine", "desc" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.", "img" => "../img/team/team-1.jpg", "tw" => "#", "fb" => "#", "ytb" => "#", "im" => "#"),
    array("name" => "First Name Last Name", "job" => "Occupation", "location" => "Kyiv, Ukraine", "desc" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.", "img" => "../img/team/team-2.jpg", "tw" => "#", "fb" => "#", "ytb" => "#", "im" => "#"),
    array("name" => "First Name Last Name", "job" => "Occupation", "location" => "Kyiv, Ukraine", "desc" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.", "img" => "../img/team/team-3.jpg", "tw" => "#", "fb" => "#", "ytb" => "#", "im" => "#"),
    array("name" => "First Name Last Name", "job" => "Occupation", "location" => "Kyiv, Ukraine", "desc" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.", "img" => "../img/team/team-4.jpg", "tw" => "#", "fb" => "#", "ytb" => "#", "im" => "#"),
);?>

    <div class="team__wrap">
        <?php foreach ($chips as $item) {?>
        <figure class="team__item">
            <div class="team__img">
                <img src="<?php echo $item['img']; ?>" alt="<?php echo $item['name']; ?>">
                <div class="team__overlay">
                    <div class="socials">
                        <a href="<?php echo $item['tw']; ?>" class="soc">
                            <svg class="icon" width="24" height="24">
                                <use xlink:href="#tw"></use>
                            </svg>
                        </a>
                        <a href="<?php echo $item['fb']; ?>" class="soc">
                            <svg class="icon" width="24" height="24">
                                <use xlink:href="#fb"></use>
                            </svg>
                        </a>
                        <a href="<?php echo $item['ytb']; ?>" class="soc">
                            <svg class="icon" width="24" height="24">
                                <use xlink:href="#ytb"></use>
                            </svg>
                        </a>
                        <a href="<?php echo $item['im']; ?>" class="soc">
                            <svg class="icon" width="24" height="24">
                                <use xlink:href="#im"></use>
                            </svg>
                        </a>
                    </div>
                </div>

            </div>
            <figcaption class="team__caption">
                <div class="team__name">
                    <?php echo $item['name']; ?>
                </div>
                <div class="team__job">
                    <?php echo $item['job']; ?>
                </div>
                <div class="team__location">
                    <?php echo $item['location']; ?>
                </div>
                <div class="team__description">
                    <?php echo $item['desc']; ?>
                </div>
            </figcaption>
        </figure>
        <?php }?>
    </div>

</section>