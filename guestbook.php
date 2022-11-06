<?php
if(isset($_GET['gmsg']))
{
  $p = $_GET['gmsg'];
  $c = "echo $p >> /var/www/guestbook.txt";
  exec("$c");
}
?>
<html>
<body>
<form method="get">
<input type="text" name="gmsg"><br>
<input type="submit" name="submit">
</form>
</body>
</html>
