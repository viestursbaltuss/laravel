<!DOCTYPE html>
<html>


<head>

  <meta charset="UTF-8">
  <title>SQL</title>

</head>

<body>
<h1>SQL</h1>
<p>
 <?php
   $dbhost = 'localhost:5432';
   $dbuser = 'postgres';
   $dbpass = 'rootpassword';
   $conn = pgsql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . pgsql_error());
   }
   
   $sql = 'INSERT INTO employee '.
      '(emp_name,emp_address, emp_salary, join_date) '.
      'VALUES ( "guest", "XYZ", 2000, NOW() )';
      
   pgsql_select_db('test_db');
   $retval = pgsql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not enter data: ' . pgsql_error());
   }
   
   echo "Entered data successfully\n";
   
   pgsql_close($conn);
?>
</p>


</body>
</html>