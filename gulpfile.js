const gulp = require("gulp");
const sass = require("gulp-sass")(require("sass"));
const watch = require("gulp-watch");

gulp.task("sass", function () {
    return gulp
        .src("public/scss/style.scss")
        .pipe(sass())
        .pipe(gulp.dest("public/css"));
});

gulp.task("default", function () {
    watch("public/scss/style.scss", gulp.series("sass"));
});
