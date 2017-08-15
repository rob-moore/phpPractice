<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <title>Cool php</title>
    <style>
        header {
            background-color: rosybrown;
            padding: 10px;
            text-align: center;
        }
        .it-works {
            color: green;
        }
        .it-false {
            color: red;
        }
    </style>
</head>

<body>
<nav>
    <ul>
        <li><a href="/about">About</a></li>
        <li><a href="/contact">Contact</a></li>
    </ul>
</nav>
    <h1>Tasks for the day</h1>
    <ul>
        <?php foreach ($tasks as $task) : ?>
            <li>
                <?php if ($task->completed) : ?>
                    <strike><?= $task->description ?></strike>
                <?php else: ?>
                    <?= $task->description ?>
                <?php endif; ?>

            </li>
        <?php endforeach;?>
    </ul>

</body>
</html>