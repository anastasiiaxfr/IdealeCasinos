<?php foreach ($faq as $index => $item) {?>
<figure class="faq">
    <div class="faq__header">
        <b class="faq__title">
            <?php echo $item['title']; ?>
        </b>
        <svg class="icon" width="12" height="12">
            <use xlink:href="#arr-r"></use>
        </svg>
    </div>
    <div class="faq__body">
        <?php echo $item['description']; ?>
    </div>
</figure>
<?php }?>

<script>
    const faq_toggle = document.querySelectorAll('.faq__header');

    faq_toggle.forEach(i => {
        i.addEventListener('click', function () {
            i.querySelector('.icon').classList.toggle('active');
            i.nextElementSibling.classList.toggle('d-block');
        });
    })
</script>

<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [
          <?php foreach ($faq as $index => $item) {?>
          {
            "@type": "Question",
            "name": "<?php echo $item['title']; ?>",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "<?php echo $item['description']; ?>"
            }
          }<?php echo $index < count($faq) - 1 ? ',' : ''; ?>
          <?php }?>
        ]
    }
 </script>