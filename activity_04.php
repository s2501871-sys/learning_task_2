<html>
<head>
    <title>Activity 02</title>
</head>
<body>


<?php
if (isset($_POST["btnSubmit"])) {


    $num1 = $_POST["txtNum1"];
    $num2 = $_POST["txtNum2"];
    $operation = $_POST["operation"];


    switch ($operation) {
        case "addition":
            $result = $num1 + $num2;
            break;


        case "subtraction":
            $result = $num1 - $num2;
            break;


        case "multiplication":
            $result = $num1 * $num2;
            break;


        case "division":
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $result = "Cannot divide by zero";
            }
            break;


        default:
            $result = "Invalid operation";
    }


    echo "1st Number: <strong>" . $num1 . "</strong><br>";
    echo "2nd Number: <strong>" . $num2 . "</strong><br>";
    echo "Operation: <strong>" . $operation . "</strong><br>";
    echo "Result: <strong>" . $result . "</strong><br><br>";


    echo "<a href='activity_04.php'>Back</a>";


} else {
?>


<form method="post" action="activity_04.php">


    <label>First Number</label><br>
    <input type="number" name="txtNum1" required><br><br>


    <label>Second Number</label><br>
    <input type="number" name="txtNum2" required><br><br>


    <label>Operation</label><br>
    <select name="operation" required>
        <option value="addition">Addition</option>
        <option value="subtraction">Subtraction</option>
        <option value="multiplication">Multiplication</option>
        <option value="division">Division</option>
    </select><br><br>


    <input type="submit" name="btnSubmit" value="Submit">


</form>


<?php
}
?>


</body>
</html>
