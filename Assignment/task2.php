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
   <button type="submit" name="b1" value="submit">table of number</button>
    </form>
     <?php
        if(isset($_POST['b1'])){
            $name= $_POST['t1'];
            echo"<ul>";
            for($i=1; $i<=10; $i++){
            $table=$name * $i;
            echo "<li>$name*$i=$table</li>";
         
            }
            echo "</ul>";
        }
    ?>
</body>
</html>