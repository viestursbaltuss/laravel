<!DOCTYPE html>
<html>


<head>

  <meta charset="UTF-8">
  <title></title>

</head>

<body>
@foreach ($cards as $card)

	{{$card->name}}

@endforeach
</body>
</html>
