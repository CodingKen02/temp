
<!doctype html>
<META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
<html lang="en">
<head>
  <title> Lecture 19 - Today In History</title>
  <link rel="stylesheet" href="tih.css">
</head>
<body>

<section id="leftcol">
  <h1> Today In History </h1>
  
  <form action="todayinhistory.php" method="post">
      Day: <select name="day">
	       <option value="1"> 1 </option><option value="2"> 2 </option><option value="3"> 3 </option><option value="4"> 4 </option><option value="5"> 5 </option><option value="6"> 6 </option><option value="7"> 7 </option><option value="8"> 8 </option><option value="9"> 9 </option><option value="10"> 10 </option><option value="11"> 11 </option><option value="12"> 12 </option><option value="13"> 13 </option><option value="14"> 14 </option><option value="15"> 15 </option><option value="16"> 16 </option><option value="17"> 17 </option><option value="18"> 18 </option><option value="19"> 19 </option><option value="20"> 20 </option><option value="21"> 21 </option><option value="22"> 22 </option><option value="23"> 23 </option><option value="24"> 24 </option><option value="25"> 25 </option><option value="26"> 26 </option><option value="27"> 27 </option><option value="28"> 28 </option><option value="29"> 29 </option><option value="30"> 30 </option><option value="31"> 31 </option>           </select>
      Month: <select name="month">
	         <option value="1"> January </option>
	        <option value="2"> February </option>
			<option value="3"> March </option>
			<option value="4"> April </option>
			<option value="5">  May</option>
			<option value="6"> June </option>
			<option value="7"> July </option>
			<option value="8"> August </option>
			<option value="9"> September </option>
			<option value="10"> October </option>
			<option value="11"> November </option>
		    <option value="12"> December </option> 			 </select>
	<input type="submit" name="submit" value="Submit" />
  </form>
</section>
<section id="rightcol">  
<?

    $day = $_POST['day'];
    $month = $_POST['month'];
    
    $event_list = file("trivia.dat");
    
    foreach ($event_list as $record) {
        $fields = explode(",", $record);
        if ($fields[0] == $month and $fields[1] == $day) {
            $total++;
            print "$fields[2] :: $fields[3] <br/>";
        }
    }
    print "$total events happened on that date.";
?>  
</section>
</body>
</html>