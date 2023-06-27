<?php
$title = "Ideale TITLE";
$description = "Ideale DESCRIPTION";
$author = "Ideale Team";
$url = "https://ideale-production.up.railway.app/";
$img = "fav/og.jpg";
$site_name = "Ideale";
?>
<title><?php echo $title ?></title>
<meta name="description" content="<?php echo $description ?>" />
<meta name="author" content="<?php echo $author ?>" />

<!-- canonical link tag -->
<link rel="canonical" href="<?php echo $url ?>" />

<!-- Facebook and Twitter integration -->

<!-- FACESPACE -->
<meta property="og:title" content="<?php echo $title ?>" />
<meta property="og:description" content="<?php echo $description ?>" />

<meta property="og:image:height" content="600" />
<meta property="og:image:width" content="314" />
<meta property="og:image" content="<?php $_SERVER['DOCUMENT_ROOT']?>/<?php echo $img ?>" />

<meta property="fb:app_id" content="..." />
<meta property="fb:admins" content="<?php echo $author ?>" />

<meta property="og:type" content="website" />
<meta property="og:site_name" content="<?php echo $site_name ?>" />
<meta property="og:url" content="<?php echo $url ?>" />

<!-- THE TWITTER MACHINE -->
<meta name="twitter:card" content="summary" />
<meta name="twitter:url" content="<?php echo $url ?>" />
<meta name="twitter:site" content="<?php echo $site_name ?>" />
<meta name="twitter:creator" content="<?php echo $author ?>" />
<meta name="twitter:title" content="<?php echo $title ?>" />
<meta name="twitter:description" content="<?php echo $description ?>" />
<meta name="twitter:image" content="<?php $_SERVER['DOCUMENT_ROOT']?>/<?php echo $img ?>" />

<!-- G++ -->
<meta itemprop="name" content="<?php echo $title ?>" />
<meta itemprop="description" content="<?php echo $description ?>" />
<meta itemprop="image" content="<?php $_SERVER['DOCUMENT_ROOT']?>/<?php echo $img ?>" />

<link rel="apple-touch-icon" sizes="180x180" href="<?php $_SERVER['DOCUMENT_ROOT']?>/fav/apple-touch-icon.png" />

<link rel="mask-icon" href="<?php $_SERVER['DOCUMENT_ROOT']?>/fav/safari-pinned-tab.svg" color="#5bbad5" />

<link href="<?php $_SERVER['DOCUMENT_ROOT']?>/fav/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<link href="<?php $_SERVER['DOCUMENT_ROOT']?>/fav/favicon.ico" rel="icon" type="image/x-icon" />

<!--Favicon-->
<link rel="shortcut icon" href="<?php $_SERVER['DOCUMENT_ROOT']?>/fav/favicon.png" type="image/x-icon" />
<link rel="icon" href="<?php $_SERVER['DOCUMENT_ROOT']?>/fav/favicon.png" type="image/x-icon" />

<link rel="apple-touch-icon" sizes="144x144" href="<?php $_SERVER['DOCUMENT_ROOT']?>/fav/apple-touch-icon.png" />
<link rel="icon" type="image/png" sizes="32x32" href="<?php $_SERVER['DOCUMENT_ROOT']?>/fav/favicon-32x32.png" />
<link rel="icon" type="image/png" sizes="16x16" href="<?php $_SERVER['DOCUMENT_ROOT']?>/fav/favicon-16x16.png" />
<link rel="mask-icon" href="<?php $_SERVER['DOCUMENT_ROOT']?>/fav/safari-pinned-tab.svg" color="#4B50C8" />

<link rel="manifest" href="<?php $_SERVER['DOCUMENT_ROOT']?>/fav/site.webmanifest" />
<link rel="mask-icon" href="<?php $_SERVER['DOCUMENT_ROOT']?>/fav/safari-pinned-tab.svg" color="#4B50C8" />
<meta name="msapplication-TileColor" content="#4b50c8" />
<meta name="theme-color" content="#4B50C8" />
<meta name="msapplication-config" content="<?php $_SERVER['DOCUMENT_ROOT']?>/fav/browserconfig.xml" />

<script async type="application/ld+json">
  {
    "@context": "http://schema.org/",
    "@type": "Organization",
    "name": "Ideale",
    "brand": "Ideale",
    "alternateName": "Ideale",
    "url": "https://ideale-production.up.railway.app/",
    "logo": "https://ideale-production.up.railway.app/img/logo.svg",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "64, Excalibur, B.Bontadini Street",
      "addressLocality": "Birkirkara",
      "postalCode": "BKR 1737",
      "addressCountry": "Malta"
    },
    "contactPoint": [
      {
        "@type": "ContactPoint",
        "telephone": "08003701503",
        "email": "office@unilead.com",
        "contactType": "customer support",
        "areaServed": "UK",
        "availableLanguage": ["English"]
      }
    ],
    "sameAs": [
      "https://nl.pinterest.com/idealecasinos18/",
      "https://twitter.com/idealecasinos",
      "https://www.youtube.com/channel/UCq6qQnUCxme6aeJJI9ZKkOw"
    ]
  }
</script>


