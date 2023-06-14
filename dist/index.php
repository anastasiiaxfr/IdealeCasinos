<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <?php include './templates/_seo.php'; ?>
    <link rel="stylesheet" href="css/main.css" />
</head>

<body class="page__body">
    <?php include './templates/_preloader.php'; ?>

    <main class="page__wrapper">
        <?php include './templates/_header.php'; ?>

        <div class="page__content">
            <article class="container">
                test xfr

                <h1><?php echo "Hello, World!"; ?></h1>
                <p><?php echo "Today is " . date('Y-m-d'); ?></p>

                <?php include './templates/_btn-to-top.php'; ?>
            </article>
        </div>
    </main>
    <?php include './templates/_footer.php'; ?>
    <?php include './templates/_svg.php'; ?>
</body>

</html>