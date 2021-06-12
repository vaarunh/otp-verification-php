# PHP Login with Email OTP Functionality 
A simple login and signup system created using PHP.

## Configuration
1. Add the database `users.sql` in your phpMyAdmin.
2. Add the database credentials to `config.php`.
// Database configuration
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "users";
3. Configure `send_otp.php`file.
 a.  `$mail->Host  =  'Specify your SMTP here.';`
 b. `$mail->Username  =  'Add your mail address here';`
 c. `$mail->Password  =  'Add Password Here';`
 d. `$mail->SMTPSecure  =  'Enable TLS encryption';`
 ## Test URL
 https://hidden-meadow-35657.herokuapp.com/
 ## Screenshots
 ![enter image description here](https://nimbus-screenshots.s3.amazonaws.com/s/b86030c9e124adc69ded904cc3e0e3d7.png)
 ![enter image description here](https://nimbus-screenshots.s3.amazonaws.com/s/d54d31d8d389fa0678df0779cbfb1ff4.png)
 
![enter image description here](https://nimbus-screenshots.s3.amazonaws.com/s/de3ee702843c3e503758c706af4a976e.png)
![enter image description here](https://nimbus-screenshots.s3.amazonaws.com/s/80e76a64a4a3c4d74c1b851d3ff954a3.png)

![enter image description here](https://nimbus-screenshots.s3.amazonaws.com/s/21f4710ab2436d9e44026e50cf6228c2.png)
