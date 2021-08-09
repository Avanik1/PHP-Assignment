<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Question2</title>
</head>
<body>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="get">
    <label for="string">Enter the String here: </label>
    <input type="text" placeholder="enter string" name="string" id="string" required><br>
    <input type="submit" name="submit" value="Submit">
  </form>
  <?php
  if($_SERVER['REQUEST_METHOD']=="GET"){
    $str = $_GET['string'];
    
    $str = strtolower($str);
    
    $arr = explode(' ',$str);
    
    $mapping = array_count_values($arr);

    arsort($mapping);
    echo "<table border='1'>
      <tr>
        <th>Word</th>
        <th>Number of occurences</th>
      </tr>";

    foreach($mapping as $key => $value){
      echo "<tr>";
      echo "<td>$key</td>";
      echo "<td>$value</td>";
      echo "</tr>";
    }
    echo "</table>";
  }

  // print_r(array_count_values($arr));
?>
</body>
</html>
