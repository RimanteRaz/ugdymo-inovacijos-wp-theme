const gulp = require("gulp");
const sass = require("gulp-sass");
const autoprefixer = require("autoprefixer");
const sourcemaps = require("gulp-sourcemaps");
const postcss = require("gulp-postcss");
const rename = require("gulp-rename");
const browserSync = require("browser-sync").create();

// compile scss into css
function style() {
  return gulp
    .src("./assets/scss/main.scss")
    .pipe(sass().on("error", sass.logError))
    .pipe(sourcemaps.init())
    .pipe(postcss([autoprefixer()]))
    .pipe(sourcemaps.write("."))
    .pipe(rename("style.css"))
    .pipe(gulp.dest("./"))
    .pipe(browserSync.stream());
}

function watch() {
  browserSync.init({
    proxy: "localhost/ugdymoinovacijos",
  });
  gulp.watch("./assets/scss/**/*.scss", style);
  gulp.watch("./**/*.php").on("change", browserSync.reload);
  gulp.watch("./assets/js/**/*.js").on("change", browserSync.reload);
}

exports.style = style;
exports.watch = watch;
