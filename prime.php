<?php
function isPrime($number) {

    if ($number < 2) {
        return false;
    }
    
    for ($i = 2; $i < $number; $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    
    return true;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST['number'];
    
    if (isPrime($number)) {
        $result = "$number is a prime number";
    } else {
        $result = "$number is not a prime number";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Prime Number Checker</title>
</head>
<body>
    <h2>Prime Number Checker</h2>
    <form method="post" action="">
        <label>Enter a number:</label>
        <input type="number" name="number" required>
        <button type="submit">Check</button>
    </form>
    
    <?php if (isset($result)): ?>
        <h3><?php echo $result; ?></h3>
    <?php endif; ?>
</body>
</html>