<?php
$students = [
    ['name' => 'Alice', 'program' => 'BIP', 'age' => 21],
    ['name' => 'Bob', 'program' => 'BIS', 'age' => 20],
    ['name' => 'Raju', 'program' => 'BIT', 'age' => 22],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Table</title>
</head>
<body>
    <table border="20px">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Program</th>
            <th>Age</th>
        </tr>
        <?php foreach ($students as $index => $data): ?>
        <tr>
            <td><?= $index + 1 ?></td>
            <td><?= htmlspecialchars($data['name']) ?></td>
            <td><?= htmlspecialchars($data['program']) ?></td>
            <td><?= htmlspecialchars($data['age']) ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
