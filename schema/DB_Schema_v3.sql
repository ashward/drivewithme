DELIMITER //

CREATE PROCEDURE Insert_Journey
(
  IN Param_Username varchar(50),
  IN Param_Address_Line_1 varchar(200),
  IN Param_Address_Line_2 varchar(200),
  IN Param_Address_Line_3 varchar(200),
  IN Param_Address_Line_4 varchar(200),
  IN Param_Postcode varchar(50)
)
BEGIN
  DECLARE Local_UserID int;
  DECLARE Local_AddressID int;
  
  # Check that the user doesn't already exists before inserting
  #IF (SELECT COUNT(ID) FROM Users WHERE Username = @Param_Username) > 0
  #THEN
  #  SET @Local_UserID = (SELECT ID FROM Users WHERE Username = @Param_Username);
  #ELSE
    INSERT INTO 
      Users
      (Username)
    VALUES
      (Param_Username);
    
    # Get the new users ID 
    SET @Local_UserID = (SELECT LAST_INSERT_ID() FROM Users);
  #END
    
  # Now lets insert the address information
  INSERT INTO
    Addresses
    (Address_Line_1,Address_Line_2,Address_Line_3,Address_Line_4,PostCode)
  VALUES
    (Param_Address_Line_1,Param_Address_Line_2,Param_Address_Line_3,Param_Address_Line_4,Param_Postcode);
  
  # Gets the new addresses ID
  SET @Local_AddressID = (SELECT LAST_INSERT_ID() FROM Addresses);
    
  # Now lets insert the journey information
  INSERT INTO
    Journeys
    (User_ID, From_Address_ID)
  VALUES
    (@Local_UserID,@Local_AddressID);
  
END //

CREATE PROCEDURE Return_Journeys()
BEGIN
  SELECT
    Username,
    Address_Line_1,
    Address_Line_2,
    Address_Line_3,
    Address_Line_4,
    PostCode
  FROM
    Journeys AS J
  JOIN Users AS U
  ON U.ID = J.User_ID
  JOIN Addresses AS A
  ON A.ID = A.From_Address_ID;
END //

DELIMITER ;
