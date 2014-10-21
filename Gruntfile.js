module.exports = function(grunt) {

  // Load plugins
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-copy');

  // Project configuration.
  grunt.initConfig({

    pkg: grunt.file.readJSON('package.json'),

    sass: {
      options: {
        banner: '/*\n' +
                'Theme Name: WP Modern Boilerplate\n' +
                'Theme URI: https://github.com/leandrocunha/wp-modern-boilerplate\n' +
                'Author: Leandro Cunha aka. Frango\n' +
                'Author URI: http://frango.herokuapp.com\n' +
                'Description: The modern boilerplate to build WordPress themes more powerfull\n' +
                'Version: 1.0\n' +
                'License: GNU General Public License v2 or later\n' +
                'License URI: http://www.gnu.org/licenses/gpl-2.0.html\n' +
                'Tags: gray, blue, white, flat, bootstrap, grunt, bower\n' +
                'Text Domain: wpmodernboilerplate\n' +
                '\n' +
                'This theme, like WordPress, is licensed under the GPL.\n' +
                'Use it to make something cool, have fun, and share what you\'ve learned with others.\n' +
                '*/',
      },

      dist: {
        files: {
          'style.css': 'sass/app.scss'
        }
      }
    },

    copy: {
      main: {
        files: [
          {
            expand: true,
            cwd: 'bower_components/holderjs/',
            src: ['holder.js'],
            dest: 'js/holderjs/'
          },
          {
            expand: true,
            cwd: 'bower_components/jquery.nicescroll/',
            src: ['jquery.nicescroll.js'],
            dest: 'js/jquery.nicescroll/'
          }
        ]
      },
    }

  });

  // Default task(s).
  grunt.registerTask('default', ['sass', 'copy']);

};
