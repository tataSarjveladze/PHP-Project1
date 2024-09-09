<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .container {
            display: flex;
            flex: 1;
        }
        main {
            flex: 1;
            padding: 2rem;
        }
    </style>
</head>

<body>

<?php
/**
 * Included variables:
 *
 * @var array $players
 * @var string $user
 */
?>

<?php require 'components/header.php' ?>

<div class="container">

    <?php require_once 'components/sidebar.php' ?>

    <main>
        <ul>
            <?php foreach($players as $name => $data): ?>
                <li>
                    <h3><?php echo $name ?></h3>
                    <img src="<?php echo $data['img'] ?>" alt="<?php echo $name ?>" style="width: 100px;">
                    <p><strong>Position</strong>: <?php echo $data['position'] ?></p>
                    <p><strong>Number</strong>: <?php echo $data['number'] ?></p>
                </li>
            <?php endforeach; ?>
        </ul>
    </main>
</div>


<?php require 'components/footer.php' ?>
</body>