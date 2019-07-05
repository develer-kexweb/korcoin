
$(document).ready(function(){
    var navi = $('#menu-bx > ul');
    var menuList = navi.find('>li');
    var subMenuList = navi.find('.sub');
    var maxHeight = 0;
    var menuBxBg = $('#menu-bx-bg');
    

  

    //서브메뉴 배경 애니메이션 (2019.07.03)
    $.each(subMenuList, function(index,item){
        var curHeight = $(this).outerHeight();
        if(curHeight > maxHeight){
            maxHeight = curHeight;
            menuBxBg.css('height',maxHeight);
        }
    });
    $.each(subMenuList, function(index,item){
        $(this).css('height',maxHeight);
    });
    
    
    //서브메뉴 펼치기 (2019.07.03)
    $.each(menuList, function(index,item){
        var underLine = $(this).find('.underline');
        var aTag = $(this).find('>a');
        $(this).mouseenter(function(){
            showAllMenu();
            underLine.addClass('underline-ani');
            aTag.addClass('hover');
        });
        $(this).mouseleave(function(){
            underLine.removeClass('underline-ani');
            aTag.removeClass('hover');
        });
    });

    function showAllMenu(){
        menuBxBg.stop().slideDown('fast');
        $.each(menuList,function(index,item){
            var subMenu = $(this).find('.sub');         
            subMenu.stop().slideDown('fast');  
        });
    }
    navi.mouseleave(function(){
        $.each(menuList,function(index,item){
            var subMenu = $(this).find('.sub');
            subMenu.stop().slideUp('fast');
            menuBxBg.stop().slideUp('fast');   
        });    
    });


    //모션 실행 애니메이션(2019.07.03)
    var motionObj = $('.motion-ani');
    var hitRatio = 0.7;
    var hitRatio_second = 0.8;

    checkHit();
    // 윈도우 스크롤 시 체크 
     $(window).scroll(function(){
         checkHit();
     });
    
     // 윈도우 리사이즈 시 체크
     $(window).resize(function(){
         checkHit();
     });
     
     function checkHit(){
     var topOfWindow = $(window).scrollTop();
     // 웹브라우저의 높이값
     var winHeight = $(window).height();
   
     // 웹브라우저의 높이값 대비 체크 박스의 크기
     var distanceY = winHeight * hitRatio;
     //    $('#testbox').css('height', distanceY);
     var hitHeightY = distanceY + topOfWindow;
         
        $.each(motionObj, function(index,item){
           var objPos = $(this).offset().top;
           if(objPos < hitHeightY){
                  // 해당 클래스가 적용되지 않았다면.
                  if($(this).hasClass('obj-ani') == false)
                  {
                   // 모션 클래스를 적용하자.
                   $(this).addClass('obj-ani');
                  }      
           }else{             
                  // 해당 클래스가 적용되지 않았다면.
                  if($(this).hasClass('obj-ani'))
                  {
                   // 모션 클래스를 제거하자.
                   $(this).removeClass('obj-ani');
                  }      
               }
        });
     }


     //모바일 메뉴 처리 (2019.07.03)
    var mobileOpenBtn = $('#mobile-menu-button');
    var mobileMenu = $('#mobile-bg');
    var mobileCloseBtn = $('#mobile-close');
    var windowWidth = $(window).width();
    
    mobileOpenBtn.click(function(){
        mobileMenu.show();
        mobileMenu.stop().animate({
            right: 0,
            opacity:1
        },function(){
            $(this).addClass('open');
        });
    });
    mobileCloseBtn.click(function(){
        mobileMenu.stop().animate({
            right: -300,
            opacity:0
        },function(){
            mobileMenu.hide();
            $(this).removeClass('open');
        });
    });
    function checkwidth(){
        if(windowWidth > 1024){
        mobileMenu.hide();
        }
    }
    checkwidth();
    $(window).resize(checkwidth);

    //모바일 서브메뉴 처리 (2019.07.03)
    var mobileNavi = $('#mobile-menu-bx');
    var mobileMenuLi = mobileNavi.find('ul >li');
    
    $.each(mobileMenuLi,function(index,item){
        var subMenu = $(this).find('.sub');
        $(this).click(function(){
            subMenu.stop().slideToggle('fast');
        });
    });
});