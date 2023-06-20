<section class="author">
    <div class="author__header">
        <figure class="author__ava">

            <img src="../img/authors/author-1.png" alt="ALT">

        </figure>
        <div class="author__inner">
            <div class="author__title">
                <span>
                    First Name Last Name
                </span>
                <svg class="icon" width="24" height="24">
                    <use xlink:href="#checked"></use>
                </svg>
            </div>
            <div class="author__job">
                Occupation
            </div>
        </div>
        <button class="author__btn">
            See All Articles
        </button>
    </div>
    <div class="author__content">
        <p>
            Carlos has a BA in Hispanic Studies from the Pontificia Universidad Católica of PR. He’s finishing his MA in
            Linguistics, focusing on sociolinguistics.
        </p>

        <p>
            <b>
                Last Articles
            </b>
        </p>
        <nav class="author__posts">
            <p>
                <a href="#">
                    7 Best Cash Back Credit Cards of September 2022
                </a>
            </p>
            <p>
                <a href="#">
                    6 Best Credit Cards of September 2022
                </a>
            </p>
        </nav>

    </div>
    <div class="author__footer">
        <?php include '../templates/_socials.php';?>

        <button class="author__show-more">
            See All Articles
        </button>
    </div>
</section>

<script>
    const show_more = document.querySelector('.author__show-more');
    const content = document.querySelector('.author__content');

    show_more.addEventListener('click', function(){
        content.classList.toggle('active');
        this.textContent = content.classList.contains('active') ? 'Show Less' : 'See All Articles';
    });
</script>