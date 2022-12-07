<?php
$mypass = "admin";
$myhash = password_hash($mypass, PASSWORD_DEFAULT);
?>
<!doctype html>
<html>

<body>
  <p>$mypass:</p>
  <?php
  echo $mypass;
  ?>
  <p>$myhash:</p>
  <?php
  echo $myhash;
  ?>
  <p>pass_verify dump: </p>
  <?= "<p>" . password_verify($mypass, $myhash) . "</p>"; ?>
  <?= "<p>" . var_dump(password_verify($mypass, $myhash)) . "</p>"; ?>
</body>

</html>
