# PHP CRUD Web Application

This is a simple PHP web application demonstrating CRUD (Create, Read, Update, Delete) operations on a MySQL database. The application allows users to insert, view, edit, and delete records in a `student` table. This Application is made using HTML, CSS, Javascript, Bootstrap, PHP, MySQL.

## Features

- Create new student records
- Read and display existing student records
- Update existing student records
- Delete student records

## Technologies Used
- **Backend:** PHP
- **Database:** MySQL
- **Frontend:** HTML, CSS (with optional Bootstrap for styling)
- **Web Server:** Apache or Nginx

## Prerequisites

- PHP 7.0 or higher
- MySQL 5.6 or higher
- Web server (e.g., Apache, Nginx)
- Composer (optional, for dependency management)

## Installation

1. **Clone the repository:**
   ```bash
   git clone https://github.com/your-username/student-management-system.git
   cd student-management-system

2. **Set up the database:**
   * Create a MySQL database:
        CREATE DATABASE phpcrud;

   * Create the student table:
        CREATE TABLE student (
        id INT AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(255) NOT NULL,
        city VARCHAR(255) NOT NULL,
        address VARCHAR(255) NOT NULL,
        message TEXT NOT NULL
     );

3. **Run the application:**

    * Place the project folder in your web server's root directory (e.g., htdocs for XAMPP, www for WAMP).

    * Access the application via your web browser:
        http://localhost/student-management-system

## Usage

- Insert a New Record:
    Fill in the form fields for username, city, address, and message.
    Click the "Insert" button to save the record to the database.
- View Existing Records:
    The home page displays a list of all student records in the database.
- Update a Record:
    Click the "Edit" button next to the record you want to update.
    Modify the form fields and click the "Update" button to save the changes.
- Delete a Record:
    Click the "Delete" button next to the record you want to delete.
    Confirm the deletion in the prompt.

## Contact

Feel free to reach out with any questions or suggestions:

- **Email**: mayurmore6468@gmail.com
- **GitHub**: [mayurmore6468](https://github.com/mayurmore6468)

Thank you for checking out the web app!


## Note :
'phpcrud' file that has been exported is kept in databse folder of this same directory.



