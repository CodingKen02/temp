<!doctype html>
<html lang="en">
<head>
    <title> Lecture 7 - Payment Results </title>
    <link rel="stylesheet" href="payment.css">
  <!-- ----------------------------------
			BIS1523/BIS2523 Documentation
   Name:  Steve Canfield
   Netid: sec9
   Date:  recently
   
   Variables used:
        $balance    input       starting cc balance
        $credits    input       how much we paid off
        $charges    input       how much we spent
        
        $new_balance calculated this months balance
        $min_payment calculated minimum payment
        
        $data_is_okay       flag variable for data validation
        
   -------------------------------------  -->  
</head>
<body>

  <header> 
    <h1> Payment Results </h1>
  </header>

  <section id="description">
    <h2> Details </h2>
    <p> The results of your calculate are displayed
        to the right.  Minimum payment is 2% of your 
        new balance.  Your card has a 15% annual rate interest rate.
       </p>
    <p> To perform a new calculation, <a href="payment_input.html"> click here. </a> </p>
  </section>

  <section id="io_area">
   
<?	

    function display_results($new_balance, $min_payment) {
        print "Your new balance is $" . number_format($new_balance,2) . " <br />
                Your minimum payment this month is: $".number_format($min_payment,2);
}

    function data_is_valid($balance, $charges, $credits) {
        $data_is_okay = true;
        if (!is_numeric($balance)) {
            print "Balance should be numeric <br />"; 
            $data_is_okay = false; 
        }
        if (!is_numeric($charges)) {
            print "Charges should be numeric <br />"; 
            $data_is_okay = false; 
        }
        if (!is_numeric($credits)) {
            print "Credits should be numeric <br />"; 
            $data_is_okay = false; 
        }   
        return $data_is_okay;
    }
    
    function calc_payment($new_balance) {
        if ($new_balance > 20) {
            $min_payment = $new_balance * 0.02;       
        } else {
            $min_payment = $new_balance; 
        }
        return $min_payment;
    }
    
    // input
        $balance = $_POST['balance'];
        $charges = $_POST['charges'];
        $credits = $_POST['credits'];   
        
        if (data_is_valid($balance, $charges, $credits)) {
            // process
                $new_balance = $balance + $charges - $credits  + ($balance * 0.15 / 12);  // interest calculated in ()'s
                
        
            // output
            display_results($new_balance, calc_payment($new_balance));

        }
?>

  </section>

</body>
</html>