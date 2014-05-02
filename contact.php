<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  $body = "";
  $body = $body . "Name: " . $name . "<br>";
  $body = $body . "Email: " . $email . "<br>";
  $body = $body . "Message: " . $message;

  if ($name == "" OR $email == "" OR $message == "") {
    echo "No field should remain blank.";
    exit;
  }

  foreach ($_POST as $value) {
    if (stripos($value, 'Content-Type: ') !== FALSE ) {
      echo "Something wrong!";
      exit;
    }
  }

  if ($_POST["address"] != "") {
    echo "Error in submission.";
    exit;
  }

  require_once('includes/PHPMailer-master/class.phpmailer.php');
  $mail = new PHPMailer();

  $mail->SetFrom($email, $name);
  $address = 'aleksandra.nabozny@gmail.com';
  $mail->AddAddress($address, "Shirts 4 Ola");
  $mail->Subject = "Shirts 4 Ola | " . $name;
  $mail->MsgHTML($body);

  if (!$mail->Send()) {
    echo "Something went wrong.";
    exit;
  } else {
    echo "Message sent!";
  }


  if (!$mail->ValidateAddress($email)) {
    echo "You must enter valid email address.";
  }

  header('Location: contact.php?status=thanks');
  exit;
}

?><?php
$pageTitle = "Contact Ola";
$section = "contact";
include('includes/header.php'); ?>

  <div class="section page">

      <div class ="wrapper">


          <h1>Contact</h1>

            <?php if (isset($_GET["status"]) AND $_GET["status"] == "thanks") { ?>
              <p>Thanks for the email!</p>
            <?php } else { ?>

                  <p>I d love to hear from You!</p>

                  <form method="post" action="contact.php">

                      <table>
                        <tr>
                            <th>
                              <label for="name">Name</label>
                            </th>
                            <td>
                              <input type="text" name="name" id="name">
                            </td>
                        </tr>
                        <tr>
                            <th>
                              <label for="email">e-mail</label>
                            </th>
                            <td>
                              <input type="text" name="email" id="email">
                            </td>
                        </tr>
                        <tr>
                            <th>
                              <label for="message">Message</label>
                            </th>
                            <td>
                              <textarea name="message" id="message"></textarea>
                            </td>
                        </tr>
                        <tr style="display: none; ">
                            <th>
                              <label for="address">Message</label>
                            </th>
                            <td>
                              <textarea name="address" id="address"></textarea>
                              <p>This should be blank.</p>
                            </td>
                        </tr>
                      </table>
                      <input type="submit" value="send">
                  </form>

            <?php } ?>

      </div>
  </div>

  <?php include('includes/footer.php'); ?>
