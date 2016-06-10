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
  .dropdown{
    display:inline;
  }
</style>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
   <ul class="nav navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="/">Sadaļa1</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="sadala1">Sadaļa2</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="sadala2">Sadaļa3</a>
    </li>
    <!-- <li class="nav-item">
      <a class="nav-link" href="sadala3">Sadaļa4</a>
    </li> -->
  </ul>

  </div>
</nav>
<!-- <nav class="navbar navbar-dark bg-primary">
<div class="container-fluid">
<button class="navbar-toggler hidden-md-up pull-right" type="button" data-toggle="collapse" data-target="#collapsingNavbar2">
☰
</button>
<a class="navbar-brand" href="#">Navbar sm</a>
<div class="collapse navbar-toggleable-xs" id="collapsingNavbar2">
<ul class="nav navbar-nav">
<li class="nav-item">
<a class="nav-link" href="#">Link</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">Link</a>
</li>
</ul>
<ul class="nav navbar-nav pull-xs-right">
<li class="nav-item">
<a class="nav-link" href="#">About</a>
</li>
</ul>
</div>
</div>
</nav> -->

 <?php echo $__env->yieldContent('content'); ?>


</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</html>
