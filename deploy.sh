#!/usr/bin/env bash
echo "Deploying to GitHub Pages..."

# Build the project
npm run build

# Navigate into the build output directory
cd public

# Create a .nojekyll file to bypass GitHub Page's default behavior
touch .nojekyll

# Initialize git and push to gh-pages branch
git init
git add -A
git commit -m 'deploy'
git push -f git@github.com:harshpatil-coder/Harsh-portfolio.git main:gh-pages

cd -
