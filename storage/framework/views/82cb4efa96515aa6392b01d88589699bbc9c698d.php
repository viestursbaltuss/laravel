<?php if($table_only): ?>


 <?php echo $__env->yieldContent('content'); ?>

<?php else: ?>

<!DOCTYPE html>
<html>


<head>

  <meta charset="UTF-8">
  <title></title>
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<style type="text/css">
    .widthth{
      width:50px;
    }
.modal-body{
    word-wrap: break-word; }

.form-group{
  width: 150px;
  height:30px;
  padding:0;

  margin: 0;
  padding-left: 10px;
   display:inline-block;}
.form-control {
width:100px;
height:30px;
float:left;


}
#search-btn { height:30px;display:inline-block; width:40px;float:right;padding:0px;margin:0px;  }

</style>
<body>
 <?php echo $__env->yieldContent('content'); ?>

</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="/js/main.js"></script>
</html>

<?php endif; ?>