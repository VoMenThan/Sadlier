module.exports = function(grunt){

    //Configure main project setting

    grunt.initConfig({

        //Basic settings and info about our plugins
        pkg: grunt.file.readJSON('package.json'),

        //Name of plugin (Plugin name without the "grunt-contrib-")
        cssmin: {
            combine: {
                files: {
                    'html/css/styles.min.css': ['html/css/*.css']
                }
            }
            // my_target: {
            //     files: [{
            //         expand: true,
            //         cwd: 'html/css/',
            //         src: ['*.css', '!*.min.css'],
            //         dest: 'html/css/',
            //         ext: '.min.css'
            //     }]
            // }
        },

        //Uglify

        uglify: {
            dist: {
                files: {
                    'html/js/main.min.js': ['html/js/customjs.js']
                }
            }

            // options: {
            //     manage: false
            // },
            // my_target: {
            //     files: [{
            //         expand: true,
            //         cwd: 'html/assets/src/js/',
            //         src: '**/*.js',
            //         dest: 'html/assets/dist/js/',
            //         ext: '.min.js'
            //     }]
            // }
        },

        //CONCAT

        concat: {
            options: {
               seperator: ';',
               stripBanners: true,
                banner: '/*! <%= pkg.name %> - v<%=pkg.version %> - ' +  '<%= grunt.template.today("yyyy-mm-dd") %> */',
            },
            js: {
                src: ['html/js/*.js'],
                dest: 'html/js/<%= pkg.name %>-<%= pkg.version %>.js'
            },
            css: {
                src: ['html/css/*.css'],
                dest: 'html/css/<%= pkg.name %>-<%= pkg.version %>.css'
            }
        },

        //SASS

        sass: {
            dist: {
                options: {
                    style: 'compressed'
                },
                files: {
                    'html/assets/css/styles.min.css': 'html/assets/css/styles.scss'
                }
            },
            // connect: {
            //     server: {
            //         options: {
            //             port: 8080,
            //             hostname: 'localhost',
            //             base: 'html',
            //             keepalive: true,
            //             open: 'http://localhost/project/nguyenlieuphache/html/index.php'
            //             // livereload: true
            //             // onCreateServer: function(server, connect, options) {
            //             //     var io = require('socket.io').listen(server);
            //             //     io.sockets.on('connection', function(socket) {
            //             //         // do something with socket
            //             //     });
            //             // }
            //         }
            //     }
            // }
        },

        //WATCH
        watch: {
            sass: {
                files: ['html/assets/css/*.scss', 'html/assets/css/**/*.scss'],
                tasks: ['sass'],
                // options: {
                //     livereload: true,
                // }
            },
        },
        concurrent: {
            build: {
                tasks: ['connect', 'watch'],
                options: {
                    logConcurrentOutput: true
                }
            }
        }


    });

    //Load the plugin
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-connect');

    //do the task
    grunt.registerTask('optimize', ['cssmin', 'uglify']);
    grunt.registerTask('default', ['watch']);

    grunt.registerTask('serve', ['concurrent:build']);

};

