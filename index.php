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

<!--MẶT BẰNG THIẾT KẾ HAVEN PARK RESIDENCES-->
<div id="matbang" class="uk-section-small uk-background-muted">
    <div class="uk-container">
        <h2 class="uk-h2 home__block01__card2__title uk-text-center">MẶT BẰNG THIẾT KẾ HAVEN PARK RESIDENCES</h2>
        <p class="home__blockMatbang__desc">Điểm khác biệt lớn nhất trong thiết kế dự án chung cư Haven Park đó chính là thiết kế không gian xanh ngay trong từng căn hộ “công viên trong đại công viên” mang tới không gian xanh thư giãn đầy riêng tư cho từng gia chủ. Toà tháp đôi “hoà vào làm một” với thiên nhiên, nắng, gió của Ecopark, mang đến một không gian sống – nơi con người được thiên nhiên yêu thương.</p>
        <figure>
            <img class="uk-width-1-1" src="images/mat-bang-tong-the-haven-park.jpg" alt="">
        </figure>
        <p class="uk-text-center home__blockMatbang__desc">CLICK VÀO LINK DƯỚI ĐÂY ĐỂ TẢI TRỌN BỘ MẶT BẰNG FULL HD + FILE AUTOCAD</p>
        <div class="uk-text-center">
            <a href="" uk-toggle="cls: uk-button-large; mode: media; media: @m" class="home__blockVitri__btn uk-border-rounded uk-button uk-button-secondary"><span uk-icon="icon: download; ratio: 1.2"></span> LINK TẢI MẶT BẰNG + FILE CAD</a>
        </div>
    </div>
</div>
<!--/MẶT BẰNG THIẾT KẾ HAVEN PARK RESIDENCES-->

<!--THIẾT KẾ MAY ĐO- TỐI ƯU TỪNG MILIMET-->
<div id="thietke" class="uk-section-small">
    <div class="uk-container">
        <div class="uk-child-width-1-2@m uk-flex-center" uk-grid>
            <div>
                <h2 class="uk-h2 home__block01__card2__title">THIẾT KẾ MAY ĐO- TỐI ƯU TỪNG MILIMET</h2>
                <p class="home__blockThietke__desc">Được thiết kế bởi những kiến trúc sư hàng đầu đến từ Callision, tổ hợp căn hộ chung cư Haven Park mang tới không gian sống giữa thiên nhiên trong lòng đại công viên Ecopark.</p>
                <p class="home__blockMatbang__desc">Mặt bằng khu căn hộ Haven Park Residence sẽ bao gồm 16 căn trên 1 tầng, trong đó:</p>
                <ul class="uk-list home__blockTongquan__card__list">
                    <li>3 căn hộ Studio: 29.5m2</li>
                    <li>1 căn hộ 1PN: 31m2</li>
                    <li>6 căn hộ 2 PN – 2 WC: rộng 58m2</li>
                    <li>2 căn hộ 2 PN – 2 WC: rộng 68m2</li>
                    <li>4 căn hộ 3 PN – 2 WC: rộng 79m2, 86m2, 101m2 và 109m2</li>
                </ul>
            </div>
            <div>
                <div class="uk-card uk-card-default">
                    <div class="uk-background-02 uk-light home__blockThietke__card__header">
                        <ul class="uk-flex-center home__blockThietke__card__header__tab uk-margin-remove-bottom" uk-tab="connect: .my-class">
                            <li><a href="#">CĂN STUDIO</a></li>
                            <li><a href="#">CĂN 1PN</a></li>
                            <li><a href="#">CĂN 2PN</a></li>
                            <li><a href="#">CĂN 3PN</a></li>
                        </ul>
                    </div>
                    <div class="uk-card-body uk-background-muted">
                        <ul class="uk-switcher uk-margin my-class">
                            <li>
                                <img src="images/studio-haven-park.jpg" alt="">
                            </li>
                            <li>
                                <img src="images/1pn-haven-park.jpg" alt="">
                            </li>
                            <li>
                                <img src="images/2pn-haven-park.jpg" alt="">
                            </li>
                            <li>
                                <img src="images/3pn-haven-park.jpg" alt="">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="uk-width-auto">
                <img src="images/bang-gia-768x762.jpg" alt="">
            </div>
        </div>
    </div>
</div>
<!--/THIẾT KẾ MAY ĐO- TỐI ƯU TỪNG MILIMET-->

