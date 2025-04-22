
# Laravel Learning Projects

This repository contains various learning projects built using the **Laravel Framework**. Each folder represents a focused mini-project that demonstrates essential concepts and features of Laravel, such as authentication, database operations, email sending, and full system implementation.

## About

This repository is designed to help understand the core principles of Laravel development including routing, controllers, models, database migrations, Blade templating, email handling, authentication, and full-stack functionality.

Key topics include **Blade templating, authentication (Login), database operations (CRUD), Laravel mail system, and task management with MVC structure. This collection serves as a learning guide for both beginners and intermediate Laravel developers.**

## Projects Included

1. **Theme Integration**  
   Integrating external themes and templates into Laravel's Blade structure, demonstrating how to reuse layouts and partials.

2. **Database Practice**  
   Hands-on practice with database migrations, seeding, and Eloquent ORM queries for CRUD operations.

3. **Login Practice**  
   Implementing Laravel’s built-in authentication system, including login/logout features and validation.

4. **Send Mail**  
   Sending emails using Laravel’s mail functionality with SMTP integration, including form-driven email sending.

5. **Task Management System**  
   A mini full-stack application to manage tasks with user roles, task creation, updating, deletion, and status management using Eloquent and Blade.


## Project Structure

```
/laravel-learning-projects
│── /1) Theme Integration
│── /2) Database Practice
│── /3) Login Practice
│── /4) Send Mail
│── /5) Task Management System
│── README.md
```


## Setup Instructions

1. Clone the repository:
   ```bash
   git clone https://github.com/WaqasAhmed-123/laravel-projects.git
   cd laravel-projects
   ```
2. Navigate to a project folder:
   ```bash
   cd "1) Theme Integration"
   ```
3. Install dependencies:
   ```bash
   composer install
   ```
4. Create a `.env` file:
   ```bash
   cp .env.example .env
   ```
5. Generate application key:
   ```bash
   php artisan key:generate
   ```
6. Set up database:
   - Configure DB connection in `.env`
   - Run migrations:
     ```bash
     php artisan migrate
     ```
7. Run the application:
   ```bash
   php artisan serve
   ```


## Contact
For any queries, reach out via:
- GitHub: [WaqasAhmed-123](https://github.com/WaqasAhmed-123)
- Email: waqaxahmed786@gmail.com
