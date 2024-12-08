<?php
$num = 2; // The number for the multiplication table
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
    
</head>
<body>
    <h2>Multiplication Table for <?= $num ?></h2>
    <table border="20">
        <tr>
            <th>No</th>
            <th>Multiplier</th>
            <th>Answer</th>
        </tr>
        <?php for ($i = 1; $i <= 10; $i++): ?>
        <tr>
            <td><?= $i ?></td>
            <td><?= $num ?></td>
            <td><?= $num * $i ?></td>
        </tr>
        <?php endfor; ?>
    </table>
</body>
</html>
