const defaultConfig = require( '@wordpress/scripts/config/webpack.config' );

const isProduction = process.env.NODE_ENV === 'production';

module.exports = {
	...defaultConfig,
	devServer: isProduction
		? undefined
		: {
				devMiddleware: {
					writeToDisk: true,
				},
				allowedHosts: 'auto',
				host: 'localhost',
				port: 8887,
				proxy: {
					'/build': {
						pathRewrite: {
							'^/build': '',
						},
					},
				},
				headers: {
					'Access-Control-Allow-Origin': 'http://localhost:8888',
				},
		  },
};
