# 🛒 Laravel Multi-Vendor E-Commerce Platform

A powerful multi-vendor e-commerce platform built with Laravel, where multiple sellers can register, list their products, and sell online. The admin can set custom commission rates for each seller and manage orders, earnings, and payouts.

---

## 🚀 Features

- ✅ Vendor Registration & Login
- ✅ Custom Commission Per Vendor
- ✅ Product Management
- ✅ Order Processing
- ✅ Admin Dashboard (sales, vendors, reports)
- ✅ Vendor Dashboard (sales, commission, payouts)
- ✅ Payout Tracking System
- ✅ Secure Authentication (Laravel Breeze / Jetstream)
- ✅ RESTful APIs (optional for frontend/mobile app)

---

## 🛠️ Tech Stack

- **Backend:** Laravel 10+
- **Frontend:** Blade / Vue.js / React (based on your setup)
- **Database:** MySQL
- **Package Manager:** Composer, NPM
- **Authentication:** Laravel Breeze / Jetstream / Sanctum

---

## 📦 Installation

```bash
# Clone the repo
git clone https://github.com/your-username/multi-vendor-ecommerce.git
cd multi-vendor-ecommerce

# Install dependencies
composer install
npm install

# Create .env file
cp .env.example .env

# Generate key
php artisan key:generate

# Setup database in .env
# Then run migrations and seeders
php artisan migrate --seed

# Build assets
npm run dev

# Serve the project
php artisan serve


Admin Email: admin@example.com
Admin Password: password123

Vendor Email: vendor@example.com
Vendor Password: password123
