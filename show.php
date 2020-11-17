<html>
<head>
    <title>63070224 DB</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>    
</head>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'itf-224-db-lab.mysql.database.azure.com', 'tunlaton11@itf-224-db-lab', 'Kaozaa0089', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guestbook');
?>
<table class="table table-dark table-striped">
  <tr>
    <th width="100"> <div align="center">Name</div></th>
    <th width="350"> <div align="center">Comment </div></th>
    <th width="150"> <div align="center">Link </div></th>
  </tr>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
  <tr>
    <td><?php echo $Result['Name'];?></div></td>
    <td><?php echo $Result['Comment'];?></td>
    <td><?php echo $Result['Link'];?></td>
    <td>
        <div class="d-inline">
            <form action="edit_form.php" method="post" class="d-inline">
                <input type="hidden" name="ID" value=<?php echo $row['ID'];?>>
                <button type="submit" class="btn btn-sm btn-primary mb-1">Edit</button>
            </form>
            <form action="delete.php" method="post" class="d-inline">
                <input type="hidden" name="ID" value=<?php echo $row['ID'];?>>
                <button type="submit" class="btn btn-sm btn-danger mb-1">Delete</button>
            </form>
         </div>
     </td>
  </tr>
<?php
}
?>
</table>
<?php
mysqli_close($conn);
?>
<div class="container">
  <div class="row">
    <div class="col text-center">
      <a href="https://itf-224-db.azurewebsites.net/form.html" class="btn btn-info" role="button">Insert Data</a>
    </div>
  </div>
</div>
</body>
</html>
