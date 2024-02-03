<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Котофилия</title>
</head>
<body>
<x-header/>
      <div class="main center">
        <div class="main__info">
            <p class="title2">
                BYajhsjis sjkaosk sakkasopsd asdkoad
            </p>
            @guest
            <button type="button" class="info__button" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Pspdls;d
            </button>
            @endguest
            @auth
            <a href="/app" class="btn btn-info">
            Pspdls;d
            </a>
            @endauth
<!-- Модальное окно -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">

        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Авторизуйтесь в системе!!
      </div>

    </div>
  </div>
</div>
 <!-- Модальное окно -->

        </div>
        <div class="main_img">
            <img src="./images/1.png" alt="ss" style="max-width: 300px;">
        </div>
      </div>
      <div class="main center"> 
        <div class="main_img">
            <img src="./images/2.jpg" alt="ss" style="max-width: 300px;">
        </div>
        <div class="main__info">
            <p class="title1">
               O nas
            </p>
            <p class="title2">
                BYajhsjis sjkaosk sakkasopsd asdkoad
            </p>
        </div>
        </div>
        <div class="cats center"> 
                <div class="cats_info">
                <p class="title1">
                  Nashi cats
                </p>
                <div class="filter__a">
                    <a href="#" class="filter_a">Smeshnie cats</a>
                <a href="#" class="filter_a">Grustni cats</a>
                <a href="#" class="filter_a">Tupie cats</a>
                </div>
                </div>  
                <div class="cats__cards">
                    <div class="card" style="width: 18rem;">
                        <img src="./images/1.png" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Заголовок карточки</h5>
                          <p class="card-text">Небольшой пример текста, который должен основываться на названии карточки и составлять основную часть содержимого карты.</p>
           
                        </div>
                      </div>
                      <div class="card" style="width: 18rem;">
                        <img src="./images/1.png" class="card-img-top cats__img" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Заголовок карточки</h5>
                          <p class="card-text">Небольшой пример текста, который должен основываться на названии карточки и составлять основную часть содержимого карты.</p>
           
                        </div>
                      </div>
                      <div class="card" style="width: 18rem;">
                        <img src="./images/3.jpg" class="card-img-top cats__img" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Заголовок карточки</h5>
                          <p class="card-text">Небольшой пример текста, который должен основываться на названии карточки и составлять основную часть содержимого карты.</p>
           
                        </div>
                      </div>
                </div>
                
            </div>
            </div>
     <x-js/>
</body>
</html>