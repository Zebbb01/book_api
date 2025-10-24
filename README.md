# Book API - Laravel REST API

## Setup Instructions

1. Clone the repository
2. Run `composer install`
3. Copy `.env.example` to `.env`
4. Configure database in `.env`
5. Run `php artisan key:generate`
6. Run `php artisan migrate`
7. Run `php artisan serve`

## API Endpoints

### Authors
- GET /api/authors - List all authors
- POST /api/authors - Create new author
- GET /api/authors/{id} - Show specific author
- PUT /api/authors/{id} - Update author
- DELETE /api/authors/{id} - Delete author

### Books
- GET /api/books - List all books
- POST /api/books - Create new book
- GET /api/books/{id} - Show specific book
- PUT /api/books/{id} - Update book
- DELETE /api/books/{id} - Delete book

## Features
- Full CRUD operations for Authors and Books
- One-to-Many relationship (Author has many Books)
- Input validation with error messages
- RESTful API conventions
- API Resources for formatted responses
- Pagination support

## Technologies
- Laravel 11
- SQLite/MySQL
- PHP 8.2+
```

2. **Create .gitignore** (should already exist):
```
/vendor
/node_modules
.env
.env.backup
database/database.sqlite