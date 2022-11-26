
CREATE DATABASE login DEFAULT CHARACTER SET utf8 ;

CREATE TABLE IF NOT EXISTS logins (
  idlogins INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  loginName VARCHAR(45) NOT NULL,
  loginSurname VARCHAR(45) NOT NULL,
  loginUsername VARCHAR(45) NOT NULL,
  loginPassw VARCHAR(45) NOT NULL,
  my_role_idrole INT,
  FOREIGN KEY (my_role_idrole) REFERENCES my_role(idrole),
  UNIQUE INDEX loginUsername_UNIQUE(loginUsername)
);

CREATE TABLE IF NOT EXISTS my_role (
  idrole INT NOT NULL AUTO_INCREMENT,
  rName VARCHAR(45) NOT NULL,
  PRIMARY KEY (idrole)
);

CREATE TABLE request (
  idrequest INT NOT NULL PRIMARY KEY,
  salt INT NOT NULL,
  expires DATETIME NOT NULL,
  logins_idlogins INT,
  FOREIGN KEY (logins_idlogins) REFERENCES logins(idlogins)
);