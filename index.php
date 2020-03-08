<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicons/mainFavicon.ico" type="image/x-icon">
    <link rel="icon" href="favicons/mainFavicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/index.css">
    <title>Chat</title>
</head>
<body>
    <article>
        <menu>
            <div class="menu-button">
            </div>

            <nav class="menu-list">
                <ul>
                    <li>
                        <a href="#">About project</a>
                    </li>

                    <li>
                    <a href="#">About us</a>
                    </li>

                    <li>
                    <a href="#">Help</a>
                    </li>
                </ul>
            </nav>
        </menu>

        <button id="signin-button">
            Sign in
        </button>

        <button>
            Create an account
        </button>
    </article>
    <form id="signin-form" method="post">
        <span>
            <h2>Username:</h2>
            <input type="text" name="username">

            <h2>Password</h2>
            <input type="password" name="password">

            <input type="submit" value="Log in" id="submit">
        </span>
    </form>
    <h1>
        <p>Welcome</p>
        <p>to</p>
        <p>our</p>
        <p>Chat!</p>
    </h1>
    <script src="js/index.js"></script>
</body>
</html>