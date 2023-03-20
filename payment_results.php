<!doctype html>
<html lang="en">
<head>
    <title> Lecture 7 - Payment Results </title>
    <link rel="stylesheet" href="payment.css">
</head>
<body>

  <header> 
    <h1> Lecture 7 - Payment Results </h1>
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
    // input
    $balance = $_POST['balance'];
    $charges = $_POST['charges'];
    $credits = $_POST['credits'];
    
    // process
    $new_balance = $balance + $charges - $credits;
    $new_balance += $new_balance * 0.15 / 12; // annual rate is 15%
    $min_payment = $new_balance * 0.02;
    
    // output
    print "Your new balance is $".number_format($new_balance,2)." <br/>
            Your minimum payment is $".number_format($min_payment,2);
  
?>

  </section>

</body>
</html>