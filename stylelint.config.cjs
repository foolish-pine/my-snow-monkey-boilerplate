module.exports = {
	extends: [ 'stylelint-config-recess-order' ],
	rules: { 'selector-class-pattern': null },
	ignoreFiles: [
		'**/node_modules/**',
		'snow-monkey/**',
		'my-snow-monkey/**',
	],
};
