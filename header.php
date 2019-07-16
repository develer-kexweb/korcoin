<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/script.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <title>KORW</title>
</head>
<body>
<!------------------------- header --------------------------->
<header>
   <div id="header-top">
      <div id="header-login" class="page-width">
          <!-- pc login -->
        <div id="login-bx">
           <a href="login.php" target="_parent" id="login">로그인</a>
           <a href="kor-join.php" target="_parent" id="join">회원가입</a>
        </div>
         <!--// pc login -->
      </div>
   </div>
   <div id="header-menu" class="page-width">
      <a href="index.php" target="_parent" id="kor-logo">
         <img src="images/logo.svg" alt="">
      </a>
      <!-- pc-menu -->
      <nav id="menu-bx">
          <ul>
              <li><a href="#">Company</a>
              <span class="underline"></span>
                  <ul class="sub">
                      <li><a href="com-growth.php" target="_parent">성장동력</a></li>
                      <li><a href="com-member.php" target="_parent">구성원</a></li>
                      <li><a href="com-info.php" target="_parent">의미</a></li>
                      <li><a href="com-history.php" target="_parent">연혁</a></li>
                  </ul>
              </li>
              <li><a href="#">KORW</a>
              <span class="underline"></span>
                  <ul class="sub">
                      <li><a href="kor-about.php" target="_parent">About KORW</a></li>
                      <li><a href="kor-vision.php" target="_parent">Vision</a></li>
                  </ul></li>
              <li><a href="#">KORW Mall</a>
              <span class="underline"></span>
                  <ul class="sub">
                      <li><a href="ex-p2p.php" target="_parent">포인트 나눔</a></li>
                      <li><a href="ex-market.php" target="_parent">KORW MALL</a></li>
                      <li><a href="ex-store.php" target="_parent">제휴마켓</a></li>
                      <li><a href="ex-wallet.php" target="_parent">포인트 지갑</a></li>
                  </ul>
                </li>
              <li><a href="#">Contact</a>
              <span class="underline"></span>
                <ul class="sub">
                   <li><a href="notice-list.php" target="_parent">공지사항</a></li>
                   <li><a href="help.php" target="_parent">문의하기</a></li>
                </ul>
              </li>
          </ul>
      </nav>
      <!-- //pc-menu -->
   </div>
   <div id="menu-bx-bg"></div>
   <div id="mobile-menu-button"></div>
   <div id="mobile-bg">
       <div id="mobile-close"></div>
       <!-- mobile-menu -->
       <nav id="mobile-menu-bx">
       <ul>
              <li><a href="#">Company</a>
                  <ul class="sub">
                      <li><a href="com-growth.php" target="_parent">성장동력</a></li>
                      <li><a href="com-member.php" target="_parent">구성원</a></li>
                      <li><a href="com-info.php" target="_parent">의미</a></li>
                      <li><a href="com-history.php" target="_parent">연혁</a></li>
                  </ul>
              </li>
              <li><a href="#">KORW</a>          
                  <ul class="sub">
                      <li><a href="kor-about.php" target="_parent">About KORW</a></li>
                      <li><a href="kor-vision.php" target="_parent">Vision</a></li>
                  </ul></li>
              <li><a href="#">KORW Market</a>        
                  <ul class="sub">
                      <li><a href="ex-p2p.php" target="_parent">포인트 나눔</a></li>
                      <li><a href="ex-market.php" target="_parent">KORW MALL</a></li>
                      <li><a href="ex-store.php" target="_parent">제휴마켓</a></li>
                      <li><a href="ex-wallet.php" target="_parent">포인트 지갑</a></li>
                  </ul>
                </li>
              <li><a href="#">Contact</a>           
                <ul class="sub">
                   <li><a href="notice-list.php" target="_parent">공지사항</a></li>
                   <li><a href="help.php" target="_parent">문의하기</a></li>
                </ul>
              </li>
          </ul>
       </nav>
       <div id="mobile-login-bx">
           <a href="login.php" target="_parent" id="login">로그인</a>
           <a href="kor-join.php" target="_parent" id="join">회원가입</a>
       </div>
       <!-- // mobile-menu -->
   </div>
</header>