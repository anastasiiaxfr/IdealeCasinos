<section class="search">
    <div class="search__inner">

        <form action="/" method="GET" novalidate class="form-search">
            <div class="form-search__field">
                <input type="search" placeholder="Search everything">
                <button class="form-search__btn">
                    <svg class="icon" width="20" height="20">
                        <use xlink:href="#close"></use>
                    </svg>
                </button>
            </div>
        </form>

        <?php
        $tabs = array(
            array("tab" => "Casinos", "url" => "#"),
            array("tab" => "Games", "url" => "#"),
            array("tab" => "Providers", "url" => "#"),
            array("tab" => "Articles", "url" => "#"),
            array("tab" => "Nothing", "url" => "#"),
        ); ?>

        <?php $casinos = array(
            array("title" => "Casino Name1", "img" => "../img/casinos/search-casino-1.png", "url" => "#"),
            array("title" => "Casino Name2", "img" => "../img/casinos/search-casino-1.png", "url" => "#"),
            array("title" => "Casino Name3", "img" => "../img/casinos/search-casino-1.png", "url" => "#"),
            array("title" => "Casino Name4", "img" => "../img/casinos/search-casino-1.png", "url" => "#"),
            array("title" => "Casino Name1", "img" => "../img/casinos/search-casino-1.png", "url" => "#"),
            array("title" => "Casino Name2", "img" => "../img/casinos/search-casino-1.png", "url" => "#"),
            array("title" => "Casino Name3", "img" => "../img/casinos/search-casino-1.png", "url" => "#"),
            array("title" => "Casino Name4", "img" => "../img/casinos/search-casino-1.png", "url" => "#"),
        ); ?>

        <?php $games = array(
            array("title" => "Casino Name1", "img" => "../img/games/search-game-1.jpg", "url" => "#"),
            array("title" => "Casino Name1", "img" => "../img/games/search-game-1.jpg", "url" => "#"),
            array("title" => "Casino Name1", "img" => "../img/games/search-game-1.jpg", "url" => "#"),
            array("title" => "Casino Name1", "img" => "../img/games/search-game-1.jpg", "url" => "#"),
            array("title" => "Casino Name1", "img" => "../img/games/search-game-1.jpg", "url" => "#"),
            array("title" => "Casino Name1", "img" => "../img/games/search-game-1.jpg", "url" => "#"),
            array("title" => "Casino Name1", "img" => "../img/games/search-game-1.jpg", "url" => "#"),
            array("title" => "Casino Name1", "img" => "../img/games/search-game-1.jpg", "url" => "#"),
            array("title" => "Casino Name1", "img" => "../img/games/search-game-1.jpg", "url" => "#"),
            array("title" => "Casino Name1", "img" => "../img/games/search-game-1.jpg", "url" => "#"),
        ); ?>

        <?php $providers = array(
            array("title" => "Quickfire", "url" => "#"),
            array("title" => "Play n go", "url" => "#"),
            array("title" => "Netent", "url" => "#"),
        ); ?>
        <?php $articles = array(
            array("title" => "Americans Expect a Comfortable Retirement Will Now Cost Them $1.25 Million", "url" => "#", "read" => "5 min"),
            array("title" => "Americans Expect a Comfortable Retirement Will Now Cost Them $1.25 Million", "url" => "#", "read" => "5 min"),
            array("title" => "Americans Expect a Comfortable Retirement Will Now Cost Them $1.25 Million", "url" => "#", "read" => "5 min"),
            array("title" => "Americans Expect a Comfortable Retirement Will Now Cost Them $1.25 Million", "url" => "#", "read" => "5 min"),
            array("title" => "Americans Expect a Comfortable Retirement Will Now Cost Them $1.25 Million", "url" => "#", "read" => "5 min"),

        ); ?>
        <div class="mt-4">
            <nav class="tab__wrap">
                <?php foreach ($tabs as $item) { ?>
                    <button class="tab">
                        <?php echo $item['tab']; ?>
                    </button>
                <?php } ?>
            </nav>
            <section class="tab__container">
                <div class="tab__item">
                    <h4>Casinos</h4>

                    <div class="search-casinos">
                        <?php foreach ($casinos as $i => $item) { ?>
                            <a href="<?php echo $item['url']; ?>" class="search-casinos-item">
                                <div class="search-casinos-item__img">
                                    <img src="<?php echo $item['img']; ?>" alt="<?php echo $item['title']; ?>" width="100" height="50">
                                </div>
                                <div class="search-casinos-item__title">
                                    <?php echo $item['title']; ?>
                                </div>
                                <svg class="icon" width="15" height="15">
                                    <use xlink:href="#arr-tr"></use>
                                </svg>
                            </a>
                        <?php } ?>

                    </div>
                </div>
                <div class="tab__item">
                    <h4>Games</h4>
                    <div class="search-games">
                        <?php foreach ($games as $i => $item) { ?>
                            <a href="<?php echo $item['url']; ?>" class="search-games-item">
                                <div class="search-games-item__img">
                                    <img src="<?php echo $item['img']; ?>" alt="<?php echo $item['title']; ?>" width="100" height="50">
                                </div>
                                <div class="search-games-item__title">
                                    <?php echo $item['title']; ?>
                                </div>
                            </a>
                        <?php } ?>
                    </div>
                </div>
                <div class="tab__item">
                    <h4>Providers</h4>
                    <div class="search-providers">
                        <?php foreach ($providers as $i => $item) { ?>
                            <a href="<?php echo $item['url']; ?>" class="search-providers-item">
                                <?php echo $item['title']; ?>
                            </a>
                        <?php } ?>
                    </div>
                </div>
                <div class="tab__item">
                    <h4>Articles</h4>
                    <div class="search-articles">
                        <?php foreach ($articles as $i => $item) { ?>
                            <a href="<?php echo $item['url']; ?>" class="search-articles-item">
                                <div class="search-articles__title">
                                    <?php echo $item['title']; ?>
                                </div>
                                <div class="search-articles__read">
                                    <?php echo $item['read']; ?>
                                </div>
                            </a>
                        <?php } ?>
                    </div>
                </div>
                <div class="tab__item">
                    <div class="search-error">

                        <div class="search-error__box">
                            <div>
                                <svg class="icon" width="48" height="48">
                                    <use xlink:href="#search-error"></use>
                                </svg>
                            </div>
                            <p>
                                Sorry, we didn't find anything
                            </p>
                        </div>

                    </div>
                </div>
            </section>

        </div>
    </div>
</section>

