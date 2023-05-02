<!doctype html>
<html lang="en">
<head>
  <title>  </title>
  <link rel="stylesheet" href="multtable.css"> 
  
</head>
<body>

<?  // table with 3 columns: Multiplicand  Multiplier    Product

    $iterations = $_POST['iterations'];
    $starting = $_POST['starting'];
    
    print "<table>
                <tr>
                    <th>Multiplicand</th>
                    <th>Multiplier</th>
                    <th>Product</th>
                </tr>";
    for ($i=1; $i <= $iterations; $i++) {
        $product = $i*$starting;
        print   "<tr>
                    <td>$i</td>
                    <td>$starting</td>
                    <td>$product</td>
                </tr>";
    }
                
    print "</table>";
                
?>

</body>
</html>