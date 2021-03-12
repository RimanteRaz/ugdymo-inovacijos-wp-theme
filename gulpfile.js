const gulp = require("gulp");
const sass = require("gulp-sass");
const rename = require("gulp-rename");
const browserSync = require("browser-sync").create();

// compile scss into css
function style() {
  return gulp
    .src("./assets/scss/main.scss")
    .pipe(sass())
    .pipe(rename("style.css"))
    .pipe(gulp.dest("./"));
}

exports.style = style;
