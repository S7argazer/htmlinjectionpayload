# htmlinjectionpayload

The code in this repository creates a vulnerability on the OWASP Apache2 webserver called html injection.
This allows someone to visit the website and enter shell commands through the html form input box.

1. Open the National University Sandbox
2. Click Start
3. Click on the OWASP virtual machine
4. Login using username: root and password: owaspbwa
5. Enter cd /var/www
6. Enter vi photo.php
7. Press i and then enter the following code:

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

8. Press escape and then :wq
9. Enter mkdir files
10. Enter chown www-data.www-data files
11. Enter chmod +x photo.php
12. Click on the Kali2 virtual machine
13. Open a web browser and go to http://192.168.1.15/photo.php
14. Try uploading a png file.
15. Enter ;touch test.txt;
16. Back on the OWASP virtual machine, enter ls /var/www
17. You should see test.txt
