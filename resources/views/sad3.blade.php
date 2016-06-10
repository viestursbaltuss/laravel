 @extends('layout')
@section('content')


<?php
        $users = DB::table('users')->get();
var_dump($users);

   
    //    foreach ($users as $user) {
    // echo "&nbsp;&nbsp;";
    // echo $user->name;
    // echo "<br>";
    // echo $user->email;}
    //     echo json_encode ($users);
?>
<?php
$string = '{"foo": "bar", "cool": "attr"}';
$result = json_decode($string);

// Result: object(stdClass)#1 (2) { ["foo"]=> string(3) "bar" ["cool"]=> string(4) "attr" }
var_dump($result);

// Prints "bar"
echo $result->foo;

// Prints "attr"
echo $result->cool;
?>
@stop