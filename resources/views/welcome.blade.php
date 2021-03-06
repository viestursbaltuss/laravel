<table class="table">
    <thead>
      <tr>
        <th>id</th>
        <th>Title</th>
        <th>Genre</th>
        <th>Year</th>
          <th>Author</th>
        <th class='widthth'>About</th>
      </tr>
    </thead>
    <tbody>
  @foreach ($books as $user)
        <tr>
        <td> {{ $user->id }}</td>
        <td> {{ $user->title }}</td>
        <td> {{ $user->genre}}</td>
        <td> {{ $user->year1 }}</td>
        <td> {{ $user->bookAuthor->name1 . ' ' . $user->bookAuthor->lastname }}</td>
        <td>
        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#{{ $user->id }}">About</button>

      <!-- Modal -->
      <div id="{{ $user->id }}" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">About</h4>
            </div>
            <div class="modal-body">
      <!-- ABOUT INFO -->

              <p>Name: {{$user->name1}}<br><br>
              Lastname: {{$user->lastname }}<br><br>
              Birth: {{$user->birth }}<br><br>
              Info: {{ $user->about}}.
              </p>


      <!-- /\/\/\/\/\ -->
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
      </div>
      </div>
      </div>
      <!--/ Modal -->
      </td>

      </tr> 
    @endforeach

</tbody>

</table>
  <center>{!! $books->render() !!}</center>