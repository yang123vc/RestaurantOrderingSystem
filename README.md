# RestaurantOrderingSystem

1. Imagine you have to design an application for a restaurant ordering system. Please follow the requirements listed below:<br />
⋅There is a possibility to order lunch or drink<br />
⋅There are three cuisines available to order from (Polish, Mexican, Italian)<br />
⋅Lunch consists of main course and dessert<br />
⋅When ordering a drink, customer can additionally ask for ice cubes or/and lemon<br />
⋅We must have getPrice() and getName() methods for each meal and drink <br />

2. SQL queries:  <br />

I:	SELECT * FROM Country WHERE 400 < ( 
            SELECT SUM(City.Population) 
            FROM City 
            WHERE City.CountryID = Country.CountryID
            )
<br />
II:	SELECT * FROM Country WHERE 0 = (
    		SELECT COUNT(*)
    		FROM City  
        	JOIN Building ON Building.CityID = City.CityID
    		WHERE City.CountryID = Country.CountryID
    		)
