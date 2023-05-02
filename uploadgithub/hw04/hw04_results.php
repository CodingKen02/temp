<!doctype html>
<html lang="en">
<head>
  <title> Homework 4 </title>
  <link rel="stylesheet" href="hw04.css"> 
  <!-- ----------------------------------
			BIS1523/BIS2523 Documentation
   Name: Kennedy Keyes
   Netid: kfk38
   Date: March, 2, 2023
   
   Variables used:
      <variable name>  <description of data variable will hold>
  
   -------------------------------------  -->
</head>
<body>
<h1>Results</h1>
<?     

// input, one POST assignment per thing the user types in
    $object = $_POST['object'];
    $radius = $_POST['radius'];
    $height = $_POST['height'];
    
// data validation, one if statement for each input
    $data_is_okay = true;
    
    if (!isset($object)) {
        print "Please select an object. <br />";
        $data_is_okay = false;
    }
    
    if (!is_numeric($radius)) {
        print "Please enter a radius value. <br />";
        $data_is_okay = false;
    }
    
    if (!is_numeric($height)) {
        print "Please enter a height value. <br />";
        $data_is_okay = false;
    }

// RIGHT HERE 
    if ($data_is_okay) {
    // process, one if statement for each possible formula (2)
        if ($object == 'cone') {
            $result = pi()*$radius*$radius + pi()*$radius*sqrt($height*$height+$radius*$radius);
        }
        
        if ($object == 'cylinder') {
            $result = 2*pi()*$radius*$height + 2*pi()*($radius*$radius);
        }
        
        if ($object == 'capsule') {
            $result = 2*pi()*($radius*$radius)*$height + 2*pi()*$radius*$height;
        }
    
    // output
        print "The surface area of a $object with radius $radius and height $height is ".number_format($result,2);
    }

?>
</body>
</html>