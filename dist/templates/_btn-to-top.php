<button class="btn__top" title="to top">
  <svg class="icon" width="20" height="20">
    <use xlink:href="#arr-up"></use>
  </svg>
</button>

<script>
  // To Top Btn
  const scrollToTopBtn = document.querySelector(".btn__top");
  const rootElement = document.documentElement;

  function scrollToTop() {
    // Scroll to top logic
    rootElement.scrollTo({
      top: 0,
      behavior: "smooth"
    })
  }
  scrollToTopBtn.addEventListener("click", scrollToTop)
</script>

