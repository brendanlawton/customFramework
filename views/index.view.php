<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My website</title>
</head>
<body>
<ul>
    <?php foreach ($tasks as $task) : ?>

        <?= $task->completed ? '<strike>' : ''; ?>

        <li><?= $task->description; ?></li>

        <?= $task->completed ? '</strike>' : ''; ?>

    <?php endforeach; ?>
</ul>
</body>
</html>