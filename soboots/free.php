<?php
include_once('./_common.php');
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가


$co_id = "location";
$menuNum = "2"; // 수정 부분
$menuNum2 = "2"; // 수정 부분
$g5['title'] = "무료체험";

include_once(G5_THEME_PATH.'/head.php');
?>
<script>
$(document).ready(function(){
   $('#snb > li:nth-child(<?php echo $menuNum; ?>)').addClass("co_id<?php echo $co_id; ?> active");
   $('#snb > li:nth-child(<?php echo $menuNum; ?>) > ul > li:nth-child(<?php echo $menuNum2; ?>)').addClass("snb2d_co_id<?php echo $co_id; ?>  active");
   });
</script>

<img src="<? echo G5_THEME_IMG_URL ?>/sub02_01.JPG" alt="" class="d-block mx-auto">


<?php
include_once(G5_THEME_PATH.'/tail.php');