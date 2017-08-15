<?php require 'partials/head.php' ?>
<?php require 'partials/nav.php' ?>


<h2>User list:</h2>
<ul>
    <?php foreach($users as $user) : ?>
        <li><?= $user->name?></li>
    <?php endforeach; ?>
</ul>


<form method="POST" action="/users">
    <input name="name">
    <button type="submit">Submit</button>
</form>
