<html> 
    <body> 
        <?php 
        $db = pg_connect('host=localhost dbname=base user=postgres password=12345678'); 

            $name1 = pg_escape_string($_POST['name1']); 
        $lastname1 = pg_escape_string($_POST['lastname1']); 
        $year1 = pg_escape_string($_POST['year1']); 

        $query = "INSERT INTO tabula(name1, lastname1, year1) VALUES('" . $name1 . "', '" . $lastname1 . "', '" . $year1 . "')";
        $result = pg_query($query); 
        if (!$result) { 
            $errormessage = pg_last_error(); 
            echo "Error with query: " . $errormessage; 
            exit(); 
        } 
        printf ("These values were inserted into the database - %s %s %s", $name1, $lastname1, $year1); 
        pg_close(); 






        ?> 


         <table border="1" cellspacing="5" cellpadding="5"> 
            <tr> 
                <td> 
                    ID 
                </td> 
                <td> 
                    name1 
                </td> 
                <td> 
                    LastName
                </td> 
                <td> 
                    Year 
                </td> 
            </tr> 
        <?php 
        $db = pg_connect('host=localhost dbname=base user=postgres password=12345678'); 

        $query = "SELECT * FROM tabula limit 100"; 

        $result = pg_query($query); 
        if (!$result) { 
            echo "Problem with query " . $query . "<br/>"; 
            echo pg_last_error(); 
            exit(); 
        } 

        while($myrow = pg_fetch_assoc($result)) { 
            printf ("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>", $myrow['id'], htmlspecialchars($myrow['name1']), htmlspecialchars($myrow['lastname1']), htmlspecialchars($myrow['year1']));





            

        } 
        ?> 
        </table> 
    </body> 
</html> 