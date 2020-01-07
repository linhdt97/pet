<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet shop</title>
    <link href="https://fonts.googleapis.com/css?family=Varela+Round&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{!! asset('fonts/css/all.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('css/style.css') !!}">
</head>
<body>
<div id="app">
    <div class="_header">
        <div class="header-left">
            <div class="icon-page">
                <i class="fas fa-info-circle"></i>
            </div>
            <ul class="menu">
                <li><a href="#">Trang chủ</a></li>
                <li><a href="#">Sản phẩm</a></li>
                <li><a href="#">Về chúng tôi</a></li>
                <li><a href="#">Liên hệ</a></li>
                <li><a href="#" class="highlight">Boss tìm sen</a></li>
            </ul>
        </div>
        <div class="search-container">
            <form action="">
                <input type="search" name="search" placeholder="Bạn muốn tìm gì hôm nay?">
                <i class="fa fa-search"></i>
            </form>
        </div>
        <div class="header-right">
            <div class="cart">
                <i class="fa fa-cart-plus"></i>
            </div>
            <div class="user">
                <i class="fa fa-user"></i>
            </div>
        </div>
    </div>
    <div class="_banner"></div>
</div>

<script src="{!! asset('libs/jquery.min.js') !!}"></script>
<script src="{!! asset('js/main.js') !!}"></script>
</body>
</html>
