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

        <article class="page page-with-breadcrumbs">

            <div class="container">

                <section class="blog-demo__wrapper">
                    <?php include '../templates/_blog-demo.php'; ?>

                    <?php $news = array(
                        array("title" => "Responsible gambling and help for problem gamblers", "url" => "#", "read" => "5 min", "published" => "August 13, 2021"),
                        array("title" => "Responsible gambling and help for problem gamblers", "url" => "#", "read" => "5 min", "published" => "August 13, 2021"),
                        array("title" => "Responsible gambling and help for problem gamblers", "url" => "#", "read" => "5 min", "published" => "August 13, 2021"),
                        array("title" => "Responsible gambling and help for problem gamblers", "url" => "#", "read" => "5 min", "published" => "August 13, 2021"),
                    ); ?>


                    <div class="blog-demo__sidebar">
                        <div class="blog-demo__title">
                            🔥 TRENDING
                        </div>
                        <?php foreach ($news as $i => $item) { ?>
                            <a href="<?php echo $item['url']; ?>" class="blog-demo__item">
                                <div class="blog-demo__item-title">
                                    <?php echo $item['title']; ?>
                                </div>
                                <div class="blog-demo__item-meta">
                                    <div class="blog-demo__date">
                                        <svg class="icon" width="20" height="20">
                                            <use xlink:href="#calendar"></use>
                                        </svg>
                                        <?php echo $item['published']; ?>
                                    </div>
                                    <div class="blog-demo__read">
                                        <svg class="icon" width="20" height="20">
                                            <use xlink:href="#clock"></use>
                                        </svg>
                                        <?php echo $item['read']; ?>
                                    </div>
                                </div>
                            </a>
                        <?php } ?>
                    </div>
                </section>


                <section>
                    <?php $blog_title = "Category Name"; ?>
                    <?php $blog_class = "slider-3"; ?>
                    <?php include '../templates/_blogs.php'; ?>
                </section>

                <section>
                    <?php $blog_title = "Editor Choise"; ?>
                    <?php $blog_class = "slider-4"; ?>
                    <?php include '../templates/_blogs.php'; ?> 
                </section>

                <section>
                    <?php $blog_title = "Category Name"; ?>
                    <?php $blog_class = "slider-5"; ?>
                    <?php include '../templates/_blogs.php'; ?>
                </section>


            </div>
        </article>

    </main>
    <?php include '../templates/_btn-to-top.php'; ?>
    <?php include '../templates/_footer.php'; ?>
    <?php include '../templates/_svg.php'; ?>

    <script>
        const slider_options = {
            infinite: false,
        }
        const slider_3 = document.querySelector(".slider-3");
        const slider_4 = document.querySelector(".slider-4");
        const slider_5 = document.querySelector(".slider-5");

        new Carousel(slider_3, slider_options);
        new Carousel(slider_4, slider_options);
        new Carousel(slider_5, slider_options);

    </script>
</body>
</html>