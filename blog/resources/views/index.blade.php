@include('/inc/head')
@include('/inc/header')
    <div id="main">
        <div class="swiper-container main_slide_box">
            <div class="swiper-wrapper">
              <div class="swiper-slide main_slide01">
                <a href="">
                    <div class="slide_txt_box inner">                    
                        <p>
                            지능형 스마트 로봇청소기와 함께<br>
                            당신의 삶을 더욱 윤택하게 가꿔보세요. 
                        </p> 
                        <h2>라이프로 RX10</h2>
                    </div>
                </a>
              </div>
              <div class="swiper-slide main_slide02">
                <a href="">
                    <div class="slide_txt_box inner">                    
                        <p>
                            지능형 스마트 로봇청소기와 함께<br>
                            당신의 삶을 더욱 윤택하게 가꿔보세요. 
                        </p> 
                        <h2>라이프로 RX10</h2>
                    </div>
                </a>
              </div>
              <div class="swiper-slide main_slide03">
                <a href="">
                    <div class="slide_txt_box inner">                    
                        <p>
                            지능형 스마트 로봇청소기와 함께<br>
                            당신의 삶을 더욱 윤택하게 가꿔보세요. 
                        </p> 
                        <h2>라이프로 RX10</h2>
                    </div>
                </a>
              </div>
            </div>
            <div class="swiper-pagination inner"></div>
        </div>
        <div class="main_spac_choice_box">
            <h3>나에게 맞는 로봇청소기 고르기</h3> 
            <p>라이프로 로봇청소기 전모델 스펙 간편 비교</p>
            <a href="/detail">
                로봇청소기 선책하기 CLICK 
                <img src="/img/arrow.png" alt="arrow">
            </a>
        </div>
        <div class="main_support_box">
            <h4>고객지원</h4>
            <p>Customer Center</p>
            <div class="support inner">
                <div class="support01">
                    <a href="/cutomer/manual">
                        <img src="img/main_customer_ic01.png" alt="">
                        <p>사용 및 관리 & 사용 설명서</p>
                    </a>    
                </div>
                <div class="support02">
                    <a href="/cutomer/as">
                        <img src="img/main_customer_ic02.png" alt="">
                        <p>A/S 안내</p>
                    </a> 
                </div>
            </div>
        </div>
        <div class="youtube_box">
            <div class="socal_box inner">
                <div class="kakao_box">
                    <img src="/img/kakao.png" alt="">
                    <div class="socal_txt_box">
                        <p class="s_title">kakaotalk</p>
                        <p class="p2">
                            <a href="">1:1 카카오톡 고객센터
                                <img src="/img/arrow.png" alt="arrow">
                            </a> 
                        </p>
                    </div>
                </div>
                <div class="naver_box">
                    <img src="/img/naver.png" alt="">
                    <div class="socal_txt_box">
                        <p class="s_title">naver store</p>
                        <p class="p2">
                            <a href="">네이버 스토어팜
                                <img src="/img/arrow.png" alt="arrow">
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <h4>라이프로 로봇청소기 소개</h4>
            <div class="youtube">
                <iframe src="https://www.youtube.com/embed/HA6cQrR4ywY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <div class="main_product_big_box">
            @include('/inc/product_content')
        </div>
    


    </div>
@include('/inc/footer')
<script>
    $(function(){
        var mySwiper = new Swiper('.main_slide_box', {
            // Optional parameters
            direction: 'horizontal',
            loop: true,
            autoplay : {
                delay:3000,
            },
            speed : 1000,

        
            // If we need pagination
            pagination: {
            el: '.swiper-pagination',
            clickable:true,
            },
            // navigation: {
            //     nextEl: '.swiper-button-next',
            //     prevEl: '.swiper-button-prev',
            //   },
        });
    });
</script>