<div id="lienhe" class="footer uk-background-01 uk-light">
    <div class="uk-section-small">
        <div class="uk-container">
            <div uk-grid>
                <div class="uk-width-expand">
                    <div uk-grid>
                        <div class="uk-width-auto@m">
                            <div class="uk-text-center">
                                <img class="footer__logo" src="images/logo-havenpark-w.png" alt="">
                            </div>
                        </div>
                        <div class="uk-width-expand">
                            <h4 class="uk-h4 footer__title">Thông tin liên hệ</h4>
                            <ul class="uk-list footer__list">
                                <li>Văn phòng giao dịch: Khu đô thị Ecopark - Văn Giang, Hưng Yên</li>
                                <li>Hotline: 0859.966.266</li>
                                <li>Email: havenpark.ecopark@gmail.com</li>
                                <li>Website: www.havenpark-ecopark.co</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="uk-width-1-3@m">
                    <p class="uk-text-justify footer__desc">Thông tin, hình ảnh, các tiện ích trên website này chỉ mang tính chất minh hoạ tương đối và có thể được điều chỉnh theo quyết định của Chủ đầu tư tại từng thời điểm đảm bảo phù hợp quy hoạch và thực tế thi công dự án. Các thông tin, cam kết chính thức sẽ được quy định cụ thể tại Hợp đồng mua bán. Việc quản lý, vận hành và kinh doanh của khu đô thị sẽ theo quy định của Ban quản lý.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="uk-section-xsmall uk-text-center">
        <div class="uk-container">
            <span class="footer__copyright">© 2021 Chung cư Haven Park Ecopark. Cung cấp bởi <a href="https://cv.cathtmlcss.net" target="_blank">Hai LE Manh</a></span>
        </div>
    </div>
</div>
<div class="footer__neo uk-position-fixed uk-position-bottom uk-background-01">
    <div class="uk-container">
        <div class="uk-child-width-auto uk-flex-center uk-flex-middle uk-grid-small uk-grid-30-m" uk-grid>
            <div class="uk-visible@m">
                <div class="uk-grid-5 uk-flex-middle" uk-grid>
                    <div>
                        <img style="width: 70px;height: 21px;object-fit: cover" src="images/hinhanh/hot_icon.gif" alt="">
                    </div>
                    <div>
                        <span class="footer__neo__txt">TẢI BẢNG GIÁ VÀ CHIẾT KHẤU MỚI NHẤT</span>
                    </div>
                </div>
            </div>
            <div>
                <a href="#modal-dky-outside" uk-toggle class="uk-button uk-button-secondary footer__neo__btn">BẢNG GIÁ & CHÍNH SÁCH</a>
            </div>
        </div>
    </div>
</div>
</section>

