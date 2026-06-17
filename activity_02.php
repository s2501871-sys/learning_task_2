<html>
    <head>
        <title> Activity 02 </title>
</head>
<body>
    <?php
    if (isset($_post["btnSubmit"])){
        echo " the name you entered is <strong>".$_post["txtName"]. "</strong><br>";
        echo "<a href=' activity_02.php'>Back</a>";


    }else {
        ?>
   <form method= "post" action="activity_02.php">
    <label>Name</label><br>
    <input type="text" name="txtName" placeholder="name...">
    <input type= "submit" name= "btnSubmit" value="submit" />
</form>
<?php } ?>




</body>
</html>
