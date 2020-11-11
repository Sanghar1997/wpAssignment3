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
  <body >
<main class="header-main">
 <div class="form-style-6">
  <h1>Fill The Form</h1>
  <form action="login.php" method="POST" id="formId">
   <table>
     <tr>
       <td>Title:</td>
       <td><input type="text" name="title" required id="titleId"  value=<?php  echo $_SESSION['title']; ?> ></td>
     </tr>
     <tr>
       <td>User Name:</td>
       <td><input type="text" name="name" id="uid" value = <?php  echo $_SESSION['user_name']; ?>></td>
     </tr>
     <tr>
       <td>Password:</td>
       <td><input type="Password" name="pwd" id="pwdId" required minlength="8" oninput="changer();" value=<?php  echo $_SESSION['password']; ?> > <button onclick="randomizer('pwdId'); return false;" ><b>...</b></button></td>
     </tr>
     <tr>
       <td>Repeat:</td>
       <td><input type="Password" name="Rpwd" id="rPwdId" required minlength="8" maxlength="20" value=<?php  echo $_SESSION['password']; ?> > <button onclick="randomizer('rPwdId'); return false;" ><b>...</b></button></td>
     </tr>
     <tr>
       <td>Quality</td>
       <td><progress min="0" low="8" optimum="12" high="15" max="20" id="meterId" class="progress-bar"></progress></td>
     </tr>
     <tr>
       <td>Url:</td>
       <td><input type="Url" name="Wurl" id="urlId" required value = <?php echo $_SESSION['url']; ?>></td>
     </tr>
     <tr>
       <td>Submit:</td>
       <td><input type="submit" name="submit" ></td>
     </tr>
   </table>
  </form>
 </div>
 <a href="front.php">Go Back</a>
</main>
  <script type="text/javascript">
   function changer(){
    let meter = document.getElementById('meterId');
    let pwd = document.getElementById('pwdId');
    meter.value = pwd.value.length;
   
   }

   function randomizer(getid){
        var result           = '';
         var characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
          var charactersLength = characters.length;
        for ( var i = 0; i < 20; i++ ) {
          result += characters.charAt(Math.floor(Math.random() * charactersLength));
        }
        document.getElementById(getid).value = result;
        document.getElementById(getid).type = 'text';
        changer();
   }

   let currentUrl = window.location.href;
   if(currentUrl.includes("Error=Pass_value_error")){
    alert("Error: Unable to Pass Values.")
   }
    if(currentUrl.includes("signup=empty")){
      alert("Some Feild has been left empty");
    }
    if(currentUrl.includes("password=incorrect")){
      alert("Incorrect Password");
    }
    if(currentUrl.includes("entry=success")){
      alert("Entry Added Successfully");
    }

    if(currentUrl.includes("entry=exists")){
      alert("An entry with the current title already exists. Try again with other title.");
      document.getElementById('titleId').value="";
      document.getElementById('uid').value="";
      document.getElementById('pwdId').value="";
      document.getElementById('rPwdId').value="";
      document.getElementById('urlId').value="";
    }

    if(currentUrl.includes("untitiled")){
      document.getElementById('titleId').value="";
      document.getElementById('uid').value="";
      document.getElementById('pwdId').value="";
      document.getElementById('rPwdId').value="";
      document.getElementById('urlId').value="";
    }

  </script>
</body>
</html>