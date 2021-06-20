<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COACHTECH</title>
</head>
<body>
  <ul>
    @include ('components.items',['item' => 'include']) 
      <!-- items.blabe.phpから変数itemを取り込み、includeを代入 -->
  </ul>
  <ul>
    @component ('components.items')
      <!-- items.blabe.phpを呼び出す -->
    @slot ('item')
      <!-- itemを引き渡す -->
    component
    @endslot
    @endcomponent
  </ul>
  <ul>
    @each ('components.items',['item1','item2'],'item')
  </ul>
</body>
</html>