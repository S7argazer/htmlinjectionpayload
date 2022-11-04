<?php 
$n = $_FILES['fname']['name'];
$f = $_FILES['fname']['tmp_name'];
$c = "cp $f /var/www/files/$n";
exec("$c");
?>
<html>
<body>
<form action="" method="POST" enctype="multipart/form-data">
<input type="file" name="fname">
<input type="submit">
</form>
</body>
</html>
