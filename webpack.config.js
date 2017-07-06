const path = require('path');
var SWPrecacheWebpackPlugin = require('sw-precache-webpack-plugin');

module.exports = {
  entry: './src/index.js',
  output: {
    filename: 'gavdaly.js',
    path: path.resolve(__dirname, 'dist')
  },
  module: {
    rules: [
      { test: /\.js$/, exclude: /node_modules/, loader: "babel-loader" },
      {
        test: /\.scss$/,
        use: [
          { loader: "style-loader" },
          { loader: "css-loader" },
          {
            loader: "sass-loader",
            options: { includePaths: ["sass/"] }
          }
      ]
    }
  ]
},
plugins: [
    new SWPrecacheWebpackPlugin(
      {
        cacheId: 'gavdaly',
        dontCacheBustUrlsMatching: /\.\w{8}\./,
        minify: true,
        navigateFallback: "https://gavdaly.com/",
        staticFileGlobsIgnorePatterns: [/\.map$/, /asset-manifest\.json$/],
      }
    ),
  ]
}
