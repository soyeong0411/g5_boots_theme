<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/shop.tail.php');
    return;
}
?>
    <? include_once(G5_THEME_PATH."/skin/nav/mysubmenu.php") ?>
</div>
<!-- } 콘텐츠 끝 -->

<hr>

<!-- 하단 시작 { -->
<footer>
    <div class="f_top">
        <div class="footer container">
            <div class="navBottom">
                <ul class="bottom">
                    <li><a href="#">로그인</a></li>
                    <li><a href="#">이용약관</a></li>
                    <li><a href="#">개인정보처리방침</a></li>
                    <li><a href="#">영상정보처리기기 운영방침</a></li>
                </ul>
            </div>
            <div class="navIcon">
                <ul class="icon">
                    <li><a href="#"><img src="<? echo G5_THEME_IMG_URL?>/blog.png" alt=""></a></li>
                    <li><a href="#"><img src="<? echo G5_THEME_IMG_URL?>/Insta.png" alt=""></a></li>
                    <li><a href="#"><img src="<? echo G5_THEME_IMG_URL?>/youtube.png" alt=""></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="f_bottom container">
        <p><span>사업자등록번호</span> 101-81-92326 <span>대표이사</span> 화찬권 <span>통신판매업신고번호</span></p>
        <p>제 01-985호 <span>TEL</span> 1670-7978 <span>FAX</span></p>
        <p>02-2260-4410 <span>E-mail</span> ybmky@ybm.co.kr <span>서울특별시 종로구 창경궁로 112-7 (주)YBM교육</span></p>
        <p>Copyright © ㈜YBM교육. All rights reserved.</p> 
    </div>
</footer>

<!-- <div class="bg-dark">
    <div class="container py-5 text-center text-white">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta, dignissimos?
    </div>
</div> -->

<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");