<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #000;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        
        form {
            background-color: #222;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            width: 320px;
        }
        
        h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #ff4444;
        }
        
        label {
            display: block;
            margin-bottom: 10px;
            color: #ff4444;
            font-weight: bold;
        }
        
        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 2px solid #ff4444;
            border-radius: 5px;
            box-sizing: border-box;
            transition: border-color 0.3s ease;
            color: #fff;
            background-color: #333;
        }
        
        input[type="text"]:focus,
        input[type="number"]:focus {
            border-color: #ff0000;
        }
        
        input[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: #ff4444;
            border: none;
            color: #fff;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        
        input[type="submit"]:hover {
            background-color: #ff0000;
        }
    </style>
</head>
<body>

    <form action="submitappo.php" method="post">
        <h2>Registration Form</h2>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        
        <label for="phone">Phone:</label>
        <input type="number" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="123-456-7890" required>
        
        <input type="submit" value="Register">
    </form>

</body>
</html>
