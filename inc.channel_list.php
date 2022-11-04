<div class="row row-cols-2 row-cols-sm-2 row-cols-md-3 row-cols-lg-6 g-2 g-lg-4 gy-3">
    <?php for($i=0;$i<40;$i++) {
				$video_id ='JaIMSzE5yLA';
				if($i===0){$video_id = 'JaIMSzE5yLA';}
				if($i===1){$video_id = 'Zk_jQmAoAm0';}
				if($i===2){$video_id = '7HgJIAUtICU';}
				if($i===3){$video_id = '------';}
				?>
    <div class="col">
        <div class="room"> <a href="#" class="select-channel" data-slide="<?php echo $i?>">
            <div class="room__thumb"><img src="//img.youtube.com/vi/<?php echo $video_id;?>/maxresdefault.jpg" class="img-fluid d-block mx-auto"><span class="room__num"><?php echo $i+1;?></span></div>
            <span class="room__name">청담점 Room <?php echo $i+1;?></span> <span class="room__charge">선물 ￦300,000</span> </a></div>
    </div>
    <!-- / .col -->
    <?php } ?>
</div>
<!-- / .row -->
