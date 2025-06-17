<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Enter Basic Salary</h2>
<form method="post">
<label>Basic Salary:</label><input type="number" name="basic">
<input type="submit" name="submit" value="Calculate Gross Salary">
</form>
<?php
if (isset($_POST['submit'])) {
    $basic = $_POST['basic'];

    if ($basic < 2000) {
        $hra = 0.10 * $basic;
        $da = 0.15 * $basic;
    } elseif ($basic > 5000) {
        $hra = 0.20 * $basic;
        $da = 0.25 * $basic;
    } else {
        $hra = 0.15 * $basic;
        $da = 0.20 * $basic;
    }

    $gross = $basic + $hra + $da;
    echo "Gross Salary: $gross";
}
?>
</body>
</html> 
