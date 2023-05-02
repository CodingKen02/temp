<!doctype html>
<html lang="en">
<head>
  <title>  </title>
  <link rel="stylesheet" href="oscars.css"> 

</head>
<body>
<h1>Awards Search</h1>
<section id="leftcol">
    <form method="post" action="oscars.php">
        Enter Year: <input type="text" name="year" size="4"> <br />
        <input type="submit" name="submit" value="Submit">
    </form>
</section>

<section id="rightcol">
<?

    $years =file('years.txt', FILE_IGNORE_NEW_LINES);
    $actors = file('actors.txt', FILE_IGNORE_NEW_LINES);
    $actresses = file('actresses.txt', FILE_IGNORE_NEW_LINES);
    
    $lookingfor = $_POST['year'];
    
    foreach ($years as $i=>$year) {
        if ($lookingfor == $year) {
        print "Year: $year <br/>
                Actor: $actors[$i] <br/>
                Actress: $actresses[$i] <br/>";
        }
    }

?>
    
</section>


</body>
</html>