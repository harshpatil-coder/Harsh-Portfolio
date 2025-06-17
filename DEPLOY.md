# Deployment Instructions

To deploy your portfolio, follow these steps:

1. First, download and install Heroku CLI from: https://devcenter.heroku.com/articles/heroku-cli#install-the-heroku-cli

2. After installing Heroku CLI, open a new terminal and run these commands:

```powershell
# Login to Heroku
heroku login

# Create a new Heroku app
heroku create harsh-portfolio

# Add a buildpack for PHP
heroku buildpacks:set heroku/php

# Push your code to Heroku
git push heroku main
```

3. After deployment, your portfolio will be live at the URL provided by Heroku (something like https://harsh-portfolio.herokuapp.com)

4. To set up your environment variables on Heroku:
```powershell
heroku config:set APP_KEY=$(php artisan key:generate --show)
heroku config:set APP_ENV=production
heroku config:set APP_DEBUG=false
```
