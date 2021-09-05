<?php
if(isset($_POST['name'])&&isset($_POST['email'])&&isset($_POST['message']))
{
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $to = 'adityashinde989@gmail.com';
  $subject = "Help!! Help!!";
  $body = '<html>
                <body>
                  <h2>Feedback</h2>
                  <hr>
                  <p>Name:<br>'.$name.'</p>
                  <p>Email:<br>'.$email.'</p>
                  <p>Message:<br>'.$message.'</p>
                  </body>
            </html>';
//headers
$headers = "From: ".$name." <".$email.">\r\n";
$headers .= "Reply-To: ".$email."\r\n";
$headers .= "NINE-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=utf-8";
//send
$send = mail($to,$subject,$body,$headers);
if($send)
{
  echo '<br>';
  echo 'ThankYou For Contacting Us. We will be with You shortly.';
}
else {
    echo 'error';
}
}
?>
<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>Contact form to email</title>
</head>

<body>


    <form method="post" action="">
        <label>Name:</label>
        <input name="name" type="text">

        <label>Email address:</label>
        <input name="email" type="text">

        <label>Message:</label>
        <textarea rows="5" cols="20" name="message"></textarea>

        <button type="submit" name="submit">Submit</button>
    </form>

</body>

</html>
