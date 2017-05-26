# Comment-System-Using-PHP-and-MySQLi

This simple repo shows how to create a comment system using Object Oriented method of PHP and MySQLi. Basically the User Comments are stored in a database. Each comment box has an edit and delete button whereby the user can update his/her comments. The User has to LogIn before updating comments

### Creating the MySQL Database

Create database "CommentTut" and create tables "comments" on your localhost:

```sql
CREATE TABLE `comments` (
  `id` char(23) NOT NULL,
  `date` varchar(100) NOT NULL DEFAULT '',
  `message` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `date_UNIQUE` (`date`),
  UNIQUE KEY `message_UNIQUE` (`message`)
) 

ENGINE=InnoDB DEFAULT CHARSET=utf8;

```
### Setup the `db.php` file
```
<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "CommentTut";

	$db = new mysqli($servername, $username, $password, $database);

	if(!$db){
		//Error Message
		die("Connection failed: " . $db->connect_error);
	}

```

## Files

* index.php

    This file contains the comment-boxes and a video file to watch at the top. When the user submit a comment, the comments are taken to comments.php for further validation.

* db.php

    This is a PHP file contains configuration settings to the database.

* editcomment.php

    This php file is oened when the user wishes to edit his/her comments. The comments are updated in the database and on the index.php form.
	
* comments.php

	This file contains all our functions to make the whole system work. This helps in organization and prevents repetion of the same code,
	
## License
This program is free software published under the terms of the GNU [Lesser General Public License](http://www.gnu.org/copyleft/lesser.html).
You can freely use it on commercial or non-commercial websites.
