-----------------------------1.Which genre of books has been purchased more by the Customers?-------------------------

Select Genre from  (
            Select COUNT(Genre) as Tot,Genre 
            From Books 
            Group by Genre
            Order By Tot desc)as countg 
            where Tot = (
            Select max(Tot) from  (
                    Select COUNT(Genre) as Tot,Genre 
                    From Books 
                    Group by Genre
                    Order By Tot desc)as countgenre);
                    
--------------------------------------2.Which type of Book is more preferred?-------------------------------------------

Select Type from  (Select COUNT(Type) as Total,Type 
            		From Books 
            		Group by Type
            		Order By Total desc) as counttype
where Total = (select max(Total) from  (Select COUNT(Type) as Total,Type 
                    					From Books 
                    					Group by Type
                    					Order By Total desc)as counttype);
                    
------------------------3.Which Type of Binding is preferred the most?(Excluding E-Book(0ther))--------------------------------

Select Binding_Type from  (
            Select COUNT(Binding_Type) as T,Binding_Type 
            From Books 
            where Binding_Type='Hardcover' or Binding_Type='Paperback'
            Group by Binding_Type
            Order By T desc) 
            where T = (
            select max(T) from  (
                    Select COUNT(Binding_Type) as T,Binding_Type 
                    From Books 
                    where Binding_Type='Hardcover' or Binding_Type='Paperback'
                    Group by Binding_Type
                    Order By T desc));
                    
-------------------------------------4.Which Customers has bought more number of books?-------------------------------

Select First_Name,Last_Name From(
            Select Count(ISBN) as U,User_ID, First_Name, Last_Name
            From Buys NATURAL JOIN Customer
            Group By User_ID,First_Name, Last_Name
            Order By U desc) 
where U = (select MAX(U) as MAXVAL from  
                (Select COUNT(ISBN) as U,User_ID
                 From Buys 
                 Group by User_ID
                 Order By U desc));
                                 
---------------------------------------5.Identify the most preferred publication for a genre-----------------------------

Select Publisher_Name
From (Select COUNT(Buys.ISBN) as M,Publisher_Name
                  From ((Buys Inner join Books on Buys.ISBN=Books.ISBN ) INNER JOIN Publishes on Buys.ISBN=Publishes.ISBN)Inner JOIN Publisher on Publishes.Publisher_ID=Publisher.Publisher_ID
                  Where Genre='Art'
                  Group by Publisher_Name) as counti
where M = (select MAX(M) 
           From  (Select COUNT(Buys.ISBN) as M
                  From ((Buys Inner join Books on Buys.ISBN=Books.ISBN ) INNER JOIN Publishes on Buys.ISBN=Publishes.ISBN)Inner JOIN Publisher on Publishes.Publisher_ID=Publisher.Publisher_ID
                  Where Genre='Art'
                  Group by Publisher_Name
                  )as countISBN);
                  
--------------------------------------6.Which State spends more money on books?----------------------------------------------

Select State
FROM (Select SUM(Price) as Total_Money,State
      From Buys JOIN Books on Buys.User_ID=Books.User_ID
      Group by State
      Order by Total_Money desc)
where Total_Money = (Select MAX(Total_Money)
                     From (Select SUM(Price) as Total_Money,State
                           From Buys JOIN Books on Buys.User_ID=Books.User_ID
                           Group by State
                           Order by Total_Money desc));
 
--------------------------------------7.Find the Employee with Highest Salary-----------------------------------------

Select First_Name, Last_Name
From Employee
Where Salary= (Select MAX(Salary) as Sal
               From Employee);
               
---------------------------------8.Identify the Employee who ships more books From Warehouse 1001---------------------

Select First_Name,Last_Name
From Employee
where User_ID =(Select User_ID
                From (Select Count(ISBN) as TotalISBN,User_ID
                From Employee Natural Join Books
                Where Warehouse_ID=1001 AND Designation='Warehouse Worker'
                Group By User_ID
                Order by TotalISBN desc));
                
---------------------------------9.Which Zipcode Buys Books from a particular Genre(say Art)?---------------------

select DISTINCT ZIP from Books,Buys
where Books.ISBN = Buys.ISBN AND Genre='Art';

-------------------------------10.Which Seller is preferred most for a particular genre?--------------------------

Select Seller_Name
From (Select COUNT(Buys.ISBN) as I,Seller_Name
                  From ((Buys Inner join Books on Buys.ISBN=Books.ISBN ) INNER JOIN Sells on Buys.ISBN=Sells.ISBN)Inner JOIN Seller on Sells.Seller_ID=Seller.Seller_ID
                  Where Genre='Stories'
                  Group by Seller_Name)as counti
where I = (select MAX(I) 
           From  (Select COUNT(Buys.ISBN) as I,Seller_Name
                  From ((Buys Inner join Books on Buys.ISBN=Books.ISBN ) INNER JOIN Sells on Buys.ISBN=Sells.ISBN)Inner JOIN Seller on Sells.Seller_ID=Seller.Seller_ID
                  Where Genre='Stories'
                  Group by Seller_Name
                  )as countI);

----------------------------11.Identify the Warehouses that Contains the book with ISBN 9780132319669-------------------

Select Warehouse_ID
from Stocks
where ISBN=9780132319669;

---12.Find the Total Amount Spent by each User between February and May of 2017 and Total spent by all customers in those months-- 
 
Select User_ID,Sum(Price) as TotPrice
From Buys
WHERE Buying_Date BETWEEN '2017/02/01' AND '2017/05/01'
GROUP BY User_ID WITH ROLLUP;

---------------------------------13.Identify the Top 5 Best Selling Books----------------------------------------
Select Name
From Books
where ISBN IN(Select ISBN
              From (Select ISBN,Count(ISBN) as Total
                  From Buys
                  Group By ISBN
                  Order by Total Desc
                  LIMIT 5) as CountISBN
              );


