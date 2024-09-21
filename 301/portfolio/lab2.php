<!DOCTYPE html>
<html>
<head>
    <title>Multiplication Table INCIONG</title>
    <style>
        table {
            border-collapse: collapse;
        }

        table, th, td {
            border: 5px solid red;
            padding: 8px;
            text-align: center;
        }

        
        body{
        padding-top: 60px;
        }
  
    </style>

</head>
<body>
    <?php include 'navbar.php'; ?>

    <form method="post" action="">
      <h1>Inciong, Karl</h1>
        <label for="rows">Number of Rows:</label>
        <input type="number" name="rows" id="rows" min="1" required>
        <br><br>

        <label for="cols">Number of Columns:</label>
        <input type="number" name="cols" id="cols" min="1" required>
        <br><br>

        <input type="submit" value="Generate Table">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $rows = $_POST["rows"];
        $cols = $_POST["cols"];

        echo "<h2>Rows X Columns</h2>";
        echo "<h2>$rows X $cols Multiplication Table</h2>";
        

        echo "<table>";
        for ($i = 1; $i <= $rows; $i++) {
            echo "<tr>";
            for ($k = 1; $k <= $cols; $k++) {
                echo "<td>" . ($i * $k) . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    ?>
</body>
</html>
