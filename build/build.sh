#!/bin/sh
set -e
pushd `dirname $0` > /dev/null
script_dir=`pwd`
popd > /dev/null
cd "$script_dir"
./node_modules/webpack/bin/webpack.js --config interval-timer.config.js

