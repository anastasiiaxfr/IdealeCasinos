<?php $breadcrumbs = array(
    array("title" => "Home", "url" => "#"),
    array("title" => "Payments", "url" => "#"),
    array("title" => "Payments List", "url" => "#"),
); ?>

<nav class="breadcrumbs">
    <?php foreach ($breadcrumbs as $index => $item) { ?>
        <a href="<?php echo $item['url']; ?>" <?php if ($index === count($breadcrumbs) - 1) echo 'class="active"'; ?>>
            <?php echo $item['title']; ?>
            <svg class="icon" width="10" height="10">
                <use xlink:href="#arr-p-rt"></use>
            </svg>
        </a>
    <?php } ?>
</nav>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": <?php echo json_encode(array_map(function ($index, $item) {
      return [
          "@type" => "ListItem",
          "position" => $index + 1,
          "name" => $item['title'],
          "item" => $item['url'],
      ];
  }, array_keys($breadcrumbs), $breadcrumbs)); ?>
}
</script>