<?php require 'partials/header.php'; ?>

<h1>All Users</h1>
<?php if ($users) : ?>

    <h1>Names:</h1>

    <ol>
        <?php foreach ($users as $user) : ?>
            <li><?= $user->personName; ?></li>
        <?php endforeach; ?>
    </ol>
    <hr>
<?php endif; ?>

<h2>Submit your name</h2>

<form method="POST" action="/users">
    <input name="name">
    <button type="submit">Submit</button>
</form>

<?php require 'partials/footer.php'; ?>
