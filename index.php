<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login System</title>
    <style>
        body {
            display: flex;
            justify-content: center;
        }

        form {
            display: flex;
            flex-direction: column;
            width: 300px;
        }

        form > input {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <form action="php/register.php" method="POST">
        <h2>Register</h2>
        <label for="email">Email</label>
        <input type="text" name="email" id="email" placeholder="insert email">
        
        <label for="username">Username</label>
        <input type="text" name="username" id="username" placeholder="insert username">
        
        <label for="password">Password</label>
        <input type="text" name="password" id="password" placeholder="insert password">

        <input type="submit" value="invia">
        <p>Hai già un account? <a href="login.html">Accedi</a></p>
    </form>
</body>
</html>