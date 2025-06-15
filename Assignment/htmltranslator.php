<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    <table width="100%" border="2px" cellpadding="10px" cellspacing="0">
        <tr height="10px" align="center">
            <th colspan="3"><h1>HTML TRANSLATOR</h1></th>
        </tr>
        <tr height="5px" align="center">
            <td colspan="3"><button type="submit" name="b1" value="submit" style="font-size:30px;background-color:green;">RUN</button></td>
        </tr>
        <tr height="580">
            <td rowspan="2"><textarea name="code" style="width:98%; height:500px;">
                <?php 
               if(isset($_POST['b1'])){ 
                   echo($_POST['code']); 
                } 
                ?></textarea>
                </td>
                <td width="50%"><div style="width:98%;height:500px; border:1px solid #ccc; padding:10px;">
                <?php
                if(isset($_POST['b1'])){
                    echo $_POST['code'];
                }
                ?></div>
                </td>
            </tr>
    </table>   
</form>
</body>
</html>