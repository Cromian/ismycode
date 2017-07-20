<?php
  if (isset($_REQUEST['email']))  {

  //Email information
  $admin_email = $site_email;
  $email = $_REQUEST['email'];
  $subject = $_REQUEST['subject'];
  $comment = $_REQUEST['comment'];

  //send email
  mail($admin_email, "$subject", $comment, "From:" . $email);

  //Email response
  echo "Thank you for your message!";
  }

  //if "email" variable is not filled out, display the form
  else  {
?>

<form method="post" class="contact-form" id="contact-form">
  <input  class="form-control" name="subject" type="text" placeholder="Subject"/>
  <br />
  <input class="form-control" name="email" type="text"  placeholder="Enter Your Email"/>
	<br />
	<textarea name="comment" class="form-control" rows="5" placeholder="Message"></textarea>
	<br />
	<input type="submit" class="btn-red" id="email-send" value="Send" />
</form>

<?php
  }
?>
