<!doctype html>
<html lang="en">
<head>
  <title>  </title>
  <link rel="stylesheet" href="hw02.css"> 
  <!-- ----------------------------------
			BIS1523/BIS2523 Documentation
   Name: Kennedy Keyes
   Netid: kfk38
   Date: Feb 9, 2023
   
   Variables used:
      <variable name>  <description of data variable will hold>
  
   -------------------------------------  -->
</head>
<body>
    
    <h1>Homework 2 - Product Feedback</h1>
    
    <section id="thanks">
        
    <h2>Thanks!</h2>
        
    Thank you for your feedback. Your results are shown below. 
    If you have any further questions, feel free to contact us at
    our corporate headquarters in Big Level, MS.
    
    </section>
       
    <img src="businessman-product-1417733.jpg">
    
    <section id="input">
    
 <?
    // input -- read in user inputs
    $name = $_POST['name'];
    $location = $_POST['location'];
    $level = $_POST['level'];
    $comments = $_POST['comments'];
    
    // output -- print out stuff user type
    print "Product: $name <br />";
    print "Purchased From: $location <br />";
    print "Satisfaction Level: $level <br />";
    print "<br /> Your comments: <br /> <p>$comments</p> <br />";
 ?>
 
    </section>
    
</body>
</html>