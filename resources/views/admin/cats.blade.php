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
        <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Добавить
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Добавление котика</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="POST" action="/add_cat" enctype="multipart/form-data">
        @csrf
  <div class="mb-3">
    <label class="form-label">Кличка</label>
    <input type="text" class="form-control" name="cat_name">
    @error('cat_name')
            {{$message}}
            @enderror
  </div>
  
  <div class="mb-3">
    <label class="form-label">Описание</label>
    <input type="text" class="form-control" name="description">
    @error('description')
            {{$message}}
            @enderror
  </div>

  <div class="mb-3">
    <label class="form-label">Категория</label>
    <select name="category_id" class="form-control">


        <option value="1">Смешные котики</option>
        <option value="2">Грустные котики</option>
        <option value="3">Крутые котики</option>
    </select>
    @error('category_id')
            {{$message}}
            @enderror
  </div>

  <div class="mb-3">
    <label class="form-label">Фото</label>
    <input type="file" class="form-control" name="image">
    @error('image')
            {{$message}}
            @enderror
  </div>
  <button type="submit" class="btn btn-primary">Добавить</button>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Отмена</button>
      </div>
    </div>
  </div>
</div>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Фото</th>
      <th scope="col">Кличка</th>
      <th scope="col">Описание</th>
      <th scope="col">Категория</th>
    </tr>
  </thead>
  <tbody>
    @foreach($cats as $cat)
    <tr>
      <th scope="row">{{$cat->id}}</th>
      <td><img src="../images/{{$cat->avatar}}" alt="" width="100px">
      </td>
      <td>{{$cat->cat_name}}</td>
      <td>{{$cat->description}}</td>
      <td>{{$cat->category_id}}</td>
      <td><a href="/delete_cat/{{$cat->id}}">Удалить</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
    </div>
</body>
</html>