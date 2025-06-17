<html>
<body>
<h2>Enter Marks of 5 Subjects</h2>
<form method="post">
<?php
for ($i = 1; $i <= 5; $i++) {
    echo "Subject $i: <input type='number' name='a'><br>";
}
?>
<input type="submit" name="submit" value="Calculate">
</form>

<?php
if (isset($_POST['submit'])) {
    $total = 0;
    for ($i = 1; $i <= 5; $i++) {
        $total += $_POST["a"];
    }
    $percent = $total / 5;
    echo "Total Marks: $total<br>Percentage: $percent%";
}
?>
</body>
</html>