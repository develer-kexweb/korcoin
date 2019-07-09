<?php include 'header.php'; ?>
<!------------------------- sub header --------------------------->
<div class="page-title-bg">
    <div class="page-title page-width">
        <p>EXCHANGE</p>
        <h3>My Wallet</h3>
    </div>
</div>
<!------------------------- contents --------------------------->
<section class="sub-contents page-width">
    <aside id="wallet">
    <h5>암호 화폐 지갑 관리</h5>
    <dl>
       <dt><p>- 회원님께서 등록해주신 지갑으로만 코인의 판매/구매가 가능합니다.<br></dt>
       <dt><p>- 지갑 주소설정이 올바르지 않은경우 , 서비스의 이용이 원할하지 않을 수 있으며, 금전적 손실이 발생할 수 있으니 각별히 유의하여 주시기 바랍니다.<br></dt>
       <dt><p>- 지갑설정 오류료 인한 피해에 대해 저희 KOR COIN 은 책임을 지지 않습니다.</p></dt>
    </dl>

    <ul class="wallet-table">
       <li>
           <div class="table-subject coin-title">코인명</div>
           <div class="table-subject coin-nickname">별칭</div>
           <div class="table-subject coin-address">지갑 주소</div>
       </li>
       <li>
           <div class="table-content coin-title">KOR COIN</div>
           <div class="table-content coin-nickname">Nickname</div>
           <div class="table-content coin-address">asbsdfs12341sdfsf1212414</div>
       </li>
       <li>
           <div class="table-content coin-title">KOR COIN</div>
           <div class="table-content coin-nickname">Nickname</div>
           <div class="table-content coin-address">asbsdfs12341sdfsf1212414</div>
       </li>
    </ul>
    <button>신규지갑 등록하기</button>
    </aside>
    <aside id="bank-address">
       <h5>화폐잔액 및 계좌정보</h5>
       <ul class="bank-table" id="bank-balance">
           <li>
               <div class="table-subject">KRW(원화)잔액</div>
               <div class="table-content">123,0000 KRW</div>
               <div class="table-subject">KOR COIN 잔액</div>
               <div class="table-content">1.213412 KOR</div>
           </li>
           <li>
               <div class="table-subject">ETH 잔액</div>
               <div class="table-content">0.411512 ETH</div>
               <div class="table-subject">GAS 잔액</div>
               <div class="table-content">1.213412 GWEI</div>
           </li>
       </ul>
       <ul class="bank-table" id="bank-account">
           <li>
               <div class="table-subject">거래계좌정보</div>
               <div class="table-content">(기업은행) 1234-1234-1234123</div>
               <button>계좌 변경</button>
           </li>
       </ul>
       <button>KRW (원화) 출금 신청하기</button>
    </aside>
</section>
<!------------------------- contents --------------------------->
<?php include 'footer.php'; ?>