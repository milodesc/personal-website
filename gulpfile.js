// Include gulp and plugins
var gulp = require('gulp');
var rename = require('gulp-rename');
var minifyCSS = require('gulp-minify-css');
var prefix = require('gulp-autoprefixer');

// Prefix and Minify CSS
gulp.task('styles', function() {
    gulp.src('./css/style.css')
        .pipe(prefix("last 2 versions", "> 1%", "ie 8", "ie 7"))
        .pipe(gulp.dest('./css/'))
        .pipe(minifyCSS())
        .pipe(rename('style.min.css'))
        .pipe(gulp.dest('./css/'));
});

// Watch
gulp.task('watch', function() {
    gulp.watch('css/style.css', ['styles']);
});

// Default Task
gulp.task('default', null, function() {
    gulp.start('watch');
});
