module.exports = function(grunt) {

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        scsslint: {
            all: [
                'sass/_partials/*.scss'
            ]
        },

        compass: {
            dist: {
                options: {
                    config: 'config.rb'
                }
            }
        },

        watch: {
            options: {
                livereload: true,
            },
            css: {
                files: ['sass/**/*.scss'],
                tasks: ['compass'],
            },
        },
    });

    grunt.loadNpmTasks('grunt-scss-lint');
    grunt.loadNpmTasks('grunt-contrib-compass');
    grunt.loadNpmTasks('grunt-contrib-watch');

    grunt.registerTask('default', ['scsslint', 'compass', 'watch']);

};
