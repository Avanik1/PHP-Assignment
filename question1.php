<?php
  function isBitten(){
    $num = rand(1,100);
    if($num<=50)
      echo "Charlie bit your finger";
    else
      echo "Charlie did not bit your finger";
  }

  isBitten();
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>PHP Q1</title>
</head>

<body>
</body>

</html>