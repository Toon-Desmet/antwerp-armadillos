const { series } = require('gulp');
var gulp = require('gulp');
var sass = require('gulp-sass')(require('sass'))

// The `clean` function is not exported so it can be considered a private task.
// It can still be used within the `series()` composition.
function clean(cb) {
  // body omitted
  cb();
}

// The `build` function is exported so it is public and can be run with the `gulp` command.
// It can also be used within the `series()` composition.
function build(cb) {
  // body omitted
  cb();
}

function styles(){
  return gulp.src("./assets/sass/index.scss")
    .pipe(sass().on("error", sass.logError))
    .pipe(gulp.dest('./assets/css'));
}

exports.styles = styles;

exports.build = series(build, styles);
exports.default = series(clean, build);