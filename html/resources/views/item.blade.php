<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
    <meta name="description" content="Laravel test project">

    <link rel="stylesheet" href="/styles/normalize.min.css">
    <link rel="stylesheet" href="/styles/style.css">

    <link rel="stylesheet" href="/styles/slick-theme.css">
    <link rel="stylesheet" href="/styles/slick.css">

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="/scripts/slick.min.js"></script>
    <script type="text/javascript" src="/scripts/slick.js"></script>
</head>

<body>
    <header>

        <a href="/"><img src="/images/main_logo.png" width="130px"></a>

    </header>

    <main>

        <section>

            <div class="itemShow">
                <img src="/images/{{$data->image}}.webp" width="200px">
                <h2>{{$data->name}}</h2>
                <p>Диагональ экрана (дюйм): {{$data->diagonal}}</p>
                <p>Тип матрицы: {{$data->matrix}}</p>
                <p>Цена: {{number_format($data->cost, 0, '', ' ')}}  &#8381;</p>
            </div>

        </section>

        <aside>
            Отзывы<br><br>
            <div class="comment_text">
                <form action="{{url('saveComment')}}" method="POST">
                @csrf
                <textarea name="comment" placeholder="Ваш отзыв..."></textarea>
                <input type="hidden" name="goods_id" value="{{$data->id}}">
                <input type="submit" class="btn sendComment" value="">
                </form>
            </div>
    
            <div class="comments">

                @foreach ($comments as $item)
                    <div class="comment">
                        {{$item->comment}}
                    </div>
                @endforeach

            </div>
    
        </aside>

    </main>

    <footer>
        <ul class="footer__list">
            <li><a href="/"><img src="/images/main_logo.png" width="130px" class="footer__logo"></a></li>
            <li>
                <div>
                    <ul class="nav">
                        <li><a href="/" rel="nofollow"></a></li>
                        <li><a href="/" rel="nofollow"></a></li>
                        <li><a href="/" rel="nofollow"></a></li>
                        <li><a href="/" rel="nofollow"></a></li>
                        <li><a href="/" rel="nofollow"></a></li>
                        <li><a href="/" rel="nofollow"></a></li>
                        <li></li>
                        <li></li>
                    </ul>
                </div>
            </li>
            <li>
                <div class="section__info_social">
                    <ul class="social">
                        <li><a href="/" rel="nofollow"><img src="/images/instagram.png"></a></li>
                        <li><a href="/" rel="nofollow"><img src="/images/telegram.png"></a></li>
                        <li><a href="/" rel="nofollow"><img src="/images/whatsup.png"></a></li>
                        <li><a href="/" rel="nofollow"><img src="/images/vk.png"></a></li>
                    </ul>
                </div>
            </li>
        </ul>

        <div class="footer__bottom">
            Laravel test
        </div>
    </footer>
</body>

</html>