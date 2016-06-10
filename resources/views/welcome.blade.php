 @extends('layout')
@section('content')


<?php

    
      // $authorid =$author->id;

//        foreach ($users as $user) {
//     echo "&nbsp;&nbsp;";
  
//     echo=$namee;
//     echo "<br>";
//     // DB::table('users')
//     //         ->where('id', 10)
//     //         ->update(['email' => 'uddatephp@email.com']);
// }
?>
<table class="table">
    <thead>
      <tr>
        <th>id</th>
        <th>title</th>
        <th>Genre
<div class="dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">All
    <span class="caret"></span></button>
    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">1</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">2</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">3</a></li>
      <li role="presentation" class="divider"></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">4</a></li>
    </ul>
  </div>


</th>
        <th>year</th>
          <th>author</th>
        <th class='widthth'>about</th>
      
      </tr>
    </thead>
    <tbody>
  @foreach ($books as $user)
       <tr>
        <td> {{ $user->id }}</td>
        <td> {{ $user->title }}</td>
        <td> {{ $user->genre }}</td>
        <td> {{ $user->year1 }}</td>
        <td> {{ $user->bookAuthor->name1 . ' ' . $user->bookAuthor->lastname }}</td>
        <td>

        <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal">About</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">About</h4>
      </div>
      <div class="modal-body">
        <p>Name: {{$user->bookAuthor->name1}}<br><br>
        Lastname: {{$user->bookAuthor->lastname }}<br><br>
        Birth: {{$user->bookAuthor->birth }}<br><br>
        Info: {{ $user->about}}.
<!--about info-->
<?php

?>








        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!--/ Modal -->

 </td>
        <td> </td>

      </tr> 
@endforeach
    </tbody>
  </table>
</div>



@stop