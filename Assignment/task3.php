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
   <button type="submit" name="b1" value="submit">factorial</button>
    </form>
     <?php
        if(isset($_POST['b1'])){
            $name= $_POST['t1'];
            $fact=1;
            for($i=1; $i<=$name;$i++){
                $fact=$fact*$i;
            }
            echo"factorial:$fact";
            
    }
 ?>
</body>
</html>