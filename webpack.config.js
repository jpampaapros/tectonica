const path = require('path');
const webpack = require('webpack');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const devMode = process.env.NODE_ENV !== 'production';
const TerserPlugin = require("terser-webpack-plugin");

const plugins = [
  new MiniCssExtractPlugin({
    filename: devMode ? './css/mystyles.css' : '[name].[contenthash].css',
  }),
];
if (devMode) {
  plugins.push(new webpack.HotModuleReplacementPlugin());
}

module.exports = {
  entry: {
    index: "./src/js/main.js",
  },
  output: {
    path: path.resolve(__dirname, 'dist'),
    filename: './js/myscripts.js',
    hotUpdateChunkFilename: './hot/[id].[hash].hot-update.js',
    hotUpdateMainFilename: './hot/[hash].hot-update.json'
  },
  plugins,
  module: {
    rules: [
      {
        test: /\.(sa|sc|c)ss$/,
        use: [
          MiniCssExtractPlugin.loader,
          'css-loader',
          'postcss-loader',
          'sass-loader',
        ],
      },
      {
        test: /\.(gif|png|jpe?g|svg)$/i,
        use: [
          'file-loader',
          {
            loader: 'image-webpack-loader',
            options: {
              bypassOnDebug: true,
              disable: true,
            },
          },
        ],
      }
    ],
  },
  optimization: {
    minimize: true,
    minimizer: [new TerserPlugin()],
  },
};