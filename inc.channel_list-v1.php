<div class="row row-cols-2 row-cols-sm-2 row-cols-md-3 row-cols-lg-6 g-2 g-lg-4">
    <?php for($i=0;$i<=39;$i++) {
				if(($i % 2) ==0){$video_id = 'VOmIplFAGeg';}
				elseif(($i % 3) ==0){$video_id = 'WM0Vw5datf8';}
				elseif(($i % 5) ==0){$video_id = 'AJE9j9JwJck';}
				elseif(($i % 7) ==0){$video_id = 'g0reB9P3fjw';}
				else{$video_id = 'qMkwuz0iXQg';}
				
				?>
    <div class="col">
        <div class="room"> <a href="#" class="select-channel" data-slide="<?php echo $i?>" data-room="<?php echo $i+1?>" data-charge="<?php echo number_format(rand(500000,3000000));?>" data-bank="국민은행 000-000-000<?php echo $i?>" data-video="<?php echo $video_id ?>">
            <div class="room__thumb"><img src="//source.unsplash.com/featured/300x<?php echo 200 +$i;?>" class="img-fluid d-block mx-auto"><span class="room__num"><?php echo $i+1;?></span></div>
            <span class="room__name">청담점 Room <?php echo $i+1;?></span> <span class="room__charge">주대 ￦300,000</span> </a></div>
    </div>
    <!-- / .col -->
    <?php } ?>
</div>
<!-- / .row -->
