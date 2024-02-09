<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<link rel="stylesheet" href="../css/style.css">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid center">
          <a class="navbar-brand" href="#">Котофилия</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Переключатель навигации">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">О нас</a>
              </li>
              
              @guest
              <li class="nav-item">
                <a class="nav-link" href="/signin">Вход</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/signup">Регистрация</a>
              </li>
              @endguest
              @auth
              <li class="nav-item">
                <a class="nav-link" href="/app">Точить когти</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/lk">Кабинет</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/signout">Выход</a>
              </li>
              @endauth
            </ul>
          </div>
        </div>
      </nav>