const path = require('path');

module.exports = {
  // エントリーポイントの設定
  entry: './js/app.js',
  // 出力の設定
  output: {
    // 出力するファイル名
    filename: 'bundle.js',
    // 出力先のパス（v2系以降は絶対パスを指定する必要がある）
    path: path.join(__dirname, 'js')
  },
  module:{
    loaders: [
      {
        test: /\.vue$/,
        loader: 'vue-loader'
      },
      {
        test: /\.js$/,
        exclude: /node_modules/,
        loader: 'babel-loader',
        // loader: 'babel',
        query:{
          presets:'es2015'
        }
      }
    ]
  },
  resolve: {
    alias: {
    // vue.js のビルドを指定する
      vue: 'vue/dist/vue.common.js'
    }
  },
};