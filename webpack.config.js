const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const CssMinimizerPlugin = require('css-minimizer-webpack-plugin');
const TerserPlugin = require("terser-webpack-plugin");

module.exports = {
    watch: true,
    mode: 'production',
    entry: {
        'base': './html/webroot/src/js/app.js',
        'mobile/base': './html/webroot/src/mobile/js/app.js',
    },
    output: {
        path: path.resolve(__dirname,'html/webroot'),
        filename: 'js/[name].min.js'
    },
    plugins: [
        new MiniCssExtractPlugin({
            filename: 'css/[name].min.css',
        }),
        require('autoprefixer')
    ],
    module: {
        rules: [
            {
                test: [/\.css$/,/\.scss$/],
                // include: path.resolve(__dirname,'public/src/scss'),
                use: [
                    MiniCssExtractPlugin.loader,
                    // "style-loader",
                    "css-loader",
                    'postcss-loader',
                    "sass-loader"
                ],
            },
        ],
    },
    optimization: {
        minimizer: [
            new TerserPlugin({extractComments: false}),
            new CssMinimizerPlugin(),
        ],
    },
}