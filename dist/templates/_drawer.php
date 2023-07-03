<nav class="drawer__wrap">
    <ul class="drawer">
        <?php foreach ($menu as $item) { ?>
            <li class="drawer-menu__item">
                <a href="<?php echo $item['url']; ?>" class="drawer-menu__link">

                    <?php if (isset($item['icon'])) { ?>
                        <svg class="drawer-menu__icon" width="20" height="20">
                            <use xlink:href="#<?php echo $item['icon']; ?>"></use>
                        </svg>
                    <?php } ?>

                    <span> <?php echo $item['link']; ?> </span>
                    <?php if (isset($item['sub'])) { ?>
                        <svg class="drawer-menu__toggle" width="10" height="10">
                            <use xlink:href="#arr-btm"></use>
                        </svg>
                    <?php }; ?>
                </a>

                <?php if (isset($item['sub'])) { ?>
                    <nav class="drawer-menu__submenu">

                        <?php foreach ($item['sub'] as $subItem) { ?>
                            <ul>
                                <li>
                                    <a href="<?php echo $subItem['url']; ?>" class="drawer-menu__submenu-title">
                                        <?php echo $subItem['link']; ?>
                                    </a>
                                </li>
                            </ul>
                        <?php } ?>
                    </nav>
                <?php } ?>
            </li>
        <?php } ?>
    </ul>
</nav>