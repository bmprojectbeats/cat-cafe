<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Котофилия</title>
</head>

<body>
    <x-header />
    <div class="bgc1" style="background-image: url(/images/fon.png); background-repeat: no-repeat;">
        <div class="main center">
            <div class="main__info">
                <p class="title22">
                    Единственное в Уксивте тайм-кафе,
                    в котором живут кошки!
                </p>
                <p class="title223">
                    Самое уютное котокафе города
                </p>
                <div class="main__info_images">
                    <img src="/images/cats1.png" alt="" class="main__info_img">
                    <img src="/images/cats2.png" alt="" class="main__info_img">
                    <img src="/images/cats3.png" alt="" class="main__info_img">
                </div>
                @guest
                    <button type="button" class="info__button btn_hz" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        Встретиться с котиками
                    </button>
                @endguest
                @auth
                    <a href="/app" class="btn btn-info btn_hz">
                        Встретиться с котиками
                    </a>
                @endauth
                <!-- Модальное окно -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">

                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Авторизуйтесь в системе!!
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Модальное окно -->

            </div>

        </div>


    </div>

    <div class="bgc1" style="background-color: #FFD689">
        <div class="about__info center">
            <p class="title1">
                О нас
            </p>
            <div class="about">
                <div class="main_img">
                    <img src="../images/cat3.png" alt="ss" style="max-width: 300px;">
                </div>
                <div class="about__txt"
                    style="background-image: url(/images/fon3.png); background-size: contain;background-repeat: no-repeat;">

                    <p class="title44">
                        «Мурзик» - это уютное котокафе в Уфе,
                    </p>
                    <p class="title55">
                        где каждый гость попадает в атмосферу тепла, ласки и мурлыкающего гостеприимства. Наше заведение
                        является идеальным местом для тех, кто хочет провести время с мурлыкающими друзьями, насладиться
                        горячим кофе и вкусными десертами, а также просто отдохнуть от повседневной суеты.
                    </p>
                </div>
            </div>
            <div class="about">

                <div class="about__txt"
                    style="background-image: url(/images/fon3.png); background-size: contain;background-repeat: no-repeat;">

                    <p class="title44">
                        Все наши котики полностью здоровы.
                    </p>
                    <p class="title55">
                        Они привиты, проглистогонены и стерилизованы. С каждым из них можно поиграть,
                        пофотографироваться, и даже забрать кого‑то из них к себе домой.
                    </p>
                </div>
                <div class="main_img">
                    <img src="../images/cat4.png" alt="ss" style="max-width: 300px;">
                </div>
            </div>
        </div>
    </div>

    <div class="bgc1" style="background-image: url(/images/fon.png); background-repeat: no-repeat;">
        <div class="cats center">
            <div class="cats_info">
                <p class="title1" id="target">
                    Nashi cats
                </p>

                <div class="cats_list">
                    <div class="main_img">
                        <img src="../images/cat3.png" alt="ss" style="max-width: 300px;">
                        <p class="title44">Olga</p>
                    </div>
                    <div class="main_img">
                        <img src="../images/cat3.png" alt="ss" style="max-width: 300px;">
                        <p class="title44">Olga</p>
                    </div>
                    <div class="main_img">
                        <img src="../images/cat3.png" alt="ss" style="max-width: 300px;">
                        <p class="title44">Olga</p>
                    </div>
                </div>

                <div class="filter__a">
                    @foreach ($categories as $category)
                        <a class="" href="/filt_categ/{{ $category->id }}#target"
                            class="filter_a">{{ $category->category_title }}</a>
                    @endforeach
                </div>
            </div>
            <div class="cats__cards">
                @foreach ($cats as $cat)
                
                    <div class="card" style="width: 18rem;">
                        <img src="../images/{{ $cat->avatar }}" class="card-img-top cats__img" alt="...">
                        <div class="card-body">
                            <h5 class="title44">{{ $cat->cat_name }}</h5>
                            <p class="card-text">{{ $cat->description }}</p>

                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
    </div>
    <x-js />
</body>

</html>
