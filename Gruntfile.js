module.exports = function (grunt) {

    grunt.loadNpmTasks('grunt-wiredep');
    grunt.initConfig({
        wiredep: {
            target: {
                src: [
                    'index.php'
                ],
                ignorePath: '/../../../public',
                dependencies: true,
                devDependencies: false
            }
        }

    })
}