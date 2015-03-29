module.exports = function(grunt) {

	// Project configuration.
	grunt.initConfig({
		clean: ['dist'],
		copy: {
			all: {
				files: [
					{
						expand: true,
						src: [
							'index.php', 
							'wp-content/index.php', 
							'wp-content/themes/godding/**'
						],
						dest: 'dist/'
					}
				]
			},
			site: {
				files: [
					{
						expand: true,
						src: [
							'index.php', 
							'wp-content/index.php', 
							'wp-content/themes/godding/_css/**',
							'wp-content/themes/godding/_js/**',
							'wp-content/themes/godding/_blocks/**',
							'wp-content/themes/godding/*.php',
							'wp-content/themes/godding/*.css'
						],
						dest: 'dist/'
					}
				]
			},
			assets: {
				files: [
					{
						expand: true,
						src: [
							'wp-content/themes/godding/_flash/**',
							'wp-content/themes/godding/_images/**',
							'wp-content/themes/godding/_fonts/**'
						],
						dest: 'dist/'
					}
				]
			}
		},
		'ftp-deploy': {
			build: {
				auth: {
					host: 'ftp.mandygodding.co.uk',
					port: 21,
					authKey: 'mandyGoddingKey'
				},
				src:'dist',
				// .ftppass with details is needed (not included in repo)
				dest: '/htdocs/website',
				exclusions: ['dist/.DS_Store', 'dist/Thumbs.db', 'dist/tmp', 'dist/.git']
			}
		}
	});

	grunt.loadNpmTasks('grunt-contrib-clean');
	grunt.loadNpmTasks('grunt-contrib-copy');
	grunt.loadNpmTasks('grunt-ftp-deploy');

	// Default task(s).
	grunt.registerTask('default', ['clean', 'copy']);
	grunt.registerTask('deploy:all', ['clean', 'copy:all', 'ftp-deploy']);
	grunt.registerTask('deploy:site', ['clean', 'copy:site', 'ftp-deploy']);
	grunt.registerTask('deploy:assets', ['clean', 'copy:assets', 'ftp-deploy']);
};