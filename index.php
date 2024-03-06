<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Titanic Survival Prediction</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f5f5f5;
            text-align: center;
            margin: 50px;
        }

        h1 {
            color: #333;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin: 10px 0 5px;
            color: #555;
        }

        input, select {
            width: calc(100% - 12px);
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Titanic Survival Prediction</h1>
    <form action="http://localhost:5000/predict" method="post">
        <label for="pclass">Pclass:</label>
        <input type="text" name="pclass" placeholder="Enter Pclass" required>

        <label for="sex">Sex:</label>
        <select name="sex" required>
            <option value="0">Male</option>
            <option value="1">Female</option>
        </select>

        <label for="age">Age:</label>
        <input type="text" name="age" placeholder="Enter Age" required>

        <label for="sibsp">SibSp:</label>
        <input type="text" name="sibsp" placeholder="Enter SibSp" required>

        <label for="parch">Parch:</label>
        <input type="text" name="parch" placeholder="Enter Parch" required>

        <label for="fare">Fare:</label>
        <input type="text" name="fare" placeholder="Enter Fare" required>

        <label for="embarked">Embarked:</label>
        <select name="embarked" required>
            <option value="0">C</option>
            <option value="1">Q</option>
            <option value="2">S</option>
        </select>

        <button type="submit">Predict</button>
    </form>
</body>
</html>
