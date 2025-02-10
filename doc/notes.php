<!-- <?php
// SELECT first name from the MyGuest table where the id is 1
// SELECT firstname FROM MyGuest WHERE id = 1;

// SELECT first name from MyGuest table where the id is the last inserted id
// This uses last_insert_rowid() to return the ID of the last inserted row.
// SELECT firstname FROM MyGuest WHERE id = last_insert_rowid();

// Create the "MyUsers" table with columns: id, fullname, email, and password
// id is an AUTO_INCREMENT field that automatically increases with each new record
// CREATE TABLE MyUsers(
//     id INTEGER PRIMARY KEY AUTOINCREMENT,   // Primary key with auto-increment
//     fullname TEXT NOT NULL,                 // Full name is required (NOT NULL)
//     email TEXT NOT NULL,                    // Email is required (NOT NULL)
//     password TEXT NOT NULL                  // Password is required (NOT NULL)
// );

// Insert a new record into the MyUsers table with specified values
// INSERT INTO MyUsers(fullname, email, password) VALUES ('olorunfemi tayo', 'ot@gmail.com', '12345');

// Select all records from the MyUsers table to display the inserted data
// SELECT * FROM MyUsers;

// Select the id, firstname, and lastname from the MyGuest table
// SELECT id, firstname, lastname FROM MyGuest;

// Select the id, firstname, and lastname from MyGuest and order the results by lastname (ascending)
// SELECT id, firstname, lastname FROM MyGuest ORDER BY lastname;

// Select the id, firstname, and lastname from MyGuest and order the results by lastname (descending)
// SELECT id, firstname, lastname FROM MyGuest ORDER BY lastname DESC;

// Delete all records from the MyUsers table (but the table structure remains)
// DELETE FROM MyUsers;

// Delete records from MyGuest table where the firstname is 'doe'
// DELETE FROM MyGuest WHERE firstname = 'doe';

// Update the lastname of all records in the MyGuest table to 'isaac'
// UPDATE MyGuest SET lastname = 'isaac';

// Update the lastname of the record where id = 2 in MyGuest table to 'olorunfemi'
// UPDATE MyGuest SET lastname = 'olorunfemi' WHERE id = 2;

/* Note: The WHERE clause in the UPDATE statement specifies which record to update.
   If the WHERE clause is omitted, all records would be updated! */

// Select the first 30 records from the MyGuest table
// SELECT * FROM MyGuest LIMIT 30;

// Select 10 records from the Orders table starting from the 16th record (offset 15)
// SELECT * FROM Orders LIMIT 10 OFFSET 15;
?> -->