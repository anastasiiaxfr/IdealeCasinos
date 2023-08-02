<?php $blogs = array(
    array("url" => "#", "cat" => "Category", "img" => "../img/blog/blog-1.jpg", "title" => "Americans Expect a Comfortable Retirement Will ", "read" => "5", "date" => "August 13, 2021", "author" => "Terry Williams"),
    array("url" => "#", "cat" => "Category", "img" => "../img/blog/blog-2.jpg", "title" => "Americans Expect a Comfortable Retirement Will Now Cost Them $1.25 MillionThem $1.25 Million", "read" => "5", "date" => "August 13, 2021", "author" => "Terry Williams"),
    array("url" => "#", "cat" => "Category", "img" => "../img/blog/blog-3.jpg", "title" => "Americans Expect a Comfortable Retirement Will MillionThem $1.25 Million", "read" => "5", "date" => "August 13, 2021", "author" => "Terry Williams"),
    array("url" => "#", "cat" => "Category", "img" => "../img/blog/blog-4.jpg", "title" => "Americans Expect a Comfortable Retirement Will Now Cost Them $1.25 MillionThem $1.25 Million", "read" => "5", "date" => "August 13, 2021", "author" => "Terry Williams"),
    array("url" => "#", "cat" => "Category", "img" => "../img/blog/blog-4.jpg", "title" => "Americans Expect a Comfortable Retirement Will Now Cost Them $1.25 MillionThem $1.25 Million", "read" => "5", "date" => "August 13, 2021", "author" => "Terry Williams"),
    array("url" => "#", "cat" => "Category", "img" => "../img/blog/blog-4.jpg", "title" => "Americans Expect a Comfortable Retirement Will Now Cost Them $1.25 MillionThem $1.25 Million", "read" => "5", "date" => "August 13, 2021", "author" => "Terry Williams"),
)
?>
<div>
<?php if (isset($blog_title)) {?>
<hgroup>
    <h2>
        <?php echo $blog_title; ?>
    </h2>
    <svg class="icon" width="20" height="20">
        <use xlink:href="#arr-rt"></use>
    </svg>
</hgroup>
<?php }
;?>

<div class="slider__wrap">
<div class="f-carousel <?php if (isset($blog_class)) {echo $blog_class;}?>">
        <?php foreach ($blogs as $i => $item) {?>
            <?php include '_blog.php';?>
        <?php }?>
    </div>
</div>
</div>