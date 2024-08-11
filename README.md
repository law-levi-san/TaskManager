# Task Manager

## Overview

The Task Manager is a simple web application built with Laravel for managing tasks. The application allows users to create, view, edit, and delete tasks.

## Features

- **Task Management**: Create, update, and delete tasks.
- **Task Details**: View detailed information about each task.
- **Task Status**: Mark tasks as pending or completed.
- **User Interface**: Simple and intuitive user interface.



###

## Installation

1. Clone the repository:

   ```bash
   git clone https://github.com/your-username/TaskManager.git
   cd taskmanager

2. Set Up Your Environment

    Ensure you have PHP, Composer, and Laravel installed on your system.
   
3. Install Dependencies
    ```bash
    install composer

4. Set Up the Environment File

    Copy the .env.example file to .env:

```bash
cp .env.example .env

Configure your .env file with the correct database and application settings.

```
5. Generate Application Key

bash
```
php artisan key:generate
```

6. Run Migrations

    Create the database and run migrations:
   
```
php artisan migrate
```

7. Start the Development Server

```
php artisan serve
```

8. Access the Application

    Open your web browser and go to:

http://localhost:8000

Usage

    
    Home: View a list of all tasks and access options to create, edit, or delete tasks.
    Add Task: Use the form on the "Add Task" page to create new tasks.
    Edit Task: Modify existing tasks by accessing their details and using the edit form.
    Task Details: View detailed information about each task.
    
