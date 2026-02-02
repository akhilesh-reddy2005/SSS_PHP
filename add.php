<?php
include "config.php";
$result = "";

if (isset($_POST['add'])) {
    $n1 = $_POST['num1'];
    $n2 = $_POST['num2'];

    $sum = $n1 + $n2;

    $query = "INSERT INTO ad___dition (num1, num2, result)
              VALUES ('$n1', '$n2', '$sum')";
    mysqli_query($conn, $query);

    $result = $sum;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Addition</title>
</head>
<body>

<h2>Add Two Numbers</h2>

<form method="post">
    Number 1:
    <input type="number" name="num1" required><br><br>

    Number 2:
    <input type="number" name="num2" required><br><br>

    <input type="submit" name="add" value="Add">
</form>

<?php
if ($result !== "") {
    echo "<h3>Result: $result</h3>";
}
?>

<h3>Saved Results</h3>

<table border="1" style="background-image: url('flower.png')">
<tr>
    <th>Number 1</th>
    <th>Number 2</th>
    <th>Result</th>
</tr>

<?php
$data = mysqli_query($conn, "SELECT * FROM addition");
while ($row = mysqli_fetch_assoc($data)) {
    echo "<tr>
            <td>{$row['num1']}</td>
            <td>{$row['num2']}</td>
            <td>{$row['result']}</td>
          </tr>";
}
?>
</table>

</body>
</html>
