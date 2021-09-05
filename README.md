# AR Shopping store 
## Project Overview
AR shopping store is a simple e-commerce store with design inspired by popular e-commerce clothing chains such as Zara, Marks and Spencer etc.
To attract customers attention it uses smooth parallax effects and maintains a minimal look with it's black and white color pallete.

## Installation
1. The project relies on the LAMP stack. For installation you can follow the following [RedHat article](https://www.redhat.com/sysadmin/lamp-server)
2. After installation, create a database named `shopping_store` using MySQL CLI. Run the following command
```create database shopping_store;```
3. The next step is to populate the database, this can be done using the `shopping_store.sql` file in the database folder. To do this run the following command in the MySQL CLI.
``` source <path to database folder>/shopping_store.sql```
4. The last step is to copy the `shopping-store` folder to `www/html`. With default apache installation it should be under `/var/www`.


