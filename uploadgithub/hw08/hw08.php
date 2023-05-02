<!doctype html>
<html lang="en">
<head>
  <title> Homework 08 </title>
  <link rel="stylesheet" href="hw08.css"> 
</head>
<body>
<section id="leftcol">
    <h1>Site Selection</h1>
    <form method="post" action="hw08.php">
        <input type="radio" name="site" value="Roatan"> Roatan</input> <br/>
        <input type="radio" name="site" value="Bonaire"> Bonaire </input> <br/>
        <input type="radio" name="site" value="Grand Cayman"> Grand Cayman </input> <br/>
        <input type="radio" name="site" value="Key Largo"> Key Largo </input> <br/>
        <input type="radio" name="site" value="Key West"> Key West </input> <br/>
        <input type="radio" name="site" value="Aruba"> Aruba </input> <br/>
        <input type="radio" name="site" value="Queensland"> Queensland </input> <br/>
        <input type="radio" name="site" value="Kailua Kona"> Kailua Kona </input> <br/>
        <input type="radio" name="site" value="Belize"> Belize </input> <br/>
        <input type="radio" name="site" value="Cozumel"> Cozumel </input> <br/>
        <input type="submit" name="submit" value="Submit">
    </form>
</section>

<section id="rightcol">
    <?
    $site = $_POST['site'];
    $dives = file('dives.txt', FILE_IGNORE_NEW_LINES);
    $total_dives = 0;
    $total_time = 0;

    if ($site == "Roatan") {
        print "<h1>Summary for $site</h1>";
        print "<table>";
        print "<tr> <th> <b> Dive Type </b> </th> <th> <b> Duration </b> </th> <th> <b> Depth </b> </th> </tr>";
        foreach ($dives as $record) {
            $fields = explode(",", $record);
            if ($fields[0] == $site) {
                $total_dives++;
                $total_time += $fields[2];
                print "<tr>";
                print "<td> $fields[1]</td>";
                print "<td> $fields[2]</td>";
                print "<td> $fields[3]</td>";
                print "</tr>";
            }
        }

        print "</table> <br/>";
        print "Total Dives: $total_dives <br/>";
        print "Total time underwater at $site: $total_time";
    }
    
    if ($site == "Bonaire") {
        print "<h1>Summary for $site</h1>";
        print "<table>";
        print "<tr> <th> <b> Dive Type </b> </th> <th> <b> Duration </b> </th> <th> <b> Depth </b> </th> </tr>";
        foreach ($dives as $record) {
            $fields = explode(",", $record);
            if ($fields[0] == $site) {
                $total_dives++;
                $total_time += $fields[2];
                print "<tr>";
                print "<td> $fields[1]</td>";
                print "<td> $fields[2]</td>";
                print "<td> $fields[3]</td>";
                print "</tr>";
            }
        }

        print "</table> <br/>";
        print "Total Dives: $total_dives <br/>";
        print "Total time underwater at $site: $total_time";
    }
    
    if ($site == "Grand Cayman") {
        print "<h1>Summary for $site</h1>";
        print "<table>";
        print "<tr> <th> <b> Dive Type </b> </th> <th> <b> Duration </b> </th> <th> <b> Depth </b> </th> </tr>";
        foreach ($dives as $record) {
            $fields = explode(",", $record);
            if ($fields[0] == $site) {
                $total_dives++;
                $total_time += $fields[2];
                print "<tr>";
                print "<td> $fields[1]</td>";
                print "<td> $fields[2]</td>";
                print "<td> $fields[3]</td>";
                print "</tr>";
            }
        }

        print "</table> <br/>";
        print "Total Dives: $total_dives <br/>";
        print "Total time underwater at $site: $total_time";
    }
    
    if ($site == "Key Largo") {
        print "<h1>Summary for $site</h1>";
        print "<table>";
        print "<tr> <th> <b> Dive Type </b> </th> <th> <b> Duration </b> </th> <th> <b> Depth </b> </th> </tr>";
        foreach ($dives as $record) {
            $fields = explode(",", $record);
            if ($fields[0] == $site) {
                $total_dives++;
                $total_time += $fields[2];
                print "<tr>";
                print "<td> $fields[1]</td>";
                print "<td> $fields[2]</td>";
                print "<td> $fields[3]</td>";
                print "</tr>";
            }
        }

        print "</table> <br/>";
        print "Total Dives: $total_dives <br/>";
        print "Total time underwater at $site: $total_time";
    }
    
    if ($site == "Key West") {
        print "<h1>Summary for $site</h1>";
        print "<table>";
        print "<tr> <th> <b> Dive Type </b> </th> <th> <b> Duration </b> </th> <th> <b> Depth </b> </th> </tr>";
        foreach ($dives as $record) {
            $fields = explode(",", $record);
            if ($fields[0] == $site) {
                $total_dives++;
                $total_time += $fields[2];
                print "<tr>";
                print "<td> $fields[1]</td>";
                print "<td> $fields[2]</td>";
                print "<td> $fields[3]</td>";
                print "</tr>";
            }
        }

        print "</table> <br/>";
        print "Total Dives: $total_dives <br/>";
        print "Total time underwater at $site: $total_time";
    }
    
    if ($site == "Aruba") {
        print "<h1>Summary for $site</h1>";
        print "<table>";
        print "<tr> <th> <b> Dive Type </b> </th> <th> <b> Duration </b> </th> <th> <b> Depth </b> </th> </tr>";
        foreach ($dives as $record) {
            $fields = explode(",", $record);
            if ($fields[0] == $site) {
                $total_dives++;
                $total_time += $fields[2];
                print "<tr>";
                print "<td> $fields[1]</td>";
                print "<td> $fields[2]</td>";
                print "<td> $fields[3]</td>";
                print "</tr>";
            }
        }

        print "</table> <br/>";
        print "Total Dives: $total_dives <br/>";
        print "Total time underwater at $site: $total_time";
    }
    
    if ($site == "Queensland") {
        print "<h1>Summary for $site</h1>";
        print "<table>";
        print "<tr> <th> <b> Dive Type </b> </th> <th> <b> Duration </b> </th> <th> <b> Depth </b> </th> </tr>";
        foreach ($dives as $record) {
            $fields = explode(",", $record);
            if ($fields[0] == $site) {
                $total_dives++;
                $total_time += $fields[2];
                print "<tr>";
                print "<td> $fields[1]</td>";
                print "<td> $fields[2]</td>";
                print "<td> $fields[3]</td>";
                print "</tr>";
            }
        }

        print "</table> <br/>";
        print "Total Dives: $total_dives <br/>";
        print "Total time underwater at $site: $total_time";
    }
    
    if ($site == "Kailua Kona") {
        print "<h1>Summary for $site</h1>";
        print "<table>";
        print "<tr> <th> <b> Dive Type </b> </th> <th> <b> Duration </b> </th> <th> <b> Depth </b> </th> </tr>";
        foreach ($dives as $record) {
            $fields = explode(",", $record);
            if ($fields[0] == $site) {
                $total_dives++;
                $total_time += $fields[2];
                print "<tr>";
                print "<td> $fields[1]</td>";
                print "<td> $fields[2]</td>";
                print "<td> $fields[3]</td>";
                print "</tr>";
            }
        }

        print "</table> <br/>";
        print "Total Dives: $total_dives <br/>";
        print "Total time underwater at $site: $total_time";
    }
    
    if ($site == "Belize") {
        print "<h1>Summary for $site</h1>";
        print "<table>";
        print "<tr> <th> <b> Dive Type </b> </th> <th> <b> Duration </b> </th> <th> <b> Depth </b> </th> </tr>";
        foreach ($dives as $record) {
            $fields = explode(",", $record);
            if ($fields[0] == $site) {
                $total_dives++;
                $total_time += $fields[2];
                print "<tr>";
                print "<td> $fields[1]</td>";
                print "<td> $fields[2]</td>";
                print "<td> $fields[3]</td>";
                print "</tr>";
            }
        }

        print "</table> <br/>";
        print "Total Dives: $total_dives <br/>";
        print "Total time underwater at $site: $total_time";
    }
    
    if ($site == "Cozumel") {
        print "<h1>Summary for $site</h1>";
        print "<table>";
        print "<tr> <th> <b> Dive Type </b> </th> <th> <b> Duration </b> </th> <th> <b> Depth </b> </th> </tr>";
        foreach ($dives as $record) {
            $fields = explode(",", $record);
            if ($fields[0] == $site) {
                $total_dives++;
                $total_time += $fields[2];
                print "<tr>";
                print "<td> $fields[1]</td>";
                print "<td> $fields[2]</td>";
                print "<td> $fields[3]</td>";
                print "</tr>";
            }
        }

        print "</table> <br/>";
        print "Total Dives: $total_dives <br/>";
        print "Total time underwater at $site: $total_time";
    }
    ?>
</section>
</body>
</html>
