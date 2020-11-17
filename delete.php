<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'itf-224-db-lab.mysql.database.azure.com', 'tunlaton11@itf-224-db-lab', 'Kaozaa0089', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$ID = $_POST['ID'];
$sql = "DELETE FROM guestbook WHERE ID='$ID'";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully!!    Check updated -->>";
    echo '<a href="https://itf-224-db.azurewebsites.net/show.php">CLICK HERE</a>';
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>
