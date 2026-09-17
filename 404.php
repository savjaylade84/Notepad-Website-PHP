<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Not Found - 404</title>
    <style>
        /* Reset defaults */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        /* Center everything on the screen */
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
            background-color: #f8fafc;
            color: #334155;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            padding: 20px;
            text-align: center;
        }

        /* Container card */
        .container {
            max-width: 500px;
            background: #ffffff;
            padding: 40px 30px;
            border-radius: 12px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }

        /* Big 404 error number */
        .error-code {
            font-size: 72px;
            font-weight: 800;
            color: #4f46e5; /* Modern Indigo color */
            line-height: 1;
            margin-bottom: 10px;
        }

        /* Error heading */
        h1 {
            font-size: 24px;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 15px;
        }

        /* Explanatory text */
        p {
            font-size: 16px;
            color: #64748b;
            line-height: 1.6;
            margin-bottom: 30px;
        }

        /* Home button */
        .btn-home {
            display: inline-block;
            background-color: #4f46e5;
            color: #ffffff;
            text-decoration: none;
            padding: 12px 24px;
            font-weight: 600;
            border-radius: 6px;
            transition: background-color 0.2s ease;
        }

        /* Button hover effect */
        .btn-home:hover {
            background-color: #4338ca;
        }
    </style>
</head>
<body>

    <div class="container">
        <!-- Big Error Number -->
        <div class="error-code">404</div>
        
        <!-- Message -->
        <h1>Page Not Found</h1>
        <p>Sorry, the page you are looking for doesn't exist, has been removed, or its name has changed.</p>
        
        <!-- Action Button -->
        <a href="index.php" class="btn-home">Go Back Home</a>
    </div>

</body>
</html>
