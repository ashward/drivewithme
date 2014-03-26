CREATE PROCEDURE Insert_Journey
(
  Param_Username varchar(50),
  Param_Address_Line_1 varchar(200),
  Param_Address_Line_2 varchar(200),
  Param_Address_Line_3 varchar(200),
  Param_Address_Line_4 varchar(200),
  Param_Postcode varchar(50)
)
BEGIN
  SET @Local_UserID int
  SET @Local_AddressID int
  
  # Check that the user doesn't already exists before inserting
  SELECT CASE WHEN (SELECT COUNT(ID) FROM Users WHERE Username = @Param_Username) > 0
  THEN
    SET @Local_UserID = (SELECT ID FROM Users WHERE Username = @Param_Username)
  ELSE
    INSERT INTO 
      Users
      (Username)
    VALUES
      (@Param_Username)
    
    # Get the new users ID  
    SELECT LAST_INSERT_ID() INTO @Local_UserID FROM Users
  END
    
  # Now lets insert the address information
  INSERT INTO
    Addresses
    (Address_Line_1,Address_Line_2,Address_Line_3,Address_Line_4,PostCode)
  VALUES
    (@Param_Address_Line_1,@Param_Address_Line_2,@Param_Address_Line_3,@Param_Address_Line_4,@Param_Postcode)
  
  # Gets the new addresses ID
  SELECT LAST_INSERT_ID() INTO @Local_AddressID FROM Addresses
    
    
  # Now lets insert the journey information
  INSERT INTO
    Journeys
    (User_ID, From_Address_ID)
  VALUES
    (@Param_User_ID,@Param_From_Address_ID)
  
END
