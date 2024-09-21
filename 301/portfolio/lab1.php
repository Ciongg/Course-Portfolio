


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Php Example</title>

  <style>
    body{
      padding-top: 60px;
    }
  </style>
  
</head>
<body>
<?php include 'navbar.php'; ?>
  <div>
    <form method="post">

    <h1>Inciong, Karl</h1>
    <div>

      <div>
        <label for="pName">Patient Name</label>
        <input type="text" name="pName" placeholder="enter patient name">
      </div>

      <div>
        <label for="gender">Gender</label>
        <label><input type="radio" name="gender" value="male"> Male </label>
        <label><input type="radio" name="gender" value="female"> Female</label>
      </div>

      <div>
        <label for="age">Age</label>
        <input type="number" name="age" placeholder="enter age">
      </div>
      
      <div>
        <label for="days">Number of Days</label>
        <input type="number" name="days" placeholder="enter number of days">
      </div>

      <div>
        <label for="deposit">Initial Deposit</label>
        <input type="number" name="deposit" placeholder="enter initial deposit">
      </div>

    
    </div>

    <button type="submit">Submit</button>

    </form>
  </div>
  
</body>


<?php
  if($_SERVER["REQUEST_METHOD"] == "POST"){

    $totalAmount=0;
    $discount=0;
    $basicPrice=0;
    $netAmount=0;
    $balance=0;
    $patientName="";
  
  
    $patientName = $_POST['pName'];
    $initialDeposit = $_POST['deposit'];
    $gender = $_POST['gender'];
    $numDays = $_POST['days'];
    $age = $_POST['age'];
  
    
    
    if($gender == "male"){
      $basicPrice = 150000;
    }else{
      $basicPrice = 8500;
    }
  
    $totalAmount = $basicPrice * $numDays;
  
    if($age < 7 ){
      $discount = $totalAmount * 0.1;
    }else if($age >= 7 && $age < 18){
      $discount = $totalAmount * 0.075;
    }else if($age >= 18 && $age < 30){
      $discount = $totalAmount * 0.0525;
    }else if ($age >= 30 && $age < 60){
      $discount = $totalAmount * 0.03;
    }else if($age >= 60 && $age < 80){
      $discount = $totalAmount * 0.0675;
    }else{
      $discount = $totalAmount * 0.08;
    }
  
    $netAmount = $totalAmount - $discount;
    $balance = $netAmount - $initialDeposit;
  
    echo "This is your Report <br> 
        Patient Name: $patientName <br> 
        Gender: $gender <br> 
        Age: $age <br> 
        No. of Days: $numDays <br> 
        Initial Deposit: $initialDeposit <br> 
        Basic Price: $basicPrice <br> 
        Total Amount: $totalAmount <br> 
        Discount: $discount <br> 
        Net Amount: $netAmount <br> 
        Balance: $balance";

  }  


?>

</html>