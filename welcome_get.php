<html lang="en">
<body>
if(strcmp($_GET["name"],"root") == 0){
    Welcome <?php echo $_GET["name"]; ?><br>
    Your corresponding pw is: <?php echo $_GET["password"]; ?>
}else{
    <?php echo 'wrong login' ?>
}
<form action="page.php">
    <input type="submit" value="return">
</form>
</body>
</html>
