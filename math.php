<?php 
session_start();

if (isset($_POST['guess'])) {
    $guess = $_POST['guess'];
}
    
$wins = 0;
$count = 0;

if (!(isset($_SESSION['wins']))){
$_SESSION['wins'] = 0;
}
if (!(isset($_SESSION['count']))){
$_SESSION['count'] = 0;
}


$num1 = rand(0,10);
$sign = rand(0,1);
$num2 = rand(0,10);
if($sign == 0) {
    $dsign = "+";
    $solution = $num1 + $num2;
} else {
    $dsign = "-";
    $solution = $num1 - $num2;
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
    ?>
</body>
</html>

<?php
if(isset($guess)) {
    if($guess == $solution) {
        $wins += 1;  
        $count += 1;
    } else {
        $count += 1;
    }
}

$_SESSION['wins'] += $wins;
$_SESSION['count'] += $count;

echo $guess;
echo $solution;
#redirect to login screen if logout button pressed
if (isset($_POST['logout'])) {
    session_destroy();
    header("location: index.php");
    die();
}
?>