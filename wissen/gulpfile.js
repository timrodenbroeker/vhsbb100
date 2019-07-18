'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');
var concat = require('gulp-concat');
let cleanCSS = require('gulp-clean-css');
var browserSync = require('browser-sync').create();
const babel = require('gulp-babel');
var reload = browserSync.reload;
var php = require('gulp-connect-php');
// Static server

gulp.task('php', function() {
	php.server({ base: './', port: 8010, keepalive: true });
});

gulp.task('browserSync', ['php'], function() {
	browserSync.init({
		proxy: '127.0.0.1:8010',
		port: 8080,
		open: true,
		notify: false,
	});
});

gulp.task('sass', function() {
	return (
		gulp
			.src('./scss/main.scss')
			.pipe(sass().on('error', sass.logError))
			.pipe(concat('main.css'))
			// .pipe(cleanCSS({compatibility: 'ie8'}))
			.pipe(gulp.dest('./css'))
			.pipe(
				browserSync.reload({
					stream: true,
				})
			)
	);
});

gulp.task('concatjs', function() {
	return gulp
		.src(['./js/*.js'])
		.pipe(concat('main.js'))
		.pipe(
			babel({
				presets: ['@babel/env'],
			})
		)
		.pipe(gulp.dest('./'));
});

gulp.task('default', ['browserSync'], function() {
	gulp.watch(
		// When these files change...
		['./scss/*.scss', './js/*.js'],

		// ...do this!
		['sass', 'concatjs', reload]
	);
});
