@include('/inc/head')
@include('/inc/header')
@include('/inc/sub_header')
@include('/inc/product_top')
<div class="manual_box inner">
    <h3>사용 및 관리</h3>
    <div class="manual_main_slide">
        <div class="swiper-container manual_slide_box">
            <div class="swiper-wrapper">
            <div class="swiper-slide main_slide01">
                <a href="">     
                    <div class="slide_txt_box">               
                        <img src="/img/detail01.png" alt="">
                        <h2>RX10</h2>
                    </div>
                </a>
            </div>
            <div class="swiper-slide main_slide02">
                <a href="">     
                    <div class="slide_txt_box">               
                        <img src="/img/detail01.png" alt="">
                        <h2>RX10</h2>
                    </div>
                </a>
            </div>
            <div class="swiper-slide main_slide03">
                <a href="">     
                    <div class="slide_txt_box">               
                        <img src="/img/detail01.png" alt="">
                        <h2>RX10</h2>
                    </div>
                </a>
            </div>
            <div class="swiper-slide main_slide04">
                <a href="">     
                    <div class="slide_txt_box">               
                        <img src="/img/detail01.png" alt="">
                        <h2>RX10</h2>
                    </div>
                </a>
            </div>
            <div class="swiper-slide main_slide05">
                <a href="">     
                    <div class="slide_txt_box">               
                        <img src="/img/detail01.png" alt="">
                        <h2>하나더</h2>
                    </div>
                </a>
            </div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>  

    <div class="manual_tab_list inner">
        <ul class="tab_inner_box">
            <li class="on"><a href="#tabs-list-1">사용 및 관리&사용 설명서</a></li>
            <li><a href="#tabs-list-2">자주하는 질문</a></li>
        </ul>
        <div class="manual_tab_content">
            <div id="tabs-list-1" class="inner">
                <img src="/img/pdf_ic.png" alt="공지-설명서 PDF파일 다운로드 받기" class="pdf_ic">
                <div class="board_list inner">
                    <table>
                        <colgroup>
                            <col width="10%">
                            <col width="*">
                            <col width="15%">
                            <col width="15%">
                        </colgroup>
                        <thead>
                            <th>번호</th>
                            <th>제목</th>
                            <th>작성자</th>
                            <th>작성일자</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>10</td>
                                <td class="txt_content"><a href="/board_view">사용 및 관리ddddddddddddddddddddddddddddddddddddddddddddddddddddddd 게시판 제목 영역입니다.</a></td>
                                <td>라이프로</td>
                                <td>2020.12.21</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td class="txt_content"><a href="/board_view">사용 및 관리 게시판 제목 영역입니다.</a></td>
                                <td>라이프로</td>
                                <td>2020.12.21</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td class="txt_content"><a href="/board_view">사용 및 관리 게시판 제목 영역입니다.</a></td>
                                <td>라이프로</td>
                                <td>2020.12.21</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td class="txt_content"><a href="/board_view">사용 및 관리 게시판 제목 영역입니다.</a></td>
                                <td>라이프로</td>
                                <td>2020.12.21</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td class="txt_content"><a href="/board_view">사용 및 관리 게시판 제목 영역입니다.</a></td>
                                <td>라이프로</td>
                                <td>2020.12.21</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td class="txt_content"><a href="/board_view">사용 및 관리 게시판 제목 영역입니다.</a></td>
                                <td>라이프로</td>
                                <td>2020.12.21</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td class="txt_content"><a href="/board_view">사용 및 관리 게시판 제목 영역입니다.</a></td>
                                <td>라이프로</td>
                                <td>2020.12.21</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td class="txt_content"><a href="/board_view">사용 및 관리 게시판 제목 영역입니다.</a></td>
                                <td>라이프로</td>
                                <td>2020.12.21</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td class="txt_content"><a href="/board_view">사용 및 관리 게시판 제목 영역입니다.</a></td>
                                <td>라이프로</td>
                                <td>2020.12.21</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td class="txt_content"><a href="/board_view">사용 및 관리 게시판 제목 영역입니다.</a></td>
                                <td>라이프로</td>
                                <td>2020.12.21</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="pagination">
                        <img src="/img/table_prev.png" alt="한칸 뒤로가기">
                        <a href="" class="on">1</a>
                        <a href="">2</a>
                        <a href="">3</a>
                        <a href="">4</a>
                        <a href="">5</a>
                        <img src="/img/table_next.png" alt="한칸 앞으로가기">
                    </div>
                    {{-- 이벤트 게시판에서는 삭제 --}}
                    <form action="">
                        <select name="" id="">
                            <option value="">제목</option>
                            <option value="">내용</option>
                        </select>
                        <label for="">검색어 입력창</label>
                        <input type="text" class="search_text_box">
                        <input type="submit" value="검색" class="search_submit">
                    </form>
                </div>
            
            </div>
            <div id="tabs-list-2" class="inner">
                <div class="board_list inner">
                    <table>
                        <colgroup>
                            <col width="10%">
                            <col width="*">
                            <col width="15%">
                            <col width="15%">
                        </colgroup>
                        <thead>
                            <th>번호</th>
                            <th>제목</th>
                            <th>작성자</th>
                            <th>작성일자</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>10</td>
                                <td class="txt_content"><a href="/board_view">사용 및 관리ddddddddddddddddddddddddddddddddddddddddddddddddddddddd 게시판 제목 영역입니다.</a></td>
                                <td>라이프로</td>
                                <td>2020.12.21</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td class="txt_content"><a href="/board_view">사용 및 관리 게시판 제목 영역입니다.</a></td>
                                <td>라이프로</td>
                                <td>2020.12.21</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td class="txt_content"><a href="/board_view">사용 및 관리 게시판 제목 영역입니다.</a></td>
                                <td>라이프로</td>
                                <td>2020.12.21</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td class="txt_content"><a href="/board_view">사용 및 관리 게시판 제목 영역입니다.</a></td>
                                <td>라이프로</td>
                                <td>2020.12.21</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td class="txt_content"><a href="/board_view">사용 및 관리 게시판 제목 영역입니다.</a></td>
                                <td>라이프로</td>
                                <td>2020.12.21</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td class="txt_content"><a href="/board_view">사용 및 관리 게시판 제목 영역입니다.</a></td>
                                <td>라이프로</td>
                                <td>2020.12.21</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td class="txt_content"><a href="/board_view">사용 및 관리 게시판 제목 영역입니다.</a></td>
                                <td>라이프로</td>
                                <td>2020.12.21</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td class="txt_content"><a href="/board_view">사용 및 관리 게시판 제목 영역입니다.</a></td>
                                <td>라이프로</td>
                                <td>2020.12.21</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td class="txt_content"><a href="/board_view">사용 및 관리 게시판 제목 영역입니다.</a></td>
                                <td>라이프로</td>
                                <td>2020.12.21</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td class="txt_content"><a href="/board_view">사용 및 관리 게시판 제목 영역입니다.</a></td>
                                <td>라이프로</td>
                                <td>2020.12.21</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="pagination">
                        <img src="/img/table_prev.png" alt="한칸 뒤로가기">
                        <a href="" class="on">1</a>
                        <a href="">2</a>
                        <a href="">3</a>
                        <a href="">4</a>
                        <a href="">5</a>
                        <img src="/img/table_next.png" alt="한칸 앞으로가기">
                    </div>
                    {{-- 이벤트 게시판에서는 삭제 --}}
                    <form action="">
                        <select name="" id="">
                            <option value="">제목</option>
                            <option value="">내용</option>
                        </select>
                        <label for="">검색어 입력창</label>
                        <input type="text" class="search_text_box">
                        <input type="submit" value="검색" class="search_submit">
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>    
@include('/inc/footer')
<script> 
    $(function(){
        var mySwiper = new Swiper('.manual_slide_box', {
            // Optional parameters
            direction: 'horizontal',
            loop: true,
            autoplay : {
                delay:2000,
            },
            speed : 700,

            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
              },
            slidesPerView: 4,
            slidesPerGroup: 1,
            breakpoints: {
            1280: {
                slidesPerView: 3,
                slidesPerGroup: 3,
            },
            768: {
                slidesPerView: 2.5,
                slidesPerGroup: 1,
            }
        }
        });



        $(function(){
            var tabMenu = $('.manual_tab_list ul li');
            var tabContent = $('.manual_tab_content > div');

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
    });
</script>