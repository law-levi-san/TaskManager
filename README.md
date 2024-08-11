# Task Manager

## Overview

The Task Manager is a simple web application built with Laravel for managing tasks. The application allows users to create, view, edit, and delete tasks.

## Features

- **Task Management**: Create, update, and delete tasks.
- **Task Details**: View detailed information about each task.
- **Task Status**: Mark tasks as pending or completed.
- **User Interface**: Simple and intuitive user interface.

-> Home Page
![Home](https://github.com/user-attachments/assets/f2e46cd3-cf69-4dc3-bd27-db0da5187684)


->Create Task
![CreateTask](https://github.com/user-attachments/assets/e1130824-8e57-4dd4-992a-a8965824f769)


->Show Tasks
![Showtask](https://github.com/user-attachments/assets/0f0ed2c4-618d-4b53-9160-2a68f3a525d4)

-> Edit Task
![Screenshot 2024-08-11 150442](https://github.com/user-attachments/assets/cd54a3d0-a0a8-4bdf-a294-03cef446827b)

->Delete Task
![Home](https://github.com/user-attachments/assets/ed7e89d4-c4a7-4ff9-ac18-1421cc1a5885)



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
    
