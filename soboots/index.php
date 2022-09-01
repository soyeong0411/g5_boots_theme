<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>


<style>
    /* .cont{height: 100px;background: skyblue;} */

    /* .visual{
        height: 700.198px; 
        width: 1920px;
        overflow: hidden;
        user-select: none;
        display: flex;
        justify-content: center;
        align-items: center;
    } */
 
</style>

<div class="mView">
    <video src="https://ybmlemon.com/img/web/HOME/main/ybmlemon.mp4" autoplay muted></video>
</div>
<div class="sec01 container">
    <div class="row">
        <div class="sec01_img col-md-6">
            <img src="<? echo G5_THEME_IMG_URL?>/main_visual_01.png" alt="" data-aos="zoom-in" data-aos-duration="800" class="img-fluid">
            <img src="<? echo G5_THEME_IMG_URL?>/main_visual_01_item01.png" alt="" class="top_img" data-aos="fade-left" data-aos-duration="800">
            <img src="<? echo G5_THEME_IMG_URL?>/main_visual_01_item02.png" alt="" class="bottom_img" data-aos="fade-left" data-aos-duration="800">
            <img src="<? echo G5_THEME_IMG_URL?>/main_visual_01_item03.png" alt="" class="left_img1" data-aos="fade-right" data-aos-duration="800">
            <img src="<? echo G5_THEME_IMG_URL?>/main_ani.gif" alt="" class="left_img2" data-aos="fade-right" data-aos-duration="800">
        </div>
        <div class="col-md-6 d-flex justify-content-center align-items-center">
            <div class="sec01_txt" data-aos="fade-left" data-aos-duration="800">
                <div class="sec01_wrap">
                    <h2><a href="#">YBM 레몬만의<br>전용뷰어로 수업</a></h2>
                    <p>화상 회의실 같은 딱딱한 뷰어가 아닙니다.<br>
                        YBM교육이 개발한 <span>화상수업 전용 뷰어</span>입니다.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 틀린 것! ->> <div class="sec02 container" style="background-image: url(<? echo G5_THEME_IMG_URL?>/main_visual_bg01.png)";> -->
<!-- container안에 배경이미지를 넣으면 당연 1400px 사이즈에 맞게 반응형이 됨, 그래서 밖에다가 bgi 줄 것 -->
<div class="sec02" style="background-image: url(<? echo G5_THEME_IMG_URL?>/main_visual_bg01.png)">
    <div class="sec02_w container">
        <div class="row">
            <div class="sec02_txt col-md-6 d-flex justify-content-center align-items-center" data-aos="fade-right" data-aos-duration="800">
                <div class="sec02_wrap"> <!-- wrap으로 감싸서 한꺼번에 flex로 위치 조정 -->
                    <h2><a href="#">화상수업을 위해 개발된<br>e-Classbook</a></h2>
                    <p>오프라인 교재를 그대로 올려서 수업하지 않습니다.<br>
                    온라인 수업에 맞춰 개발된 <span>온라인 전용 e-Classbook</span>입니다.</p>
                </div>
            </div>
            <div class="sec02_img col-md-6 p-0 p-md-5">
                <img src="<? echo G5_THEME_IMG_URL?>/main_visual_02.png" alt="" data-aos="zoom-in" data-aos-duration="800">
            </div>
        </div>
    </div>
</div>
<div class="sec03 container">
    <div class="row">
        <div class="sec03_img col-md-6">
            <img src="<? echo G5_THEME_IMG_URL?>/main_visual_03.png" alt="" data-aos="zoom-in" data-aos-duration="800" class="bg_img">
            <img src="<? echo G5_THEME_IMG_URL?>/img_6.png" alt="" class="rot_img">
        </div>
        <div class="sec03_txt col-md-6 d-flex justify-content-center align-items-center">
            <div class="sec03_wrap" data-aos="fade-right" data-aos-duration="800">
                <h2><a href="#">지루할 틈이 없는 수업 진행</a></h2>
                <p><span>온라인 교구와 액티비티</span>로 흥미있는 수업이 진행됩니다.<br>
                선생님과 함께 직접 수업에 참여합니다.</p>
            </div>
        </div>
    </div>
</div>
<div class="sec04 container" style="background-image: url(<? echo G5_THEME_IMG_URL?>/main_visual_bg02.png)";>
    <div class="sec04_txt" data-aos="fade-right" data-aos-duration="800">
        <h2><a href="#">외국인 선생님 +<br>한국인 선생님이 함께</a></h2>
        <p>외국인 선생님과 수업할 때, 한국인 선생님도<br>
        <span>옆에 함께</span>합니다. 더 이상 영어가 두렵지 않습니다.</p>
    </div>
    <img src="<? echo G5_THEME_IMG_URL?>/main_visual_04.png" alt="" class="img1" data-aos="zoom-in" data-aos-duration="800">
    <img src="<? echo G5_THEME_IMG_URL?>/main_visual_char.png" alt="" class="img2" data-aos="fade-up" data-aos-duration="800">
</div>
<div class="sec05 container">
    <img src="<? echo G5_THEME_IMG_URL?>/main_visual_05.png" alt="" data-aos="zoom-in" data-aos-duration="800">
    <div class="sec05_txt" data-aos="fade-left" data-aos-duration="800">
        <h2><a href="#">Main Class 자신감 UP<br>예습도<img src="<? echo G5_THEME_IMG_URL?>/online.png" alt=""> 
        복습도<img src="<? echo G5_THEME_IMG_URL?>/online.png" alt="">특별한 학습시스템</a></h2>
        <p>본 수업 전/후 예복습 시스템과 숙제로 효과적인 확인학습을<br>
        진행합니다. 혼자서도 척척! 자기주도 학습이 가능합니다.</p>
    </div>
</div>
<script>
     AOS.init();
</script>

<?php
include_once(G5_THEME_PATH.'/tail.php');