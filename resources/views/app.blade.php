<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Котофилия</title>
</head>
<body>
<x-header/>


     
  <form method="POST" action="/app_let" class="center">
    @csrf
    <p class="title1">
    Забронировать место
    </p>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Вы: {{Auth::user()->name}} {{Auth::user()->email}}</label>
             </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Адрес: тополякова 17</label>
    </div>
    <select class="form-select" aria-label="Default select example" style="max-width: 300px;" name="time">
      <option selected disabled>время вбыирать</option>
      @foreach($times as $time)
      <option value="{{$time->id}}">{{$time->time_title}}</option>
      @endforeach
    </select>
    @error('time')
            {{$message}}
            @enderror
    <div class="container center">

      <h1>Выберите кота</h1>
      
                 
              @foreach($cats as $cat)
              <label>
              <input type="radio" class="card-input-element" name="cat" value="{{$cat->id}}"/>
                <div class="panel panel-default card-input">
                  <div class="card" style="width: 18rem;">
                    <img src="./images/{{$cat->avatar}}" class="card-img-top cats__img" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{$cat->cat_name}}</h5>
                      <p class="card-text">{{$cat->description}}</p>
       
                    </div>
                  </div>
                </div>
            </label>
            @endforeach
            @error('cat')
            {{$message}}
            @enderror
            

          
          </div>
          
      </div>
      
    </div>
  </div>
            <button type="submit" class="btn btn-primary">Забранировать</button>
  </form>
     <x-js/>
</body>
</html>