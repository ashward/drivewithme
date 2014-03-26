CREATE TABLE Users (
         ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
         Username VARCHAR(100) NOT NULL,
         Email_Address VARCHAR(500) NOT NULL
       );

CREATE TABLE Journeys (
         ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
         User_ID INT NOT NULL,
         From_Address_ID INT NOT NULL
       );

CREATE TABLE Addresses (
         ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
         Address_Line_1,
         Address_Line_2,
         Address_Line_3,
         Address_Line_4,
         PostCode
       );
