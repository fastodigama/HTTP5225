<?php
  require('connect.php');
  if($_SERVER['REQUEST_METHOD'] == 'GET'){
    //fetch old values
    $id = $_GET['id'];
    $query = 'SELECT * FROM schools WHERE `id` = ' . $id;
    $result = mysqli_query($connect, $query);
    $school = $result -> fetch_assoc();
  }

  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id = $_POST['id'];
    $BoardName = $_POST['BoardName'];
    $SchoolName = $_POST['SchoolName'];

    $query = "DELETE FROM schools 
                
              WHERE `id` = " . $id;
    $result = mysqli_query($connect, $query);
    if($result){
      header('Location: index.php');
    }
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Delete School</title>
</head>
<body>
  <h1>Delete School</h1>

  <form action="delete.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $school['id']; ?>">
     <p><strong>Board Name:</strong> <?php echo ($school['Board Name']); ?></p>
    <p><strong>School Name:</strong> <?php echo ($school['School Name']); ?></p>
    <input type="submit" value="Delete School" name="Delete School">
  </form>

</body>
</html>