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
        <div class="card " style="width: 18rem;">
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Время</li>
            <li class="list-group-item">Статус:</li>
            <li class="list-group-item">Кот:</li>
          </ul>
        </div>
      </div>

     
   </div>
     <x-js/>
</body>
</html>