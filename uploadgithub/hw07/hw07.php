<!doctype html>
<html lang="en">
<head>
  <title> Homework 07 </title>
  <link rel="stylesheet" href="hw07.css"> 

</head>
<body>
<section id="leftcol">
    <h1>Select grade to list:</h1>
    <form method="post" action="hw07.php">
        <input type="radio" name="grades" value="A">A<br/>
        <input type="radio" name="grades" value="B">B<br/>
        <input type="radio" name="grades" value="C">C<br/>
        <input type="radio" name="grades" value="D">D<br/>
        <input type="radio" name="grades" value="F">F<br/>
        <input type="submit" name="submit" value="Submit">
    </form>
</section>

<section id="rightcol">
    <?
    $selected_grade =  $_POST['grades'];
    
    $names = file('student.names.txt', FILE_IGNORE_NEW_LINES);
    $grades = file('student.grades.txt', FILE_IGNORE_NEW_LINES);
    
    
    if ($selected_grade == "A") {
    print "<table>";
    print "<tr> <td> <b> Name </b> </td> <td> <b> Grade </b> </td> </tr>";
    foreach ($names as $i => $name) {
        if ($grades[$i] >= 90) {
            print "<tr>";
            print "<td> $names[$i]</td>";
            print "<td> $grades[$i]</td>";
            print "</tr>";
        }
    }
    print "</table>";
}
    
    
    if ($selected_grade == "B") {
    print "<table>";
    print "<tr> <td> <b> Name </b> </td> <td> <b> Grade </b> </td> </tr>";
    foreach ($names as $i => $name) {
        if ($grades[$i] < 90 and $grades[$i] >= 80) {
            print "<tr>";
            print "<td> $names[$i]</td>";
            print "<td> $grades[$i]</td>";
            print "</tr>";
        }
    }
    print "</table>";
}

    if ($selected_grade == "C") {
    print "<table>";
    print "<tr> <td> <b> Name </b> </td> <td> <b> Grade </b> </td> </tr>";
    foreach ($names as $i => $name) {
        if ($grades[$i] < 80 and $grades[$i] >= 70) {
            print "<tr>";
            print "<td> $names[$i]</td>";
            print "<td> $grades[$i]</td>";
            print "</tr>";
        }
    }
    print "</table>";
}

    if ($selected_grade == "D") {
    print "<table>";
    print "<tr> <td> <b> Name </b> </td> <td> <b> Grade </b> </td> </tr>";
    foreach ($names as $i => $name) {
        if ($grades[$i] < 70 and $grades[$i] >= 60) {
            print "<tr>";
            print "<td> $names[$i]</td>";
            print "<td> $grades[$i]</td>";
            print "</tr>";
        }
    }
    print "</table>";
}

    if ($selected_grade == "F") {
    print "<table>";
    print "<tr> <td> <b> Name </b> </td> <td> <b> Grade </b> </td> </tr>";
    foreach ($names as $i => $name) {
        if ($grades[$i] < 60) {
            print "<tr>";
            print "<td> $names[$i]</td>";
            print "<td> $grades[$i]</td>";
            print "</tr>";
        }
    }
    print "</table>";
}
    ?>    
</section>


</body>
</html>