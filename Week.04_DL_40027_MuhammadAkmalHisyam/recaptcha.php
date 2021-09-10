<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Google reCAPTCHA Demo</title>
</head>

<body>
  <h1>Google reCAPTCHA</h1>
  <form id="comment_form" action="responses.php" method="post">
    <input type="text" name="name" placeholder="Insert your name" size="40"><br><br>
    <div class="g-recaptcha" data-sitekey="6LdrZ2AaAAAAAFAJs23HNxXsXQyqbQ-cEe1xjrja" style="margin-bottom: 10px;"></div>
    <input type="submit" name="submit" value="submit"><br><br>
  </form>

  <script src="https://www.google.com/recaptcha/api.js"></script>
</body>

</html>