<!-- This is the modal with the outside close button -->
<div id="modal-dky-outside" class="" uk-modal>
    <div class="uk-modal-dialog modal__dialog uk-modal-body uk-position-relative">
        <div id="loader" class="uk-position-cover uk-overlay uk-overlay-default">
            <div class="uk-position-center" uk-spinner></div>
        </div>
        <button class="uk-modal-close-outside" type="button" uk-close></button>
        <form id="contact_form" name="registration">
            <fieldset class="uk-fieldset">
                <legend class="uk-legend modal__title">ĐĂNG KÝ NHẬN TƯ VẤN CHI TIẾT</legend>
                <p class="modal__desc">Tư vấn chi tiết dự án Haven Park 👉 chọn căn, chọn tầng, nhận chi tiết mặt bằng, báo giá và chính sách khuyến mãi TRỰC TIẾP CĐT</p>
                <div class="uk-margin-small">
                    <input name="fname" id="fname" uk-toggle="cls: uk-form-large; mode: media; media: @m" class="uk-input home__blockDangky__input" type="text" placeholder="Họ tên*">
                </div>
                <div class="uk-margin-small">
                    <input name="femail" id="femail" uk-toggle="cls: uk-form-large; mode: media; media: @m" class="uk-input home__blockDangky__input" type="email" placeholder="Email*">
                </div>
                <div class="uk-margin-small">
                    <input name="fphone" id="fphone" uk-toggle="cls: uk-form-large; mode: media; media: @m" class="uk-input home__blockDangky__input" type="tel" placeholder="Số điện thoại*">
                </div>
                <!--
                <button type="submit" uk-toggle="cls: uk-button-large; mode: media; media: @m" class="uk-button uk-button-secondary uk-width-1-1 home__blockDangky__btn">NHẬN NGAY</button>
                -->
                <input type="submit" id="submit" uk-toggle="cls: uk-button-large; mode: media; media: @m" class="uk-button uk-button-secondary uk-width-1-1 home__blockDangky__btn" value="NHẬN NGAY" name="send"/>
            </fieldset>
        </form>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#loader').hide();
        $('#loader_banggia').hide();
        $('#loader-chinhsach').hide();
    });

    setTimeout(function(){
        UIkit.modal('#modal-dky-outside').show();
    }, 7000);

    $(function() {
        // Initialize form validation on the registration form.
        // It has the name attribute "registration"
        $("form[name='registration']").validate({
            // Specify validation rules
            rules: {
                // The key name on the left side is the name attribute
                // of an input field. Validation rules are defined
                // on the right side
                fname: "required",
                femail: {
                    required: true,
                    // Specify that email should be validated
                    // by the built-in "email" rule
                    email: true
                },
                fphone: {
                    required: true,
                    minlength: 10
                }
            },
            // Specify validation error messages
            messages: {
                fname: "Please enter your name",
                fphone: {
                    required: "Please provide a phone",
                    minlength: "Your phone must be at least 10 characters long"
                },
                femail: "Please enter a valid email address"
            },
            // Make sure the form is submitted to the destination defined
            // in the "action" attribute of the form when valid
            submitHandler: function(form) {
                var fname = $("#fname").val();
                var fngaysinh = $("#fngaysinh").val();
                var fphone = $("#fphone").val();
                var femail = $("#femail").val();
                var fsubject = 'Thông tin thành viên đăng ký mới';
                var button = $("#submit").val();
                var dataString = 'fngaysinh=' + fngaysinh + '&fname=' + fname + '&fphone=' + fphone + '&femail=' + femail + '&button=' + button + '&fsubject=' + fsubject;

                //validation
                if (fname == '' || fphone == '' || femail == '') { //if you are use other form validation scripts remove the if statement
                    alert("Please fill all fields");
                }
                // AJAX Code To Submit Form.
                else {
                    $('#loader').show();
                    $.ajax({
                        type: "POST",
                        url: "send-mailer.php",
                        data: dataString,
                        cache: false,
                        success: function(result) {
                            $('#loader').hide();
                            $("#contact_form")[0].reset();
                            UIkit.modal('#modal-dky-outside').hide();

                            Swal.fire({
                                icon: 'success',
                                title: 'The e-mail has been sent successfully!',
                            })
                        }
                    });
                }
                return false;
            }
        });

        //ĐĂNG KÝ NHẬN BẢNG GIÁ
        $("form[name='registration-banggia']").validate({
            // Specify validation rules
            rules: {
                // The key name on the left side is the name attribute
                // of an input field. Validation rules are defined
                // on the right side
                fname: "required",
                femail: {
                    required: true,
                    // Specify that email should be validated
                    // by the built-in "email" rule
                    email: true
                },
                fphone: {
                    required: true,
                    minlength: 10
                }
            },
            // Specify validation error messages
            messages: {
                fname: "Please enter your name",
                fphone: {
                    required: "Please provide a phone",
                    minlength: "Your phone must be at least 10 characters long"
                },
                femail: "Please enter a valid email address"
            },
            // Make sure the form is submitted to the destination defined
            // in the "action" attribute of the form when valid
            submitHandler: function(form) {
                var fname = $("#fname-banggia").val();
                var fngaysinh = $("#fngaysinh-banggia").val();
                var fphone = $("#fphone-banggia").val();
                var femail = $("#femail-banggia").val();
                var fsubject = 'Thông tin thành viên đăng ký mới';
                var button = $("#submit").val();
                var dataString = 'fngaysinh=' + fngaysinh + '&fname=' + fname + '&fphone=' + fphone + '&femail=' + femail + '&button=' + button + '&fsubject=' + fsubject;

                //validation
                if (fname == '' || fphone == '' || femail == '') { //if you are use other form validation scripts remove the if statement
                    alert("Please fill all fields");
                }
                // AJAX Code To Submit Form.
                else {
                    $('#loader_banggia').show();
                    $.ajax({
                        type: "POST",
                        url: "send-mailer.php",
                        data: dataString,
                        cache: false,
                        success: function(result) {
                            $('#loader_banggia').hide();
                            $("#contact_form_banggia")[0].reset();
                            UIkit.modal('#modal-dky-outside').hide();

                            Swal.fire({
                                icon: 'success',
                                title: 'The e-mail has been sent successfully!',
                            })
                        }
                    });
                }
                return false;
            }
        });

        //CHÍNH SÁCH BÁN HÀNG & GIÁ BÁN
        $("form[name='registration-chinhsach']").validate({
            // Specify validation rules
            rules: {
                // The key name on the left side is the name attribute
                // of an input field. Validation rules are defined
                // on the right side
                fname: "required",
                femail: {
                    required: true,
                    // Specify that email should be validated
                    // by the built-in "email" rule
                    email: true
                },
                fphone: {
                    required: true,
                    minlength: 10
                }
            },
            // Specify validation error messages
            messages: {
                fname: "Please enter your name",
                fphone: {
                    required: "Please provide a phone",
                    minlength: "Your phone must be at least 10 characters long"
                },
                femail: "Please enter a valid email address"
            },
            // Make sure the form is submitted to the destination defined
            // in the "action" attribute of the form when valid
            submitHandler: function(form) {
                var fname = $("#fname_chinhsach").val();
                var fngaysinh = $("#fngaysinh").val();
                var fphone = $("#fphone_chinhsach").val();
                var femail = $("#femail_chinhsach").val();
                var fsubject = 'Thông tin thành viên đăng ký mới';
                var button = $("#submit").val();
                var dataString = 'fngaysinh=' + fngaysinh + '&fname=' + fname + '&fphone=' + fphone + '&femail=' + femail + '&button=' + button + '&fsubject=' + fsubject;

                //validation
                if (fname == '' || fphone == '' || femail == '') { //if you are use other form validation scripts remove the if statement
                    alert("Please fill all fields");
                }
                // AJAX Code To Submit Form.
                else {
                    $('#loader-chinhsach').show();
                    $.ajax({
                        type: "POST",
                        url: "send-mailer.php",
                        data: dataString,
                        cache: false,
                        success: function(result) {
                            $('#loader-chinhsach').hide();
                            $("#contact_form_chinhsach")[0].reset();
                            UIkit.modal('#modal-dky-outside').hide();

                            Swal.fire({
                                icon: 'success',
                                title: 'The e-mail has been sent successfully!',
                            })
                        }
                    });
                }
                return false;
            }
        });
    });
</script>
</body>
</html>