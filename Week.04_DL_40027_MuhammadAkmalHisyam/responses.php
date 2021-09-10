<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responses</title>
</head>

<body>
  <?php
  $name;
  $captcha;
  if (isset($_POST['name'])) $name = $_POST['name'];
  if (isset($_POST['g-recaptcha-response'])) $captcha = $_POST['g-recaptcha-response'];

  if (!$captcha) {
    echo "<h2>Please check the captcha form</h2>";
    exit;
  }

  $str = "https://www.google.com/recaptcha/api/siteverify?secret=6LdrZ2AaAAAAALlJ-qXngrERnEx7j6PmqwhTYhTH" . "&response=" . $captcha . "&remoteip=" . $_SERVER['REMOTE_ADDR'];

  $response = file_get_contents($str);
  $response_arr = (array) json_decode($response);

  if ($response_arr["success"] == false) {
    echo "<h2>You are spammer! GET OUT</h2>";
  } else {
    echo "<h2>Hello " . $name . "<h2>";
    echo "<h2>Thanks for submitting your name.</h2>";
  }
  ?>
</body>

</html>