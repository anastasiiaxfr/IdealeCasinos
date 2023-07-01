<?php $blogs = array(
    array("url" => "#", "cat" => "Category", "img" => "../img/blog/blog-1.jpg", "title" => "Americans Expect a Comfortable Retirement Will ", "read" => "5", "date" => "August 13, 2021", "author" => "Terry Williams"),
    array("url" => "#", "cat" => "Category", "img" => "../img/blog/blog-2.jpg", "title" => "Americans Expect a Comfortable Retirement Will Now Cost Them $1.25 MillionThem $1.25 Million", "read" => "5", "date" => "", "author" => "Terry Williams"),
    array("url" => "#", "cat" => "Category", "img" => "../img/blog/blog-3.jpg", "title" => "Americans Expect a Comfortable Retirement Will MillionThem $1.25 Million", "read" => "5", "date" => "", "author" => "Terry Williams"),
    array("url" => "#", "cat" => "Category", "img" => "../img/blog/blog-4.jpg", "title" => "Americans Expect a Comfortable Retirement Will Now Cost Them $1.25 MillionThem $1.25 Million", "read" => "5", "date" => "", "author" => "Terry Williams"),
)
?>
<div>
<hgroup>
    <h2>
        <?php echo $blog_title; ?>
    </h2>
    <svg class="icon" width="20" height="20">
        <use xlink:href="#arr-rt"></use>
    </svg>
</hgroup>
<div class="blog__wrap swiper swiper-editor-choise">
    <div class="swiper-wrapper">
        <?php foreach ($blogs as $i => $item) { ?>
            <a class="blog swiper-slide" href="<?php echo $item['url']; ?>">

                <div class="blog__img">
                    <img src="<?php echo $item['img']; ?>" alt="<?php echo $item['cat']; ?>" width="300" height="150">
                    <div class="blog__img-overlay">
                        <button class="blog__cat">
                            <?php echo $item['cat']; ?>
                        </button>
                    </div>
                </div>
                <div class="blog__container">
                    <div class="blog__meta">
                        <div class="blog__meta-date">
                            <svg class="icon" width="20" height="20">
                                <use xlink:href="#calendar"></use>
                            </svg>
                            <span><?php echo $item['date']; ?></span>
                        </div>
                        <div class="blog__meta-read">
                            <svg class="icon" width="20" height="20">
                                <use xlink:href="#clock"></use>
                            </svg>
                            <span><?php echo $item['read']; ?>read</span>
                        </div>
                    </div>
                    <div class="blog__content">
                        <?php echo $item['title']; ?>
                    </div>
                    <div class="blog__footer">
                        <div class="blog__auth">
                            <div class="blog__auth-ava">
                                <img src="../img/other/ava.png" alt="ALT" width="50" height="50">
                            </div>
                            <div class="blog__auth-name">
                                By <?php echo $item['author']; ?>
                            </div>
                        </div>
                    </div>

                </div>
            </a>
        <?php } ?>
    </div>
    </div>
</div>
