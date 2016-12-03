<?php
session_start();
?>

<!DOCTYPE html>
<html>
<body>
<h1>Please Login to Enjoy our Math Game.</h1>
    <form method="post" name="login">
        <label>Email:</label>
        <input type="email" name="emailadd"/>
        <br />
        <br />
        <label>Password:</label>
        <input type="password" name="passwd"/>
        <br />
        <br />
<button type="submit" onclick="submit">Login</button>
    </form>
        </body>
</html>

<?php

if(isset($_POST['emailadd']) && $_POST['passwd']){
if ($_POST['emailadd'] == "a@a.a" && $_POST['passwd'] == "aaa"){
    $_SESSION['login'] = true;   
}
echo $_POST['emailadd'];
echo "\n";
echo $_POST['passwd'];
}
    
if(isset($_SESSION['login'])){
    header("location: math.php");
}
?>