@if(request()->segment(1) == 'product_list')
    <div class="product_list">
        <ul class="inner">
            <li class="on"><a href="/product_list">로봇청소기</a></li>
            {{-- 라이스타일때 노출 --}}
            {{-- <li class="on"><a href="/product_list">무선청소기</a></li> --}}
            <li><a href="/product_list">소모품</a></li>
        </ul>
        
        {{-- 소모품일때 노출 --}}
        {{-- <img src="/img/naver_store_ic.png" alt="네이버스토어팜 바로가기" class="naver_store"> --}}
    </div>
@elseif(request()->segment(1) == 'cutomer')
    <div class="product_list">
        <ul class="inner">
            <li class="active"><a href="/cutomer/manual">사용 및 관리&사용 설명서</a></li>
            <li><a href="/cutomer/as">A/S안내</a></li>
        </ul>
    </div>


@elseif(request()->segment(1) == 'product_view')
    <div class="product_list">
        <ul class="inner">
            <li class="on"><a href="#tabs-1">상세정보</a></li>
            <li><a href="#tabs-2">제품고시</a></li>
        </ul>
        <div class="tab_content">
            <div id="tabs-1" class="inner">
                상세정보 탭 구현 테스트
            </div>
            <div id="tabs-2" class="inner">
                제품고시 탭 구현 테스트
            </div>
        </div>
    </div>
    <script>
        $(function(){
            var tabMenu = $('.product_list ul li');
            var tabContent = $('.tab_content > div');

            tabMenu.click(function(e){
            e.preventDefault();
            tabMenu.find('a').removeClass('on');
            $(this).find('a').addClass('on');

            tabContent.hide();
            var targetIdx = $(this).index();
            tabContent.eq(targetIdx).show();
            
            });
            tabMenu.eq(0).trigger('click');
        });
    </script>
@endif
