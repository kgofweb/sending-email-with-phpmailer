<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST["send"])) {
  $mail = new PHPMailer(true);

  $mail->isSMTP();
  $mail->Host = 'smtp.gmail.com';
  $mail->SMTPAuth = true;

  // My Elements
  $username = $_POST['name'];
  $amount = $_POST['amount'];
  $country = $_POST['country'];
  // My Elements

  // My Gmail
  $mail->Username = 'mervydevmedia@gmail.com'; 
  //  Gmail App password
  $mail->Password = 'iviaogmxshpqlqud';
  $mail->SMTPSecure = 'ssl';
  $mail->Port = 465;
  $mail->Subject = 'ChapMoney Transaction';
  $mail->Body = "
    <table style='background-color: #eef6f8; width: 75%; margin: auto; border-radius: .5rem;'>
      <tr>
        <td>
          <h1 style='text-align: center; border-bottom: 1.5px solid #424242'>New Transaction !</h1>
          <span style='font-size: 1rem; margin-left: 10rem;'>Nom: <b>$username</b> </span> <br>
          <span style='font-size: 1rem; margin-left: 10rem;'>Pays: <b>$country</b> </span> <br>
          <span style='font-size: 1rem; margin-left: 10rem;'>Amount: <b>$amount</b> </span> <br>
        </td>
      </tr>
    </table>
  ";

  $mail->setFrom('mervydevmedia@gmail.com');
  $mail->addAddress('mervydevmedia@gmail.com');
  // $mail->addAddress($_POST["email"]);
  $mail->isHTML(true);

  $mail->send();

  echo
  "
    <script>
      alert('Sent Successfully');
      document.location.href = 'index.php';
    </script>
  ";
}