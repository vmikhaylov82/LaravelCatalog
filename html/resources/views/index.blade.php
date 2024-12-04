<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
    <meta name="description" content="Laravel test project">

    <link rel="stylesheet" href="/styles/normalize.min.css">
    <link rel="stylesheet" href="/styles/style.css">

</head>

<body>
    <header>

        <a href="/"><img src="/images/main_logo.png" width="130px"></a>

    </header>

    <main>

        <section>

            <div class="section__params">

                <form action="{{url('indexWithParams')}}" method="GET">
                    @csrf
                    Цена от: <input type="text" name="costFrom" value="{{(isset($request->costFrom)?$request->costFrom:'')}}">
                    до: <input type="text" name="costTo" value="{{(isset($request->costTo)?$request->costTo:'')}}">
                    
                    <div>
                        Тип матрицы
                        <ul class="list">
                            @foreach ($listMatrix as $item)
                            <li><input type="checkbox" name="matrix[]" value="{{$item->matrix}}" {{(isset($request->matrix) && in_array($item->matrix , $request->matrix)?'checked':'')}}> {{$item->matrix}}</li>
                            @endforeach
                        </ul>
                    </div>
                    <div>
                        Диагональ экрана
                        <ul class="list">
                            @foreach ($listDiagonal as $item)
                            <li><input type="checkbox" name="diagonal[]" value="{{$item->diagonal}}" {{(isset($request->diagonal) && in_array($item->diagonal , $request->diagonal)?'checked':'')}}> {{$item->diagonal}}"</li>
                            @endforeach
                        </ul>
                    </div>

                    <input type="submit" value="Применить" class="btn">
                </form>

                <form action="{{url('/')}}" method="GET">
                    <input type="submit" value="Сбросить" class="btn">
                </form>

            </div>
            
            <div class="items">
            @foreach ($data as $item)
                <div class="item"><img src="/images/{{$item->image}}.webp" width="100px">
                    <a href="{{url('/item', $item->id)}}">{{$item->name}}</a>
                    {{number_format($item->cost, 0, '', ' ')}} &#8381;
                </div>
            @endforeach
            </div>

            <div class="links">
            {{ $data->links() }}
            </div>
        </section>

    </main>

    <footer>
        <ul class="footer__list">
            <li><a href="/"><img src="/images/main_logo.png" width="130px" class="footer__logo"></a></li>
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