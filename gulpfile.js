'use strict';

var gulp = require('gulp'),
  changed = require('gulp-changed'),
  minify = require('gulp-minify-css'),
  uglify = require('gulp-uglify'),
  sass = require('gulp-sass');

var SRC = './src/';
var DIST = './web/';

// process css ans sass files
gulp.task('css', function () {
  return gulp.src([
      SRC + '**/*.css',
      SRC + '**/*.scss'
    ])
    .pipe(changed(DIST, {
      extension: '.css'
    }))
    .pipe(sass().on('error', sass.logError))
    .pipe(minify())
    .pipe(gulp.dest(DIST));
});

// process js files
gulp.task('js', function () {
  return gulp.src(SRC + '**/*.js')
    .pipe(changed(DIST))
    //.pipe(uglify())
    .pipe(gulp.dest(DIST));
});

// copy html, python and Google Apps Engine (GAE) files
gulp.task('copy_src', function () {
  return gulp.src([
      SRC + '**/*.html',
      SRC + '**/*.php',
      SRC + '.htaccess',
      SRC + '.playground',
      SRC + 'app.yaml'
    ])
    .pipe(changed(DIST))
    .pipe(gulp.dest(DIST));
});

// copy lib files
gulp.task('lib', function () {
  return gulp.src([
      './lib/**/*',
    ])
    .pipe(gulp.dest(DIST + "lib/"));
});

gulp.task('src', ['css', 'js', 'copy_src']);

gulp.task('default', ['src']);