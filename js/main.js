$(document).ready(function(){
    $('.menu1 nav').hover(function(){
        // 서브메뉴 내려옴
        $('.menu1 .sub').stop().slideDown();
        // 서브메뉴배경 내려옴
        $('.sub_bg').stop().slideDown();
    }, function(){
        // 서브메뉴 올라감
        $('.menu1 .sub').stop().slideUp();
        // 서브메뉴배경 올라감
        $('.sub_bg').stop().slideUp();
    });
    $('.menu2 nav').hover(function(){
        // 서브메뉴 내려옴
        $('.menu2 .sub').stop().slideDown();
        // 서브메뉴배경 내려옴
        $('.sub_bg').stop().slideDown();
    }, function(){
        // 서브메뉴 올라감
        $('.menu2 .sub').stop().slideUp();
        // 서브메뉴배경 올라감
        $('.sub_bg').stop().slideUp();
    });
    // header 영역 안에 있는 검색 버튼을 클릭하면 검색영역이 내려옴
    $('.search a').click(function(){
        // 검색영역이 내려옴
        $('.search_area').stop().slideDown({
            duration:500,
            easing:"easeOutBack"
        });
    });
    // 검색영역 안의 닫기 버튼을 클릭하면 검색영역이 올라감
    $('.search_area > a').click(function(){
        $('.search_area').stop().slideUp();
    });
    // swiper
    var swiper = new Swiper(".mySwiper", {
        spaceBetween:100,
        loop:true,
        // autoplay: {
        //     delay: 3500,
        //     disableOnInteraction: false,
        //   },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    //   section.tab 탭메뉴
    // 탭메뉴 영역의 버튼에 클릭 이벤트 설정
    $('.tab_btn ul li a').click(function(e){
        // a태그의 링크속성을 막음
        e.preventDefault();
        // 클릭한 버튼(a태그)의 부모객체(li)의 인덱스 번호를 읽어서 변수 btnNum에 저장
        var btnNum=$(this).parent('li').index();
        // 만약 클릭한 버튼(a태그)에 active속성이 없다면
        // !:not(논리연산자) ~가 아니면 
        // hasClass():클래스 속성을 갖고 있는지 검사
        if(!($(this).hasClass('active'))){
        // 모든 버튼 (a태그)의 active 제거
        $('.tab_btn ul li a').removeClass('active');
        // 클릭한 버튼(a태그)에만 active 설정
        $(this).addClass('active');
        // 이미지가 움직이는 기능을 가진 함수 호출
        // 인덱스번호 (btnNum)을 함수의 매개변수로 넘김
        imgMove(btnNum);
        // 설명 영역의 li가 아래에서 위로 이동하는 기능을 가진 함수 호출
        desMove(btnNum);
       }
    });
    // 이미지 움직이는 기능을 가진 함수 선언
    function imgMove(btnNum){
        // 이미지(li)의 가로크기를 읽어서 imgWidth변수에 저장
        var imgwidth=$('.tab_img ul li').width();
        // 클릭한 버튼의 인덱스번호 이미지의 가로길이만큼 왼쪽으로 이동
        var moving=-(btnNum*imgwidth);
        $('.tab_img ul').stop().animate({
            left:moving
        });
    }
    // .tab_des ul li의 첫번째 객체를 currentDes에 저장
    var currentDes=$('.tab_des ul li:first')
    // 이전 li객체를 저장하는 변수 선언
    var oldDes='';
    // 설명이 움직이는 기능을 가진 함수 선언
    function desMove(btnNum){
            // currentDes의 값을 oldDes에 저장
            // 지금 현재 눈에 보이는 설명(li)를 oldDes에 저장
            oldDes=currentDes;
            //desNum에 해당하는 설명(li)를 currentDes에 저장
            currentDes=$('.tab_des ul li').eq(btnNum);
            // oldDES에 있는 li객체는 위로 이동하면서 사라짐
            oldDes.stop().animate({
                opacity:0,
                top:-700
                // 500(실행시간, 0.5초동안 animate실행)
                // animate실행 후 function(){}명령어 실행
            },500,function(){
                oldDes.css({
                    opacity:0,
                    top:700
                });
            });
            // currnetDes에 있는 li객체는 아래에서 올라오면서 나타남
            // delay(500) : 0.5초 기다렸다가 animate()실행
            currentDes.delay(500).animate({
                opacity:1,
                top:0
            },500);
    }//desMove함수 끝

    // 신제품, 추천제품
    $('.t1').addClass('active');
    $('.t2').removeClass('active');
    $('.new').click(function(e){
        e.preventDefault();
        $('.t1').addClass('active');
        $('.t2').removeClass('active');
        $('.new').addClass('active');
        $('.best').removeClass('active');
    });
    $('.best').click(function(e){
        e.preventDefault();
        $('.t1').removeClass('active');
        $('.t2').addClass('active');
        $('.new').removeClass('active');
        $('.best').addClass('active');
    });
    // swiper2
    var swiper = new Swiper(".mySwiper2", {
        spaceBetween: 50,
        navigation: {
          nextEl: ".myNext2",
          prevEl: ".myPrev2",
        },
        scrollbar: {
            el:".bar1",
            hide:false
        }
    });
    // swiper3
    var swiper = new Swiper(".mySwiper3", {
        spaceBetween: 50,
        navigation: {
          nextEl: ".myNext3",
          prevEl: ".myPrev3",
        },
        scrollbar: {
            el:".bar2",
            hide:false
        }
    });
    // width()속성은 이미지(li)의 가로길이 인식하는 메서드
    // innerWidth()속성은 padding을 포함한 가로길이 인식하는 메서드
    // outerWidth()속성은 margin을 포함한 가로길이 인식하는 메서드
    var bannerWidth=$('.banner_img ul li').innerWidth();
    // banner 버튼을 클릭하면 이미지가 좌우로 이동
    $('.banner_btn a').click(function(e){
        // a태그를 클릭했을 때 위로 올라가는 거 방지
        e.preventDefault();
        // .banner_btn의 모든 버튼에서 active제거
        $('.banner_btn a').removeClass('active');
        // 클릭한 버튼만 active추가
        $(this).addClass('active');
        // 클릭한 버튼의 인덱스번호를 bannerNum변수에 저장
        var bannerNum=$(this).index();
        // 인덱스 번호에 이미지(li)의 넓이 곱해서 bannerMove변수에 저장
        var bannerMove=bannerNum*bannerWidth;
        // 이미지(ul)가 bannerMove값 만큼 왼쪽이나 오른쪽으로 이동
        $('.banner_img ul').animate({
            left:-bannerMove
        });
    });
    // footer 의 family site
    $('.fa_con').hide();
    $('.family .fa_title').click(function(e){
        e.preventDefault();
        $('.fa_con').show();
    });
    $('.family .fa_con > a').click(function(e){
        e.preventDefault();
        $('.fa_con').hide();
    });
    // top버튼을 클릭하면 body문서의 맨 위로 이동
    $('.top').click(function(){
        $('html,body').animate({
            scrollTop:0
        });
    });
    // top버튼이 아래쪽에서 조금 위쪽에 위치되어 있다가 홈페이지를 위로 올리면 (footer높이만큼)브라우저 오른쪽 아래에 고정되도록 하는 코드
    // 윈도우에 스크롤 이벤트 설정
    $(window).scroll(function(){
        // 만약 윈도우 아래쪽에서 footer높이만큼 스크롤되면
        // $(window).scrollTop()은 bodt문서의 맨 위쪽 위치값
        // $(window).height():브라우저의 높이값
        // $('footer').offset().top : footer의 위쪽 위치값이 브라우저의 높이값과 떨어져있는 거리
        if($(window).scrollTop()+$(window).height() >= $('footer').offset().top){
            // .top에 active클래스 추가
            $('.top').addClass('active');
            // 그렇지않으면
        }else{
            // .top에 active클래스 제거
            $('.top').removeClass('active');
    }
});
});