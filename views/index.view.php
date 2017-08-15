
<?php require('partials/head.php'); ?>


<?php require('partials/nav.php'); ?>


<h1>Submit your name</h1>

<form method="POST" action="/names">
    <input name="name">
    <button type="submit">Submit</button>
</form>


<?php require('partials/footer.php'); ?>