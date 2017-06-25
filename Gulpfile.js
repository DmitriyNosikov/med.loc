var gulp = require('gulp'),
	sass = require('gulp-sass'),
	autoprefixer = require('gulp-autoprefixer');

gulp.task('sass', function () {
  return gulp.src(['./local/blocks/**/*sass', './local/blocks/**/*scss'])
    .pipe(sass({outputStyle: "expanded"}).on("error", sass.logError))
    .pipe(gulp.dest('./local/blocks/'));
});
 
gulp.task('set-prefix', function(){
	gulp.src('./local/blocks/**/*css')
        .pipe(autoprefixer({
            browsers: ['last 20 versions'],
        }))
        .pipe(gulp.dest('./local/blocks/'))
});

gulp.task('watch', ['sass', 'set-prefix'], function () {
  gulp.watch(['./local/blocks/**/*.scss', './local/blocks/**/*.sass'], ['sass']);
});