<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <x-header/>
    <div class="container">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Клиент</th>
      <th scope="col">Кот</th>
      <th scope="col">Время</th>
      <th scope="col">Статус</th>
    </tr>
  </thead>
  <tbody>
@foreach($apps as $app)
    <tr>
      <th scope="row">{{$app->id}}</th>
<td>{{$app->user}}</td>
      <td>{{$app->cat}}</td>
      <td>{{$app->time}}</td>
      @if($app->status_id == 1)
      <td>В обработке</td>
      @elseif($app->status_id == 2)
      <td>Отклонено</td>
      @elseif($app->status_id == 3)
      <td>Принято</td>
      @endif
      <td>
        @if($app->status_id == 1)
    <a href="/accept/{{$app->id}}">Принять</a>
    <a href="/decline/{{$app->id}}">Отклонить</a>
    @endif
</td>
    </tr>
@endforeach

  </tbody>
</table>
    </div>
</body>
</html>