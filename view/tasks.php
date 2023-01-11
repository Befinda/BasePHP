<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Задачи</title>
</head>

<body>
    <?php include "menu.php" ?>
    <h3>Задачи</h3>
    <?php foreach ($tasks as $task): ?>
        <div>
            <?= $task ?> [Done]
        </div>
    <?php endforeach; ?>
</body>

</html>