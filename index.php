<?php 
  include_once 'dbh.php';
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
<main>
    <div class="main-wrapper form-style-5">
      <form onsubmit="Submition();" id="formId">
        <label>Master Password:</label>
        <input type="password" name="Password" id="Pass" placeholder="Enter the Password">
        <button onclick="changeType(); return false;" ><b>...</b></button>
        <input type="submit" name="Submit">
      </form>
    </div>
</main>
  <script type="text/javascript">
    function changeType(){
      let varType = document.getElementById('Pass');
      if(varType.value === ''){
        document.getElementById('Pass').value = 'MasterPassword';
      }
      if(varType.type === 'password'){
        document.getElementById('Pass').type = 'text';
      } else{
         document.getElementById('Pass').type= 'password';
      }
    }
    function Submition(){
      let content = document.getElementById('Pass');
      let actor = document.getElementById('formId');
      if(content.value === 'MasterPassword'){
        alert("Login Successfull");
        actor.action='front.php';
      }else{
        alert("Incorrect Password");
      }
    }
  </script>
</body>
</html>