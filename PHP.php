<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registation form</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 10px;
        }
        
        h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
            font-size: 28px;
        }
        
        form {
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            max-width: 500px;
            width: 100%;
        }
        
        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
            font-weight: bold;
            font-size: 14px;
        }
        
        input {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
            transition: border-color 0.3s ease;
        }
        
        input:focus {
            outline: none;
            border-color: #667eea;
            box-shadow: 0 0 5px rgba(102, 126, 234, 0.3);
        }
        
        button, input[type="submit"] {
            width: 48%;
            padding: 12px;
            font-size: 14px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-weight: bold;
        }
        
        button[type="reset"] {
            background: #f0f0f0;
            color: #333;
            margin-right: 4%;
        }
        
        button[type="reset"]:hover {
            background: #e0e0e0;
        }
        
        input[type="submit"] {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }
        
        input[type="submit"]:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
        }
    </style>
</head>
<body>
   <h2>Sample Registation Form!</h2>
    <form action="Registation.php" method="post">
    <label>Name:</label>
    <input type="text" name="Name" placeholder="Enter your name" required><br><br>
    <label>Age:</label>
    <input type="number" name="Age" placeholder="Enter your age" required><br><br>
    <label>Phone:</label>
    <input type="tel" name="Phone" placeholder="Enter your phone number" required><br><br>
    <label>Username:</label>    
    <input type="text" name="Username" placeholder="Enter your username" required><br><br>
    <label>Email:</label>
    <input type="email" name="Email" placeholder="Enter your email" required><br><br>
    <label>Password:</label>   
    <input type="password" name="Password" placeholder="Enter your password" required><br><br>
    <button type="reset">Reset</button>
    <input type="submit" value="Register">

</form>
    

</body>
</html>