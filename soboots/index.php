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
    .visual{
        height: 700.198px; 
        width: 1920px;
        overflow: hidden;
        user-select: none;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .cont{display:flex;}
    .con_img{
        width: 800px;
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
        margin: 100px 0;
    }
    .top_img{
        position: absolute;right: 70px;top: -60px;
    }
    .bottom_img{
        position: absolute;right: 30px;bottom: -60px;
    }
    .left_img1{
        position: absolute;left: 30px;bottom: -50px;
        z-index: 1;
    }
    .left_img2{
        position: absolute;left: 60px;bottom: 50px;
    }
    .left_img2 img{
        width: 180px;height: 180px;
        border-radius:15px;
        box-shadow:2px 1px 10px 1px rgba(0,0,0,0.1);
    }
</style>
<div class="visual">
    <video src="https://ybmlemon.com/img/web/HOME/main/ybmlemon.mp4" autoplay muted></video>
</div>
<div class="container cont">
    <div class="con_img">
        <img src="<? echo G5_THEME_IMG_URL?>/main_visual_01.png" alt="">
        <div class="top_img">
            <img src="<? echo G5_THEME_IMG_URL?>/main_visual_01_item01.png" alt="">
        </div>
        <div class="bottom_img">
            <img src="<? echo G5_THEME_IMG_URL?>/main_visual_01_item02.png" alt="">
        </div>
        <div class="left_img1">
            <img src="<? echo G5_THEME_IMG_URL?>/main_visual_01_item03.png" alt="">
        </div>
        <div class="left_img2">
            <img src="<? echo G5_THEME_IMG_URL?>/main_ani.gif" alt="">
        </div>   
    </div>
    <div class="con_txt">
        <h2><a href="#">YBM 레몬만의<br>전용뷰어로 수업</a></h2>
        <p>화상 회의실 같은 딱딱한 뷰어가 아닙니다.<br>
            YBM교육이 개발한 <span>화상수업 전용 뷰어</span>입니다.</p>
    </div>
</div>

<?php
include_once(G5_THEME_PATH.'/tail.php');