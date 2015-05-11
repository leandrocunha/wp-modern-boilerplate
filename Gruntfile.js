/* jslint node: true */

'use strict';

module.exports = function(grunt) {

	// Project configuration.
	grunt.initConfig({

		pkg: grunt.file.readJSON('package.json'),

		stylus: {
			compile: {
				options: {
					banner: '/*\n' +
                  'Theme Name: WP Modern Boilerplate\n' +
                  'Theme URI: https://github.com/leandrocunha/wp-modern-boilerplate\n' +
                  'Author: Leandro Cunha aka. Frango\n' +
                  'Author URI: http://frango.herokuapp.com\n' +
                  'Description: The modern boilerplate to build WordPress themes more powerfull\n' +
                  'Version: 2.0\n' +
                  'License: GNU General Public License v2 or later\n' +
                  'License URI: http://www.gnu.org/licenses/gpl-2.0.html\n' +
                  'Tags: gray, blue, white, flat, bootstrap, grunt, bower\n' +
                  'Text Domain: wpmodernboilerplate\n' +
                  '\n' +
                  'This theme, like WordPress, is licensed under the GPL.\n' +
                  'Use it to make something cool, have fun, and share what you\'ve learned with others.\n' +
                  '*/\n',
				},
				files: {
					'style.css': 'assets/dev/stylus/app.styl'
				}
			}
		},

		watch: {
			scripts: {
				files: ['assets/dev/stylus/app.styl'],
				tasks: ['stylus']
			}
		}

	});

	// Load the plugin that provides the "uglify" task.
	grunt.loadNpmTasks('grunt-contrib-stylus');
	grunt.loadNpmTasks('grunt-contrib-watch');

	// Default task(s).
	grunt.registerTask('default', ['stylus', 'watch']);

};
