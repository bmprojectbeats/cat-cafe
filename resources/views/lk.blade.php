<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Котофилия</title>
</head>
<body>
<x-header/>
        <div class="center">
          <div class="card " style="width: 18rem;">
      <ul class="list-group list-group-flush">
        <li class="list-group-item">Моя инфа: </li>
        <li class="list-group-item">Имя: {{$user->name}}</li>
        <li class="list-group-item">Почта: {{$user->email}}</li>
      </ul>
    </div>

     <div class="center" style="margin: 30px 0;">
      <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
        Мои заявки:
      </button>
     
      </p>
      <div class="collapse" id="collapseExample">
        @foreach($apps as $app)
        <div class="card " style="width: 18rem;">
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Время: {{$app->time}}</li>
            <li class="list-group-item">Статус: {{$app->status_title}}</li>
            <li class="list-group-item">Кот: {{$app->cat_name}}</li>
          </ul>
        </div>
        @endforeach
      </div>

     
   </div>
     <x-js/>
</body>
</html>