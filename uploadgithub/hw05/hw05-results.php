<!doctype html>
<html lang="en">
<head>
  <title> hw05 </title>
  <link rel="stylesheet" href="hw05.css"> 
  <!-- ----------------------------------
			BIS1523/BIS2523 Documentation
   Name: Kennedy Keyes
   Netid: kfk38
   Date: 3/23/2023
   
   Variables used:
      <variable name>  <description of data variable will hold>
  
   -------------------------------------  -->
</head>
<body>
<header>
    <h1>hw05 - Population Growth</h1>
</header>
  
    
<?  // table with 3 columns: Year  Population  Change
    $years = $_POST['years'];
    $pop = $_POST['pop'];
    $rate = $_POST['rate'];
    $formatted_pop = number_format($pop);
    $formatted_rate = number_format($rate, 1) . '%';
    
// the box of words, data, and link
    print "<section>
        <p> Starting Population: $formatted_pop <br/>
            Growth Rate: $formatted_rate <br/> <br/>
        
            To perform another calculation"; ?> <a href="hw05-input.html"> click here. </a> <? print "<br/>
        </p>
    </section>";

// the table of data from math
    print "<div>
            <table>
                <tr>
                    <th>Year</th>
                    <th>Population</th>
                    <th>Change</th>
                </tr>";
// the for loop with math and format
    $forecast = $years + 2023;
    for ($i=2023; $i <= $forecast; $i++) {
        $growth = ($pop*($rate / 100)) + $pop;
        $change = $growth - $pop;
        print   "<tr>
                    <td>$i</td>
                    <td>" . number_format($growth, 0) . "</td>
                    <td>" . number_format($change, 0) . "</td>
                </tr>";
        $pop = $growth;
    }
                
    print "</table>
    </div>";
                
?>

</body>
</html>