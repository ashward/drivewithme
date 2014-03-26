<?php
if(array_key_exists("home", $_REQUEST))
{
  $uid = 0;

  $addressStatement = $db->stmt_init();
  $addressStatement->prepare("INSERT INTO Addresses (Address_Line_1)
                              VALUES (?)");
  $addressStatement->bind_param("s", $_REQUEST['home']);
  $addressStatement->execute();
  $aid = $addressStatement->insert_id;
  $addressStatement->close();

  $journeyStatement = $db->stmt_init();
  $journeyStatement->prepare("INSERT INTO Journeys (User_ID, From_Address_ID)
                              VALUES (?, ?)");
  $journeyStatement->bind_param("ii", $uid, $aid);
  $journeyStatement->execute();
  $journeyStatement->close();

  mysqli_close($db);

  print('<p>Added ' . htmlentities($_REQUEST['home']) . '</p>');
  print('<hr />');
}
?>
<form method="post" action="index.php">
<label for="home">Home: <input id="home" name="home" type="text"/></label>
<input type="submit" />
</form>
