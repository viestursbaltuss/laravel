 
<?php $__env->startSection('content'); ?>


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
  <?php foreach($books as $user): ?>
       <tr>
        <td> <?php echo e($user->id); ?></td>
        <td> <?php echo e($user->title); ?></td>
        <td> <?php echo e($user->genre); ?></td>
        <td> <?php echo e($user->year1); ?></td>
        <td> <?php echo e($user->bookAuthor->name1 . ' ' . $user->bookAuthor->lastname); ?></td>
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
        <p>Name: <?php echo e($user->bookAuthor->name1); ?><br><br>
        Lastname: <?php echo e($user->bookAuthor->lastname); ?><br><br>
        Birth: <?php echo e($user->bookAuthor->birth); ?><br><br>
        Info: <?php echo e($user->about); ?>.
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
<?php endforeach; ?>
    </tbody>
  </table>
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>