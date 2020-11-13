<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'itf-224-db-lab.mysql.database.azure.com', 'tunlaton11@itf-224-db-lab', 'Kaozaa0089', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$name = $_POST['name'];
$comment = $_POST['comment'];
$link = $_POST['link'];


$sql = "INSERT INTO guestbook (Name , Comment , Link) VALUES ('$name', '$comment', '$link')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully\n";
    echo "Check updated -->> ";
    echo '<a href="https://itf-224-db.azurewebsites.net/show.php">CLICK HERE</a>';
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>
