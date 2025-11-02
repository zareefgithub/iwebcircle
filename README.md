# iWebCircle - AI SaaS Company Website

A modern, professional website for iWebCircle, an AI-powered SaaS solutions company. Built with Laravel 11 and featuring a comprehensive admin panel for content management.

## 🚀 Features

### Public Website
- **Modern Design**: Beautiful, responsive UI built with Tailwind CSS
- **SEO Optimized**: Meta tags, Open Graph, schema markup, and sitemap
- **Fast Performance**: Optimized assets with Vite bundling
- **Key Pages**:
  - Home page with hero section and feature showcase
  - About Us page with company story, mission, vision, and core values
  - Services page highlighting AI solutions
  - Products/Portfolio showcase
  - Blog with posts and categories
  - Contact form with validation
  - Dynamic sitemap generation

### Admin Panel
- **Secure Authentication**: Admin login with middleware protection
- **Content Management**:
  - Blog posts (create, edit, delete with rich content)
  - Products/Portfolio items with images
  - Testimonials management
  - Contact form submissions viewer
- **Page Settings CMS**:
  - **Contact Page Editor**: Edit all contact information, social media links, and FAQ section
  - **About Page Editor**: Edit hero, story, mission, vision, 6 core values, statistics, and CTA
- **Dashboard**: Overview of content and recent activity
- **Modern UI**: Clean, intuitive admin interface with gradient accents

### Technical Features
- Laravel 11 framework
- MySQL database
- Tailwind CSS for styling
- Vite for asset bundling
- Eloquent ORM
- Blade templating
- Database seeders for sample content
- Responsive mobile-first design

## 📋 Requirements

- PHP 8.2 or higher
- Composer
- Node.js & NPM
- MySQL 5.7+ or MariaDB 10.3+

## 🛠️ Installation

1. **Clone the repository**
```bash
git clone <repository-url>
cd webcircle
```

2. **Install PHP dependencies**
```bash
composer install
```

3. **Install Node dependencies**
```bash
npm install
```

4. **Environment setup**
```bash
cp .env.example .env
php artisan key:generate
```

5. **Configure database**
Edit `.env` file with your database credentials:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=webcircle
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

6. **Run migrations and seeders**
```bash
php artisan migrate --seed
```

7. **Build assets**
```bash
npm run build
```

For development with hot reload:
```bash
npm run dev
```

8. **Start the server**
```bash
php artisan serve
```

Visit `http://localhost:8000` to view the site.

## 👤 Admin Access

After running the seeders, you can access the admin panel at `/admin/login`

**Default Admin Credentials:**
- Email: `admin@iwebcircle.com`
- Password: `password`

**⚠️ Important:** Change the default admin password immediately after first login!

## 📁 Project Structure

```
webcircle/
├── app/
│   ├── Http/Controllers/
│   │   ├── Admin/          # Admin panel controllers
│   │   ├── AboutController.php
│   │   ├── BlogController.php
│   │   ├── ContactController.php
│   │   ├── HomeController.php
│   │   ├── ProductsController.php
│   │   └── ServicesController.php
│   ├── Models/
│   │   ├── Contact.php
│   │   ├── Post.php
│   │   ├── Project.php
│   │   ├── Setting.php
│   │   ├── Testimonial.php
│   │   └── User.php
│   └── Middleware/
│       └── AdminMiddleware.php
├── database/
│   ├── migrations/
│   └── seeders/
├── resources/
│   ├── views/
│   │   ├── admin/          # Admin panel views
│   │   ├── about.blade.php
│   │   ├── blog/
│   │   ├── contact.blade.php
│   │   ├── home.blade.php
│   │   ├── products/
│   │   └── services.blade.php
│   ├── css/
│   └── js/
└── routes/
    ├── web.php
    └── admin.php
```

## 🎨 Customization

### Editing Page Content via Admin Panel

1. **Contact Page**
   - Navigate to Admin → Settings → Contact Page
   - Edit contact information, email, phone, address, social media links
   - Changes appear immediately on the public site

2. **About Page**
   - Navigate to Admin → Settings → About Page
   - Edit hero section, story, mission, vision, core values, statistics
   - Comprehensive form with all editable sections

### Adding Blog Posts

1. Login to admin panel
2. Go to Blog Posts → Create New
3. Add title, slug, excerpt, content, featured image, and meta tags
4. Publish or save as draft

### Managing Products/Portfolio

1. Navigate to Products in admin panel
2. Create new product with images, description, and details
3. Products appear on the public Products page

## 🔐 Security Features

- Admin authentication with middleware
- CSRF protection on all forms
- Password hashing with bcrypt
- Input validation and sanitization
- Admin role-based access control

## 🌐 SEO Features

- Dynamic meta titles and descriptions
- Open Graph tags for social sharing
- Schema.org structured data
- Automatic sitemap generation (`/sitemap.xml`)
- Robots.txt configuration
- Canonical URLs

## 📱 Responsive Design

The entire website is fully responsive and optimized for:
- Desktop (1920px and above)
- Laptop (1024px - 1919px)
- Tablet (768px - 1023px)
- Mobile (320px - 767px)

## 🔒 reCAPTCHA Setup

The contact form includes Google reCAPTCHA v2 to prevent spam submissions.

**To enable reCAPTCHA:**

1. Get your keys from [Google reCAPTCHA Admin Console](https://www.google.com/recaptcha/admin)
2. Register a new site with reCAPTCHA v2 (Checkbox)
3. Add your domain(s) including `localhost` for development
4. Add keys to your `.env` file:
```env
RECAPTCHA_SITE_KEY=your_site_key_here
RECAPTCHA_SECRET_KEY=your_secret_key_here
```
5. Clear config cache: `php artisan config:clear`

Without these keys configured, the contact form will not work properly.

## 🚀 Production Deployment

1. Set `APP_ENV=production` and `APP_DEBUG=false` in `.env`
2. Configure your production database
3. Run migrations: `php artisan migrate --force`
4. Build production assets: `npm run build`
5. Set up proper web server configuration (Apache/Nginx)
6. Configure SSL certificate
7. Set up cron job for Laravel scheduler (if needed)
8. Optimize for production:
```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

## 📄 License

This project is proprietary software developed for iWebCircle.

## 🤝 Support

For support, email contact@iwebcircle.com or visit our website.

## 🔄 Updates & Maintenance

To update the project:
```bash
git pull origin main
composer install
npm install
php artisan migrate
npm run build
php artisan config:clear
php artisan cache:clear
```

---

Built with ❤️ using Laravel and Tailwind CSS
