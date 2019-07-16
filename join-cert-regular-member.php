<?php include 'header.php'; ?>
<!------------------------- sub header --------------------------->
<div class="page-title-bg">
    <div class="page-title page-width">
        <p>실생활에 플러스가 되는 포인트몰</p>
        <h3>KORW Mall</h3>
    </div>
</div>
<!------------------------- contents --------------------------->
<section class="sub-contents page-width">   
<form action="" id="member-cert">
    <h5>정회원 인증</h5>
    <p>포인트 충전 및 마켓기능 이용을 위한 정회원 인증절차를 진행합니다.</p>
    <span>1단계</span>
    <label for="email-cert">이메일 인증</label>
    <input type="text" name="" id="email-cert">
    <input type="button" value="인증하기">
    <hr>
    <label for="email-cert-chk">인증 번호 입력</label>
    <input type="text" name="" id="email-cert-chk" placeholder="메일로 발송된 인증번호를 입력해주세요.">
    <input type="button" value="확인">
    <hr>
    <span>2단계</span>
    <label for="phone-cert">휴대폰 본인확인</label>
    <input type="button" value="인증하기">
    <hr>
    <span>3단계</span>
    <label for="bank-cert">포인트 환급 계좌 정보 인증</label>
    <input type="button" value="인증하기">
    <hr>
    <div> 
        <input type="submit" value="확인">
        <input type="submit" value="취소">
    </div> 
</form>
</section>
<!------------------------- contents --------------------------->
<?php include 'footer.php'; ?>