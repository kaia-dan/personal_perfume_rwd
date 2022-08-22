<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
/*
if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}
  
 */
?>

<?
	if(!preg_match("/index\.php/",$_SERVER['PHP_SELF']) && $title_view != "no"){ // if문을 수정하지 마십시오.
?>

<!--서브페이지 컨텐츠 영역 닫음 (head.php 에서 생략했으면 여기서도 지워줘야됨) -->	
</div>
</section>

<?}?>

	<!-- footer 영역시작 ( 하단내용 붙여녛기 ) -->
	













	<!-- footer 영역끝-->

	

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
?>