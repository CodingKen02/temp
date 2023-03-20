<!doctype html>
<html lang="en">
<head>
  <title>  </title>
  <link rel="stylesheet" href="exam1.css"> 
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
    <h1>Exam 1 - Results</h1>
    <?
    // input -- read in user inputs
    $watts = $_POST['watts'];
    $color = $_POST['color'];
    
    // output -- print out stuff user type
    print "The wattage was $watts and the color was $color.";
    ?>

</body>
</html>