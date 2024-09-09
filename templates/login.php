<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
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
    <main>
        <form action="/authenticate" method="post">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Sign in</button>
        </form>
    </main>
</div>

<?php require 'components/footer.php' ?>
</body>