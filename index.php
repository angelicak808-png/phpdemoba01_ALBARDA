<?php
$username = "BSIT BA 3101";
$user_id = 12345;
$course = "BSIT";
$section = "BA 3101";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PHP DEMO BA 3101</title>
</head>
<body>
  <?php echo "<h1> Hello World!</h1>"; ?>

  <h2>Username: <u><?php echo $username; ?></u></h2>
  <h2>User_id: <u><?php echo $user_id; ?></u></h2>
  <h2>Course: <u><?php echo $course; ?></u></h2>
  <h2>Section: <u><?php echo $section; ?></u></h2>

  <button type="button" onclick="greetUser()">Greet User</button>

  <script>
    var username = "<?php echo $username; ?>";
    var course = "<?php echo $course; ?>";
    var section = "<?php echo $section; ?>";

    function greetUser() {
      alert("Hello, " + username + "! " + course + " - " + section);
    }
  </script>
</body>
</html>