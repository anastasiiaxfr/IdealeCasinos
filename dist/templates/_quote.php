<div class="cite">
    <div class="container">

        <div class="cite__wrap">
            <svg class="icon" width="40" height="40">
                <use xlink:href="#quote"></use>
            </svg>
            <div class="cite__title">
                <?php echo $cite['cite']; ?>
            </div>

            <div class="cite__auth">
                <div class="cite__auth-img">
                    <img src="<?php echo $cite['ava']; ?>" alt="<?php echo $cite['author']; ?>">
                </div>
                <div class="cite__auth-text">
                    <p><b><?php echo $cite['author']; ?></b></p>
                    <p><?php echo $cite['job']; ?></p>
                </div>
            </div>
            
        </div>

    </div>
</div>