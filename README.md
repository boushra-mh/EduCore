
# EduCore – Learning Management System (LMS)

## Overview
EduCore is a web-based educational platform built with Laravel 12. It supports Admin, Teacher, and Student roles with secure authentication and role-based permissions.

## Features
- Admin: Manage courses, teachers, students, categories, and tags
- Teacher: Manage lessons, assignments, grades, and communicate with students
- Student: Enroll in courses, view lessons, submit assignments, receive feedback
- Multi-language support (Arabic/English)
- Event listeners and email notifications
- Role-based permissions with Spatie Laravel Permission
- Token-based authentication with Laravel Sanctum

## Technologies
- Laravel 12
- PHP 8.1+
- MySQL / MariaDB
- Laravel Sanctum
- Spatie Laravel Permission
- Spatie Translatable (Arabic & English)

## Database Schema
- users, teachers, admins, courses, lessons, assignments, submissions, categories, tags
- Pivot tables: course_tag, course_teacher
- Soft deletes implemented

## Installation
1. Clone the repository:
```bash
git clone https://github.com/boushra-mh/EduCore.git
```
2. Install dependencies:
```bash
composer install
```
3. Copy `.env.example` to `.env` and set database credentials
```bash
cp .env.example .env
```
4. Generate application key:
```bash
php artisan key:generate
```
5. Run migrations and seeders:
```bash
php artisan migrate --seed
```

## Usage
- Access Admin, Teacher, and Student dashboards via login
- Manage courses, lessons, assignments, and users based on roles
- Multi-language content available for all UI and course information

## Contributing
- Follow PSR-12 coding standards
- Create pull requests for new features or bug fixes
- Write clean, maintainable, and documented code

## License
This project is licensed under the MIT License.

## Contact
- Developer: Boushra Al-Mouhammmad
- Email: boushraalmouhamad@gmail.com
- GitHub: https://github.com/boushra-mh/EduCore
