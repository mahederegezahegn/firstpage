<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if(isset($_GET["name"])){
    echo "<p>Hi, " . $_GET["name"] . "</p>";
}
?>
    <form action="<?php  echo $_SERVER["[PHP_SELF"]?>" method="get">
    <label for="inputName">Name:</label>
    <input type="text" name="name" id="inputName"><br>
    <input type="submit" value="Submit">


</form>

</body>
</html>