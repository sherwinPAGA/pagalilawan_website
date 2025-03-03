<?php
// Initialize variables
$num1 = 0;
$num2 = 0;
$total = 0;

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the values from the form
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    
    // Calculate the total
    $total = $num1 + $num2;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Master System</title>
</head>
<body>
    <h1>Add Two Numbers</h1>
    
    <form method="post" action="">
        <h2>Enter First Number</h2>
        <input type="number" name="num1" value="<?php echo $num1; ?>" required>
        
        <h2>Enter Second Number</h2>
        <input type="number" name="num2" value="<?php echo $num2; ?>" required>
        
        <br><br>
        <input type="submit" value="Add">
    </form>

    <?php
    // Display the result if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<h2>Result: $total</h2>";
    }
    ?>
</body>
</html>