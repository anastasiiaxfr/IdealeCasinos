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

        <div class="breadcrumbs__wrap">
            <div class="container">
                <?php include '../templates/_breadcrumbs.php'; ?>
            </div>
        </div>

        <article class="page">
            <div class="container">

                <h1 class="h2">
                    Category Name
                </h1>

                <section>
                    <?php include '../templates/_blog-card.php'; ?>
                </section>

                <section>
                    <?php include '../templates/_blog-card.php'; ?>
                </section>

                <section class="page__nav">
                    <div class="m-0">
                        <?php include '../templates/_btn-show-more.php'; ?>
                    </div>
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