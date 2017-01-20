var path = require('path');

module.exports = {
  entry: "./resources/assets/js/index.js",
  output: {
    path: './public/js',
    filename: "bundle.js"
  },
  module: {
    loaders: [
      {
        test: /\.jsx?$/,
        include: [
          path.resolve(__dirname, 'node_modules'),
          path.resolve(__dirname, 'resources/assets/js')
        ],
        loader: "babel",
        query: {
          presets: ["react", "es2015"]
        }
      }
    ]
  },
  // This lets us debug our react code in chrome dev tools. Errors will have lines and file names
  // Without this the console says all errors are coming from just coming from bundle.js
  devtool: "eval-source-map"
};
