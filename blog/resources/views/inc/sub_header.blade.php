<div class="sub_header">
    @if(request()->segment(1) == 'detail')
        <div class="swiper-container sub_header_slide_box">
            <div class="swiper-wrapper">
            <div class="swiper-slide sub_header_slide01">
                <div class="slide_txt_box inner">                    
                    <p>
                        RX 시리즈 공통 스펙<br>
                        H14 등급 필터, 물걸레질, 음성안내
                    </p> 
                </div>
            </div>
            <div class="swiper-slide sub_header_slide02">
                <div class="slide_txt_box inner">
                    <p>
                        RX 시리즈 공통 스펙<br>
                        H14 등급 필터, 물걸레질, 음성안내
                    </p> 
                </div>
            </div>
            <div class="swiper-slide sub_header_slide03">
                <div class="slide_txt_box inner">
                    <p>
                        RX 시리즈 공통 스펙<br>
                        H14 등급 필터, 물걸레질, 음성안내
                    </p> 
                </div>
            </div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

            <div class="swiper-pagination"></div>
        </div>
    @elseif(request()->segment(1) == 'board_list' || request()->segment(1) == 'board_view') 
        <div class="swiper-container sub_header_slide_box">
            <div class="swiper-wrapper">
            <div class="swiper-slide sub_header_slide01">
                <div class="slide_txt_box inner">                    
                    <img src="/img/banner_temporary.png" alt="">
                </div>
            </div>
            <div class="swiper-slide sub_header_slide02">
                <div class="slide_txt_box inner">                    
                    <img src="/img/banner_temporary.png" alt="">
                </div>
            </div>
            <div class="swiper-slide sub_header_slide03">
                <div class="slide_txt_box inner">                    
                    <img src="/img/banner_temporary.png" alt="">
                </div>
            </div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

            <div class="swiper-pagination"></div>
        </div>
    @elseif(request()->segment(1) == 'greeting')
        <div class="sub_banner">
            <h2>회사소개</h2>
        </div>
    @elseif(request()->segment(1) == 'lifefo' || request()->segment(1) == 'listar')
        <div class="sub_banner">
            <h2>제품소개</h2>
        </div>
    @elseif(request()->segment(1) == 'cutomer')
        <div class="sub_banner cutomer_banner">
            <h2>고객지원</h2>
        </div>
    @endif
</div>
<script>
    $(function(){
        var mySwiper = new Swiper('.sub_header_slide_box', {
            // Optional parameters
            direction: 'horizontal',
            loop: true,
            
            autoplay : {
                delay:3000,
            },
            speed : 1000,

        
            pagination: {
                el: '.swiper-pagination',
                clickable:true,
            },


            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    });
</script>