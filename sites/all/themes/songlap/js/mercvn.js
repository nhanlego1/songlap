(function($) {

    Drupal.behaviors.mercvn = {
        attach: function(context, settings) {
            $(".letter-family ul ").each(function(){
               if($(this).children().length == 0){
                   $(this).parent().hide();
               }
            });
        }
    }

    Drupal.behaviors.mercvn_bg = {
        attach: function(context, settings) {
           var bg = $(".bg-slide-show").val();

            if(bg != 0){
                $("#zone-preface-wrapper").css('background','url('+bg+') no-repeat center #fdfdfd');
            }
        }
    }

    Drupal.behaviors.mercvn_scroll = {
        attach: function(context, settings) {


            $("ul li.letter-header-index a").each(function(){
                $(this).click(function(){
                    $('html, body').animate({
                        scrollTop: $($(this).attr('href')).offset().top - 70
                   }, 1500);
                });

            });

            $(".back-to-top").each(function(){
               $(this).click(function(){
                   $('html, body').animate({
                       scrollTop: $('.index-wrapper').offset().top - 100
                   }, 1500);
               });
            });

            $(".order-button a").click(function(){
                $('html, body').animate({
                    scrollTop: $($(this).attr('href')).offset().top - 50
                }, 1000);
            });

            $("fieldset#edit-customer-profile-billing legend span").html('<h3>Thông tin thanh toán</h3>');
            $(".form-item-customer-profile-billing-commerce-customer-address-und-0-name-line label").html('Họ và tên <span class="form-required" title="Trường dữ liệu này là bắt buộc.">*</span>');
            $("#edit-cart-contents legend span").html('<h3>Thông tin sản phẩm</h3>');
            $(".checkout-continue").val('Tiếp tục thanh toán');
//            $("#views-form-commerce-cart-form-default #edit-submit").val('Cập nhật giỏ hàng');
//            $("#views-form-commerce-cart-form-default #edit-checkout").val('Thanh toán');
            $(".checkout-help").text('Xem lại đơn hàng');
            $(".checkout-review  tr").each(function(e){
                console.log(e);
                if(e == 0){
                    $(this).find('td').text('Thông tin sản phẩm ');
                }
                if(e == 5){
                    $(this).find('td').text('Thông tin tài khoản ');
                }
                if(e == 7){
                    $(this).find('td').text('Thông tin thanh toán');
                }
            });
            $(".page-cart h1.title").text('Giỏ hàng');
            $(".component-type-commerce-price-formatted-amount .component-title").text('Tổng cộng');
            $("#edit-commerce-payment legend span").html('<h3>Phương thức thanh toán</h3>');
            $("#commerce-checkout-form-checkout .account legend span").html('<h3>Thông tin tài khoản</h3>');

            $(".views-widget-filter-field_product_category_tid select").chosen();
            $(".views-widget-filter-field_brand_tid select").chosen();
        }
    }



})(jQuery);
