# htmlinjectionpayload

The code in this repository creates a vulnerability on the OWASP Apache2 webserver called html injection.
This allows someone to visit the website and enter shell commands through the html form input box.

1. Open the National University Sandbox
2. Click Start
3. Click on the OWASP virtual machine
4. Login using username: root and password: owaspbwa
5. Enter cd /var/www
6. Enter vi guestbook.php
7. Press i and then enter the following code from guestbook.php
8. Press escape and then :wq
9. Enter touch guestbook.txt
10. Enter chown www-data.www-data guestbook.txt
11. Enter chmod +x guestbook.php
12. Click on the Kali2 virtual machine
13. Open a web browser and go to http://192.168.1.15/photo.php
14. Try entering a message and then click submit..
15. Enter ;touch test.txt;
16. Back on the OWASP virtual machine, enter ls /var/www
17. You should see test.txt
