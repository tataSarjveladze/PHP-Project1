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

        /* Table Styles */
        table {
            width: 100%;
            margin: 20px 0;
            font-size: 1em;
            min-width: 400px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        }

        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        thead tr {
            background-color: #009879;
            color: #ffffff;
            text-align: center;
        }

        th, td {
            padding: 12px 15px;
        }

        tbody tr {
            border-bottom: 1px solid #dddddd;
            text-align: center;
        }

        tbody tr:nth-of-type(even) {
            background-color: #f3f3f3;
        }

        tbody tr:hover {
            background-color: #f1f1f1;
        }

        .avatar img {
            border-radius: 10%;
            display: block;
            margin: 0 auto;
        }
    </style>
</head>

<body>

<?php
/**
 * Included variables:
 *
 * @var array $users
 */
?>

<?php require 'components/header.php' ?>

<div class="container">

  <?php require_once 'components/sidebar.php' ?>

    <main>
        <h2>Users</h2>
        <table>
            <thead>
            <tr>
                <th>Full Name</th>
                <th>Username</th>
                <th>Avatar</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?php echo $user['fullname'] ?></td>
                    <td><?php echo $user['username'] ?></td>
                    <td class="avatar">
                        <img src="data:image/jpeg;base64,<?php echo ($user['avatar'] ?: '') ?>"
                             alt="avatar"
                             width="150">
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </main>
</div>


<?php require 'components/footer.php' ?>
</body>