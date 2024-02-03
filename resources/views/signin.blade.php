<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Котофилия</title>
</head>
<body>
<x-header/>


      <form method="POST" action="/signin_valid" class="center">
        @csrf
        <p class="title1">
        Вход
        </p>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Адрес электронной почты</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                 </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Пароль</label>
          <input type="password" class="form-control" id="exampleInputPassword1" name="password">
        </div>
                <button type="submit" class="btn btn-primary">Вход</button>
                @if(session('error'))
                {{session('error')}}
                @endif
      </form>
     <x-js/>
</body>
</html>