<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'labmysql.mysql.database.azure.com', 'it63070122@labmysql', 'Ppp192544', 'LabITF', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$name = $_POST['name'];
$comment = $_POST['comment'];


$sql = "DELETE FROM guestbook (name , comment) VALUES ('$name', '$comment')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>
