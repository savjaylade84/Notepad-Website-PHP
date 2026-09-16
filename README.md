# Jayson's Notepad

A simple web-based notepad application built with **PHP, MySQL, HTML, and CSS**. The application allows users to create, view, edit, and delete notes through a simple and responsive interface.

## Features

* Create new notes
* View saved notes
* Edit existing notes
* Delete notes with confirmation
* Automatically record the date and time when a note is created
* Responsive layout for different screen sizes
* MySQL database for storing notes

## Technologies Used

* **PHP** - Server-side scripting
* **MySQL** - Database management
* **HTML5** - Page structure
* **CSS3** - Styling and responsive design
* **JavaScript** - Confirmation alerts and client-side interactions

## Project Structure

```text
Notepad/
│
├── index.php
├── create.php
├── .env
├── .gitignore
├── loadenv.php
├── edit.php
├── update.php
├── delete.php
├── style.css
└── README.md
```

## Database Setup

Create the database:

```sql
CREATE DATABASE note_db;

USE note_db;
```

Create the notes table:

```sql
CREATE TABLE notes (
    ID INT PRIMARY KEY AUTO_INCREMENT,
    Title VARCHAR(100),
    Content TEXT,
    date_created DATETIME DEFAULT CURRENT_TIMESTAMP
);
```

## Configuration

The application currently uses the following MySQL configuration:

```md
DB_HOST =localhost
DB_USER =root
DB_PASS =
DB_NAME =note_db
```

If your MySQL configuration is different, update these values in the .env files.

## How to Run

### 1. Install a local PHP server

You can use a local development environment such as **XAMPP**, **WAMP**, or another PHP/MySQL server.

### 2. Clone or download the project

Place the project inside your server's web directory.

For XAMPP, this is usually:

```text
htdocs/
```

For example:

```text
htdocs/
└── Notepad/
```

### 3. Start the services

Start:

* Apache
* MySQL

### 4. Create the database

Open your MySQL interface, such as phpMyAdmin or MySQL CLI, and run the database setup SQL shown above.

### 5. Open the application

Open the project through your local server:

```text
http://localhost/Notepad/
```

## CRUD Operations

The application follows the basic **CRUD** concept:

| Operation | Description           |
| --------- | --------------------- |
| Create    | Add a new note        |
| Read      | Display saved notes   |
| Update    | Edit an existing note |
| Delete    | Remove a note         |

## Future Improvements

Possible improvements for future versions:

* User authentication
* Search notes
* Note categories or tags
* Pin important notes
* Dark mode
* Rich text editing
* Pagination for large numbers of notes
* Better input validation
* Prepared statements for all database queries

## Author

**John Jayson De Leon**

A simple project created as part of my journey in learning web development, PHP, and database management.

## License

This project is for educational and personal development purposes.
