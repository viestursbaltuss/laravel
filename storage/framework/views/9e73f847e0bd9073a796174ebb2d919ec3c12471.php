<!DOCTYPE html>
<html>


<head>

  <meta charset="UTF-8">
  <title></title>

</head>

<body>
<?php foreach($cards as $card): ?>

	<?php echo e($card->name); ?>


<?php endforeach; ?>
</body>
</html>
