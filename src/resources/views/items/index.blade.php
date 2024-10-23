<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>coachtechフリマ</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/items/index.css') }}" />
</head>

<body>
    <header class="header">
        <a class="header__logo" href="/">
            <img src="{{ asset('images/logo.svg') }}" alt="COACHTECH ロゴ" class="logo-image">
        </a>
    </header>

    <main>


            <nav class="item-filter-nav">
                <ul class="filter-list">
                    <li class="filter-option">
                        <a href="#" class="filter-link">おすすめ</a>
                    </li>
                    <li class="filter-option">
                        <a href="#" class="filter-link">マイリスト</a>
                    </li>
                </ul>
            </nav>


            <div class="item-container">
                @foreach ($items as $item)
                    <div class="item-card">
                        <img src="{{ asset($item->image_url) }}" alt="{{ $item->name }}" class="item-image">
                        <h3 class="item-name">{{ $item->name }}</h3>
                    </div>
                @endforeach
            </div>


    </main>
</body>

</html>