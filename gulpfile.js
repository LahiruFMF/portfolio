var gulp = require('gulp'),
    minifyCSS = require('gulp-minify-css'),
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify'),
    prefix = require('gulp-autoprefixer'),
    fs = require('fs'),
    sass = require('gulp-sass');

// Minifies JS
gulp.task('js', function(){
    return gulp.src('dist/js/*.js')
        .pipe(uglify())
        .pipe(gulp.dest('public/js'))
});

// SCSS Version
gulp.task('styles', function(){
return gulp.src('dev/scss/*.scss')
.pipe(sass())
.pipe(concat('main.css'))
.pipe(minifyCSS())
.pipe(gulp.dest('public/css'))
});

gulp.task('write', function(cb){
    var k =  Math.random().toString(36).substr(2, 9);
    fs.writeFile('version', k, cb);
});



gulp.task('default', function () {
    gulp.run('styles')
    gulp.run('js')
    gulp.run('write')
    // gulp.watch('dev/sass/*.sass', function(){
    //     gulp.run('styles')
    // })
});