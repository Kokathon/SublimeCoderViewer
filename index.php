<!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap 101 Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
  </head>
  <body>
    <h1>Sublimetext coding history!</h1>

    <table class='table'>
      <thead>
        <tr>
          <th>
            Time
          </th>
          <th>
            User
          </th>
          <th>
            Action
          </th>
          <th>
            File
          </th>
        </tr>
      </thead>
      <tbody>
<?php

$lines = file('history');
$reverseLines = array_reverse($lines);

foreach ($reverseLines as $line) {
  $obj = explode('|', $line);

  echo '<tr>';
  echo '<td>' . date('Y-m-d H:i:s' , $obj[0]) . '</td>';
  echo '<td>' . $obj[1] . '</td>';
  echo '<td>' . $obj[2] . '</td>';
  echo '<td>' . $obj[3] . '</td>';
  echo '</tr>';
}

?>
  </tbody>
</table>


    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>