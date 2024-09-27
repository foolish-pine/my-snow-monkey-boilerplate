module.exports = {
	extends: [ '@wordpress/stylelint-config', 'stylelint-config-recess-order' ],
	rules: { 'selector-class-pattern': null },
	ignoreFiles: [ 'node_modules/**', 'vendor/**', 'my-snow-monkey/**' ],
};
