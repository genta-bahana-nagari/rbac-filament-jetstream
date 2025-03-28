# Laravel Project with Filament, Filament Shield, Jetstream & Livewire

## 📖 Overview
This is a Laravel-based project that includes:
- [Filament](https://filamentphp.com/) (Admin Panel)
- [Filament Shield](https://github.com/bezhanSalleh/filament-shield) (Role & Permission Management)
- [Jetstream](https://jetstream.laravel.com/) with **Livewire** (Authentication & Dashboard)
- Laravel's default dependencies for a modern web application

---

## 🚀 **Installation Guide**
Follow these steps to set up the project after cloning from GitHub.

### 1️⃣ **Clone the Repository**
```sh
git clone https://github.com/genta-bahana-nagari/ukk_fullstack.git
cd ukk_fullstack # or your repo directory
```

### 2️⃣ **Install Dependencies**
Make sure you have **PHP, Composer, and Node.js** installed.

#### 🔹 **Install PHP Dependencies**
```sh
composer install
```

#### 🔹 **Install JavaScript Dependencies (specially for Vite - Tailwind in Livewire)**
```sh
npm install
```

### 3️⃣ **Set Up Environment File**
```sh
cp .env.example .env
```
Modify `.env` file to match your database and app configuration.

### 4️⃣ **Generate Application Key**
```sh
php artisan key:generate
```

### 5️⃣ **Set Up Database**
Make sure your `.env` file has the correct database credentials, then run:
```sh
php artisan migrate
```

### 6️⃣ **Set Up Storage & Permissions**
```sh
php artisan storage:link # optional, you can skip this because I'm not using any media in database.
chmod -R 775 storage bootstrap/cache # if you use Linux
```

### 7️⃣ **Set Up Filament Shield (Roles & Permissions)**
```sh
php artisan shield:install
```
You may also need to run:
```sh
php artisan shield:generate --all
```
to create default permissions.

### 8️⃣ **Run the Application**
```sh
php artisan serve
```
```sh
npm run dev
```
Now, open [http://127.0.0.1:8000](http://127.0.0.1:8000) in your browser.

---

## 🔑 **Default Login Credentials**
| Role      | Email             | Password |
|-----------|------------------|----------|
| Super Admin | admin@example.com | password |

---

## 🔧 **Useful Commands**
Run migrations with fresh data:
```sh
php artisan migrate:fresh
```
Compile assets for production:
```sh
npm run build
```
Or for development:
```sh
npm run dev
```
Run tests:
```sh
php artisan serve
```

---

## 🛠 **Tech Stack**
- **Laravel** (Backend Framework)
- **Filament** (Admin Panel)
- **Filament Shield** (Role & Permission Management)
- **Jetstream** with **Livewire** (Authentication & Dashboard)
- **Tailwind CSS** (Styling)
- **Alpine.js** (Lightweight JavaScript)
- **MySQL/PostgreSQL** (Database)

---

## 📜 **License**
This project is licensed under the [MIT License](LICENSE).

---

## 💡 **Contributing**
Feel free to submit pull requests and issues! 😊
