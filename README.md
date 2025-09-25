# Student CRUD System – Task 2

## Project Overview
This project is a **Student Management System** built with **PHP, MySQL, and HTML/CSS**.  

It allows users to:  
- Add, edit, delete, and view student records.  
- Search students by name, email, or phone (if implemented).  
- Navigate records with basic CRUD functionality.  

---

## Features
- **Create:** Add new students with name, email, and phone.  
- **Read:** View student records in a table format.  
- **Update:** Edit existing student records.  
- **Delete:** Remove students from the database.  
- **Search (optional):** Search students by name, email, or phone.  

---

## Installation Instructions
1. Clone this repository:  
2. Move the folder to your **XAMPP `htdocs` directory**.  
3. Open **phpMyAdmin** and import the provided `database.sql` or manually create the `students` table:

```sql
CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50),
    email VARCHAR(50),
    phone VARCHAR(15)
);
http://localhost/student_crud_task2/index.php
