module.exports = function(grunt) {

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    sass: {
      options: {
        sourceMap: true
      },
      dist: {
        files: {
          'css/style.css': 'scss/style.scss',
          'css/wysiwyg.css': 'scss/wysiwyg.scss',
          'css/print.css': 'scss/print.scss'
        }
      }
    },
    sass_globbing: {
      dist: {
        files: {
          'scss/_base.scss': 'scss/base/**/*.scss',
          'scss/_component.scss': 'scss/component/**/*.scss',
          'scss/_layout.scss': 'scss/layout/**/*.scss',
          'scss/_pages.scss': 'scss/pages/**/*.scss'
        }
      },
      options: {
        useSingleQuotes: true
      }
    },
    watch: {
      css: {
        files: ['scss/**/*.scss'],
        tasks: ['sass_globbing', 'sass', 'autoprefixer'],
        options: {
          livereload: true,
          spawn: false
        }
      }
    },
    autoprefixer: {
      options: {
        browsers: ['last 3 versions', 'ie 9']
        // For testing purposes, use this config
        // browsers: ['opera 12', 'ff 15', 'chrome 25']
      },
      single_file: {
        src: 'css/style.css',
        dest: 'css/style.css'
      },
    },
  });

  grunt.loadNpmTasks('grunt-sass');
  grunt.loadNpmTasks('grunt-sass-globbing');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-autoprefixer');

  grunt.registerTask('default', ['sass_globbing', 'sass', 'autoprefixer']);
};
