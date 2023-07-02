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
        <div class="breadcrumbs__wrap breadcrumbs-dark">
            <div class="container">
                <?php include '../templates/_breadcrumbs.php'; ?>
            </div>
        </div>

            <section class="page__hero default">
                <div class="container">
                    <?php include '../templates/_game-demo.php'; ?>
                </div>
            </section>

            <article class="page page__container">
            <div class="container">

                <div class="page__main">
                    <div class="page__data">
                        <section class="">
                            <h2>
                                Top Casinos to play Hearts Desire
                            </h2>
                            <p>
                                Our experts reviewed over 4,000 online casino sites and picked the best ones. 
                            </p>
                            <?php include '../templates/_casino-row.php'; ?>

                            <?php include '../templates/_faq.php'; ?>
                        </section>
                        <section class="page__slider"> 

                        </section>
                    </div>

                    <aside class="page__sidebar">
                        <?php $active = true; ?>
                        <?php include '../templates/_sidebar.php'; ?>
                    </aside>
                </div>

                <section class="page__slider">
                    <div>
                        <?php $slider_title = "Similar Games You Might Like"; ?>
                        <?php $slider_class = "slider-5"; ?>
                        <?php include '../templates/_games.php'; ?>
                    </div>
                    <div>
                        <?php $slider_title = "Games by Provider"; ?>
                        <?php $slider_class = "slider-5"; ?>
                        <?php include '../templates/_games.php'; ?>
                    </div>
                </section>

            </div>
        </article>

    </main>
    <?php include '../templates/_btn-to-top.php'; ?>
    <?php include '../templates/_footer.php'; ?>
    <?php include '../templates/_svg.php'; ?>


</body>

</html>