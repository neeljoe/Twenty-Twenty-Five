module.exports = {
	plugins: [
		require('postcss-import'),
		require('postcss-preset-env')({ stage: 3 }),
		...(process.env.NODE_ENV === 'production' ? [require('cssnano')] : [])
	]
};
