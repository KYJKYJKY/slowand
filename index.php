<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>슬로우앤드</title>
    <!-- 파비콘 -->
    <link rel="shortcut icon" href="img/favicon.png"type="image/icon">
    <!-- 스와이퍼(swiper) css를 cdn으로 연결 -->
    <link rel="stylesheet"  href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <!-- 외부css -->
    <link rel="stylesheet" href="css/main.css" type="text/css">
    <!-- 제이쿼리 라이브러리 -->
    <script src="js/jquery-3.6.0.js"></script>
    <!-- easing 플러그인 -->
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- 스와이퍼(swiper) js를 cdn으로 연결 -->
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <!-- 외부 js -->
    <script src="js/main.js"></script>
</head>
<body>
    <div class="wrap">
        <!-- header -->
        <? include "header.html"; ?>
        <!-- section -->
        <section class="visual">
            <!-- swiper플러그인 -->
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide s1"><a href="#"><img src="img/visual1.png" alt="welcome summer"></a></div>
                  <div class="swiper-slide s2"><a href="#"><img src="img/visual2.png" alt="spring day"></a></div>
                  <div class="swiper-slide s3"><a href="#"><img src="img/visual3.png" alt="basic of basic"></a></div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </section>
        <section class="tab">
            <div class="tab_container">
                <h1>Weekly Best</h1>
                <div class="tab_in">
                    <div class="tab_btn">
                        <ul>
                            <li><a href="#" class="active">Macaron Pants</a></li>
                            <li><a href="#">Pique One-piece</a></li>
                            <li><a href="#">Cotton Shirts</a></li>
                            <li><a href="#">Stripe T-shirts</a></li>
                        </ul>
                    </div>
                    <div class="tab_img">
                        <ul>
                            <li><img src="img/tab1.png" alt="마카롱 팬츠"></li>
                            <li><img src="img/tab2.png" alt="피케 원피스"></li>
                            <li><img src="img/tab3.png" alt="코튼 셔츠"></li>
                            <li><img src="img/tab4.png" alt="스트라이프 티셔츠"></li>
                        </ul>
                    </div>
                    <div class="tab_des">
                        <ul>
                            <li>
                                <h2>말랑말랑하고 편안한<br>밴딩 반바지</h2>
                                <p>부드러운 이중지 원단으로<br>톡톡하게 제작한 밴딩팬츠.<br>봄부터 여름까지. 소장가치 있는<br>일곱가지 색감을 보여드립니다.</p>
                            </li>
                            <li>
                                <h2>슬로우앤드 자체제작<br>플레인 오프닝<br>피케원피스</h2>
                                <p>꾸미고 싶은 자리는 물론<br>마냥 편안하고 싶은 날<br>망설임없이 찾게 될 원피스</p>
                            </li>
                            <li>
                                <h2>데일리용 셔츠<br>솔트 스탠다드<br>코튼 셔츠</h2>
                                <p>벙벙하지 않고 깔끔한 스탠다드 핏에<br>바이오 워싱을 돌린 40수 고밀도 코튼 원단.<br>쉽게 볼 수 없는 특별한 컬러와<br>어디에든 무난히 매치할 수 있는 컬러.<br>총 일곱가지 색으로 준비했습니다.</p>
                            </li>
                            <li>
                                <h2>꾸준한 스테디셀러,<br>디테일<br>스트라이프 티셔츠</h2>
                                <p>줄 간격까지 맞춰준 섬세한 디테일과<br>깔끔함이 돋보이는 안쪽 배색까지,<br>사소한 것 하나 놓치지 않고<br>꼼꼼히 제작한 스트라이프 티셔츠입니다.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="collection">
            <h1>Slowand Collection</h1>
            <div class="tab_slide">
                <div class="tab_title">
                    <a href="#" class="new active">New</a>
                    <a href="#" class="best">Best</a>
                </div>
                <div class="tab_slide_con">
                    <div class="tab_slide_list t1 active">
                        <!-- 신상품 슬라이드 -->
                        <div class="swiper mySwiper2">
                            <div class="swiper-wrapper">
                              <div class="swiper-slide new1">
                                  <!-- <h1>제목</h1>
                                  <p>설명</p>
                                  <a href="#"><span></span><i>VIEW</i></a> -->
                              </div>
                              <div class="swiper-slide new2">
                                <!-- <h1>제목</h1>
                                <p>설명</p>
                                <a href="#"><span></span><i>VIEW</i></a> -->
                              </div>
                              <div class="swiper-slide new3">
                                <!-- <h1>제목</h1>
                                <p>설명</p>
                                <a href="#"><span></span><i>VIEW</i></a> -->
                              </div>
                            </div>
                            <!-- swiper왼쪽, 오른쪽 버튼 -->
                            <div class="swiper-button-next myNext2"></div>
                            <div class="swiper-button-prev myPrev2"></div>
                            <!-- 스크롤바 -->
                            <div class="swiper-scrollbar bar1"></div>
                        </div>
                    </div>
                    <div class="tab_slide_list t2">
                        <!-- 추천상품 슬라이드 -->
                        <div class="swiper mySwiper3">
                            <div class="swiper-wrapper">
                              <div class="swiper-slide best1">
                                <!-- <h1>제목</h1>
                                <p>설명</p>
                                <a href="#"><span></span><i>VIEW</i></a> -->
                              </div>
                              <div class="swiper-slide best2">
                                <!-- <h1>제목</h1>
                                <p>설명</p>
                                <a href="#"><span></span><i>VIEW</i></a> -->
                              </div>
                              <div class="swiper-slide best3">
                                <!-- <h1>제목</h1>
                                <p>설명</p>
                                <a href="#"><span></span><i>VIEW</i></a> -->
                              </div>
                            </div>
                            <!-- swiper왼쪽, 오른쪽 버튼 -->
                            <div class="swiper-button-next myNext3"></div>
                            <div class="swiper-button-prev myPrev3"></div>
                            <!-- 스크롤바 -->
                            <div class="swiper-scrollbar bar2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="banner">
            <div class="banner_in">
                <h1>Slowand Issue</h1>
                <div class="banner_box">
                    <div class="banner_title">
                        슬로우앤드의<br>새로운 소식을<br>알려드립니다.
                    </div>
                    <div class="banner_img">
                        <ul>
                            <li class="event1"><a href="#">
                                <img src="img/issue1.png" alt="퍼퓸하프린넨자켓">
                            </a></li>
                            <li class="event2"><a href="#">
                                <img src="img/issue2.png" alt="선착순 재고소진">
                            </a></li>
                            <li class="event3"><a href="#">
                                <img src="img/issue3.png" alt="봄 아우터 특가">
                            </a></li>
                        </ul>
                    </div>
                    <div class="banner_btn">
                        <a href="#" class='active'>
                            <span>Issue 1</span>
                            <p>퍼퓸 하프린넨자켓<br>2차 오픈</p>
                        </a>
                        <a href="#">
                            <span>Issue 2</span>
                            <p>Last Chance<br>20~70% 선착순 재고소진</p>
                        </a>
                        <a href="#">
                            <span>Issue 3</span>
                            <p>Spring Outer<br>봄 아우터 특가</p>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="news">
            <div class="news_in">
                <h1>Made by Slowand</h1>
                <div class="news_list">
                    <ul>
                        <li><a href="#">
                            <div class="news_img">
                                <img src="img/sns1.png" alt="수트세트">
                            </div>
                        </a></li>
                        <li><a href="#">
                            <div class="news_img">
                                <img src="img/sns2.png" alt="투데이 슬랙스">
                            </div>
                        </a></li>
                        <li><a href="#">
                            <div class="news_img">
                                <img src="img/sns3.png" alt="치즈 데일리 후드">
                            </div>
                        </a></li>
                        <li><a href="#">
                            <div class="news_img">
                                <img src="img/sns4.png" alt="플린 플레어 스커트">
                            </div>
                        </a></li>
                        <li><a href="#">
                            <div class="news_img">
                                <img src="img/sns5.png" alt="데일리 무드 스트라이프 셔츠">
                            </div>
                        </a></li>
                        <li><a href="#">
                            <div class="news_img">
                                <img src="img/sns6.png" alt="뷔스티에 원피스">
                            </div>
                        </a></li>
                        <li><a href="#">
                            <div class="news_img">
                                <img src="img/sns7.png" alt="렌토 벨트">
                            </div>
                        </a></li>
                        <li><a href="#">
                            <div class="news_img">
                                <img src="img/sns8.png" alt="오버 롤 멜빵바지">
                            </div>
                        </a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- 구글 지도 연결 -->
        <section class="map">
            <h1>교환 및 반품 주소</h1>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3162.5540934271216!2d127.0535025656481!3d37.565568181940655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357ca4b353c3eddd%3A0x63cf47f9a70958fa!2zKOyjvCnslaTrk5zrqqjslrQ!5e0!3m2!1sko!2skr!4v1650860440203!5m2!1sko!2skr" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>
        <section class="icons">
            <div class="icons_in">
                <ul>
                    <li><a href="#">
                        <img src="img/mapicon_1.png" alt="상품문의">
                        <p>상품문의</p>
                    </a></li>
                    <li><a href="#" class="icon2">
                        <img src="img/mapicon_2.png" alt="배송문의">
                        <p>배송문의</p>
                    </a></li>
                    <li><a href="#">
                        <img src="img/mapicon_3.png" alt="자주 묻는 질문">
                        <p>자주 묻는 질문</p>
                    </a></li>
                </ul>
            </div>
        </section>
        <section class="info">
            <div class="custom">
                <div class="custom_center">
                    <h4>C/S center</h4>
                    <p>070-7705-5595</p>
                    <span>Open : am10:00 - pm17:00<br>
                        Break : pm12:00 - pm13:00<br>
                        (sat / sun / holiday off)</span>
                </div>
                <div class="as">
                    <h4>Bank Account</h4>
                    <span>기업 029-081822-04-039<br>예금주:(주)앤드모어</span>
                </div>
            </div>
            <div class="app">
                <p>이제 에이블리에서<br>슬로우앤드를 만나보세요!</p>
                <button>APP STORE<span>APP STORE</span></button>
                <button>GOOGLE PLAY<span>GOOGLE PLAY</span></button>
                <a href="#">more</a>
            </div>
        </section>
        <!-- footer -->
        <? include "footer.html"; ?>
    </div><!--wrap-->
    <!-- top버튼 -->
    <div class="top">TOP</div>
    <!-- 사이트맵 -->
    <!-- <div class="site"></div> -->

</body>
</html>