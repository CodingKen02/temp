<!doctype html>
<html lang="en">
<head>
  <title>  </title>
  <link rel="stylesheet" href="hw03.css"> 
  <!-- ----------------------------------
			BIS1523/BIS2523 Documentation
   Name: Kennedy Keyes
   Netid: kfk38
   Date: Feb 23, 2023
   
   Variables used:
      <variable name>  <description of data variable will hold>
  
   -------------------------------------  -->
</head>
<body>
    
<?    
    // input
    $name = $_POST['name'];
    $ex1 = $_POST['ex1'];
    $ex2 = $_POST['ex2'];
    $ex3 = $_POST['ex3'];
    $hw1 = $_POST['hw1'];
    $hw2 = $_POST['hw2'];
    $hw3 = $_POST['hw3'];
    $hw4 = $_POST['hw4'];
    $hw5 = $_POST['hw5'];
?>

    <h1> Homework 3 - Grade Report for <? print $name ?> </h1>
<?
    // process
    $ex_avg = ($ex1 + $ex2 + $ex3) / 3;
    $hw_avg = ($hw1 + $hw2 + $hw3 + $hw4 + $hw5) / 5;
    
    $final_avg = ($ex_avg * 0.85) + ($hw_avg * 0.15);
    
    // output
    print " <h2> Your final average is: ".number_format($final_avg,2)." </h2>
            Exam Average: ".number_format($ex_avg,2)." <br/><br/>
            Homework Average: ".number_format($hw_avg,2);
  
?>

</body>
</html>