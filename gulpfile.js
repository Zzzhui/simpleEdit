var gulp = require('gulp');
var uglify = require('gulp-uglify');  //压缩js
var csso = require('gulp-csso');  //压缩css
var pump = require('pump');
var less = require('gulp-less');

gulp.task('compjs', function (cb) {
  pump([
		gulp.src('src/js/*.js'),
		uglify(),
		gulp.dest('dist')
	],
	cb
  );
});

gulp.task('compless', function () {
	return gulp.src('src/less/*.less')
		.pipe(less())
		.pipe(gulp.dest('src/css'));
});

gulp.task('compcss', function () {
	return gulp.src('src/css/*.css')
		.pipe(csso())
		.pipe(gulp.dest('dist'));
});

gulp.task('default', function() {
	gulp.run('compjs');
	gulp.run('compless');
	gulp.run('compcss');

	gulp.watch('src/less/*.less', function(event) {
		gulp.run('compless');
	});
});
