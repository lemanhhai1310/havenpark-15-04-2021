<?php $data["title"] = "Trang chủ"; ?>
<?php $is_home = true; ?>
<?php require "template-parts/layouts/header.php"; ?>
<!--Slider-->
<div id="home" class="home__slider uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="animation: push;ratio: 1400:789;min-height: 400; max-height: 560">

    <ul class="uk-slideshow-items" uk-scrollspy="cls: uk-animation-slide-bottom-small; target: .animation > *; delay: 500; repeat: true">
        <li>
            <div uk-parallax="bgy: -200" class="uk-position-cover uk-background-norepeat uk-background-cover uk-background-center-center" data-src="images/chung-cu-haven-park-1.jpg" uk-img></div>
            <div class="uk-position-cover home__slider__overlay"></div>
            <div class="uk-position-center uk-position-small uk-text-center animation">
                <h2 class="uk-h2 home__slider__title uk-margin-remove">HAVEN PARK RESIDENCES ECOPARK</h2>
                <p class="home__slider__desc uk-margin-remove">CÔNG VIÊN TRONG ĐẠI CÔNG VIÊN</p>
                <div><a href="" uk-toggle="cls: uk-button-large; mode: media; media: @m" class="uk-button uk-button-secondary home__slider__btn">ĐĂNG KÝ NHẬN THÔNG TIN</a></div>
            </div>
        </li>
        <li>
            <div uk-parallax="bgy: -200" class="uk-position-cover uk-background-norepeat uk-background-cover uk-background-center-center" data-src="images/chung-cu-haven-park-2.jpg" uk-img></div>
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

<!--VỊ TRÍ-->
<div id="vitri" class="home__blockVitri uk-section-small">
    <div class="uk-container">
        <div class="uk-child-width-1-2@m" uk-grid>
            <div>
                <img src="images/vi-tri-haven-park-2.jpg" alt="">
            </div>
            <div>
                <h2 class="uk-h2 home__block01__card2__title">VỊ TRÍ KIM CƯƠNG TRONG LÒNG ECOPARK</h2>
                <p class="home__blockVitri__desc"><span>Haven Park</span> nằm trên tuyến giao thông vịnh đảo mới được nâng cấp rộng 30m, sở hữu không gian sống xanh hoàn toàn khác biệt, cùng rất nhiều liên kết tiện ích trong bán kính chưa tới 300m: Công viên, Trường học, Nhà hàng…</p>
                <ul class="uk-list home__blockTongquan__card__list">
                    <li>20 phút di chuyển đến Hồ Hoàn Kiếm</li>
                    <li>45 phút đến cảng Hàng không Quốc tế Nội Bài</li>
                    <li>20 – 30 phút đến các khu công nghiệp trọng điểm của Hưng Yên, Bắc Ninh</li>
                </ul>
                <div class="uk-text-center">
                    <a href="" uk-toggle="cls: uk-button-large; mode: media; media: @m" class="home__blockVitri__btn uk-border-rounded uk-button uk-button-secondary"><span uk-icon="icon: pencil; ratio: 1.2"></span> NHẬN THÔNG TIN DỰ ÁN MỚI NHẤT</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/VỊ TRÍ-->

<!--TIỆN ÍCH ĐẶC QUYỀN DỰA THIÊN NHIÊN-->
<div id="tienich" class="home__blockTienich uk-section-small uk-background-norepeat uk-background-cover uk-background-center-center" data-src="images/bg01.jpg" uk-img>
    <div class="uk-container">
        <h2 class="uk-h2 home__block01__card2__title uk-text-center">TIỆN ÍCH ĐẶC QUYỀN DỰA THIÊN NHIÊN</h2>
        <div uk-grid>
            <div class="uk-width-expand">
                <div class="uk-card uk-card-default uk-padding-small home__block01__card1">
                    <div uk-slideshow="animation: fade;autoplay: true;">

                        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

                            <ul class="uk-slideshow-items">
                                <?php for ($i=1;$i<=9;$i++): ?>
                                <li>
                                    <img src="images/tienich/tien-ich-chung-cu-haven-park-<?= $i ?>-min.jpg" alt="" uk-cover>
                                </li>
                                <?php endfor; ?>
                            </ul>

                            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
                            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

                        </div>

                        <ul class="uk-slideshow-nav uk-dotnav uk-flex-center uk-position-bottom-right uk-position-small"></ul>

                    </div>
                </div>
            </div>
            <div class="uk-width-2-5@m">
                <p class="home__blockTienich__desc">🍀 <span>CÔNG VIÊN THỨ 5 CỦA ECOPARK</span>: Lớn bằng công viên mùa hạ, gấp 1.5 công viên mùa thu, bằng 3/4 công viên mùa xuân</p>
                <p class="home__blockTienich__desc">🍀 <span>Ở ĐÓ CÓ CUỘC SỐNG NHƯ RESORT 6*</span>:</p>
                <div class="uk-light">
                    <ul class="uk-list home__blockTongquan__card__list">
                        <li>Hồ bơi ngọc bích, phòng tập gym giữa thiên nhiên</li>
                        <li>Nhà hàng thượng uyển, phòng họp mở giữa thiên nhiên</li>
                        <li>Vườn cỏ nhung vọng nguyệt ven hồ</li>
                    </ul>
                </div>
                <p class="home__blockTienich__desc">🍀 <span>HỆ THỐNG GIÁO DỤC CHUẨN QUỐC TẾ</span>: Trường liên cấp Đoàn Thị Điểm, Edison, Chadwick, trường anh quốc BUV, đại học Y khoa Tokio</p>
                <p class="home__blockTienich__desc">🍀 <span>CÁC GIẢI THƯỞNG DANH GIÁ</span>: Khu đô thị có thiết kế cảnh quan đẹp nhất thế giới, Khu đô thị đáng sống nhất Thế Giới...</p>
            </div>
        </div>
    </div>
</div>
<!--/TIỆN ÍCH ĐẶC QUYỀN DỰA THIÊN NHIÊN-->
<?php require "template-parts/layouts/footer.php"; ?>