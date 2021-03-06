var gulp = require('gulp'),
    connect = require('gulp-connect-php'),
    browserSync = require('browser-sync');
    sass        = require('gulp-sass');

gulp.task('connect-sync', function() {
  connect.server({
    port:3000,
    base:'app'
  }, function (){
    browserSync({
      proxy: 'localhost:3000'
    });
  });
});

gulp.task('browser-sync', function () {
   var files = [
      '*.html',
      'css/**/*.css',
      'js/**/*.js',
      'sass/**/*.scss'
   ];
   browserSync.init(files, {
      server: {
         baseDir: './'
      }
   });
});

// Compile sass into CSS & auto-inject into browsers
gulp.task('sass', function() {
     gulp.src("app/scss/**/*.scss")
        .pipe(sass())
        .pipe(gulp.dest("app/css"))
        .pipe(browserSync.reload({stream:true}));
});

gulp.task('reload', function(){
 browserSync.reload();
});

gulp.task("default",['connect-sync'], function() {
    gulp.watch("app/scss/*.scss",["sass"]);
    //gulp.watch("app/*.php", ["reload"]);
    gulp.watch(["app/*.php"]).on('change',browserSync.reload);
});
