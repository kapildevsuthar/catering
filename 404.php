<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Page Not Found</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Roboto', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(135deg, #1d3557, #457b9d);
            color: #f1faee;
        }
        .container {
            text-align: center;
        }
        .container h1 {
            font-size: 6rem;
            margin: 0;
        }
        .container p {
            font-size: 1.5rem;
            margin: 10px 0 20px;
        }
        .container a {
            text-decoration: none;
            color: #1d3557;
            background-color: #a8dadc;
            padding: 10px 20px;
            border-radius: 5px;
            font-weight: bold;
            transition: 0.3s;
        }
        .container a:hover {
            background-color: #457b9d;
            color: #f1faee;
        }
        .error-image {
            font-size: 8rem;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="error-image">🚫</div>
        <h1>404</h1>
        <p>Oops! The page you're looking for doesn't exist.</p>
        <a href="/">Go Back to Home</a>
    </div>
</body>
</html>
