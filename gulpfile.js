let themeDir = "./wp-content/themes/style";

let { src, dest } = require("gulp"),
  gulp = require("gulp"),
  browsersync = require("browser-sync").create(),
  fileinclude = require("gulp-file-include"),
  del = require("del"),
  concat = require("gulp-concat"),
  scss = require("gulp-sass")(require("sass")),
  autoprefixer = require("gulp-autoprefixer"),
  group_media = require("gulp-group-css-media-queries"),
  clean_css = require("gulp-clean-css"),
  rename = require("gulp-rename"),
  uglify = require("gulp-uglify-es").default,
  imagemin = require("gulp-imagemin");

// CSS
function css() {
  return src(themeDir + "/scss/style.scss")
    .pipe(
      scss({
        outputStyle: "expanded",
      })
    )
    .pipe(group_media())
    .pipe(
      autoprefixer({
        cascade: true,
        overrideBrowserslist: ["last 5 versions"],
      })
    )
    .pipe(dest(themeDir + "/css/"))
    .pipe(clean_css())
    .pipe(
      rename({
        extname: ".min.css",
      })
    )
    .pipe(dest(themeDir + "/css/"));
}

// JS
function js() {
  return src([themeDir + "/js/common.js"])
    .pipe(concat("common.min.js"))
    .pipe(uglify())
    .pipe(dest(themeDir + "/js/"));
}

// Serve
function serve(params) {
  browsersync.init({
    proxy: "bestyleacademy.test", // Или "localhost"
    port: 3000, // Попробуйте другой порт
    notify: false,
    https: false, // Если не используете HTTPS
  });

  browsersync.watch("./**/*.html").on("change", browsersync.reload);
  browsersync.watch("./**/*.php").on("change", browsersync.reload);
  browsersync
    .watch(themeDir + "/scss/**/*.scss")
    .on("change", gulp.parallel(css, browsersync.reload));
  browsersync
    .watch(themeDir + "/js/common.js")
    .on("change", gulp.parallel(js, browsersync.reload));
}

exports.css = css;
exports.js = js;
exports.serve = serve;
exports.default = serve;
