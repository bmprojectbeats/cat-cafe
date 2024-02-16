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
            <img src="../images/cat1.png" alt="ss" style="max-width: 300px;">
        </div>
      </div>
      <div class="main center"> 
        <div class="main_img">
            <img src="../images/2.jpg" alt="ss" style="max-width: 300px;">
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
                <p class="title1" id="target">
                  Nashi cats
                </p>
                <div class="filter__a">
                  @foreach($categories as $category)
                <a href="/filt_categ/{{$category->id}}#target" class="filter_a">{{$category->category_title}}</a>
                  @endforeach
                </div>
                </div>  
                <div class="cats__cards">
                @foreach($cats as $cat)
                <div class="card" style="width: 18rem;">
                        <img src="../images/{{$cat->avatar}}" class="card-img-top cats__img" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">{{$cat->cat_name}}</h5>
                          <p class="card-text">{{$cat->description}}</p>
           
                        </div>
                      </div>
                @endforeach                  
                </div>
                
            </div>
            </div>
     <x-js/>
</body>
</html>