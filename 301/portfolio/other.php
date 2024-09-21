<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lab</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        img {
            height: 128px;
            width: 140px;
        }

        body {
            background-color: #24293E; /* Background color */
            color: #FFFFFF; /* Text color */
            padding-top: 60px;
        }
        .link-card {
            background-color: #8EBBFF; /* Card background color */
            border-radius: 8px; /* Rounded corners */
            padding: 15px; /* Padding inside cards */
            transition: transform 0.2s; /* Animation on hover */
        }
        .link-card:hover {
            transform: scale(1.05); /* Scale effect on hover */
        }
        .profile-container {
            background-color: #3A4A6E; /* Profile section background color */
            padding: 20px; /* Padding for profile section */
            border-radius: 8px; /* Rounded corners */
        }
        .profile-title {
            color: white; /* Gold color for titles */
        }
    </style>
</head>
<body>
    <?php include 'navbar.php'; ?>

    <div class="container-fluid text-center" style="background-color: #3A4A6E; padding: 20px;">
    <h1 class="text-white mb-4">Useful Links</h1>
    <div class="row row-cols-2 row-cols-lg-2 g-2 g-lg-4">
        <div class="col">
            <div class="link-card">
                <a href="https://getbootstrap.com/docs/5.3/getting-started/introduction/" target="_blank" class="text-decoration-none text-dark d-block text-center p-3">Bootstrap Documentation</a>
            </div>
        </div>
        <div class="col">
            <div class="link-card">
                <a href="https://www.w3schools.com/php/" target="_blank" class="text-decoration-none text-dark d-block text-center p-3">PHP Tutorial</a>
            </div>
        </div>
        <div class="col">
            <div class="link-card">
                <a href="https://www.w3schools.com/html/" target="_blank" class="text-decoration-none text-dark d-block text-center p-3">HTML Tutorial</a>
            </div>
        </div>
        <div class="col">
            <div class="link-card">
                <a href="https://www.w3schools.com/mysql/mysql_examples.asp" target="_blank" class="text-decoration-none text-dark d-block text-center p-3">MySQL Examples</a>
            </div>
        </div>
        <div class="col">
            <div class="link-card">
                <a href="https://www.youtube.com/watch?v=-qfEOE4vtxE&t=1224s" target="_blank" class="text-decoration-none text-dark d-block text-center p-3">Bootstrap CSS Framework - Full Course for Beginners</a>
            </div>
        </div>
        <div class="col">
            <div class="link-card">
                <a href="https://www.youtube.com/watch?v=G3e-cpL7ofc&t=62s" target="_blank" class="text-decoration-none text-dark d-block text-center p-3">HTML & CSS Full Course - Beginner to Pro</a>
            </div>
        </div>
        <div class="col">
            <div class="link-card">
                <a href="https://www.youtube.com/watch?v=zZ6vybT1HQs" target="_blank" class="text-decoration-none text-dark d-block text-center p-3">PHP Full Course for non-haters</a>
            </div>
        </div>
        <div class="col">
            <div class="link-card">
                <a href="https://www.youtube.com/watch?v=5OdVJbNCSso" target="_blank" class="text-decoration-none text-dark d-block text-center p-3">MySQL Full Course for free</a>
            </div>
        </div>
    </div>
</div>


    <div class="container-fluid" style="background-color: #3A4A6E;">
        <div class="profile-container d-flex align-items-center">
            <div class="flex-shrink-0">
                <img src="/301/portfolio/img/Teacher.jpg" alt="...">
            </div>
            <div class="flex-grow-1 ms-3 text-white">
                <h4 class="profile-title">Instructor</h4>
                <p>Anette Temporal Daligcon</p>
                <p>Adamson University I.T Professor</p>
                <p>09897656321</p>
            </div>
        </div>

        <div class="profile-container d-flex align-items-center">
            <div class="flex-shrink-0">
                <img src="/301/portfolio/img/student.jpg" alt="...">
            </div>
            <div class="flex-grow-1 ms-3 text-white">
                <h4 class="profile-title">Student</h4>
                <p>Karl RJ Miguel Inciong</p>
                <p>Adamson University I.T College Student</p>
                <p>09691590326</p>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
