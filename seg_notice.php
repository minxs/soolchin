<?php include('head.php'); ?>
<div class="seg">
    <div id="notice"><span class="title">공지</span>
        <div class="notice__slider">
            <div>신데렐라는 어려서 부모님을 잃고요 계모와 언니들에게 72가지의 살인기술을 전수받았다.</div>
            <div>생전의 네 양친처럼 자상하고 행복하게 해줄수는 없으니 네 몸을 지키는 방법 이라도 알려주겠다.</div>
            <div>우리가 오늘밤 열리는 무도회에서 돌아 오지 않는다면 왕자에게 패해 처형당한 것으로 알거라, 신데렐라</div>
        </div><!-- / .notice__slider -->
    </div><!-- / #notice -->
</div><!-- / .seg -->
<script>
$(document).ready(function() {
$('.notice__slider').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: false,
		arrows: false,
		autoplay: true,
		speed: 700,
		autoplaySpeed: 3000
	});
});
</script>
<?php include('tail.php'); ?>
