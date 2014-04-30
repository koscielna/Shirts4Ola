<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  $body = "";
  $body = $body . "Name: " . $name . "\n";
  $body = $body . "Email: " . $email . "\n";
  $body = $body . "Message: " . $message;

  //TODO: Send Email

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
                      </table>
                      <input type="submit" value="send">
                  </form>

            <?php } ?>

      </div>
  </div>

  <?php include('includes/footer.php'); ?>
