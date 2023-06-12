- npm install gulp gulp-connect-php sass gulp-sass gulp-autoprefixer browser-sync gulp-tinypng-extended gulp-plumber --save-dev
- npm start

(for VScode install PHP Extension Pack)

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