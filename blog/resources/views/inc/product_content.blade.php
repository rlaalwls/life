

<div class="main_product_box">
    @if(request()->segment(1) == 'product_list')
        <h4>라이프로</h4>
    @elseif(request()->segment(1) == '')
        <h4>LIFERO PRODUCT</h4>
    @endif
        <ul class="inner">
            <li>
                <a href="/product_view"><img src="/img/product01.png" alt="product"></a>
                <p class="product_p">로봇청소기</p>
                <p class="product_title">라이프로 RX10</p>
            </li>
            <li>
                <a href=""><img src="/img/product01.png" alt="product"></a>
                <p class="product_p">로봇청소기</p>
                <p class="product_title">라이프로 RX10</p>
            </li>
            <li>
                <a href=""><img src="/img/product01.png" alt="product"></a>
                <p class="product_p">로봇청소기</p>
                <p class="product_title">라이프로 RX10</p>
            </li>
            <li>
                <a href=""><img src="/img/product01.png" alt="product"></a>
                <p class="product_p">로봇청소기</p>
                <p class="product_title">라이프로 RX10</p>
            </li>
            <li>
                <a href=""><img src="/img/product01.png" alt="product"></a>
                <p class="product_p">로봇청소기</p>
                <p class="product_title">라이프로 RX10</p>
            </li>
            <li>
                <a href=""><img src="/img/product01.png" alt="product"></a>
                <p class="product_p">로봇청소기</p>
                <p class="product_title">라이프로 RX10</p>
            </li>
        </ul>
        
</div>