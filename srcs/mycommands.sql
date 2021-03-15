GRANT ALL ON phpmyadmin.* TO 'admin'@'localhost' IDENTIFIED BY 'password' WITH GRANT OPTION;
CREATE DATABASE wordpress DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
GRANT ALL ON wordpress.* TO 'admin'@'localhost' IDENTIFIED BY 'password';
FLUSH PRIVILEGES;