<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 3 Inciong</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            
        }

        header {
            background-color: #233142;
            color: white;
            text-align: center;
            padding: 20px 0;
        }

        footer {
            background-color: #233142;
            color: white;
            text-align: center;
            padding: 10px 0;
            margin-top: auto; /* Push footer to the bottom of the page */
        }

        form {
            background-color: #f95959;
            display: flex;
            flex-direction: column;
            align-items: center;
            max-width: 400px;
            padding: 80px;
            border: solid 8px black;
            margin: auto; /* Center form horizontally */
        }

        .container {
            background-color: #e3e3e3;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .result {
            background-color: #455d7a;
            display: flex;
            flex-direction: column;
            align-items: center;
            border: solid 10px #233142;
            color: white;
            margin: 10px;
            padding: 10px;
        }

        #title {
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            background-color: #455d7a;
            width: 100%;
            margin-bottom: 10px;
            font-size: 20px;
            padding: 2px;
        }

        #author {
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            background-color: #233142;
            width: 100%;
            margin-bottom: 10px;
            font-size: 20px;
            padding: 2px;
        }

        .container-intro {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        label {
            color: white;
            font-size: 24px;
        }

        select {
            margin: 10px;
            background-color: #e3e3e3;
            font-size: 24px;
            
        }

        .submit-btn {
            padding: 10px;
            color: white;
            background-color: #455d7a;
            border: solid 2px #233142;
            transition: all 0.2s;
            margin: 10px;
        }

        .submit-btn:hover {
            background-color: #e3e3e3;
            color: black;
        }

        .submit-btn:active {
            background-color: #233142;
            color: black;
        }

        body{
        padding-top: 60px;
        }
    </style>
</head>
<body>
<?php include 'navbar.php'; ?>
    <header>
        <h1>Adamson University</h1>
    </header>

    <div class="container-intro">
        <div id="title">Tuition Fee Calculator</div>
        <div id="author">by: karl inciong</div>
    </div>

    <div class="container">
        <form method="post">
            <label for="name">Name:</label>
            <input type="text" name="name">
            <br>

            <label for="units">Number of units:</label>
            <input type="number" name="units">
            <br>

            <label for="courses">Choose a course:</label>
            <select name="courses">
                <option value="it">IT</option>
                <option value="ce">CE</option>
                <option value="acc">ACC</option>
                <option value="nursing">N</option>
            </select>

            <input class="submit-btn" type="submit" value="Confirm">
        </form>
    </div>

    <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST["name"];
            $course = $_POST["courses"];
            $units = $_POST["units"];
            
            $tfee = 0; 

            switch ($course) {
                case "it":
                    $tfee = 1500.25 * $units;
                    $course = " (IT) Information Technology";
                    break;
                case "ce":
                    $tfee = 1000.75 * $units; 
                    $course = " (CE) Computer Engineering";
                    break;
                case "acc":
                    $tfee = 800.25 * $units; 
                    $course = " (ACC) Accountancy";
                    break;
                case "nursing":
                    $tfee = 1200.50 * $units; 
                    $course = " (N) Nursing";
                    break;
            }

            echo '<div class="result">';
            echo "Name: $name <br>";
            echo "Course:" . strtoupper($course) . "<br>";
            echo "Number of units: $units <br>";
            echo "Total fee: $tfee";
            echo '</div>';
        }
    ?>

    <footer>
        &copy; 2024 Adamson University. All rights reserved.
    </footer>

</body>
</html>