<!--ĐĂNG KÝ NHẬN BẢNG GIÁ-->
<div class="home__blockDangky uk-section-small uk-background-norepeat uk-background-cover uk-background-center-center" data-src="images/bg02.jpg" uk-img>
    <div class="uk-container">
        <h2 class="uk-h2 home__block01__card2__title uk-text-center">ĐĂNG KÝ NHẬN BẢNG GIÁ</h2>
        <form class="uk-grid-small uk-grid-30-m" uk-grid>
            <div class="uk-width-1-4@s">
                <input uk-toggle="cls: uk-form-large; mode: media; media: @m" class="uk-input home__blockDangky__input" type="text" placeholder="Họ tên">
            </div>
            <div class="uk-width-1-4@s">
                <input uk-toggle="cls: uk-form-large; mode: media; media: @m" class="uk-input home__blockDangky__input" type="text" placeholder="Điện thoại">
            </div>
            <div class="uk-width-1-4@s">
                <input uk-toggle="cls: uk-form-large; mode: media; media: @m" class="uk-input home__blockDangky__input" type="text" placeholder="Email">
            </div>
            <div class="uk-width-1-4@s">
                <button type="submit" uk-toggle="cls: uk-button-large; mode: media; media: @m" class="uk-button uk-button-secondary uk-width-1-1 home__blockDangky__btn">NHẬN NGAY</button>
            </div>
        </form>
    </div>
</div>
<!--/ĐĂNG KÝ NHẬN BẢNG GIÁ-->

<!--TƯ VẤN HỒ SƠ PHÁP LÝ-->
<div class="uk-section-small">
    <div class="uk-container">
        <h2 class="uk-h2 home__block01__card2__title uk-text-center">TƯ VẤN HỒ SƠ PHÁP LÝ</h2>
        <div class="uk-child-width-1-2@m" uk-grid>
            <div>
                <img class="uk-width-1-1" src="images/chung-cu-haven-park-3.jpg" alt="">
            </div>
            <div>
                <div class="uk-padding-small uk-background-01 uk-text-center uk-light">
                    <span class="home__blockTuvan__txt">ĐƠN VỊ PHÂN PHỐI CHÍNH THỨC CĐT ECOPARK</span>
                </div>
                <p class="uk-text-center home__blockTuvan__desc">Luôn sẵn sàng Hỗ Trợ quý khách hàng mọi lúc, mọi nơi</p>
                <ul class="uk-list home__blockTongquan__card__list">
                    <li>Là đơn vị có nhiều năm kinh nghiệm bất động sản.</li>
                    <li>Am hiểu sâu sắc và cặn kẽ pháp lí và quy định của luật pháp.</li>
                    <li>Tư vấn thông tin chính xác, chuyên nghiệp và đầy đủ nhất.</li>
                    <li>Hỗ trợ khách hàng giải quyết mọi vấn đề về thủ tục, hồ sơ, pháp lí, vay vốn ngân hàng đến khi khách hàng nhận nhà và ổn định cuộc sống.</li>
                    <li>Không thu bất kỳ khoản phụ phí với khách hàng khi liên hệ qua trang web hoặc liên hệ trực tiếp.</li>
                </ul>
                <div class="uk-text-center">
                    <a href="" uk-toggle="cls: uk-button-large; mode: media; media: @m" class="home__blockVitri__btn uk-border-rounded uk-button uk-button-secondary"><span uk-icon="icon: pencil; ratio: 1.2"></span> ĐĂNG KÝ TƯ VẤN - HỒ SƠ PHÁP LÝ</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/TƯ VẤN HỒ SƠ PHÁP LÝ-->

