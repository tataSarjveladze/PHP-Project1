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
        <h2>Contact our players</h2>
        <form action="contact.php">
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name"><br>
            <label for="message">Message:</label><br>
            <textarea id="message" name="message"></textarea><br>
            <input type="submit" value="Submit">
        </form>
    </main>
</div>

<?php require 'components/footer.php' ?>

</body>