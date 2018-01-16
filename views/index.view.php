<?php require 'partials/header.php'; ?>

<?php if ($names) : ?>

    <h1>Names:</h1>

    <ol>
        <?php foreach ($names as $storedName) : ?>
            <li><?= $storedName->personName; ?></li>
        <?php endforeach; ?>
    </ol>
    <hr>
<?php endif; ?>

<h2>Submit your name</h2>

<form method="POST" action="/names">
    <input name="name">
    <button type="submit">Submit</button>
</form>

<?php require 'partials/footer.php'; ?>
