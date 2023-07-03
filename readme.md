- npm install gulp gulp-connect-php sass gulp-sass gulp-autoprefixer browser-sync gulp-tinypng-extended gulp-plumber gulp.spritesmith --save-dev
- npm start

(for VScode install PHP Extension Pack and start php -S localhost:8000 -t dist)


---

### Only Sass
1. 4 spaces or 1 tab
2. For all fonts element use mixin, like:
   ``` 
    +ft(40, 60, 400, $ffHeading)
    +ft(14, 14*1.3, 400, $ffText)
    +ft(40, 60, 400)
    ```
3. For all media queries use mixin, like:
   ```
   +maw(480)
   +miw($sm) - without px (do no't use this rem, em, vw, % etc)
   ```
4. For theme use mixin:
   ```
    +theme(dark)
    +theme(white)
    ```
5. For flexbox use mixin:
   ```
   +flex(flex, align-items-value [not required], justify-content-value [not required], flex-wrap-value [not required], flex-direction-value [not required])
   +flex(inline-flex, center, flex-start, wrap) 
   ```
6. For position use mixin, like:
   ```
   +ps(absolute, (t, 0), (l, 0))
   ```


---

/

/pages/landing-page.php

/pages/casino-review.php

/pages/bonus-landing.php

/pages/game-landing.php

/pages/game-review.php

/pages/game-type-landing.php

/pages/game-type-landing-sidebar.php

/pages/payment-system.php

/pages/payment-system-sidebar.php

/pages/provider-landing.php

/pages/info-page.php

/pages/blog.php

/pages/blog-single.php

/pages/category.php

/pages/author.php

/pages/sitemap.php

/pages/404.php

/pages/501.php

