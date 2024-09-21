<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <style>
    body {
      padding-top: 60px;
    }

     .outer-container {
      background-color: #24293E; /* Outer container background color */
      color: white; /* Text color */
      padding: 30px; /* Padding for the outer container */
    }

    .outcomes-header {
      
      text-align: center;
      margin-bottom: 20px; /* Margin for spacing */
    }

    .inner-container {
      display: flex; /* Use flexbox for alignment */
      justify-content: space-between; /* Space between items */
      flex-wrap: wrap; /* Wrap to next line if necessary */
    }

    .outcome-column {
      background-color: #8EBBFF; /* Inner box background color */
      padding: 15px; /* Padding inside boxes */
      border-radius: 8px; /* Rounded corners */
      margin: 5px; /* Space between boxes */
      flex: 1; /* Flex-grow to fill available space */
      min-width: 200px; /* Minimum width for responsiveness */
      font-size: 20px;
    }

    .carousel-item {
      position: relative;
      height: 500px; /* Fixed height for all carousel items */
      background-color: #24293E;
    }

    

    .carousel-item img {
      width: 100%;
      height: 100%; /* Ensure the image takes the full height */
      object-fit: contain; /* Use cover to maintain aspect ratio */
      position: absolute; /* Position it absolutely */
      top: 0; /* Align to top */
      left: 0; /* Align to left */
    }

    .carousel-caption-container {
      position: absolute; /* Position it at the bottom */
      bottom: 0;
      left: 0;
      right: 0;
      padding: 20px;
      text-align: center;
      background-color: rgba(47, 54, 81, 0.8); /* Semi-transparent background */
    }

    .carousel-caption-container h2 {
      font-size: 24px;
      margin-bottom: 10px;
    }

    .carousel-caption-container p {
      font-size: 16px;
    }
  </style>

  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<?php include 'navbar.php'; ?>

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000" style="color: white;">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/301/portfolio/img/app.png" class="d-block" alt="First slide">
      <div class="carousel-caption-container">
        <h2>Applications Development & Emerging Technologies</h2>
        <p>Provides opportunity for students to learn a new approach towards the creation of web pages using dynamic and interactive tools.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/301/portfolio/img/phpandmysql.png" class="d-block" alt="Second slide">
      <div class="carousel-caption-container">
        <h2>Back-end Stack</h2>
        <p>This course utilizes PHP and MySQL to equip students with the skills to build dynamic, database-driven web applications.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/301/portfolio/img/frontend.png" class="d-block" alt="Third slide">
      <div class="carousel-caption-container">
        <h2>Front-end Stack</h2>
        <p>Provides students with knowledge on CSS frameworks such as Bootstrap to make responsive and dynamic designs</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="container-fluid d-flex flex-column flex-md-row align-items-center" style="background-color: #8EBBFF; ">
  <div class="col-12 col-md-6 d-flex justify-content-center ">
    <img src="/301/portfolio/img/developer.png" class="img-fluid" alt="developer" style="max-width: 80%; height: auto;">
  </div>
  <div class="col-12 col-md-6 text-start" style="color: #333;">
    <h1>Become a Developer</h1>
    <p>Explore the exciting world of applications development and emerging technologies, where you'll learn how to build dynamic applications and tackle complex challenges. Our curriculum equips you with the latest tools and techniques, preparing you for a successful career in the tech industry.</p>
  </div>
</div>





<div class="outer-container" >
  <div class="outcomes-header">
    <h2>Objectives</h2>
  </div>
  
  <div class="inner-container text-black">
    <div class="outcome-column">Explain the fundamental principle of structured programming language using PHP Script</div>
    <div class="outcome-column">Apply the fundamental principles of web development in creating computing applications with debugging techniques</div>
    <div class="outcome-column">Design program flow and program structure for simple computing problems that meet specific requirements for the program website</div>
  </div>
</div>







<div class="container-fluid text-white" style="background-color:#2F3651;">
  <div class="outcomes-header">
    <h2>Outcomes</h2>
  </div>
  
  <div class="grid text-center text-black" style=" padding: 20px; padding-top:0px;">
    <div class="grid" style="--bs-columns: 12;">
      <div class="g-col-6 outcome-column">Analyze complex problems and determine the computing requirements for their solutions.</div>
      <div class="g-col-6 outcome-column">Utilize current techniques, skills, tools, and practices essential for the IT profession.</div>
      <div class="g-col-6 outcome-column">Design, implement, and evaluate computer-based systems effectively.</div>
      <div class="g-col-6 outcome-column">Communicate complex computing activities clearly through logical writing and presentations.</div>
      <div class="g-col-6 outcome-column">Effectively be a member or leader of a development team.</div>
    </div>
  </div>
</div>


<?php include 'footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
