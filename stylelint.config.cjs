module.exports = {
	extends: [
		'@wordpress/stylelint-config',
		'stylelint-config-recess-order',
		'stylelint-config-prettier',
	],
	rules: { 'selector-class-pattern': null },
	ignoreFiles: [
		'**/node_modules/**',
		'snow-monkey/**',
		'my-snow-monkey/**',
	],
};
