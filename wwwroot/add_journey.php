<!DOCTYPE HTML>
<html>
<head>
<title>Add a journey</title>
</head>
<?php
if(array_key_exists("home", $_REQUEST))
{
  $con = mysqli_connect("localhost", "root", "root", "drivewithme");

  if (mysqli_connect_errno())
  {
    print("Failed to connect to MySQL: " . mysqli_connect_error());
  }

  $uid = 0;

  $addressStatement = $con->stmt_init();
  $addressStatement->prepare("INSERT INTO Addresses (Address_Line_1)
                              VALUES (?)");
  $addressStatement->bind_param("s", $_REQUEST['home']);
  $addressStatement->execute();
  $aid = $addressStatement->insert_id;
  $addressStatement->close();

  $journeyStatement = $con->stmt_init();
  $journeyStatement->prepare("INSERT INTO Journeys (User_ID, From_Address_ID)
                              VALUES (?, ?)");
  $journeyStatement->bind_param("ii", $uid, $aid);
  $journeyStatement->execute();
  $journeyStatement->close();

  mysqli_close($con);

  print('<p>Added ' . htmlentities($_REQUEST['home']) . '</p>');
  print('<hr />');
}
?>
<form method="post" action="add_journey.php">
<label for="home">Home: <input id="home" name="home" type="text"/></label>
<input type="submit" />
</form>

<hr />

<a href="index.html">Back</a>
</html>