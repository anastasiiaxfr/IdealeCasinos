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

                <section class="blog-demo">
                    <a class="blog-demo__inner" href="#">
                        <div class="blog-demo__img">
                            <img src="../img/blog/top/blog-top.jpg" alt="ALT" width="600" height="600">
                        
                            <div class="blog-demo__overlay">
                            <div class="blog-demo__overlay-inner">
                            <div class="blog-demo__overlay-header">
                                    <div class="blog-demo__cat">
                                        Category
                                    </div>
                                    <div class="blog-demo__time">
                                        AUGust 13, 2021
                                    </div>
                                </div>
                                <div class="blog-demo__overlay-title">
                                    Online Slots Guide – Slot Machines Explained
                                </div>
                                <div class="blog-demo__overlay-footer">
                                    <div class="blog-demo-author">
                                        <div class="blog-demo-author__img">
                                            <img src="../img/authors/author-3.png" alt="ALT" width="40" height="40">
                                        </div>
                                        <span>
                                            By Terry Williams
                                        </span>
                                    </div>
                                    <div>
                                    <svg class="icon" width="20" height="20">
                                        <use xlink:href="#clock"></use>
                                    </svg>
                                        <span>5 mins</span>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </a>


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
                    <?php include '../templates/_blog.php'; ?>
                </section>

                <section>
                    <?php $blog_title = "Editor Choise"; ?>
                    <?php include '../templates/_editor.php'; ?>
                </section>

                <section>
                    <?php $blog_title = "Category Name"; ?>
                    <?php include '../templates/_blog.php'; ?>
                </section>


            </div>
        </article>

    </main>
    <?php include '../templates/_btn-to-top.php'; ?>
    <?php include '../templates/_footer.php'; ?>
    <?php include '../templates/_svg.php'; ?>


</body>

</html>