<!doctype html>
<html lang="en">
<head>
  <title> Temperature Converter Results </title>
  <link rel="stylesheet" href=""> 
  <!-- ----------------------------------
			BIS1523/BIS2523 Documentation
   Name:  
   Netid:
   Date:
   
   Variables used:
      $scale is either 'F' or 'C', based on the users radio button choice
      $temp_in is their input value
      $data_is_okay is a flag variable for data validation
      $temp_out is our calculated temperature
  
   -------------------------------------  -->
</head>
<body>
<h1>Results</h1>
<?	 

// C to F is X*9/5+32
// F to C is (X -32)*5/9

// input, one POST assignment per thing the user types in
    $scale = $_POST['scale'];
    $temp_in = $_POST['temp_in'];
    
// data validation, one if statement for each input
    $data_is_okay = true;
    
    if (!is_numeric($temp_in)) {
        print "Please enter a temperature. <br />";
        $data_is_okay = false;
    }
    
    if (!isset($scale)) {
        print "Please select a scale. <br />";
        $data_is_okay = false;
    }

    if ($data_is_okay) {
    // process, one if statement for each possible formula (2)
        if ($scale == 'F') {
            $result = $temp_in * 9 / 5 + 32;
        }
        
        if ($scale == 'C') {
            $result = ($temp_in - 32) * 5 / 9;
        }
    
    // output
        print "$temp_in in $scale is ".number_format($result,1);
    }

?>

</body>
</html>