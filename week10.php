

<?php
$hn = 'localhost'; #host name
$db = 'publications'; #database being accessed
$un = 'test'; #username
$pw = 'testing'; #password

#telling php to connect using the above variable credentials.
#this order matters: host name, username, password, database name
$conn = new mysqli($hn, $un, $pw, $db);
#this says try to connect to database, if connection doesn't work, kill page and dump error to page
if ($conn->connect_error) die($conn->connect_error);

$query = "SELECT * FROM classics";

 $result = $conn->query($query);
 if (!$result) die($conn->error);
 $rows = $result->num_rows;

 # retrieve rows in an associative array with the field as the key
 while ($row = $result->fetch_assoc()) {
     foreach ($row as $value) {
         echo $value."<br>";
     }
     echo "<hr>";
 }

 $result->close();
 $conn->close();
 ?>

 ?>
