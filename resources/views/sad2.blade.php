 @extends('layout')
@section('content')

<h2>SADAĻA 4</h2>
<?php
   $arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);
   echo json_encode($arr);
?>
<br>
<br>


<?php

?>


@stop