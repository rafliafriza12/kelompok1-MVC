# *Project 1*
# *Bank Locker Management System using PHP and MySql*
This bank locker management system aims to manage locker use efficiently and safely. In this system, users only have access to contact the admin and look for the locker code that has been given to them. This bank locker management system is designed so that users can just contact the admin and search for their locker code. Only admins have permission to register new lockers. In essence, this system is used to manage lockers at the bank.

# *Project 2*
# *⁠Directory Management System using PHP and MySQL*
This directory management system is specifically designed to manage business cards efficiently. In this system, users are only given access to view and search for business cards that already exist in the database. This directory management system is designed to manage business cards. Users can only view and search for available business cards, while admins have the ability to add, view, edit and delete business cards. This system ensures that business card information is well managed and always updated as needed.

### Installation

1. **Download and Install XAMPP:**

   - Download XAMPP from the [official website](https://www.apachefriends.org/index.html).
   - Install XAMPP and start the Apache and MySQL modules from the XAMPP Control Panel.

2. **Clone the Repository:**

   - Clone this repository to your local machine or download the ZIP file and extract it.

     ```bash
     git clone https://github.com/rafliafriza12/kelompok1-MVC.git
     ```

3. **Import the Database:**

   - Open phpMyAdmin by navigating to `http://localhost/phpmyadmin/`.
   - Create new databases named `dmsdb` and `blmsdb`.
   - Import the SQL files `blmsdb.sql` into `blmsdb` and `dmsdb.sql` into `dbmsdb`.

4. **Install Composer**
   - `https://getcomposer.org/download/`

### Running the Projects

1. **Open terminal and run this following command:**

   ```bash
   composer install
   ```

   ```bash
   composer update
   ```

   If you want to open Bank Locker Management System project:
   ```bash
   cd kelompok1-MVC\Bank-Locker-Management-system\public
   ```
   If you want to open Directori Management System project:
   ```bash
   cd kelompok1-MVC\DMS\public
   ```

   ```bash
   php -S localhost:8000
   ```

2. **Open http://localhost:8000 on your browser:**

## Project Structure

### MVC Structure

Each project follows the MVC pattern with the following directory structure:

- `models/`: Contains all the model classes for database interaction.
- `views/`: Contains all the view files for rendering the user interface.
- `controllers/`: Contains all the controller classes for handling the logic and user input.
- `config/`: Contains configuration files, including database configuration.
- `public/`: Contains publicly accessible files such as index.php and assets (CSS, JS, images).

# kelompok1-MVC

# Anggota Kelompok
1. Glenn Hakim
2. Rafli Afriza Nugraha
3. T.M Fadlul Ihsan
4. T. Farhansyah
5. Indriani Miza Alfiyanti
6. Saif