<!--CHÍNH SÁCH BÁN HÀNG & GIÁ BÁN-->
<div id="chinhsach" class="uk-section-small uk-background-norepeat uk-background-cover uk-background-center-center" data-src="images/bg03.jpg" uk-img>
    <div class="uk-container">
        <h2 class="uk-h2 home__block01__card2__title uk-text-center">TƯ VẤN HỒ SƠ PHÁP LÝ</h2>
        <p class="home__blockChinhsach__desc uk-text-center">Những chính sách bán hàng ưu đãi ngân hàng những chính sách chiết khấu trực tiếp vào giá vô cùng hấp dẫn sẽ được gửi tới những khách hàng đầu tiên.</p>
        <div uk-grid>
            <div class="uk-width-expand">
                <ul class="uk-list home__blockChinhsach__list">
                    <li>- CĂN STUDIO: TỪ 1.2 - 1.5 TY</li>
                    <li>- CĂN 1PN: TỪ 1.3 - 1.6 TY</li>
                    <li>- CĂN 2PN: TỪ 2.1 - 3.1 TY</li>
                    <li>- CĂN 3PN: TỪ 3.3 - 5.6 TY</li>
                </ul>
                <p class="home__blockChinhsach__txt"><span>Ghi chú:</span> Chính sách bán hàng và tiến độ thanh toán mới nhất từ chủ đầu tư sẽ được gửi đến quý khách hàng dạng file PDF, quý khách hàng vui lòng đăng kí thông tin để nhận file PDF ngay</p>
                <figure class="uk-text-center">
                    <img src="images/logo-havenpark-w.png" alt="">
                </figure>
            </div>
            <div class="uk-width-1-3@m">
                <div class="uk-card uk-box-shadow-small uk-background-muted uk-card-body uk-border-rounded">
                    <form>
                        <fieldset class="uk-fieldset">
                            <legend class="uk-legend home__blockChinhsach__Form__title uk-text-center">ĐĂNG KÝ ĐỂ NHẬN NGAY BẢNG GIÁ & THÔNG TIN DỰ ÁN</legend>
                            <p class="home__blockChinhsach__Form__desc uk-text-center">Căn đẹp đúng ý, giá tốt nhất thị trường</p>
                            <div class="uk-margin">
                                <input uk-toggle="cls: uk-form-large; mode: media; media: @m" class="uk-input home__blockDangky__input" type="text" placeholder="Họ tên*">
                            </div>
                            <div class="uk-margin">
                                <input uk-toggle="cls: uk-form-large; mode: media; media: @m" class="uk-input home__blockDangky__input" type="text" placeholder="Email*">
                            </div>
                            <div class="uk-margin">
                                <input uk-toggle="cls: uk-form-large; mode: media; media: @m" class="uk-input home__blockDangky__input" type="text" placeholder="Số điện thoại*">
                            </div>
                            <button type="submit" uk-toggle="cls: uk-button-large; mode: media; media: @m" class="uk-button uk-button-secondary uk-width-1-1 home__blockDangky__btn">NHẬN NGAY</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/CHÍNH SÁCH BÁN HÀNG & GIÁ BÁN-->

<!---->
<div class="uk-text-center">
    <img src="images/thanh-pho-giao-duc-nghi-duong.jpg" alt="">
</div>
<!--/-->

<!--4 LÝ DO NÊN SỞ HỮU HAVEN PARK-->
<div class="uk-section-small uk-background-norepeat uk-background-cover uk-background-center-center" data-src="images/chung-cu-haven-park-2.jpg" uk-img>
    <div class="uk-container">
        <h2 class="uk-h2 home__blockLydo__title uk-text-center">4 LÝ DO NÊN SỞ HỮU HAVEN PARK</h2>
        <div uk-scrollspy="cls: uk-animation-slide-bottom-small; target: .animation; delay: 500; repeat: true" class="uk-child-width-1-2@m uk-grid-match uk-grid-small uk-grid-30-m" uk-grid>
            <?php
            $data = array(
                'MỘT SẢN PHẨM CỦA ECOPARK',
                'CÔNG VIÊN GIỮA ĐẠI CÔNG VIÊN',
                'TẦM NHÌN LÀ ĐẶC QUYỀN',
                'THIẾT KẾ HÒA CÙNG THIÊN NHIÊN',
            );
            foreach ($data as $k => $v): ?>
            <div>
                <div class="uk-padding home__blockLydo__overlay animation uk-text-center">
                    <span class="home__blockLydo__txt"><?= $v; ?></span>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!--/4 LÝ DO NÊN SỞ HỮU HAVEN PARK-->

<!--NƠI THIÊN NHIÊN LÀ ĐẶC QUYỀN-->
<div class="uk-section-small uk-background-muted">
    <div class="uk-container">
        <h2 class="uk-h2 home__block01__card2__title uk-text-center">NƠI THIÊN NHIÊN LÀ ĐẶC QUYỀN</h2>
        <div uk-grid>
            <div class="uk-width-1-3@m">
                <p class="home__blockThietke__desc">Bấm vào link bên dưới để tải ngay toàn bộ hình ảnh thực tế các căn biệt thự dự án</p>
                <p class="home__blockMatbang__desc">Haven Park Residences</p>
                <div class="uk-text-left">
                    <a href="" uk-toggle="cls: uk-button-large; mode: media; media: @m" class="home__blockVitri__btn uk-border-rounded uk-button uk-button-secondary"><span uk-icon="icon: download; ratio: 1.2"></span>  TẢI XUỐNG NGAY + </a>
                </div>
            </div>
            <div class="uk-width-expand">
                <div class="uk-card uk-card-default uk-padding-small home__block01__card1">
                    <div uk-slideshow="animation: fade;autoplay: true;autoplay-interval: 3000;">

                        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

                            <ul class="uk-slideshow-items">
                                <?php for ($i=1;$i<=11;$i++): ?>
                                    <li>
                                        <img src="images/hinhanh/hinh-anh-ecopark-<?= $i ?>-min.jpg" alt="" uk-cover>
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
        </div>
    </div>
</div>
<!--/NƠI THIÊN NHIÊN LÀ ĐẶC QUYỀN-->
<?php require "template-parts/layouts/footer.php"; ?>