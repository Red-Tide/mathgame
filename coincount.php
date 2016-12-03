<?php include("include/header.php"); ?>
<?php
    
    $penny = 0;
    $nickel = 0;
    $dime = 0;
    $quarter = 0;
    $loonie = 0;
    $toonie = 0;





    $name = $_POST['name'];
if (!empty($_POST['pennies'])) {
    $penny = $_POST['pennies'];
}
if (!empty($_POST['nickels'])) {
    $nickel = $_POST['nickels'];
}
if (!empty($_POST['dimes'])) {
    $dime = $_POST['dimes'];
}
if (!empty($_POST['quarters'])) {
    $quarter = $_POST['quarters'];
}
if (!empty($_POST['dollar'])) {
    $loonie = $_POST['dollar'];
}
if (!empty($_POST['twodollar'])) {
    $toonie = $_POST['twodollar'];
}
    $cents = $penny + ($nickel * 5) + ($dime * 10) + ($quarter * 25) + ($loonie * 100) + ($toonie * 200);
    $dollars = ($cents / 100);

if (empty($_POST['name'])) {
    print("<h1 style='color:red'>Error Name Mandatory!</h1>");
    Die();
}

if (!is_numeric($penny) || !is_numeric($nickel) || !is_numeric($dime) || !is_numeric($quarter) || !is_numeric($loonie) || !is_numeric($toonie)){
    print("<h1 style='color:red'>Error Illegal Non Numeric Value!</h1>");
    Die();
}


 ?>
<div class="container">
    <div class="row">
<div class="jumbotron col-md-offset-6"><h1>Coin Count</h1><p>the following coins were counted and valued</p></div>
    </div>
<?php
print("<div class='row'>");
print("<div class='col-md-6'><div class='col-xs-6'><p>Pennies:</p></div><div class='col-xs-6'><p>" . $penny . "</p></div></div>");
print("<div class='col-md-6'><div class='col-xs-6'><p>Nickels:</p></div><div class='col-xs-6'><p>" . $nickel . "</p></div></div>");
print("</div>");

print("<div class='row'>");
print("<div class='col-md-6'><div class='col-xs-6'><p>Dimes:</p></div><div class='col-xs-6'><p>" . $dime . "</p></div></div>");
print("<div class='col-md-6'><div class='col-xs-6'><p>Quarters:</p></div><div class='col-xs-6'><p>" . $quarter . "</p></div></div>");
print("</div>");
    
print("<div class='row'>");
print("<div class='col-md-6'><div class='col-xs-6'><p>Dollar Coins:</p></div><div class='col-xs-6'><p>" . $loonie . "</p></div></div>");
print("<div class='col-md-6'><div class='col-xs-6'><p>2 Dollar Coins:</p></div><div class='col-xs-6'><p>" . $toonie . "</p></div></div>");
print("</div>");

print("<div class='row'>");
print("<div class='col-sm-12'><h1>" . $name . " you therefore have:</h1></div>");
print("</div>");
    
print("<div class='row'>");
print("<div class='col-md-6'><div class='col-xs-6'><p>Total Cents:</p></div><div class='col-xs-6'></div><div class='col-xs-6'><p>" . $cents . "</p></div></div>");
print("<div class='col-md-6'><div class='col-xs-6'><p>Total Dollars:</p></div><div class='col-xs-6'>" . $dollars . "</p></div></div>");
print("</div>");
?>
<hr />
<a href="index.php" class="btn btn-info" role="button">Back to home page</a>
</div>
<?phpinclude("include/footer.php"); ?>
    