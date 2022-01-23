#!/bin/sh

# Scaffold
npx degit sveltejs/template $1
mv $1/package.json package.json
rm -rf $1/.gitignore
rm -rf $1/public

# Config: rollup.config.js
sed -i -e 's+src/main.js+'$1'/src/main.js+g' $1/rollup.config.js
sed -i -e 's+public/build/bundle.js+assets/build/bundle.js+g' $1/rollup.config.js
rm $1/rollup.config.js-e

# Install Package
npm install