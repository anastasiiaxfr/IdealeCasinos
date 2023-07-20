<footer class="footer">
    <div class="footer__top">
        <div class="container">

            <div class="footer-logo">
                <a href="#" class="logo">
                    <img src="../img/logo.svg" alt="Ideale" width="140" height="32">
                </a>
                <img src="../img/icons/18+.svg" alt="18+" width="97" height="32">
            </div>

            <div class="footer-menu__wrap">
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/_socials.php'; ?>

                <?php
                $data = array(
                    array(
                        "title" => "Kansspelgids",
                        "list" => array(
                            array("item" => "Over Cruks", "url" => "#"),
                            array("item" => "Legale Casinos", "url" => "#"),
                            array("item" => "Kanssepelbelasting", "url" => "#"),
                            array("item" => "Kanssepelautoriteit", "url" => "#"),
                        ),
                    ),
                    array(
                        "title" => "Nuttige informatie",
                        "list" => array(
                            array("item" => "Privacybeleid", "url" => "#"),
                            array("item" => "Algemene Voorwaarden", "url" => "#"),
                            array("item" => "Verantwoord Gokken", "url" => "#"),
                            array("item" => "Over Ons", "url" => "#"),
                            array("item" => "Contactformulier", "url" => "#"),
                        ),
                    ),
                    array(
                        "title" => "Kansspelgids",
                        "list" => array(
                            array("item" => "Over Cruks", "url" => "#"),
                            array("item" => "Legale Casinos", "url" => "#"),
                            array("item" => "Kanssepelbelasting", "url" => "#"),
                            array("item" => "Kanssepelautoriteit", "url" => "#"),
                        ),
                    ),
                    array(
                        "title" => "Nuttige informatie",
                        "list" => array(
                            array("item" => "Privacybeleid", "url" => "#"),
                            array("item" => "Algemene Voorwaarden", "url" => "#"),
                            array("item" => "Verantwoord Gokken", "url" => "#"),
                            array("item" => "Over Ons", "url" => "#"),
                            array("item" => "Contactformulier", "url" => "#"),
                        ),
                    ),
                );

                ?>

                <?php foreach ($data as $item) { ?>
                    <nav class="footer-menu">
                        <div class="footer-menu__title">
                            <?php echo $item['title']; ?>
                        </div>
                        <ul>
                            <?php foreach ($item['list'] as $listItem) { ?>
                                <li>
                                    <a href="<?php echo $listItem['url']; ?>"><?php echo $listItem['item']; ?></a>
                                </li>

                            <?php } ?>
                        </ul>
                    </nav>
                <?php } ?>

            </div>

        </div>
    </div>
    <div class="footer__middle">
        <div class="container">

            <p>
                iDealeCasinos.nl is een onafhankelijke project gecreëerd door casino liefhebbers. We onderzoeken en beoordelen online casinos op basis van strikte voorwaarden. Ons doel de kwaliteit van online gokken ervaring voor onze site bezoekers te verbeteren. We garanderen dat alle onze overzichten zijn professioneel geschreven, onpartijdig en objectief want veilig en betrouwbaar gokken is ons hoofdprioriteit. Op deze website vind je online casino gidsen, overzichten, spelregels en alle belangrijke informatie om bewust en veilig te gokken.
            </p>

            <address>
                Deze website wordt beheerd door Unilead LTD (C 101304) gevestigd op 64, Excalibur, B.Bontadini Straat, Birkirkara BKR 1737, Malta.
            </address>

        </div>
    </div>
    <div class="footer__btm">
        <div class="container">
            <div class="footer__btm-inner">

                <p>
                    Copyright &copy; 2023 Alle Rechten Voorbehouden door
                    Copy
                </p>

                <div class="logos">
                    <img src="../img/logos/dmca.svg" alt="ALT" width="65" height="28">
                    <img src="../img/logos/loket.svg" alt="ALT" width="121" height="16">
                    <img src="../img/logos/ka.svg" alt="ALT" width="62" height="25">
                    <img src="../img/logos/SB2.svg" alt="ALT" width="46" height="41">
                </div>

            </div>
        </div>
    </div>
</footer>
<?php include '_cookie.php'; ?>
<script src="../lib/swiper/swiper-bundle.js"></script>

<script src="../js/main.js"></script>



