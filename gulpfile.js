const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const autoprefixer = require('gulp-autoprefixer');
const browserSync = require('browser-sync').create();
const php = require('gulp-connect-php');
const tinypng = require('gulp-tinypng-extended');
const plumber = require('gulp-plumber');

// Minify images
gulp.task('img', function () {
    return gulp
        .src('src/img/**/*.{png,jpg,jpeg}')
        .pipe(plumber())
        .pipe(tinypng({
            key: 'sDvt7LyYkdMk1533VRPWdY6wcfx9HY2X',
            sigFile: 'img/.tinypng-sigs',
            log: true
        }))
        .pipe(gulp.dest('dist/img'))
        .pipe(browserSync.stream());
});

// Copy svg
gulp.task('svg', function () {
    return gulp
        .src('src/img/**/*.svg')
        .pipe(gulp.dest('dist/img'))
        .pipe(browserSync.stream());
});

// Copy favicon
gulp.task('favicon', function () {
    return gulp
        .src('src/fav/*')
        .pipe(gulp.dest('dist/fav'))
        .pipe(browserSync.stream());
});

// Copy fonts
gulp.task('fonts', function () {
    return gulp
        .src('src/fonts/**/*')
        .pipe(gulp.dest('dist/fonts'))
        .pipe(browserSync.stream());
});

// Compile Sass and autoprefix CSS
gulp.task('sass', function () {
    return gulp
        .src('src/sass/**/main.sass')
        .pipe(sass())
        .pipe(autoprefixer())
        .pipe(gulp.dest('dist/css'))
        .pipe(browserSync.stream());
});

// Start a development server with Browsersync
gulp.task('serve', function () {
    php.server({
        base: './dist',
        port: 8000,
        keepalive: true,
    }, function () {
        browserSync.init({
            proxy: '0.0.0.0:8000',
            port: 3000,
            open: true,
            notify: false,
        });
    });

    gulp.watch('src/sass/**/*.sass', gulp.series('sass'));
    gulp.watch('dist/**/*.php').on('change', function () {
        browserSync.reload();
    });
});

// Watch for changes
gulp.task('watch', function () {
    gulp.watch('src/img/*', gulp.series('img'));
    //gulp.watch('src/img/*', gulp.series('svg'));
    gulp.watch('src/fav/*', gulp.series('favicon'));
    gulp.watch('src/fonts/*', gulp.series('fonts'));
});

gulp.task('default', gulp.series('sass', 'img', 'svg', 'favicon', 'fonts', 'serve', 'watch'));