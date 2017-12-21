<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Opdracht 3</title>
</head>
<body>
<p>Hallo! Typ hieronder A.U.B. uw naam in.</p>
<form method="post" action="opdracht3.php">
    <input type="text" name="studentname">
    <input type="submit" value="Klik hier!" name="submit">
    <br>
    <input type="submit" value="Klok" name="submit2">
    <br>
    <input type="submit" value="nieuwidee" name="submit3">
</form>

<?php
function display()
{
    $age;
    $studentname = $_POST["studentname"];
    if ($studentname === "Timo" || $studentname === "timo")
    {
        $age = 16;
        echo "<p>hallo jumbo</p>" . "je bent " . $age . " jaar oud.";
    }
    else if($studentname === "Cheyenne" || $studentname === "cheyenne" || $studentname === "sjenna" || $studentname === "Sjenna")
    {
        $age = 19;
        echo "<p>Hoi sjenna, kijk eens naar je computer</p>" . "je bent " . $age . " jaar oud.";
    }
    else
    {
        $age = "unknown";
        echo "Hello " . $studentname . "je bent " . $age . " jaar oud.";
    }

}
if(isset($_POST['submit']))
{
    display();
}


if(isset($_POST['submit2']))
{
    echo "Today is " . date("Y/m/d") . "<br>";
}
if(isset($_POST['submit3']))
{
    $studentname = $_POST["studentname"];
    $timo = "Timo";
    $jeremy = "jeremy";
    if($studentname === "fuq da police")
    echo "Fuck you too pal, " . $timo . " aint no snitch. " . $jeremy . " is the real cop";
}
?>
</body>
</html>