var gulp = require('gulp'),
	autoprefixer = require('gulp-autoprefixer'),
	eslint = require('gulp-eslint'),
	htmllint = require('gulp-htmllint'),
	htmlmin = require('gulp-htmlmin'),
	cache = require('gulp-cache'),
	imagemin = require('gulp-imagemin'),
	plumber = require('gulp-plumber'),
	rename = require("gulp-rename"),
	sass = require('gulp-sass'),
	sassLint = require('gulp-sass-lint'),
	size = require('gulp-size'),
	uglify = require('gulp-uglify'),
	sasscompiler = require('node-sass'),
	notify = require("gulp-notify"),
	php = require('gulp-connect-php'),
	browserSync = require('browser-sync');

var reload = browserSync.reload;

var urlPath = "/redlaseia/";

gulp.task('img', () => {
	return gulp.src('./assets/img/**/*+(png|jpg|jpeg|gif|svg)')
		.pipe(cache(imagemin({
			interlaced: true
		})))
		.pipe(gulp.dest('./../build/img'))
});

gulp.task('fonts', () => {
	return gulp.src('./assets/fonts/**/*')
		.pipe(gulp.dest('./../build/fonts'))
		.pipe(notify({
			message: 'Tarea de fonts completada con éxito 👌'
		}));
});

gulp.task('sass', () => {
	function onError(err) {
		notify.onError({
			title: 'Sass Error',
			subtitle: 'Ups! La construcción de Sass falló 😱',
			message: 'Error: <%= error.message %>'
		})(err);
		this.emit('end');
	};

	return gulp.src('./assets/scss/**/*.scss')
		.pipe(plumber({
			errorHandler: onError
		}))
		.pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
		//.pipe(sass().on('error', sass.logError))
		.pipe(autoprefixer())
		.pipe(size({
			gzip: true,
			showFiles: true
		}))
		.pipe(rename({ suffix: '.min' }))
		.pipe(gulp.dest('./../build/css'))
		.pipe(reload({
			stream: true
		}))

		.pipe(notify({
			title: 'Sass OK',
			message: 'Yeah! Tarea de Sass completada con éxito 👌',
			onLast: true
		}));
});

gulp.task('js', () => {
	function onErrorJs(err) {
		notify.onError({
			title: 'JavaScript Error',
			subtitle: 'Ups! La construcción de JavaScript falló 😱',
			message: 'Error: <%= error.message %>'
		})(err);
		this.emit('end');
	};

	return gulp.src('./assets/js/**/*.js')
		.pipe(plumber({
			errorHandler: onErrorJs
		}))
		//.pipe(uglify())
		.pipe(size({
			gzip: true,
			showFiles: true
		}))
		.pipe(rename({
			suffix: '.min'
		}))
		.pipe(gulp.dest('./../build/js'))
		.pipe(reload({
			stream: true
		}))
		.pipe(notify({
			title: 'JavaScript OK',
			message: 'Yeah! Tarea de JavaScript completada con éxito 👌',
			onLast: true
		}));
});

gulp.task('watch', () => {
	php.server({
		// a standalone PHP server that browsersync connects to via proxy
		port: 8000,
		keepalive: true
	}, function () {
		browserSync({
			proxy: urlPath
		});
	});

	gulp.watch('./assets/img/**/*', gulp.series('img'));
	gulp.watch('./assets/fonts/**/*', gulp.series('fonts'));
	gulp.watch('./assets/scss/**/*.scss', gulp.series('sass'));
	gulp.watch('./assets/js/**/*.js', gulp.series('js'));

	gulp.watch('./../**/*.php').on('change', function () {
		reload();
	});
});

gulp.task('default', gulp.parallel(
	'img',
	'fonts',
	'sass',
	'js'
));

gulp.task('clear', function (done) {
    return cache.clearAll(done);
});
