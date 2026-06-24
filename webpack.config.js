const path = require('path');

module.exports = {
	mode: process.env.NODE_ENV || 'development',
	entry: {
		interactivity: path.resolve(__dirname, 'resources/js/interactivity.js'),
	},
	output: {
		path: path.resolve(__dirname, 'public/js'),
		filename: '[name].js',
		module: true,
	},
	experiments: {
		outputModule: true,
	},
	externals: {
		'@wordpress/interactivity': 'module @wordpress/interactivity',
	},
	resolve: {
		extensions: ['.js'],
	},
	devtool: process.env.NODE_ENV === 'production' ? false : 'source-map',
};
