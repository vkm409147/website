<?php
  require_once("../../connection/connectdb.php");
?>
<?php
    if(isset($_POST['login'])) {
        try {
            $sql = "select * from admin where adminID = ? and adminPass = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(1, $_POST['adminID']);
            $stmt->bindParam(2, $_POST['adminPass']);
            $stmt->execute();
            $row = $stmt->fetch();
            if($row == FALSE)
              echo "Wrong user name or password";
              else {
                session_start();
                $_SESSION['adminID'] = $row['adminID'];
                $_SESSION['adminEmail'] = $row['adminEmail'];
                $_SESSION['adminFullname'] = $row['adminFullname'];
                $_SESSION['adminPhoto'] = $row['adminPhoto'];
                header("Location: ../index.php");
              }
          }catch(PDOException $ex) {
              echo 'Error: ' . $ex->getMessage();
          }
      }  
  ?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Clean login form</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="login">
  <div class="heading">
    <h2>Admin Sign In</h2>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
      <div class="input-group input-group-lg">
        <span class="input-group-addon"><i class="fa-solid fa-users"></i></span>
        <input type="text" class="form-control" name="adminID" placeholder="Username">
          </div>
        <div class="input-group input-group-lg">
          <span class="input-group-addon"><i class="fa fa-lock"></i></span>
          <input type="password" class="form-control" name="adminPass" placeholder="Password">
        </div>
        <button type="submit" class="float" name="login">Login</button>
       </form>
 		</div>
 </div>
<!-- partial -->
  
</body>
</html>
