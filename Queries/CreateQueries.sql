-----------Script to Create Tables for the Online Bookstore Management System (11 Tables)-------------
CREATE TABLE Customer(User_ID int NOT NULL,
old_password VARCHAR(30),
new_password VARCHAR(30),
DOB DATE,
Gender VARCHAR(10),
First_Name VARCHAR(30),
Last_Name VARCHAR(30),
Street VARCHAR(20),
City VARCHAR(20),
State VARCHAR(20),
ZIP int,
PRIMARY KEY(User_ID)
);

CREATE TABLE Customer_Card_Details(User_ID int NOT NULL,
Card_Number int NOT NULL,
CVV int NOT NULL,
Card_Type VARCHAR(20) NOT NULL,
Name_on_Card VARCHAR(30) NOT NULL,
Expiry_Date date NOT NULL,                                   
PRIMARY KEY(User_ID,Card_Number, CVV, Card_Type, Name_on_Card, Expiry_Date),
FOREIGN KEY(User_ID) REFERENCES Customer(User_ID) ON DELETE CASCADE
);

CREATE TABLE Employee(User_ID int NOT NULL,
old_password VARCHAR(30),
new_password VARCHAR(30),
Salary int,
Designation VARCHAR(30),
Date_of_Joining DATE,
DOB DATE,
Gender VARCHAR(10),
First_Name VARCHAR(30),
Last_Name VARCHAR(30),
Street VARCHAR(20),
City VARCHAR(20),
State VARCHAR(20),
ZIP int,
PRIMARY KEY(User_ID)
);

CREATE TABLE Books(ISBN int NOT NULL,
Name VARCHAR(30),
Author VARCHAR(30),
Edition int,
Type VARCHAR(30),
Genre VARCHAR(10),
Binding_Type VARCHAR(30),
Buying_Price int,
Street VARCHAR(20),
City VARCHAR(20),
State VARCHAR(20),
ZIP int,
User_ID int NOT NULL,
PRIMARY KEY(ISBN),
FOREIGN KEY(User_ID) REFERENCES Employee(User_ID) ON DELETE CASCADE
);

CREATE TABLE Publisher(Publisher_ID int NOT NULL,
Publisher_Name VARCHAR(30),
Street VARCHAR(20),
City VARCHAR(20),
State VARCHAR(20),
ZIP int,
PRIMARY KEY(Publisher_ID)
);

CREATE TABLE Seller(Seller_ID int NOT NULL,
Seller_Name VARCHAR(30),
SSN int NOT NULL,
Phone int,
Street VARCHAR(20),
City VARCHAR(20),
State VARCHAR(20),
ZIP int,
PRIMARY KEY(Seller_ID)
);

CREATE TABLE Warehouse(Warehouse_ID int NOT NULL,
Rent int,
Location VARCHAR(30),
PRIMARY KEY(Warehouse_ID)
);

CREATE TABLE Buys(User_ID int NOT NULL,
ISBN int NOT NULL,
Buying_Date Date,
Tax int,
Quantity int,
Price int,
PRIMARY KEY(User_ID,ISBN),
FOREIGN KEY(User_ID) REFERENCES Customer(User_ID) ON DELETE CASCADE,
FOREIGN KEY(ISBN) REFERENCES Books(ISBN) ON DELETE CASCADE
);

CREATE TABLE Publishes(Publisher_ID int NOT NULL,
ISBN int NOT NULL,
PRIMARY KEY(Publisher_ID,ISBN),
FOREIGN KEY(Publisher_ID) REFERENCES Publisher(Publisher_ID) ON DELETE CASCADE,
FOREIGN KEY(ISBN) REFERENCES Books(ISBN) ON DELETE CASCADE
);

CREATE TABLE Sells(Seller_ID int NOT NULL,
ISBN int NOT NULL,
Seller_Price int,
PRIMARY KEY(Seller_ID,ISBN),
FOREIGN KEY(Seller_ID) REFERENCES Seller(Seller_ID) ON DELETE CASCADE,
FOREIGN KEY(ISBN) REFERENCES Books(ISBN) ON DELETE CASCADE
);

CREATE TABLE Stocks(Warehouse_ID int NOT NULL,
ISBN int NOT NULL,
PRIMARY KEY(Warehouse_ID,ISBN),
FOREIGN KEY(Warehouse_ID) REFERENCES Warehouse(Warehouse_ID) ON DELETE CASCADE,
FOREIGN KEY(ISBN) REFERENCES Books(ISBN) ON DELETE CASCADE
);

