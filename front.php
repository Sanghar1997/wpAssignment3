<?php 
  include_once 'dbh.php';
  session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="resetStyle.css">
    <link rel="stylesheet" type="text/css" href="Style.css">
  </head>
  <body>

  <table class="dash">
    <h1 class="dash-h1" id="h1_id">Dashboard</h1>
    <thead>
    <tr>
      <th>Title</th>
      <th>User Name</th>
      <th>Password</th>
      <th>URL</th>
    </tr>
    </thead>
    <tbody>
      <?php 
        if(isset($_POST['submit'])){
    if(isset($_POST['vtitle']) || isset($_POST['vpass']) || isset($_POST['vurl']) || isset($_POST['vuid'])){
      $content = $_POST['search'];
      $hashPwd = password_hash($content, PASSWORD_DEFAULT);
      $sql = "SELECT * FROM store WHERE title = '$content' OR user_name = '$content' OR password = '$hashPwd' OR url = '$content'";
      $result = mysqli_query($conn, $sql);
          $resultCheck = mysqli_num_rows($result);
          echo '<script>document.getElementById("h1_id").innerHTML = "Results";</script>';

    }else {
      echo '<script>alert("Please Check what to search with"); location.replace("search.php");</script>';
    }
  }else{
        $sql = "SELECT * FROM store";
        $result=mysqli_query($conn,$sql);
        $resultCheck=mysqli_num_rows($result);
  }

        while($row=mysqli_fetch_assoc($result)){
       
      ?>
      <tr>
        <td ondblclick="goto();" class="dash-title-class"><?php echo $row['title'];  $_SESSION['title'] = $row['title']; ?></td>
        <td><?php echo $row['user_name'];  $_SESSION['user_name'] = $row['user_name']; ?></td>
        <td><?php echo '**********';  $_SESSION['password'] = $row['password']; ?></td>
        <td><?php echo $row['url']; $_SESSION['url'] = $row['url']; ?></td>
      </tr>
    <?php } ?>
    </tbody>
    </table>

    <a href="header.php?untitiled">Add Entry.</a>
    <a href="search.php">Search Entry.</a>
  <script type="text/javascript">
    function goto(){
      
     location.replace('header.php');
    }
  </script>
</body>
</html>