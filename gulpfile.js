
var gulp = require('gulp');
var sass = require('gulp-sass');
var watch = require("gulp-watch");
var sourcemaps = require('gulp-sourcemaps');
var cssmin = require('gulp-cssmin');
var rename = require('gulp-rename');
var sftp = require('gulp-sftp');

gulp.task('sass', function()
{
	gulp.src('./scss/style.scss')
		.pipe(sourcemaps.init())
		.pipe(sass())
		.pipe(sourcemaps.write())
		.pipe(cssmin())
		.pipe(rename({suffix: ''}))
		.pipe(gulp.dest('./css/'));
});

gulp.task('watch', function()
{
	watch(['./scss/**', './*.php', './main.js', './templates/*.tpl'], function()
	{
		gulp.start(['sass']);
		// gulp.start(['upload']);
	});
});

gulp.task('default', ['sass']);