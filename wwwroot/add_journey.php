<?php
if(array_key_exists("home", $_REQUEST))
{
  print('<p>Added ' . htmlentities($_REQUEST['home']) . '</p>');
  print('<hr />');
}
?>
<form method="post" action="add_journey.php">
<label for="home">Home: <input id="home" name="home" type="text"/></label>
<input type="submit" />
</form>