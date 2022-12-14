// плагин который выносит css в отдельный билд
const MiniCssExtractPlugin = require('mini-css-extract-plugin');

// Loaders
const css_loader = {
	loader: 'css-loader',
	options: {
		url: false,
		sourceMap: true,
	},
};

const sass_loader = {
	loader: 'sass-loader',
	options: {
		sourceMap: true,
	}
};

const post_css_loader = {
	loader: "postcss-loader",
	options: {
		postcssOptions: {
			plugins: [
				[
					"autoprefixer",
					{
						// Options
					},
				],
			],
		},
	}
};

// Конфиг
module.exports = function() {
	return {
		module: {
			rules: [
				{
					test: /\.(scss)$/,
					use: [
						MiniCssExtractPlugin.loader,
						css_loader,
						post_css_loader,
						sass_loader
					],
				},
			],
		},
	}
}
