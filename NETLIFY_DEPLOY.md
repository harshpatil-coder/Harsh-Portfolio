# Portfolio Deployment Instructions

Follow these simple steps to deploy your portfolio:

1. Go to https://www.netlify.com/
2. Click "Sign up" (you can use your GitHub account)
3. After signing in:
   - Click "Add new site"
   - Select "Import an existing project"
   - Choose "Deploy with GitHub"
   - Select your repository "Harsh-Portfolio"

4. In the deployment settings:
   - Branch to deploy: main
   - Base directory: html-version
   - Publish directory: html-version
   - Build command: (leave empty)

Your portfolio will be deployed automatically! Netlify will give you a URL like: 
https://harsh-portfolio.netlify.app

To update your site in the future:
1. Make changes to your files locally
2. Commit and push to GitHub:
```bash
git add .
git commit -m "Update portfolio"
git push origin main
```
Netlify will automatically deploy your updates!

Note: Your portfolio will be accessible 24/7 and you can later add a custom domain if you want.
