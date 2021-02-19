<body>
    <div id="container">
        <div id="header">
            <span class="respon_menu_aside"></span>
            <div class="top_banner">
                <p>라이프로로봇청소기사용 후기 이벤트 진행 중 ~1월 31일까지 </p>
            </div>
            <div class="main_header inner">
                <img src="/img/m_search.png" alt="search" class="search_ic">
                <h1><a href="/"><img src="/img/logo.png" alt="logo"></a></h1>
                <ul class="main_menu">
                    <li><a href="">회사소개</a></li>
                    <li class="many_sub">
                        <a href="">제품소개</a>                        
                        <ul class="sub_menu"> 
                            <li>
                                <a href="">라이프로 </a>
                                <ul class="sub_sub_menu">
                                    <li><a href="">로봇청소기</a></li>
                                    <li><a href="">소모품</a></li>
                                </ul>
                           </li>
                            <li>
                                <a href="">라이스타</a>
                                <ul class="sub_sub_menu">
                                    <li><a href="">로봇청소기</a></li>
                                    <li><a href="">무선청소기</a></li>
                                    <li><a href="">소모품</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="">공지사항</a>                        
                        <ul class="sub_menu">
                            <li><a href="">공지사항</a></li>
                            <li><a href="">진행 이벤트</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="">고객지원</a>                        
                        <ul class="sub_menu">
                            <li><a href="">사용 및 관리 & 사용설명서</a></li>
                            <li><a href="">A/S 안내</a></li>
                        </ul>
                    </li>
                </ul>
                <form action="" class="main_search">
                    <label for="">검색창</label>
                    <input type="text" class="search">
                    <input type="submit" class="submit"/>
                </form>
                <img src="/img/m_bar.png" alt="sub_menu" class="bar_ic">
                <div class="respon_menu">
                    <img src="/img/close_ic.png" alt="close" class="close">
                    <a href="/"><img src="/img/sub_logo.png" alt="logo" class="sub_logo"></a>
                    <ul class="respon_menu_list">
                        <li class="dep01">
                            <a href="/greeting">회사소개</a>
                        </li>
                        <li class="dep01">
                            <a href="javascript:void(0);">제품소개</a>
                            <img src="/img/down_ic.png" alt="" class="down_btn">
                            <ul class="respon_sub_menu">
                                <li>
                                    <a href="/product_list">라이프로</a>
                                    <img src="/img/sub_down_ic.png" alt="" class="sub_down_btn">
                                    <ul class="last_sub_menu">
                                        <li><a href="">- 로봇청소기</a></li>
                                        <li><a href="">- 소모품</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="/product_list">라이스타</a>
                                    <img src="/img/sub_down_ic.png" alt="" class="sub_down_btn">
                                    <ul class="last_sub_menu">
                                        <li><a href="">- 로봇청소기</a></li>
                                        <li><a href="">- 무선청소기</a></li>
                                        <li><a href="">- 소모품</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dep01">
                            <a href="javascript:void(0);">공지사항</a>
                            <img src="/img/down_ic.png" alt="" class="down_btn">
                            <ul class="respon_sub_menu">
                                <li><a href="">공지사항</a></li>
                                <li><a href="">진행이벤트</a></li>
                            </ul>
                        </li>
                        <li class="dep01">
                            <a href="javascript:void(0);">고객지원</a>
                            <img src="/img/down_ic.png" alt="" class="down_btn">
                            <ul class="respon_sub_menu">
                                <li><a href="/cutomer/manual">사용 및 관리 & 사용설명서</a></li>
                                <li><a href="/cutomer/as">A/S 안내</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>    
    </div>
    <script>
        $(function(){
            var sub_menu = $('#header .respon_menu .respon_menu_list > li > a');
            var last_sub_menu = $('#header .respon_menu .respon_menu_list .respon_sub_menu > li');
            
            $('#header .bar_ic').click(function(){
                $(this).siblings('.respon_menu').addClass('active');
                $('body').css({position:'fixed'});
                $('body').addClass('body_bg');
            });
            $('#header .respon_menu .close').click(function(){
                $(this).parent('.respon_menu').removeClass('active');
                $('body').css({position:''});
                $('body').removeClass('body_bg');
            });



            sub_menu.click(function(){
                console.log('dep1')
                // sub_menu.find('.respon_sub_menu').css({display:'none'});
                sub_menu.removeClass('active');
                $(this).siblings('.respon_sub_menu').slideToggle();
                $(this).parent().addClass('active');
            });


            last_sub_menu.click(function(e){
                console.log('dep2')
                e.preventDefault();
                last_sub_menu.find('.last_sub_menu').css({display:'none'});
                last_sub_menu.removeClass('active');
                $(this).find('.last_sub_menu').slideToggle();
                $(this).addClass('active');
            });
            
        });
    </script>