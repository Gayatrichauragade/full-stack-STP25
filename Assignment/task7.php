<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Enter Marks to Get Grade</h2>
<form method="post">
<label>Marks:</label><input type="number" name="mark">
<input type="submit" name="submit" value="Get Grade">
</form>
<?php
if (isset($_POST['submit'])) {
    $marks = $_POST['mark'];

    if ($marks >= 90)
        $grade = "A+";
    elseif ($marks >= 80 && $marks<90)
        $grade = "A";
    elseif ($marks >= 70 && $marks<80)
        $grade = "B+";
    elseif ($marks >= 60 && $marks<70)
        $grade = "B";
    elseif ($marks >= 50 && $marks<60)
        $grade = "C";
    else
        $grade = "Fail";

    echo "Grade: $grade";
}
?>
</body>
</html>