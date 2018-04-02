# Role Based Access Control PHP Framework
Role Based Access Control PHP Framework is my personal PHP script in order to develop a rapid system/application mainly focusing on login and verify user access control process. this php script equipped with md5 hashing for small scale system (you may used any type of hashing you desired). This script already has the required file structure to jumpstart you system development. 

## Getting Started

Explaination of the columns in the users table
- id : unique value of the user data
- email : email of the user
- password : password of the user (MD5 Hash)
- name : name of the user
- userType : type of the user. determined by Int such as 1 for admin, 2 for user , 3 for accountant

### Prerequisites

1. PHP 5+
2. MySQL

### Installing

1. import the rbac.sql into your mysql database. 
2. Copy all the project items
3. The file structure is easy to use and understand. admin, user and accountant is the type of the user in your system.
4. configure the database credentials and configuration details in the 'includes/config.php'
5. if there's no user available in the database, run this sql below
```
INSERT INTO `user` (`id`, `email`, `password`, `name`, `userType`) VALUES
(57, 'admin@email.com', 'ee11cbb19052e40b07aac0ca060c23ee', 'Muhammad Farid', 1),
(58, 'user@email.com', 'ee11cbb19052e40b07aac0ca060c23ee', 'Muhammad Farid', 2,),
(59, 'accountant@email.com', 'ee11cbb19052e40b07aac0ca060c23ee', 'Muhammad Farid', 3);
```

## Built With

* [Bootstrap 4](https://getbootstrap.com/) - Bootstrap 4
* [SweetAlert](https://github.com/sweetalert2/sweetalert2) - Beautiful Alert library

