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

        form {
            display: flex;
            flex-direction: column;
            gap: 1rem;
            max-width: 400px;
        }

        .field-wrapper {
            display: flex;
            flex-direction: column;
        }
    </style>
</head>

<body>
<?php require 'components/header.php' ?>


<div class="container">
  <?php require 'components/sidebar.php' ?>

    <main>
        <h1>Sign Up</h1>
        <form action="/register-user" method="post" enctype="multipart/form-data">
            <div class="field-wrapper">
                <label for="fullname">Fullname</label>
                <input type="text" id="fullname" name="fullname" required>
            </div>
            <div class="field-wrapper">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="field-wrapper">
                <label for="avatar">Avatar</label>
                <input type="file" id="avatar" name="avatar">
            </div>
            <div class="field-wrapper">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Sign Up</button>
        </form>
    </main>
</div>

<?php require 'components/footer.php' ?>
</body>