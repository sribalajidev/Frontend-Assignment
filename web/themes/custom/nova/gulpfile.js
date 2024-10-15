const gulp = require('gulp');
const { src, dest, watch, series } = require('gulp');
const sass = require('gulp-sass')(require('sass'));

// File paths
const files = {
  scssPath: 'scss/**/*.scss',
};

// Sass tasks
function scssTask() {
  return src(files.scssPath, { sourcemaps: false })
    .pipe(sass())
    .pipe(dest('css/', { sourcemaps: '.' }));
}

// Build task
function buildTask() {
  return scssTask(); // Run the Sass task
}

// Watch task
function watchTask() {
  watch(
    [files.scssPath],
    { interval: 1000, usePolling: true },
    scssTask // Only watch the Sass task
  );
}

// Define the default task
gulp.task('default', series(buildTask, watchTask));

// Export the build task
gulp.task('build', buildTask);
