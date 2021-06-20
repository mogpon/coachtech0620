<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <!-- @if($index %2 == 0)
    2の倍数です。
  @elseif($index %3 == 0)
    3の倍数です。
  @else
    2の倍数でも3の倍数でもありません。
  @endif -->
  <ul>
    @foreach ($data as $value)
    <li> {{$value}} </li>
    @endforeach
  </ul>
</body>

</html>