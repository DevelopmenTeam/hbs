'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');
var notify = require('gulp-notify');
var uglify = require('gulp-uglify');
var concat  = require('gulp-concat');

gulp.task('sass', function () {
  return gulp.src('./public/assets/sass/**/*.scss')
    .pipe(sass())
    .pipe(gulp.dest('./public/css'))
    .pipe(notify("El SASS se ha compilado correctamente!"));
});

gulp.task('js', function() {
  gulp.src('./public/assets/js/**/*.js')
    .pipe(uglify())
    .pipe(concat('script.js'))
    .pipe(gulp.dest('public/js'))
    .pipe(notify("El JS se ha compilado correctamente!"));
});

gulp.task('watch', function () {
  gulp.watch('./public/assets/sass/**/*.scss', ['sass']);
  gulp.watch('./public/assets/js/**/*.js', ['js']);
});

gulp.task('default', ['sass', 'js']);
