<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body class="bg-dark text-white">
<div class="d-flex flex-column flex-md-row align-items-center bg-dark texy-white pb-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
        <span class="fs-4 text-white">KAT_Corpration</span>
      </a>

      <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
        <a class="me-3 py-2 mt-2 text-white text-decoration-none" href="/">Главная</a>
        <a class="me-3 py-2 mt-2 text-white text-decoration-none" href="/about">Про нас</a>
        <a class="btn btn-warning mt-2" href="/review">Отзывы</a>
      </nav>
    </div>




<div class="container">
    @yield('main_content')
</div>



</body>
</html>