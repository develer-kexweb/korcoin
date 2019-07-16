<?php include 'header.php'; ?>
<!------------------------- sub header --------------------------->
<div class="page-title-bg">
    <div class="page-title page-width">
        <p>KORW Mall</p>
        <h3>포인트 지갑</h3>
    </div>
</div>
<!------------------------- contents --------------------------->
<section class="sub-contents page-width">

    <aside id="bank-address">
       <h5>포인트잔액 및 계좌정보</h5>
       <p>KORW Mall 에서 사용되는 포인트를 충전하실 수 있습니다.<br>
       KORW 포인트는 정회원으로 인증을 완료해야만 사용이 가능합니다.<br>
       포인트 잔액이 정상적으로 조회가 되지 않을경우 문의게시판을 통해 문의해 주시기 바랍니다.</p>
       <ul class="bank-table" id="bank-account">
            <li>
               <div class="table-subject">포인트 잔액</div>
               <div class="table-content">123,0000 Point</div>
               <button>포인트 충전</button>
           </li>
           <li>
               <div class="table-subject">출금계좌정보</div>
               <div class="table-content">(기업은행) 1234-1234-1234123</div>
               <button>계좌 변경</button>
           </li>
       </ul>
       <button>포인트 환급 신청하기</button>
    </aside>
</section>
<!------------------------- contents --------------------------->
<?php include 'footer.php'; ?>