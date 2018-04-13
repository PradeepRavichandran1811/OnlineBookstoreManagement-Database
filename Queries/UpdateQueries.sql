---------------------------------------Query to Update a Genre of a Book---------------------------------

UPDATE Books
SET Genre='Science'
Where ISBN=9781308866857;

----------------------------------Query to Increase Salary of Warehouse Workers by 10%------------------------

UPDATE Employee
SET Salary= Salary*1.10
Where Designation='Warehouse Worker';

----------------------------Query to Increase the Buying Price of a Book which has been increased by 5%-------------------

UPDATE Books
SET Buying_Price=Buying_Price*1.05
Where ISBN=9780199679416;
