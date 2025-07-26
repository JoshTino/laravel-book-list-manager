# 📚 Book List Manager

A simple Laravel-based application to manage a list of books. Users can add, view, and paginate through books with fields like title and author. Built with Laravel, Blade templating, Eloquent ORM, and Tailwind CSS.

---

## 🚀 Features

- ✅ Add new books (title & author)
- ✅ View all books in a paginated list
- ✅ Input validation with error display
- ✅ Responsive design using Tailwind CSS
- ✅ Laravel MVC structure with Eloquent models

---

## 🛠️ Tech Stack

- Laravel 10+ (or your version)
- PHP 8.1+
- Tailwind CSS (via Vite)
- MySQL or SQLite (configurable)
- Laravel's built-in validation & pagination


## 🧑‍💻 Setup Instructions

### 1. Clone the repo
git clone https://github.com/yourusername/book-list-manager.git
cd book-list-manager

2. Install dependencies
composer install
npm install
npm run dev

4. Set up environment
cp .env.example .env
php artisan key:generate
Update your .env file with database credentials.

5. Run migrations
php artisan migrate

7. Serve the app
php artisan serve
Visit http://127.0.0.1:8000

🧪 Seeding (Optional)
You can use Laravel factories to seed sample books:

php artisan tinker
// In Tinker
\App\Models\Book::factory()->count(10)->create();

## 📁 Folder Structure
routes/web.php              → Web routes
app/Http/Controllers/BookController.php
app/Models/Book.php
resources/views/books/      → Blade templates (index/create)
database/migrations/        → Book table schema

🙌 Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change or improve.

📄 License
This project is open-source and available under the MIT license.

👤 Author
Joshua Tinu
Full-stack developer | Laravel
LinkedIn https://www.linkedin.com/in/joshua-dangana-a68a75312/
