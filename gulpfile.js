'use strict';
var gulp         = require('gulp');
var sass         = require('gulp-sass');
var sourcemaps   = require('gulp-sourcemaps');
var clean        = require('gulp-clean');

var input = './public/assets/sass/**/*.scss';
var output = './public/css';

gulp.task('prod',  function () {
  return gulp
    .src(input)
    .pipe(sass({
      errLogToConsole: true,
      outputStyle: 'compressed'
    }).on('error', sass.logError))
    .pipe(gulp.dest(output));
});

gulp.task('dev', function () {
  return gulp
    .src(input)
    .pipe(sourcemaps.init())
    .pipe(sass({
      errLogToConsole: true,
      outputStyle: 'nested'
    }).on('error', sass.logError))
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest(output));
});

gulp.task('watch', function () {
  return gulp
    .watch(input, ['dev'])
    .on('change', function(event) {
      console.log('File ' + event.path + ' was ' + event.type + ', running tasks...');
    });
});

gulp.task('default', ['prod']);