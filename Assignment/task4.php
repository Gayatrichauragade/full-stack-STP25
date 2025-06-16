<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    <label>enter number</label><input type="number" name="t1" value=""/>
   <button type="submit" name="b1" value="submit">prime or not</button>
    </form>
     <?php
        if(isset($_POST['b1'])){
            $name= $_POST['t1'];
            $count=0;
        if ($name <= 1) {
        echo "<h3>$name is NOT a Prime Number.</h3>";
            }
        else {
            for ($i = 1; $i <= $name; $i++) {
            if ($name % $i == 0) {
                $count++;
            }
        }
        if ($count == 2) {
            echo "<h3>$name is a Prime Number.</h3>";
        } else {
            echo "<h3>$name is NOT a Prime Number.</h3>";
        }
    }
}
 ?>
</body>
</html>