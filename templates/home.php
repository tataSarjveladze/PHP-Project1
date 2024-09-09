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

<?php require 'components/header.php' ?>

<div class="container">

    <?php require 'components/sidebar.php' ?>

    <main>
        <h2>This is a homepage</h2>
        <p>Welcome to the website of our awesome football team.</p>
    </main>
</div>

<?php require 'components/footer.php' ?>

</body>