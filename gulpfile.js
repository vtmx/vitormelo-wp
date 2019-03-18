// Modules
var gulp        = require('gulp');
var sass        = require('gulp-sass');
var concat      = require('gulp-concat');
var uglify      = require('gulp-uglify');
var browserSync = require('browser-sync').create();

// Sass
gulp.task('sass', function() {
	return gulp.src(['src/scss/style.scss'])
	.pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
	.pipe(gulp.dest('dist/css'))
	.pipe(browserSync.stream());
});

// Sass IE
gulp.task('sass-ie', function() {
	return gulp.src(['src/scss/style-ie.scss'])
	.pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
	.pipe(gulp.dest('dist/css'))
	.pipe(browserSync.stream());
});

// JS
gulp.task('js', function() {
	return gulp.src(['src/js/browser-selector.js', 'src/js/header-animation.js', 'src/js/jquery.js', 'src/js/smooth-scroll.js','src/js/viewportchecker.js', 'src/js/slick.js', 'src/js/lightgallery.js', 'src/js/main.js'])
	.pipe(concat('script.js'))
	.pipe(uglify())
	.pipe(gulp.dest('dist/js'))
	.pipe(browserSync.stream());
});

// JS IE
gulp.task('js-ie', function() {
	return gulp.src(['src/js/browser-selector.js', 'src/js/jquery-ie.js', 'src/js/viewportchecker.js', 'src/js/slick.js', 'src/js/lightgallery.js', 'src/js/main.js'])
	.pipe(concat('script-ie.js'))
	.pipe(uglify())
	.pipe(gulp.dest('dist/js'))
	.pipe(browserSync.stream());
});

// Files
gulp.task('file', function() {
	gulp.src('')
	.pipe(browserSync.stream());
});

// browser Sync
gulp.task('browser-sync', function() {
    browserSync.init({
        proxy: "http://localhost/vitormelo/"
    });

	gulp.watch(['*.php', '*.html'], ['file']);
	gulp.watch('src/scss/**/*.scss', ['sass']);
	gulp.watch('src/scss/**/*.scss', ['sass-ie']);
	gulp.watch('src/js/**/*.js', ['js']);
	gulp.watch('src/js/**/*.js', ['js-ie']);
});

// Call Task
gulp.task('default', ['sass', 'sass-ie', 'js', 'js-ie', 'file', 'browser-sync']);
