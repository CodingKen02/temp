<!doctype html>
<html lang="en">
<head>
  <title> Homework 6 </title>
  <link rel="stylesheet" href=""> 
  <!-- ----------------------------------
			BIS1523/BIS2523 Documentation
   Name: Kennedy Keyes
   Netid: kfk38
   Date: March 30th, 2023
   
   Variables used:
      <variable name>  <description of data variable will hold>
  
   -------------------------------------  -->
</head>
<body>
 
    <h1> Homework 6 </h1>
   
<?
    // printing statement for the max value
    function display_max($max) {
        print "Max number entered is: $max";
    }

    // checking if inputs are numeric
    function data_is_valid($first, $second, $third) {
        $data_is_okay = true;
        if (!is_numeric($first)) {
            print "First number should be numeric <br />"; 
            $data_is_okay = false; 
        }   
        if (!is_numeric($second)) {
            print "Second number should be numeric <br />"; 
            $data_is_okay = false; 
        }
        if (!is_numeric($third)) {
            print "Third number should be numeric <br />"; 
            $data_is_okay = false; 
        }   
        return $data_is_okay;
    }
    
    // finding the max value by comparing inputs
    function find_max($first, $second, $third) {
        if ($first >= $second and $first >= $third) {
            $max = $first;       
        } elseif ($second >= $first and $second >= $third) {
            $max = $second;
        } else {
            $max = $third;
        }
        return $max;
    }
    
    // listed variables
        $first = $_POST['first'];
        $second = $_POST['second'];
        $third = $_POST['third'];   
        
    // if the inputs are numeric, apply the functions/conditions ($max is set as the value from the find_max function, then printed with display_max)
        if (data_is_valid($first, $second, $third)) {
            // output
            $max = find_max($first, $second, $third);
            display_max($max);
        }

?>

</body>
</html> 