/*
 * Gulp file created by @asadadams
 * All plugins and documentation available at https://gulpjs.com/plugins/
 *
 */

var gulp = require("gulp"),
  sass = require("gulp-sass"),
  plumber = require("gulp-plumber"),
  rename = require("gulp-rename"),
  uglify = require("gulp-uglify"),
  csso = require("gulp-csso"),
  browserSync = require("browser-sync").create();

sass.compiler = require("node-sass");

//Sass compiling
gulp.task("sass", function() {
  console.log("Running sass compiler");
  return (
    gulp
      .src("./public/scss/**/*.scss")
      .pipe(plumber())
      .pipe(sass({ outputStyle: "compressed" }).on("error", sass.logError))
      //.pipe(rename("main.css"))
      .pipe(gulp.dest("./public/dist/css"))
      .pipe(browserSync.stream())
  );
});

//Minifing css
gulp.task("css", function() {
  return gulp
    .src("./public/css/**/*.css")
    .pipe(
      csso({
        restructure: false,
        sourceMap: true,
        debug: true
      })
    )
    .pipe(gulp.dest("./public/dist/css"))
    .pipe(browserSync.stream());
});

//Minifing js
gulp.task("scripts", function() {
  console.log("Minifing js");
  return gulp
    .src("./public/js/**/*.js")
    .pipe(plumber())
    .pipe(uglify())
    .pipe(gulp.dest("./public/dist/js"))
    .pipe(browserSync.stream());
});

//Browser Sync
gulp.task("browserSync", function() {
  console.log("Watching all files");
  browserSync.init({
    proxy: "http://localhost/forum"
  });
});

//Watching sass files for change
gulp.task("watch", function() {
  console.log("Watching files for change");
  gulp.watch("./public/scss/**/*.scss", gulp.series("sass"));
  gulp.watch("./public/css/**/*.css", gulp.series("css"));
  gulp.watch("./public/js/**/*.js", gulp.series("scripts"));
  gulp.watch("./app/**/*.php").on("change", browserSync.reload);
});

gulp.task(
  "default",
  gulp.parallel("browserSync", "sass", "css", "scripts", "watch")
);
