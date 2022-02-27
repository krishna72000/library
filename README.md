<p align="center">
    <h1 align="center">Library Management</h1>
    <br>
</p>

Steps to run this project

Step 1: place the project folder into hosting environment ie insice your htdocs folder if xampp or inside www/html folder if wamp server

Step 2: create database with name library and import the file database.sql. database.sql in inside the project folder

Step 3: update the database and its login detail in file config/db.php. place your db name, db user, and db password here.

Step 4: unzip vendoe.zip folder right where it is.

Step 5: Run command `php yii serve` inside the project folder and follow the link on browser
                                    OR
        Open your browser and enter the link `http://localhost/library/web` to start the project.


Current progress

-> Database tables are created which are 

    user -> holds user/student account detail
    admin -> holds admin user detail
    book -> holds book detail
    book copy -> holds the copy of the book, that is in our system, if there are 100 books of 
                  Advance math Edition 2, then its on recorded as only one book into table book and there will be 100 copy record in booy copy, which will represent all to 100 books.
    favourite -> holds favourite books detail of user
    book_flow -> holds book check in and check out details

-> application

    ------------- Admin Part -------------------
    admin can login into the system
    admin can create, view, update and delete book record


    --------------- User Part  -----------------
    user can signup and login into the system
    user can view list of books
    user can search the books
    user can view the book

-> Login detail

    ------------ Admin ----------------
    email: admin@gmail.com
    password : 123456

    ------------ User -----------------
    email: user@gmail.com
    password : 123456
