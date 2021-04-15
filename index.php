<?php $data["title"] = "Trang chủ"; ?>
<?php $is_home = true; ?>
<?php require "template-parts/layouts/header.php"; ?>
<!--Slider-->
<div class="home__slider uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="animation: push;ratio: 1400:789;min-height: 300; max-height: 560">

    <ul class="uk-slideshow-items">
        <li>
            <div class="uk-position-cover uk-background-norepeat uk-background-cover uk-background-center-center" data-src="images/chung-cu-haven-park-1.jpg" uk-img></div>
            <div class="uk-position-cover home__slider__overlay"></div>
            <div class="uk-position-center uk-position-small uk-text-center">
                <h2 class="uk-h2 home__slider__title uk-margin-remove">HAVEN PARK RESIDENCES ECOPARK</h2>
                <p class="home__slider__desc uk-margin-remove">CÔNG VIÊN TRONG ĐẠI CÔNG VIÊN</p>
            </div>
        </li>
        <li>
            <div class="uk-position-cover uk-background-norepeat uk-background-cover uk-background-center-center" data-src="images/chung-cu-haven-park-2.jpg" uk-img></div>
            <div class="uk-position-cover home__slider__overlay"></div>
            <div class="uk-position-center uk-position-small uk-text-center">
                <h2 class="uk-h2 home__slider__title uk-margin-remove">HAVEN PARK RESIDENCES ECOPARK</h2>
                <p class="home__slider__desc uk-margin-remove">CÔNG VIÊN TRONG ĐẠI CÔNG VIÊN</p>
            </div>
        </li>
    </ul>

    <ul class="uk-slideshow-nav uk-dotnav uk-flex-center uk-margin uk-position-bottom-center"></ul>

    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

</div>
<!--/Slider-->
<?php require "template-parts/layouts/footer.php"; ?>