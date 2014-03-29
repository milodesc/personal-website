// Include gulp and plugins
var gulp = require('gulp');
var rename = require('gulp-rename');
var minifyCSS = require('gulp-minify-css');

// Minify CSS
gulp.task('minify-css', function() {
    gulp.src('./css/style.css')
        .pipe(minifyCSS())
        .pipe(rename('style.min.css'))
        .pipe(gulp.dest('./css/'));
});

// Watch Files For Changes
gulp.task('watch', function() {
    gulp.watch('css/style.css', ['minify-css']);
});

// Default Task
gulp.task('default', ['minify-css', 'watch']);
