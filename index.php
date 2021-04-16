<?php $data["title"] = "Trang chủ"; ?>
<?php $is_home = true; ?>
<?php require "template-parts/layouts/header.php"; ?>
<!--Slider-->
<div id="home" class="home__slider uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="animation: push;ratio: 1400:789;min-height: 400; max-height: 560">

    <ul class="uk-slideshow-items" uk-scrollspy="cls: uk-animation-slide-bottom-small; target: .animation > *; delay: 500; repeat: true">
        <li>
            <div class="uk-position-cover uk-background-norepeat uk-background-cover uk-background-center-center" data-src="images/chung-cu-haven-park-1.jpg" uk-img></div>
            <div class="uk-position-cover home__slider__overlay"></div>
            <div class="uk-position-center uk-position-small uk-text-center animation">
                <h2 class="uk-h2 home__slider__title uk-margin-remove">HAVEN PARK RESIDENCES ECOPARK</h2>
                <p class="home__slider__desc uk-margin-remove">CÔNG VIÊN TRONG ĐẠI CÔNG VIÊN</p>
                <div><a href="" uk-toggle="cls: uk-button-large; mode: media; media: @m" class="uk-button uk-button-secondary home__slider__btn">ĐĂNG KÝ NHẬN THÔNG TIN</a></div>
            </div>
        </li>
        <li>
            <div class="uk-position-cover uk-background-norepeat uk-background-cover uk-background-center-center" data-src="images/chung-cu-haven-park-2.jpg" uk-img></div>
            <div class="uk-position-cover home__slider__overlay"></div>
            <div class="uk-position-center uk-position-small uk-text-center animation">
                <h2 class="uk-h2 home__slider__title uk-margin-remove">HAVEN PARK RESIDENCES ECOPARK</h2>
                <p class="home__slider__desc uk-margin-remove">CÔNG VIÊN TRONG ĐẠI CÔNG VIÊN</p>
                <div><a href="" uk-toggle="cls: uk-button-large; mode: media; media: @m" class="uk-button uk-button-secondary home__slider__btn">ĐĂNG KÝ NHẬN THÔNG TIN</a></div>
            </div>
        </li>
    </ul>

    <ul class="uk-slideshow-nav uk-dotnav uk-flex-center uk-margin uk-position-bottom-center"></ul>

    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

</div>
<!--/Slider-->

<!--HAVEN PARK RESIDENCES-->
<div uk-parallax="bgy: -200" class="home__block01 uk-background-cover uk-background-norepeat uk-background-center-center uk-section-small" data-src="images/bg04.jpg" uk-img>
    <div class="uk-container">
        <div class="uk-child-width-1-2@m uk-grid-match uk-grid-small uk-grid-30-m" uk-grid>
            <div>
                <div class="uk-card uk-card-body home__block01__card2 uk-text-center uk-light">
                    <h2 class="uk-h2 home__block01__card2__title">HAVEN PARK RESIDENCES</h2>
                    <div>Cơ hội vàng cho nhà đầu tư may mắn!</div>
                    <div>
                        <p>Khách hàng chỉ phải đóng <span>15%</span>, sở hữu ngay căn hộ</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default uk-padding-small home__block01__card1">
                    <img src="images/anh_doi2.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!--/HAVEN PARK RESIDENCES-->

<!--TỔNG QUAN VỀ HAVEN PARK-->
<div id="tongquan" uk-parallax="bgy: -200" class="home__blockTongquan uk-section-small uk-background-norepeat uk-background-cover uk-background-center-center" data-src="images/chung-cu-haven-park-1.jpg" uk-img>
    <div class="uk-container">
        <div class="" uk-grid>
            <div class="uk-width-3-5@m">
                <div class="uk-card uk-card-body home__blockTongquan__card uk-border-rounded uk-light">
                    <h2 class="uk-h2 home__block01__card2__title">TỔNG QUAN VỀ HAVEN PARK</h2>
                    <div class="home__blockTongquan__card__desc">Siêu phẩm nghỉ dưỡng đẳng cấp nhất Hà Nội</div>
                    <ul class="uk-list home__blockTongquan__card__list">
                        <li><span>Tên dự án: Haven Park Residences</span></li>
                        <li><span>Vị trí:</span> Phía tây Ecopark – cung đường Vịnh Đảo KĐT Ecopark, nằm trên tuyến phố đi bộ Hàn Quốc 2,5km, trái tim giải trí của Ecopark</li>
                        <li><span>Quy mô:</span> 2 tòa tháp biểu tượng 41 tầng / 1.248 căn hộ</li>
                        <li><span>Cảnh quan:</span> 50ha cảnh quan cây xanh & mặt nước</li>
                        <li><span>Mật độ:</span> 16 căn hộ/ tầng điển hình</li>
                        <li><span>Sản phẩm:</span> 6 loại căn hộ điển hình và 4 loại căn hộ đặc biệt (Studio; 1PN; 2PN; 2PN Delux; 3PN; 3 PN Delux Pool Villa, Mezza, Duplex, Siêu Penthouse)</li>
                        <li><span>Tiến độ:</span> Đang thi công</li>
                        <li><span>Thời gian bàn giao:</span> quý I/2023</li>
                        <li><span>Hình thức sở hữu:</span> Lâu dài với người Việt Nam; 50 năm với người nước ngoài</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/TỔNG QUAN VỀ HAVEN PARK-->
<?php require "template-parts/layouts/footer.php"; ?>