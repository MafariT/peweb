<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login - Razaka Academy</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
            margin: 0;
            padding: 0;
        }

        body {
            background-color: #f5f5f5;
            display: flex;
            height: 100vh;
        }

        .left {
            flex: 1;
            background-color: #0b2c55;
            /* Navy */
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 2rem;
        }

        .left h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            text-align: left;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .left img {
            max-width: 100%
        }

        .right {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 2rem;
        }

        .login-box {
            background-color: white;
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        .login-box h2 {
            margin-bottom: 1rem;
            font-size: 1.5rem;
            color: #333;
        }

        .login-box input {
            width: 100%;
            padding: 0.75rem;
            margin-bottom: 1rem;
            border-radius: 8px;
            border: 1px solid #ccc;
        }

        .login-box button {
            width: 100%;
            padding: 0.75rem;
            background-color: #0b2c55;
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 1rem;
            cursor: pointer;
        }

        .login-box button:hover {
            background-color: #0a264a;
        }

        .login-box .extra {
            display: flex;
            justify-content: space-between;
            font-size: 0.9rem;
            margin-bottom: 1rem;
            color: #555;
        }

        .login-box .extra a {
            text-decoration: none;
            color: #0b2c55;
        }
    </style>
</head>

<body>

    <div class="left">
        <h1>RAZAKA ACADEMY </h1>
        <img src="assets/images/Untitled design (6) 1.png" alt="Ilustrasi Login" />
    </div>

    <div class="right">
        <div class="login-box">
            <h2>Welcome Admin</h2>
            <form action="/dashboard" method="GET">
            <input type="text" placeholder="Username" name="username" />
            <input type="password" placeholder="Password" name="password" />
             <button type="submit">Masuk</button>
            </form>

        </div>

</body>

</html>