const path = require('path');
const webpack = require('webpack');
const htmlWebpackPlugin = require('html-webpack-plugin');

module.exports={
    mode: 'development',
    entry: './src/cliente/js/index.js',
    output:{
        path:path.join(__dirname, 'dist'),
        filename: 'bundle.js',
    },
    module:{
        rules:[
            {
                test:/\.css$/,
                use:['style-loader','css-loader']
            }
        ]
    },
    plugins:[
        new htmlWebpackPlugin({
            template:'src/cliente/index.php',
            template:'src/cliente/guardar.php',
            template:'src/cliente/editar.php',
            template:'src/cliente/borrar.php',
        })
    ]
};
