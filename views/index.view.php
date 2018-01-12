<?php require 'partials/header.php'; ?>

<h1>My tasks</h1>

<ul>
    <?php foreach ($tasks as $task) : ?>

        <?= $task->completed ? '<strike>' : ''; ?>

        <li><?= $task->description; ?></li>

        <?= $task->completed ? '</strike>' : ''; ?>

    <?php endforeach; ?>
</ul>

<?php require 'partials/footer.php'; ?>