<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet shop</title>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Baloo&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="fonts/css/all.css">
    <link rel="stylesheet" type="text/css" href="{!! asset('css/style.css') !!}">
</head>
<body>
<div id="app">
    <div class="_header">
        <div class="header-left">
            <div class="icon-page logo"></div>
            <ul class="menu">
                <li><a href="#">Trang chủ</a></li>
                <li><a href="#">Sản phẩm</a></li>
                <li><a href="#">Về chúng tôi</a></li>
                <li><a href="#">Liên hệ</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#" class="highlight">Boss tìm sen</a></li>
            </ul>
        </div>
        <div class="search-container">
            <form action="">
                <input type="search" name="search" placeholder="Bạn muốn tìm gì hôm nay?">
                <label class="">
                    <i class="icon-search-before"></i>
                </label>
            </form>
        </div>
        <div class="header-right">
            <div class="cart">
                <i class="icon-cart"></i>
                <span>0</span>
            </div>
            <div class="user">
                <i class="icon-user"></i>
            </div>
        </div>
    </div>

    <div class="_banner">
        <img class="slide-1" src="images/slides/slide-1.jpg">
        <img class="slide-2" src="images/slides/slide-2.jpg">
        <img class="slide-3" src="images/slides/slide-3.jpg">
        <div class="switch">
            <span data-id="1" class="active"></span>
            <span data-id="2"></span>
            <span data-id="3"></span>
        </div>
    </div>

    <div class="_slogan">
        <label class="title font-baloo">Hãy để Petme đem đến những bữa ăn bổ dưỡng và an toàn nhất cho pet yêu của bạn!</label>
    </div>

    <div class="_highlight">
        <div class="quality">
            <i class="icon-quality"></i>
            <label>Giấy chức nhận chất lượng</label>
            <span>Quy trình chế biến đảm bảo theo yêu cầu của Bộ Nông nghiệp</span>
        </div>
        <div class="ship">
            <i class="icon-shipping"></i>
            <label>Ship hàng định kỳ</label>
            <span>Đặt hàng một lần, nhận hàng mỗi tuần cho pate luôn tươi ngon</span>
        </div>
        <div class="refund">
            <i class="icon-dola"></i>
            <label>Hoàn tiền 100%</label>
            <span>Cam kết hoàn lại tiền khi khách không hài lòng về chất lượng</span>
        </div>
    </div>

    <div class="_boss">
        <label class="title font-baloo">Cùng Petme mang mái ấm đến cho những người bạn nhỏ đi lạc!</label>
        <div class="content clear-fix">
            <div class="image">
                <img src="images/two-cats.png">
            </div>
            <div>
                <label>Tặng mèo con ở Thanh Xuân</label>
                <div class="info clear-fix">
                    <div class="left">
                        <span>Thời gian: 10/12/2019</span>
                        <span>Địa điểm: Quận Thanh Xuân</span>
                        <span>Loại thú cưng: Mèo ta</span>
                    </div>
                    <div class="right">
                        <span>Người đăng: Hanvu</span>
                        <span>Liên hệ: 0966250826</span>
                        <span>Tình trạng: Chưa được nhận nuôi</span>
                    </div>
                </div>
                <div class="note">
                    <p>Thông tin chi tiết</p>
                    <span>Mình mới nhặt được 2 bé mèo ta màu vàng khoảng 2 tháng tuổi rất xinh và ngoan
                        nhưng điều kiện không cho phép nuôi thêm nên tìm chủ yêu thương cho 2 bé</span>
                </div>
                <div class="links">
                    <p>Xem thêm thông tin về thú cưng đi lạc, cho và tặng thú cưng</p>
                    <div class="link">
                        <a href="#">Xem thêm</a>
                        <div class="icon logo-messenger"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="_products">
        <div class="hot-products">
            <div class="panel-heading">
                <label class="title font-baloo">Sản phẩm hot</label>
                <a href="#" class="view-more">Xem thêm</a>
            </div>
            <div class="product-list clear-fix">
                <div class="product-item">
                    <div class="image">
                        <img src="images/products/product_pate_pig.png" class="img-1">
                        <img src="images/products/product_pate_pig.jpg" class="img-2">
                        <i class="icon icon-heart"></i>
                        <i class="icon icon-cart-gray"></i>
                        <i class="icon icon-highlight-hot"></i>
                    </div>
                    <div class="info">
                        <label class="name">Pate Lợn</label>
                        <div class="price">
                            <span class="real-price">120.000 vnđ</span>
                            <span class="promotion-price">150.000 vnđ</span>
                        </div>
                    </div>
                </div>
                <div class="product-item">
                    <div class="image">
                        <img src="images/products/product_pate_chicken.png" class="img-1">
                        <img src="images/products/product_pate_chicken.jpg" class="img-2">
                        <i class="icon icon-heart"></i>
                        <i class="icon icon-cart-gray"></i>
                        <i class="icon icon-highlight-hot"></i>
                    </div>
                    <div class="info">
                        <label class="name">Pate Gà</label>
                        <div class="price">
                            <span class="real-price">90.000 vnđ</span>
                            <span class="promotion-price">105.000 vnđ</span>
                        </div>
                    </div>
                </div>
                <div class="product-item">
                    <div class="image">
                        <img src="images/products/product_pate_chicken_liver.png" class="img-1">
                        <img src="images/products/product_pate_chicken_liver.jpg" class="img-2">
                        <i class="icon icon-heart"></i>
                        <i class="icon icon-cart-gray"></i>
                        <i class="icon icon-highlight-hot"></i>
                    </div>
                    <div class="info">
                        <label class="name">Pate Gan Gà</label>
                        <div class="price">
                            <span class="real-price">80.000 vnđ</span>
                            <span class="promotion-price">100.000 vnđ</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="new-products">
            <div class="panel-heading">
                <label class="title font-baloo">Sản phẩm mới</label>
                <a href="#" class="view-more">Xem thêm</a>
            </div>
            <div class="product-list clear-fix">
                <div class="product-item">
                    <div class="image">
                        <img src="images/products/product_pate_salmon.png" class="img-1">
                        <img src="images/products/product_pate_salmon.jpg" class="img-2">
                        <i class="icon icon-heart"></i>
                        <i class="icon icon-cart-gray"></i>
                        <i class="icon icon-highlight-new"></i>
                    </div>
                    <div class="info">
                        <label class="name">Pate Cá Hồi</label>
                        <div class="price">
                            <span>350.000 vnđ</span>
                        </div>
                    </div>
                </div>
                <div class="product-item">
                    <div class="image">
                        <img src="images/products/product_pate_shrimp.png" class="img-1">
                        <img src="images/products/product_pate_shrimp.jpg" class="img-2">
                        <i class="icon icon-heart"></i>
                        <i class="icon icon-cart-gray"></i>
                        <i class="icon icon-highlight-new"></i>
                    </div>
                    <div class="info">
                        <label class="name">Pate Tôm</label>
                        <div class="price">
                            <span>140.000 vnđ</span>
                        </div>
                    </div>
                </div>
                <div class="product-item">
                    <div class="image">
                        <img src="images/products/product_pate_tuna.png" class="img-1">
                        <img src="images/products/product_pate_tuna.jpg" class="img-2">
                        <i class="icon icon-heart"></i>
                        <i class="icon icon-cart-gray"></i>
                        <i class="icon icon-highlight-new"></i>
                    </div>
                    <div class="info">
                        <label class="name">Pate Cá Ngừ</label>
                        <div class="price">
                            <span >100.000 vnđ</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="other-products">
            <div class="panel-heading">
                <label class="title font-baloo">Sản phẩm khác</label>
                <a href="#" class="view-more">Xem thêm</a>
            </div>
            <div class="product-list clear-fix">
                <div class="row">
                    <div class="product-item">
                        <div class="image">
                            <img src="images/products/product_pate_salmon.png" class="img-1">
                            <img src="images/products/product_pate_salmon.jpg" class="img-2">
                            <i class="icon icon-heart"></i>
                            <i class="icon icon-cart-gray"></i>
                        </div>
                        <div class="info">
                            <label class="name">Pate Cá Hồi</label>
                            <div class="price">
                                <span>350.000 vnđ</span>
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="image">
                            <img src="images/products/product_pate_shrimp.png" class="img-1">
                            <img src="images/products/product_pate_shrimp.jpg" class="img-2">
                            <i class="icon icon-heart"></i>
                            <i class="icon icon-cart-gray"></i>
                        </div>
                        <div class="info">
                            <label class="name">Pate Tôm</label>
                            <div class="price">
                                <span>140.000 vnđ</span>
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="image">
                            <img src="images/products/product_pate_tuna.png" class="img-1">
                            <img src="images/products/product_pate_tuna.jpg" class="img-2">
                            <i class="icon icon-heart"></i>
                            <i class="icon icon-cart-gray"></i>
                        </div>
                        <div class="info">
                            <label class="name">Pate Cá Ngừ</label>
                            <div class="price">
                                <span >100.000 vnđ</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="product-item">
                        <div class="image">
                            <img src="images/products/product_pate_salmon.png" class="img-1">
                            <img src="images/products/product_pate_salmon.jpg" class="img-2">
                            <i class="icon icon-heart"></i>
                            <i class="icon icon-cart-gray"></i>
                        </div>
                        <div class="info">
                            <label class="name">Pate Cá Hồi</label>
                            <div class="price">
                                <span>350.000 vnđ</span>
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="image">
                            <img src="images/products/product_pate_shrimp.png" class="img-1">
                            <img src="images/products/product_pate_shrimp.jpg" class="img-2">
                            <i class="icon icon-heart"></i>
                            <i class="icon icon-cart-gray"></i>
                        </div>
                        <div class="info">
                            <label class="name">Pate Tôm</label>
                            <div class="price">
                                <span>140.000 vnđ</span>
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="image">
                            <img src="images/products/product_pate_tuna.png" class="img-1">
                            <img src="images/products/product_pate_tuna.jpg" class="img-2">
                            <i class="icon icon-heart"></i>
                            <i class="icon icon-cart-gray"></i>
                        </div>
                        <div class="info">
                            <label class="name">Pate Cá Ngừ</label>
                            <div class="price">
                                <span >100.000 vnđ</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="_news">
        <h1>Chăm sóc béo khỏe không khó cùng Petme</h1>
        <div class="news-list">
            <div class="news-item">
                <img src="images/two-cats.png">
                <div class="content">
                    <p>Gợi ý cách làm Pate gan gà boss nào cũng mê</p>
                    <div>
                        <span class="time">20/12/2019</span>
                        <a href="#" class="view-detail">Xem chi tiết</a>
                    </div>
                    <span>
                        Pate gan gà là món ăn cực thơm ngon mà các “hoàng thượng” cực kì yêu thích.
                        Không chỉ vậy, đây còn là món ăn bổ dưỡng, cung cấp dinh…
                    </span>
                </div>
            </div>
            <div class="news-item">
                <img src="images/two-cats.png">
                <div class="content">
                    <p>NÊN LÀM GÌ KHI BOSS BIẾNG ĂN?</p>
                    <div>
                        <span class="time">04/12/2019</span>
                        <a href="#" class="view-detail">Xem chi tiết</a>
                    </div>
                    <span>
                        Việc một chú mèo đang ăn uống bình thường mà trở nên lười ăn có thể sẽ là mối lo ngại của tất cả anh chị em nuôi mèo.
                        Bởi mèo…
                    </span>
                </div>
            </div>
            <div class="news-item">
                <img src="images/two-cats.png">
                <div class="content">
                    <p>CHĂM SÓC MÈO CON TỪ 1 - 2 THÁNG TUỔI</p>
                    <div>
                        <span class="time">14/02/2020</span>
                        <a href="#" class="view-detail">Xem chi tiết</a>
                    </div>
                    <span>
                        Chăm sóc mèo con khá giống với việc nuôi dạy trẻ em.
                        Bạn cần phải có cách chăm sóc thật sự phù hợp với chúng.…
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="_footer">
        <div class="_container clear-fix">
            <div class="info">
                <div class="open">
                    <label class="label">Giờ mở cửa</label>
                    <div class="content">
                        <div class="item">
                            <span>Thứ 2 - Thứ 6:</span>
                            <span>9:00 - 21:00</span>
                        </div>
                        <div class="item">
                            <span>Thứ 7, Chủ nhật:</span>
                            <span>10:00 - 22:00</span>
                        </div>
                    </div>
                </div>
                <div class="place">
                    <label class="label">Liên hệ</label>
                    <div class="content">
                        <div class="item">
                            <span>Địa chỉ:</span>
                            <span>Số 40 Vương Thừa Vũ, Thanh Xuân, Hà Nội</span>
                        </div>
                        <div class="item">
                            <span>Email:</span>
                            <span>hanvu94@gmail.com</span>
                        </div>
                        <div class="item">
                            <span>Số điện thoại:</span>
                            <span>+84 9 3849 2044</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="thanks">
                <i class="logo-orange"></i>
                <p>Cám ơn bạn đã ghé thăm cửa hàng!</p>
            </div>
            <div class="contact">
                <label class="label">Nhận tin hôm nay, nhận ngay ưu đãi</label>
                <p>Đăng ký nhận bản tin của chúng tôi và nhận giảm giá 10% cho đơn hàng đầu tiên.</p>
                <div>
                    <form>
                        <input name="email" type="email" placeholder="Email:">
                        <button>Đăng ký</button>
                    </form>
                </div>
                <div>
                    <label class="label fanpage">Fanpages:</label>
                    <form>
                        <input type="text" name="petme" placeholder="Petme">
                        <button>Theo dõi</button>
                    </form>
                </div>
                <div class="connect">
                    <span>Kết nối với chúng tôi</span>
                    <div class="icon">
                        <i class="logo-instagram"></i>
                    </div>
                    <div class="icon">
                        <i class="logo-youtube"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">&copy; Photo, Inc. 2019. We love our users!</div>
    </div>
</div>

<script src="{!! asset('libs/jquery.min.js') !!}"></script>
<script src="{!! asset('js/main.js') !!}"></script>
</body>
</html>
