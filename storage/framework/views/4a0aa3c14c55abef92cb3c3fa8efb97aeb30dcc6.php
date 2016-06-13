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
  <?php foreach($books as $user): ?>
        <tr>
        <td> <?php echo e($user->id); ?></td>
        <td> <?php echo e($user->title); ?></td>
        <td> <?php echo e($user->genre); ?></td>
        <td> <?php echo e($user->year1); ?></td>
        <td> <?php echo e($user->bookAuthor->name1 . ' ' . $user->bookAuthor->lastname); ?></td>
        <td>
        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">About</button>

      <!-- Modal -->
      <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">About</h4>
            </div>
            <div class="modal-body">
      <!-- ABOUT INFO -->

              <p>Name: <?php echo e($user->bookAuthor->name1); ?><br><br>
              Lastname: <?php echo e($user->bookAuthor->lastname); ?><br><br>
              Birth: <?php echo e($user->bookAuthor->birth); ?><br><br>
              Info: <?php echo e($user->about); ?>.
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
    <?php endforeach; ?>

</tbody>

</table>
  <center><?php echo $books->render(); ?></center>