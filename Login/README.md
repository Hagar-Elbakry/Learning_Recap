# Sign Up System

This folder contains a simple sign-up system. Users can register with their name, email and password and they can delete their information from database.

## Structure
- **public/**: Contains the front-end files like HTML and CSS.
- **src/**: Contains the back-end PHP scripts for handling user data.

  - **actions**/: Handles database interactions.
    - `dbh.php`: Establishes a connection to the database.
    - `register.php`: Adds user data (name, email, password) to the database.
    - `delete.php`: Deletes user data from the database.
  - **db/**: Manages the database structure.
    - `create_db.php`: Creates the database.
    - `create_table.php`: Creates the necessary tables in the database.

## Features 

- **Sign Up**: Register a new user with a name, email, password.
- **Delete**: Remove user data from the database.
