var gulp = require('gulp');
var sass = require('gulp-sass');
var gutil = require('gulp-util');
uglify = require('gulp-uglify');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var sourcemaps = require('gulp-sourcemaps');

gulp.task('sass', function() {
    gulp.src('sass/**/*.scss')
        .pipe(sourcemaps.init())
        .pipe(sass({outputStyle: 'compressed'}))
        .on('error', gutil.log)
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('../css'))
});


gulp.task('watch', function() {
  gulp.watch('sass/**/*.scss', ['sass']);
});




gulp.task('watch', function() {
  gulp.watch('sass/**/*.scss', ['sass']);
});

var minify = require('gulp-minify');
 
gulp.task('compress', function() {
  gulp.src('../js/*.js')
    .pipe(minify({
        ext:{
            src:'-debug.js',
            min:'.js'
        },
    }))
    .pipe(gulp.dest('../js/build'))
});
var gulp = require('gulp');
var uglify = require('gulp-uglify');

var concat = require('gulp-concat');

	gulp.task('scripts', function() {
	  return gulp.src([		
	  	'../js/build/frontend.js',
	  	'../js/build/jquery-3.2.1.min.js',
	  	'../js/build/common-top.js',  		  	
	  	'../js/build/bootstrap.min.js',
	  	'../js/build/bootstrap-select.js',  		  	
	  	'../js/build/owl.carousel.js',	  	
	  	'../js/build/jquery.marquee.min.js', 
	  	'../js/build/picturefill.min.js', 
	  	'../js/build/lightgallery-all.min.js',
	  	'../js/build/jquery.mousewheel.min.js',
	  	'../js/build/lazyload.min.js',
	  	'../js/build/common.js']) 
		.pipe(concat('app-js.js'))
		.pipe(gulp.dest('../js/dest'));	
	});
	gulp.task('md-js', ['scripts', 'compress']);
