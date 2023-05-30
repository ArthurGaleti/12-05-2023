<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>
    {{-- CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <div class="container">
        <h1>T94 - Hello World</h1>

        <hr>
        @yield('content')
        <hr>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid odit eos ut non quae fuga quo totam quisquam excepturi. Dicta officiis modi suscipit laborum sunt ut iusto at deserunt maxime?</p>
        <p>Tempore, repellat. Praesentium delectus deserunt esse veniam beatae officia officiis maiores inventore ex fugiat nostrum sed alias perspiciatis, quis maxime fugit corrupti accusantium. Sed numquam odio quo atque quod corrupti?</p>
        <p>Eum, ducimus nesciunt cumque nobis natus quasi harum nostrum voluptas tempora, doloribus unde est saepe laboriosam ut ab, architecto earum? Est, eligendi nulla. Tempore ut pariatur velit eaque quaerat iure?</p>
        <p>Consectetur cum accusamus explicabo, deserunt numquam corrupti aliquam nulla ut illo repellendus nobis dicta suscipit praesentium nemo, vitae quasi distinctio corporis ratione tempora provident magnam. Soluta odio cum dicta fugiat.</p>
        <p>Iure quisquam nemo, odio repellendus impedit doloribus voluptas omnis. Libero dolores aspernatur eos voluptatibus ab, nisi provident saepe nam a porro, reiciendis eius repellat ullam, harum quo velit omnis itaque.</p>
    </div>

    <footer>
        <p class="fs-5">T94</p>
    </footer>
</body>
</html>
