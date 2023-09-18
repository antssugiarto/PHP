<?php
if (isset($_POST["submit"])) {
    if ($_POST["username"] == "Antonius" && $_POST["password"] == "123") {
        header("Location: post2.php");
        exit;
    } else {
        $error = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            background-color: whitesmoke;
        }

        .login {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 50px 0;
            width: 30vw;
            line-height: 30px;
            background-color: white;
            border-radius: 20px;
            box-shadow: 0 0 8px 2px rgba(0, 0, 0, 0.1);
        }

        input {
            margin: .5rem 1rem;
            padding: 1rem;
            width: 20rem;
            font-family: calibri;
            font-size: 1.2rem;
            font-weight: 600;
            background-color: rgb(194, 140, 122);
            color: white;
            border: none;
            border-radius: 15px;
        }

        input[type="submit"] {
            width: 22rem;
            background-color: rgb(125, 83, 79);
        }


        input:focus {
            outline-color: rgb(125, 83, 79);
        }

        input::placeholder {
            color: white;
        }
    </style>
</head>

<body>
    <div class="login">
        <form action="post2.php" method="post">
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <?php if (isset($error)) : ?>
                <p>Username / password salah</p>
            <?php endif; ?>
            <input type="submit" name="submit" value="Login">
        </form>
    </div>
</body>

</html>