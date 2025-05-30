# Portfolio Laravel Application

This is a comprehensive portfolio website built with Laravel featuring multiple pages showcasing skills, projects, and contact information.

## Features

- **Home Page**: Welcome message and introduction
- **About Me**: Personal background, education, and hobbies
- **Skills**: Technical and soft skills showcase
- **Portfolio**: Project gallery with detailed information
- **Contact**: Contact form with validation

## Technologies Used

- Laravel 12
- PHP 8.2+
- Bootstrap 5.3
- Font Awesome
- Blade Templates
- MySQL/SQLite

## Installation

1. Clone the repository
```bash
git clone <repository-url>
cd portfolio-Bhergonia
```

2. Install dependencies
```bash
composer install
npm install
```

3. Copy environment file
```bash
cp .env.example .env
```

4. Generate application key
```bash
php artisan key:generate
```

5. Set up database (optional - currently using file-based storage)
```bash
php artisan migrate
```

6. Build assets
```bash
npm run dev
```

7. Start the development server
```bash
php artisan serve
```

## Project Structure

### Routes
- `/` - Home page
- `/about` - About me page
- `/skills` - Skills showcase
- `/portfolio` - Projects portfolio
- `/contact` - Contact form

### Controllers
- `SiteController` - Handles all main site pages

### Views
- `layouts/app.blade.php` - Main layout template
- `partials/navbar.blade.php` - Navigation component
- `partials/footer.blade.php` - Footer component
- `pages/` - Individual page templates

### Features Implemented

#### Laravel Features Used
- **Routing**: Clean URLs with named routes
- **Controllers**: Organized page logic in SiteController
- **Blade Templates**: Reusable layouts with @extends, @section, @include
- **Assets**: CSS and images using asset() helper
- **Validation**: Form validation for contact form
- **Session Flash**: Success messages for form submission

#### Design Features
- Responsive Bootstrap 5 design
- Font Awesome icons
- Custom CSS animations
- Mobile-first approach
- Professional color scheme
- Interactive hover effects

## Usage

The portfolio showcases:
- Personal information and background
- Technical skills with visual indicators
- Project portfolio with live demos and GitHub links
- Contact form for inquiries

## Customization

To customize for your own portfolio:

1. Update personal information in `SiteController`
2. Replace project data in the portfolio method
3. Update contact information in the contact page
4. Replace placeholder images in `public/images/`
5. Modify styles in `resources/css/app.css`

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
