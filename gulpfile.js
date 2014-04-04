// Include gulp and plugins
var gulp = require('gulp');
var rename = require('gulp-rename');
var minifyCSS = require('gulp-minify-css');
var prefix = require('gulp-autoprefixer');

// Prefix CSS
gulp.task('prefix-css', function() {
    gulp.src('./css/style.css')
        .pipe(prefix("last 1 version", "> 1%", "ie 8", "ie 7"))
        .pipe(gulp.dest('./css/'));
});

// Minify CSS
gulp.task('minify-css', function() {
    gulp.src('./css/style.css')
        .pipe(minifyCSS())
        .pipe(rename('style.min.css'))
        .pipe(gulp.dest('./css/'));
});

// Default Task
gulp.task('default', ['prefix-css', 'minify-css']);
