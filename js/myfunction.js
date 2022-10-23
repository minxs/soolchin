/* 비디오 슬라이더 */
var slideWrapper = $("#splash"),
    iframes = slideWrapper.find('iframe')

// 유튜브 API
function postMessageToPlayer(player, command){
  if (player == null || command == null) return;
  player.contentWindow.postMessage(JSON.stringify(command), "*");
}

// 슬라이드 변경 될때 - 현재 동영상 멈추고, 다음 동영상 재생
function playPauseVideo(slick, control){
  var currentSlide, slideType, startTime, player, video;
  currentSlide = slick.find(".slick-current");
  slideType = currentSlide.attr("class").split(" ")[1];
  player = currentSlide.find("iframe").get(0);
  startTime = currentSlide.data("video-start");

// 슬라이드변경 타입
  if (slideType === "youtube") {
    switch (control) {
      case "play":
        /*postMessageToPlayer(player, {
          "event": "command",
          "func": "mute"
        });*/
        postMessageToPlayer(player, {
          "event": "command",
          "func": "playVideo"
        });
        break;
      case "pause":
        postMessageToPlayer(player, {
          "event": "command",
          "func": "pauseVideo"
        });
        break;
    }
  }
}




$(function() {
  // Initialize
  slideWrapper.on("init", function(slick){

$('.slick-current').next('.slick-slide').addClass('slide-next');
	$('.slick-current').prev('.slick-slide').addClass('slide-prev');
slick = $(slick.currentTarget);
    setTimeout(function(){
      playPauseVideo(slick,"play");
    }, 1000);
  });
  slideWrapper.on("beforeChange", function(event, slick) {
    slick = $(slick.$slider);
    playPauseVideo(slick,"pause");
  });
  slideWrapper.on("afterChange", function(event, slick) {
    slick = $(slick.$slider);
    playPauseVideo(slick,"play");
	$('.slick-slide').removeClass('slide-next','slide-prev')
	$('.slick-current').next('.slick-slide').addClass('slide-next');
	$('.slick-current').prev('.slick-slide').addClass('slide-prev');
});


  //start the slider
  slideWrapper.slick({
	slidesToShow: 1,
  slidesToScroll: 1,
  adaptiveHeight:true,
    lazyLoad:"progressive",
    speed:600,
    arrows:true,
    dots:true,
	centerMode: true,
	centerPadding: "30%",
    cssEase:"linear",
	responsive: [
					{  
						breakpoint: 992,
						settings: {
							centerMode: false
						} 
					}
	]				
  });
});

/* / 비디오 슬라이더 */








// 카테고리 영역 - 영업점의 개수가 많은 경우
$check_category = function() {
   var category_width = $('.category').width();
   var category_inner_width = $('.category__list')[0].scrollWidth;
   if(category_width < category_inner_width){
	   $('.category').addClass('over');
	   }else{
		  $('.category').removeClass('over'); 
		   }
};

// 채널 영역, 첫번째 열의 높이
$channel_height = function() {
var channel_height =  $('.channel .col').first().height();
};


$(document).ready(function() {

$check_category();
$channel_height();


// 채널보기
$('.channel__control button').click(function() {
  var condition = $(this).data('condition');
  $('.channel').attr('data-state', 'is-' + condition).animate({
    scrollTop: 0
  }, "fast");
  if (condition == 'expand') {
    $('.vid').addClass('is-covered');
  } else {
    $('.vid').removeClass('is-covered');
  }
});


/*
// 유튜브 플레이어 src 바꿈
$('.select-channel').click(function(e){  
     e.preventDefault();
	 var room_id = $(this).data('room');
	 var vid_id = $(this).data('video');
	 var room_charge = $(this).data('charge');
	 var room_bank = $(this).data('bank');
	 $('.vid iframe').attr('src', '//www.youtube.com/embed/?playlist='+vid_id+'&rel=0&loop=1&autoplay=1&vq=highres' );
	 $('.channel').attr('data-state','is-minimize');
	 $('.vid').removeClass('is-covered');
	 $('#room_id').text(room_id);	 
	 $('#room_charge').text(room_charge);
	 $('#room_bank').text(room_bank);
}); 
*/

// 채널 선택하면 비디오 슬라이더 이동 
$('.select-channel').click(function(e){  
     e.preventDefault();
	 $('.channel').attr('data-state','is-hide');
	 $('.vid').removeClass('is-covered');
	 var slideNo = $(this).data('slide');
	 $('#splash').slick('slickGoTo', slideNo);
}); 

});// /doc ready







$( window ).resize( function() {
	$check_category();
	$channel_height();
} );

// 카테고리 영역 - 마우스휠 스크롤하면 좌우로 스크롤
const scrollContainer = document.querySelector(".category");
scrollContainer.addEventListener("wheel", (evt) => {
    evt.preventDefault();
    scrollContainer.scrollLeft += evt.deltaY;
});

