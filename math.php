<?php 
session_start();

/*if (isset($_POST['guess'])) {
    $guess = $_POST['guess'];
}*/
    
if (!(isset($_SESSION['wins']))){
$_SESSION['wins'] = 0;
}
if (!(isset($_SESSION['count']))){
$_SESSION['count'] = 0;
}


$num1 = rand(0,20);
$sign = rand(0,1);
$num2 = rand(0,20);
if($sign == 0) {
    $dsign = "+";
    $solution = $num1 + $num2;
} else {
    $dsign = "-";
    $solution = $num1 - $num2;
}
$_SESSION['correct'] = "";

if (!empty($_POST['guess'])) {    
if ($_POST['guess'] == $_SESSION['psolution']) {
    $_SESSION['wins'] += 1;
    $_SESSION['count'] += 1;
    $_SESSION['correct'] = "You got it right!";
} else {
    $_SESSION['count'] += 1;
    $_SESSION['correct'] = "Incorrect";
}
}
?>

<!DOCTYPE html>
<html>
<body>

<h1>Math Game</h1>
<?php
echo $num1 . " " . $dsign . " " . $num2  
?>
<form method="post" name="mathgame">
<input name ="guess" type="text" />
    <br />
    <br />
<button type="submit" onclick="submit">Submit</button>
<button type="submit" name="logout" onclick="logout">Logout</button>
</form>
<hr />
    <h6>Score:</h6>
<?php 
    echo $_SESSION['wins'] . "/" . $_SESSION['count'];
    echo "<hr />";
    if (isset($_SESSION['correct'])){
    echo $_SESSION['correct'];
    }
    ?>
</body>
</html>

<?php


$_SESSION['psolution'] = $solution;

#redirect to login screen if logout button pressed
if (isset($_POST['logout'])) {
    session_destroy();
    header("location: index.php");
    die();
}
?>