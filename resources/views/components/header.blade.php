<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<link rel="stylesheet" href="../css/style.css">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid center">
          <a class="navbar-brand" href="/"><img src="/images/logo.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Переключатель навигации">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              @if(Auth::check())
              @if(Auth::user()->role_id == 2)
              <li class="nav-item">
                <a class="info__button btn_hx active" aria-current="page" href="/">О нас</a>
              </li>
              @endif
              @else
              <li class="nav-item">
                <a class="info__button btn_hx active" aria-current="page" href="/">О нас</a>
              </li>
              @endif
              @guest
              <li class="nav-item">
                <a class="info__button btn_hx" href="/signin">Вход</a>
              </li>
              <li class="nav-item">
                <a class="info__button btn_hx" href="/signup">Регистрация</a>
              </li>
              <li class="nav-item">
                <a class="info__button btn_hx" href="/signin_adm">Админ</a>
              </li>
              @endguest

              @auth
              @if(Auth::user()->role_id == 2)
              <li class="nav-item">
                <a class="info__button btn_hx" href="/app">Точить когти</a>
              </li>
              <li class="nav-item">
                <a class="info__button btn_hx" href="/lk">Кабинет</a>
              </li>
              <li class="nav-item">
                <a class="info__button btn_hx" href="/signout">Выход</a>
              </li>
              @endif
              @if(Auth::user()->role_id == 1)
              <li class="nav-item">
                <a class="info__button btn_hx" href="/admin">Заявки</a>
              </li>
              <li class="nav-item">
                <a class="info__button btn_hx" href="/cats">Котики</a>
              </li>
              <li class="nav-item">
                <a class="info__button btn_hx" href="/signout">Выход</a>
              </li>
              @endif
              @endauth
            </ul>
          </div>
        </div>
      </nav>