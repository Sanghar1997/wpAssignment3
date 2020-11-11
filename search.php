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
    <main class="header-main">
   <div class="form-style-6" id="search-div-id">
    <form action="front.php" method="POST" id="formId">
    <input type="text" name="search" placeholder="Search.." class="search-class" id="search-id">
    <label>Search in</label><br><br>
    <input type="checkbox" name="vtitle" value="vtitle" checked>
    <caption>Title</caption><br>
    <input type="checkbox" name="vuid" value="vuid">
    <caption>User Name</caption><br>
    <input type="checkbox" name="vpass" value="vpass">
    <caption>Password</caption><br>
    <input type="checkbox" name="vurl" value="vurl">
    <caption>Url</caption>
    <input type="submit" name="submit">
    </form>
  </div>
  <a href="front.php">Go Back</a>
</main>
  <script type="text/javascript">
   
  </script>
</body>
</html>