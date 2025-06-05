# Deployment Instructions for Render.com

Follow these steps to deploy your portfolio:

1. Go to https://dashboard.render.com/
2. Sign up for a free account (you can use your GitHub account)
3. Click on "New +" and select "Web Service"
4. Connect your GitHub repository (https://github.com/harshpatil-coder/Harsh-Portfolio)
5. Fill in these settings:
   - Name: harsh-portfolio
   - Environment: PHP
   - Branch: main
   - Build Command: ./render-build.sh
   - Start Command: heroku-php-apache2 public/

The deployment will start automatically. Once complete, your site will be live at:
https://harsh-portfolio.onrender.com

Note: The first deployment might take a few minutes. Render's free tier will spin down after inactivity, so the first load after inactivity might be slow.

To update your site in the future:
1. Make your changes locally
2. Commit your changes:
```bash
git add .
git commit -m "Your update message"
git push origin main
```
3. Render will automatically deploy your updates

Your portfolio will remain live and accessible to anyone on the internet!
