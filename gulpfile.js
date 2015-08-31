'use strict';

var gulp = require('gulp'),
  changed = require('gulp-changed'),
  minify = require('gulp-minify-css'),
  uglify = require('gulp-uglify'),
  sass = require('gulp-sass'),
  sftp = require('gulp-sftp'),
  del = require('del');

var SRC = './src/';
var DIST = './web/';
var DIST_UP = './web-up/';

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
    .pipe(gulp.dest(DIST))
    .pipe(gulp.dest(DIST_UP));
});

// process js files
gulp.task('js', function () {
  return gulp.src(SRC + '**/*.js')
    .pipe(changed(DIST))
    //.pipe(uglify())
    .pipe(gulp.dest(DIST))
    .pipe(gulp.dest(DIST_UP));
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
    .pipe(gulp.dest(DIST))
    .pipe(gulp.dest(DIST_UP));
});

// copy lib files
gulp.task('lib', function () {
  return gulp.src([
      './lib/**/*',
    ])
    .pipe(gulp.dest(DIST + "lib/"))
    .pipe(gulp.dest(DIST_UP));
});

gulp.task('clean-up', function (callback) {
  del('./web-up/**/*');
  callback();
});

gulp.task('up', ['src'], function () {
  return gulp.src('./web-up/**/*')
    .pipe(sftp({
      host: 'ssh.wolfography.at',
      user: 'wolfography.at',
      pass: 'ocFqFIxU',
      remotePath: '/customers/d/e/3/wolfography.at/httpd.www/',
    }));
});

gulp.task('src', ['clean-up', 'css', 'js', 'copy_src']);

gulp.task('default', ['src']);