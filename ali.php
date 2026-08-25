<?php
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($username === 'ahmad' && $password === '123') {
        header('Location: first.html');
        exit;
    }

    $error = 'Incorrect username or password.';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Georgia, serif;
            background: #f4efe6;
            color: #24312b;
            margin: 0;
            min-height: 100vh;
            display: grid;
            place-items: center;
        }

        form {
            background: #fffdf8;
            border: 1px solid #d8cdbd;
            padding: 2rem;
            width: min(90%, 22rem);
            box-shadow: 0 12px 30px rgba(36, 49, 43, 0.12);
        }

        h1 {
            margin-top: 0;
            font-size: 2rem;
        }

        label {
            display: block;
            margin: 1rem 0 0.35rem;
            font-weight: bold;
        }

        input {
            box-sizing: border-box;
            padding: 0.7rem;
            width: 100%;
            border: 1px solid #b9ad9c;
            font: inherit;
        }

        button {
            background: #24312b;
            border: 0;
            color: #fffdf8;
            cursor: pointer;
            font: inherit;
            margin-top: 1.5rem;
            padding: 0.75rem 1rem;
            width: 100%;
        }

        .error {
            color: #a33a2b;
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
    <form action="ali.php" method="post">
        <h1>Login</h1>
        <?php if ($error !== ''): ?>
            <p class="error" role="alert"><?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?></p>
        <?php endif; ?>

        <label for="username">Username</label>
        <input type="text" id="username" name="username" required autocomplete="username">

        <label for="password">Password</label>
        <input type="password" id="password" name="password" required autocomplete="current-password">

        <button type="submit">Log in</button>
    </form>
</body>
</html>
