### The official repository of Threads - the official newsletter of CSED, NITC
[threads.nitc.ac.in](https://threads.nitc.ac.in/)

# Setting up a local copy of the website

This project was intended to be used with the LAMP (Linux Apache MySQL PHP) stack. If you are familiar with any other server stacks and want to use them instead, you can make the necessary changes, but it is highly recommended that you use LAMP.

- **Install Apache web server, MySQL server (which usually includes a client as well) and PHP**. The steps to do so might differ slightly based on your operating system. Most popular linux distributions have native packages of these, which can be easily installed from the command line. Depending on your OS, you may have to set up a root user for MySQL. Please look online for instructions specific to your operating system.

- **Install phpMyAdmin and set up a new user for threads**. Depending on your OS and version, you may or may not have to create a MySQL user for phpmyadmin and you may or may not be allowed to login as your MySQL root user using phpMyAdmin. It is recommended that you create a new MySQL user for threads and use that to login from phpMyAdmin.

- **Download a copy of the database from [here](https://drive.google.com/open?id=1wiFd8t3fQxWnrGtJQ7BUqcnbBY5Wyka3)**. Note that this database will be obsolete and is not in sync with the original database hosted in the server. Login to phpMyAdmin and import the database using the downloaded file. Use phpMyAdmin to create a new database named “threads” and import the database from the file.

- **Clone the repository to get the files into your local machine**. Move the files to the root of the serving directory of Apache. For most distributions, this is /var/www/html. **Download the contents of the assets folder from [here](https://drive.google.com/open?id=1LJzUFAHFUIHiuCElY7k6_YZ2vhlB1DcS)** and copy it into a folder titled "assets" inside the project folder. **Download the database connection file (con.php) from [here](https://drive.google.com/open?id=1JGENVz6ObWwZjB8L-ElFlQb69P50bVbU)**. Fill in the appropriate details such as your SQL username and password and copy to the file to common folder in the project directory.

- For the proper functioning of this web application, apache should have write permissions to certain folders inside the project directory. This can be achieved in several ways like creating a user group with the current user and www-data (the user used by Apache) (recommended), changing the ownership to www-data (but then the current user cannot write new files), giving rwx to all users (unsafe) etc. Since it’s is a local environment, any of these is fine.

Restart apache. If everything went right, you should be able to access the website through your browser at localhost. You should be able to use the admin dashboard at localhost/admindash using (admin:admin) as the credentials.


# CONTRIBUTING


Please follow the standard git workflow for contributions.

- Fork this repository.
- Identify an item to work on. Please see the TODO file for suggestions.
- Browse issues to see if there is any related work in progress.
- If no related issue is open, then go ahead and open an issue and comment about your work in progress.
- It is recommended that you work on a separate branch. When the item is completed, make a pull request and reference the issue that you are closing. Make corresponding changes in TODO file if necessary.
- If a conflict occurs between your branch and master, then pull the updated master and merge it locally to your branch. Resolve the conflict locally, complete the merge and push the commits. The pull request will be updated automatically.