
var gulp = require('gulp');  
var sass = require('gulp-sass');  
var browserSync = require('browser-sync');
var concatCss = require('gulp-concat-css');
var php = require('gulp-connect-php');



gulp.task('sass', function () {  
    gulp.src('assets/scss/*.scss')
        .pipe(sass({includePaths: ['scss']}))
        .pipe(gulp.dest('assets/css/sorces'));
});

gulp.task('cssConcat', function () {
  return gulp.src('assets/css/sorces/*.css')
    .pipe(concatCss("bundle.css"))
    .pipe(gulp.dest('assets/css/'));
});

gulp.task('php', function() {
    php.server({  port: 8010, keepalive: true});
});
gulp.task('browser-sync',['php'], function() {
    browserSync({
        proxy: '127.0.0.1:8010',
        port: 8080,
        open: true,
        notify: false
    });
});


gulp.task('default', ['sass', 'browser-sync', 'cssConcat'], function () {  
    
    gulp.watch("assets/scss/*.scss", ['sass']);
    gulp.watch("assets/css/sorces/*.css", ['cssConcat']);
    gulp.watch(['*.php'], browserSync.reload);
     
});