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


<div class="mView">
    <video src="https://ybmlemon.com/img/web/HOME/main/ybmlemon.mp4" autoplay muted></video>
</div>

<style>
    /* .cont{height: 100px;background: skyblue;} */
    .mView{
        width: 100%;padding-top: 36%;background: #000;
        position: relative;overflow:hidden;
    }
    .mView video{position: absolute;width: 100%;left: 50%;top: 50%;transform:translate(-50%,-50%)}
    /* .visual{
        height: 700.198px; 
        width: 1920px;
        overflow: hidden;
        user-select: none;
        display: flex;
        justify-content: center;
        align-items: center;
    } */
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
    .con_txt{
        display:flex;flex-direction:column;justify-content:center
    }
    .con_txt h2,.sec02_con h2,.sec03_txt h2,.sec04_txt h2{
        font-size:36px;font-weight:bold;}
    .con_txt p,.sec02_con p,.sec03_txt p,.sec04_txt p{margin-top: 30px;font-size:19px;}
    .con_txt span,.sec02_txt span,.sec03_txt span{color:green;font-weight:bold}
    .sec02{
        background-image: url(<? echo G5_THEME_IMG_URL?>/main_visual_bg01.png);
        background-repeat: no-repeat;
        background-position: center;
        padding: 100px 0;
        position: relative;
        width: 100%;
        border-radius:30px;
        margin-bottom: 80px;
    }
    .sec02_txt{
        margin-left: 60px;
    }
    .sec02 img{
        width: 400px;height: 265px;
        position: absolute;right: 60px;top: 60px;
    }
    .sec03_con{
        display:flex;
        justify-content:space-around;
        align-items:center;
        position: relative;
        padding: 50px 0;
        }
    .sec03_con img{
        width: 400px;height: 315px;
    }
    .r_img{
        position: absolute;
        bottom: 30px;left: 400px;
    }
    .r_img img{
        width: 200px;height: 200px;
        animation: rotate_image 10s linear infinite;
        transform-origin: 50% 50%;
    }
    @keyframes rotate_image{
	100% {transform: rotate(360deg);}
    }

    .sec04{
        background: #cef5f5;
        background-image: url(<? echo G5_THEME_IMG_URL?>/main_visual_bg02.png);
        width: 100%;height: 500px;border-radius:30px;
        display:flex;position: relative;
    }
    .sec04 .img1{
        width: 641px;height: 394px;
        position: absolute;right: 70px;bottom: 0;
    }
    .sec04 .img2{
        width: 398px;height: 253px;
        position: absolute;left: 150px;bottom: -65px;
    }
    .sec04_txt{
        position: absolute;left: 90px;top: 100px;
    }
</style>
<!-- <div class="visual">
    <video src="https://ybmlemon.com/img/web/HOME/main/ybmlemon.mp4" autoplay muted></video>
</div> -->
<div class="container cont">
    <div class="con_img">
        <img src="<? echo G5_THEME_IMG_URL?>/main_visual_01.png" alt="" data-aos="zoom-in" data-aos-duration="800">
        <div class="top_img">
            <img src="<? echo G5_THEME_IMG_URL?>/main_visual_01_item01.png" alt="" data-aos="fade-left" data-aos-duration="800">
        </div>
        <div class="bottom_img">
            <img src="<? echo G5_THEME_IMG_URL?>/main_visual_01_item02.png" alt="" data-aos="fade-left" data-aos-duration="800">
        </div>
        <div class="left_img1">
            <img src="<? echo G5_THEME_IMG_URL?>/main_visual_01_item03.png" alt="" data-aos="fade-right" data-aos-duration="800">
        </div>
        <div class="left_img2">
            <img src="<? echo G5_THEME_IMG_URL?>/main_ani.gif" alt="" data-aos="fade-right" data-aos-duration="800">
        </div>   
    </div>
    <div class="con_txt" data-aos="fade-left" data-aos-duration="800">
        <h2><a href="#">YBM 레몬만의<br>전용뷰어로 수업</a></h2>
        <p>화상 회의실 같은 딱딱한 뷰어가 아닙니다.<br>
            YBM교육이 개발한 <span>화상수업 전용 뷰어</span>입니다.</p>
    </div>
</div>
    <div class="container sec02">
        <div class="sec02_con">
            <div class="sec02_txt" data-aos="fade-right" data-aos-duration="800">
                <h2><a href="#">화상수업을 위해 개발된<br>e-Classbook</a></h2>
                <p>오프라인 교재를 그대로 올려서 수업하지 않습니다.<br>
                온라인 수업에 맞춰 개발된 <span>온라인 전용 e-Classbook</span>입니다.</p>
            </div>
            <img src="<? echo G5_THEME_IMG_URL?>/main_visual_02.png" alt="" data-aos="zoom-in" data-aos-duration="800">
        </div>
    </div>
    <div class="sec03 container">
        <div class="sec03_con">
            <img src="<? echo G5_THEME_IMG_URL?>/main_visual_03.png" alt="" data-aos="zoom-in" data-aos-duration="800">
            <div class="sec03_txt" data-aos="fade-right" data-aos-duration="800">
                <h2><a href="#">지루할 틈이 없는 수업 진행</a></h2>
                <p><span>온라인 교구와 액티비티</span>로 흥미있는 수업이 진행됩니다.<br>
                선생님과 함께 직접 수업에 참여합니다.</p>
            </div>
            <div class="r_img">
                <img src="<? echo G5_THEME_IMG_URL?>/img_6.png" alt="">
            </div>
        </div>
    </div>
    <div class="sec04 container" >
        <div class="sec04_txt" data-aos="fade-right" data-aos-duration="800">
            <h2><a href="#">외국인 선생님 +<br>한국인 선생님이 함께</a></h2>
            <p>외국인 선생님과 수업할 때, 한국인 선생님도<br>
            <span>옆에 함께</span>합니다. 더 이상 영어가 두렵지 않습니다.</p>
        </div>
        <img src="<? echo G5_THEME_IMG_URL?>/main_visual_04.png" alt="" class="img1" data-aos="zoom-in" data-aos-duration="800">
        <img src="<? echo G5_THEME_IMG_URL?>/main_visual_char.png" alt="" class="img2" data-aos="fade-up" data-aos-duration="800">
        
    </div>
<script>
     AOS.init();
</script>

<?php
include_once(G5_THEME_PATH.'/tail.php');