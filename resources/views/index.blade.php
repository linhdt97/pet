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
    <div class="_main">
        <div class="introduce">
            <label class="title">Hãy để Petme đem đến những bữa ăn bổ dưỡng và an toàn nhất cho pet yêu của bạn!</label>
            <div class="clear-fix">
                <div class="quality">
                    <div class="icon"></div>
                    <label>Giấy chức nhận chất lượng</label>
                    <span>Quy trình chế biến đảm bảo theo yêu cầu của Bộ Nông nghiệp</span>
                </div>
                <div class="ship">
                    <div class="icon"></div>
                    <label>Ship hàng định kỳ</label>
                    <span>Đặt hàng một lần, nhận hàng mỗi tuần cho pate luôn tươi ngon</span>
                </div>
                <div class="refund">
                    <div class="icon"></div>
                    <label>Hoàn tiền 100%</label>
                    <span>Cam kết hoàn lại tiền khi khách không hài lòng về chất lượng</span>
                </div>
            </div>
            <div>
                <label class="title">Cùng Petme mang mái ấm đến cho những thú cưng đi lạc!</label>
                <div class="content clear-fix">
                    <div class="image"></div>
                    <div>
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
                            Note: Mình mới nhặt được 2 bé mèo ta màu vàng khoảng 2 tháng tuổi rất xinh và ngoan
                            nhưng điều kiện không cho phép nuôi thêm nên tìm chủ yêu thương cho 2 bé
                        </div>
                        <div class="links">
                            <div class="link">
                                <a href="#">Nhận nuôi</a>
                                <a href="#">Đăng ký nhận tin</a>
                                <a href="#">Xem tin khác</a>
                            </div>
                            <div class="icon logo-messenger"></div>
                        </div>
                    </div>
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
                <div class="icon"></div>
                <div class="content">Cám ơn bạn đã ghé thăm cửa hàng!</div>
            </div>
            <div class="contact">
                <label class="label">Nhận tin hôm nay, nhận ngay ưu đãi</label>
                <div>Đăng ký nhận bản tin của chúng tôi và nhận giảm giá 10% cho đơn hàng đầu tiên.</div>
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
