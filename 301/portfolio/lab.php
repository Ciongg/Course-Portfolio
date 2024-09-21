<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lab</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            padding-top: 60px;
        }
        .lessons-container {
            background-color: #2F3651;
            height: 40vh; /* Fill the viewport height */
        }
        .card-img-top {
            height: 200px; /* Set a fixed height */
            object-fit: cover; /* Maintain aspect ratio */
        }
        .card-body {
            display: flex;
            flex-direction: column;
            justify-content: space-between; /* Space evenly */
            height: 250px; /* Set a fixed height for the card body */
        }
    </style>
</head>
<body>
    <?php include 'navbar.php'; ?>
    
    <div>
        <h1 class="text-white text-center m-0" style="background-color: #8EBBFF; padding: 20px;">Laboratory Exercises</h1>
    </div>
    
    <div class="container-fluid d-flex flex-wrap justify-content-center" style="background-color: #24293E; padding: 20px;">
        <div class="card m-3" style="width: 18rem; background-color: #8EBBFF; border: none;">
            <img src="/301/portfolio/img/Lab1.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title" style="color: #2F3651;">Patient Report</h5>
                <p class="card-text text-black" style="color: white;">Utilizes HTML forms and PHP to use formulas with If statements and display appropriate information.</p>
                <a href="lab1.php" class="btn btn-primary" style="background-color: #2F3651; border: none;">Go To Laboratory 1</a>
            </div>
        </div>

        <div class="card m-3" style="width: 18rem; background-color: #8EBBFF; border: none;">
            <img src="/301/portfolio/img/Lab2.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title" style="color: #2F3651;">Multiplication Table</h5>
                <p class="card-text text-black" style="color: white;">Utilizes grids and user inputs to create a multiplication table where its length is dependent on user's input.</p>
                <a href="lab2.php" class="btn btn-primary" style="background-color: #2F3651; border: none;">Go To Laboratory 2</a>
            </div>
        </div>

        <div class="card m-3" style="width: 18rem; background-color: #8EBBFF; border: none;">
            <img src="/301/portfolio/img/Lab3.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title" style="color: #2F3651;">Tuition Fee Calculator</h5>
                <p class="card-text text-black" style="color: white;">Utilizes switch statements and formulas to display appropriate tuition fee based on user's input.</p>
                <a href="lab3.php" class="btn btn-primary" style="background-color: #2F3651; border: none;">Go To Laboratory 3</a>
            </div>
        </div>
    </div>

    <div class="lessons-container d-flex flex-column justify-content-center align-items-center text-white p-4">
        <h3>Lessons Learned</h3>
        <p>During these laboratory exercises, I was able to build my PHP skills from scratch along with utilizing my foundation learned during previous years of HTML and CSS.</p>
    </div>

    <?php include 'footer.php'?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
