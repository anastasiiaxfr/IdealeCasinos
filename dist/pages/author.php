<!DOCTYPE html>
<html lang="en-US">

<head>
    <base href="../">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <?php include '../templates/_seo.php'; ?>
    <link rel="stylesheet" href="css/main.css" />
</head>

<body class="page__body">
    <?php include '../templates/_preloader.php'; ?>

    <main class="page__wrapper">
        <?php include '../templates/_header.php'; ?>

        <article class="page page__inner">
            <div class="container">

                <section>
                    <?php include '../templates/_author.php'; ?>
                </section>

                <?php
                $tabs = array(
                    array("tab" => "All", "url" => "#"),
                    array("tab" => "Free Spins", "url" => "#"),
                    array("tab" => "Zonder Registratie", "url" => "#"),
                ); ?>

                <section class="page__toggles">

                    <nav class="tab__wrap">
                        <button class="tab-default">
                            <svg class="icon" width="15" height="15">
                                <use xlink:href="#filter"></use>
                            </svg>
                            <span>
                                Topics
                            </span>
                        </button>
                        <?php foreach ($tabs as $item) { ?>
                            <button class="tab">
                                <?php echo $item['tab']; ?>
                            </button>
                        <?php } ?>
                    </nav>

                </section>

                <section>
                    <?php include '../templates/_blog-card.php'; ?>
                </section>

                <section>
                    <?php include '../templates/_blog-card.php'; ?>
                </section>

                <section class="page__nav">
                    <?php include '../templates/_btn-show-more.php'; ?>
                    <?php include '../templates/_pagination.php'; ?>
                </section>


            </div>
        </article>

    </main>
    <?php include '../templates/_btn-to-top.php'; ?>
    <?php include '../templates/_footer.php'; ?>
    <?php include '../templates/_svg.php'; ?>


</body>

</html>