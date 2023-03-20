<!doctype html>
<html lang="en">
<head>
  <title>  </title>
  <link rel="stylesheet" href=""> 
  <!-- ----------------------------------
			BIS1523/BIS2523 Documentation
   Name:
   Netid:
   Date:
   
   Variables used:
      <variable name>  <description of data variable will hold>
  
   -------------------------------------  -->
</head>
<body>
 <h1>Results</h1>
 <!-- place html codes here before php tag -->
 <?
 
    // input -- read in user inputs
    $major = $_POST['major'];
    $class = $_POST['class'];
    $drink = $_POST['drink'];
    $comments = $_POST['comments'];
    
    // output -- print out stuff user type
    print "Your major is $major <br />";
    print "Your classification is $class <br />";
    print "You prefer $drink <br />";
    print "Your comments: <h2> $comments </h2>";
 ?>
</body>
</html>