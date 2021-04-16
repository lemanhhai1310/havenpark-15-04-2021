<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Chung cư Haven Park Ecopark - Chính sách bán hàng mới nhất - <?= /** @var TYPE_NAME  */
        (isset($data['title'])) ? $data['title'] : ''; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <!--CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.6.18/dist/css/uikit.min.css" />
    <link rel="stylesheet" href="style.css?v=<?php echo(time()) ?>">
    <!--JS-->
    <script src="https://cdn.jsdelivr.net/npm/@shinsenter/defer.js/dist/defer_plus.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.18/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.18/dist/js/uikit-icons.min.js"></script>
    <script src="js/app.js"></script>
</head>
<body class="<?= ($is_home) ? 'isHome' : '' ?>">
<?php require "template-parts/commons/facebook_chat.php"; ?>
<section id="app" class="uk-height-viewport uk-offcanvas-content uk-overflow-hidden uk-position-relative">
    <div uk-sticky="">
        <div class="header uk-background-01">
            <div class="uk-container uk-padding-remove">
                <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>

                    <div class="uk-navbar-left">
                        <a href="." class="uk-navbar-item uk-logo header__logo"><img src="images/logo-havenpark-w.png" alt=""></a>
                    </div>

                    <div class="uk-navbar-right">

                        <ul class="uk-navbar-nav uk-visible@m" uk-scrollspy-nav="closest: li; scroll: true; offset: 80">
                            <li><a href="#home">Trang chủ</a></li>
                            <li><a href="#tongquan">Tổng quan</a></li>
                            <li><a href="#vitri">Vị trí</a></li>
                            <li><a href="#tienich">Tiện ích</a></li>
                            <li><a href="#">Mặt bằng</a></li>
                            <li><a href="#">Thiết kế</a></li>
                            <li><a href="#">Chính sách</a></li>
                            <li><a href="#">Liên hệ</a></li>
                        </ul>

                    </div>

                </nav>
            </div>
        </div>
    </div>