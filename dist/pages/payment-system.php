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

        <?php
        $title = "Payment System";
        $sub_title = 'Hoe maak je een storting in online casino iDEAL?Hoe maak je een storting in online casino iDEAL?';
        $author = 'Barry Bridges';
        $updated = 'September 8, 2022';
        $rating = '5.0';
        ?>

        <?php include '../templates/_hero.php'; ?>

        <article class="page page__container">
            <div class="container">

                <div class="page__main">
                    <div class="page__data">

                        <section>
                            <?php include '../templates/_casino-row.php'; ?>
                        </section>

                        <section>
                            <h2>
                                Similar Payment Options
                            </h2>

                            <?php $payments = array(
                            array("title" => "Neteller", "url" => "#", "img" => "../img/payments/payment-1.png", "description" => "Americans Expect a Comfortable Retirement Will Now Cost Them $1.25 Million", "btn" => "Neteller",),
                            array("title" => "Skrill", "url" => "#", "img" => "../img/payments/payment-2.png", "description" => "Americans Expect a Comfortable Retirement Will Now Cost Them $1.25 Million", "btn" => "Skrill",),
                            array("title" => "Visa", "url" => "#", "img" => "../img/payments/payment-3.png", "description" => "Americans Expect a Comfortable Retirement Will Now Cost Them $1.25 Million", "btn" => "Visa",),
                            array("title" => "Mastercard", "url" => "#", "img" => "../img/payments/payment-4.png", "description" => "Americans Expect a Comfortable Retirement Will Now Cost Them $1.25 Million", "btn" => "Mastercard",),
                            );?>

                            <?php include '../templates/_payment.php'; ?>
                        </section>    

                        <section>
                            <h2>
                                Text Block
                            </h2>
                            <p>
                                Red Ventures (includes “us,” “we,” or “our”) is a portfolio of brands and digital platforms
                                (such as mobile and/or TV applications) that connect people with information to help make some
                                of life’s most important decisions. Some examples of Red Ventures’ brands are Allconnect,
                                Bankrate, CNET, MyMove, Online MBA, and The Points Guy. For the purposes of this Privacy Policy,
                                the websites, apps, and products provided by Red Ventures will be referred to as the “Services.”
                                Certain Red Ventures Services have different privacy policies (such as our Healthline Media
                                Sites and Services in Brazil), you should check each Service for its specific policy before use.
                            </p>
                            <p>
                                This Privacy Policy describes the type of personal information that we may collect for our own
                                purposes; how we use, protect, and share that information; and the choices that you have. By
                                using the Services, you acknowledge the information collection practices and purposes outlined
                                in this Privacy Policy. Any capitalized terms used, but not defined, in this Privacy Policy have
                                the meanings provided in the Terms of Use of the applicable Services.
                            </p>
                            <p>
                                In some circumstances, a Red Ventures company may receive or process Personal Information on
                                behalf of a client. In those situations, the privacy policy of the client will apply.
                            </p>
                        </section>
                        <?php include '../templates/_author.php'; ?>
                    </div>

                    <aside class="page__sidebar">
                        <?php include '../templates/_sidebar.php'; ?>
                    </aside>
                </div>

            </div>
        </article>

    </main>
    <?php include '../templates/_btn-to-top.php'; ?>
    <?php include '../templates/_footer.php'; ?>
    <?php include '../templates/_svg.php'; ?>

 
</body>
</html>