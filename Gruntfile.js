module.exports = function(grunt) {

	//load modules
	grunt.loadNpmTasks('grunt-contrib-jshint');
	grunt.loadNpmTasks("grunt-contrib-concat");
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-cssmin');


	//load javascript files
	var theme_folder = 'twentyfourteen-child';
		jsfiles = [
					'wp-content/themes/' + theme_folder + '/js/lib/Bootstrap/*.js',
					'wp-content/themes/' + theme_folder + '/js/lib/SiriWave/*.js',
				   	'wp-content/themes/' + theme_folder + '/js/lib/*.js'
		      	   ];

	//config tasks
 	grunt.initConfig({

 		jshint: {
 			options: {
 				asi			: true,
 				laxbreak	: true,
 				'-W041'		: false,
 				'-W030'		: false
 			},

 			beforeconcat: jsfiles,
 		},

     	concat: {
		    dist: {
		      src: jsfiles,
		      dest: 'wp-content/themes/twentyfourteen-child/js/app.js',
		    }
      	},

      	uglify: {
      		dist: {
	            src: "wp-content/themes/twentyfourteen-child/js/app.js",
            	dest: "wp-content/themes/twentyfourteen-child/js/app.min.js"
      		}
      	},

		sass: {
			dev: {
				options: {
					style: 'expanded'
				},

				files: {
					'wp-content/themes/twentyfourteen-child/css/app.css': 'wp-content/themes/twentyfourteen-child/scss/app.scss'
				},

				require: 'Bootstrap'
			}
		},

		cssmin: {
  			minify: {
		        files: {
		          'wp-content/themes/twentyfourteen-child/css/app.min.css': 'wp-content/themes/twentyfourteen-child/css/app.css'
		        }
  			}
		},

		watch: {
			css: {
			    files: 'wp-content/themes/twentyfourteen-child/scss/*.scss',
			    tasks: ['sass'],
			    options: {
			      livereload: true,
			    },
			},

			theme: {
			    files: 'wp-content/themes/twentyfourteen-child/*.php',
			    options: {
			      livereload: true,
			    },
			}
		}
  	});

 	// register tasks
  	grunt.registerTask("default", ['jshint', 'concat', 'sass', 'watch']);

  	grunt.registerTask('build', ['cssmin', 'uglify']);
};
