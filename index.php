<?php include('head.php'); ?>
<div class="wrapper">
    <div class="logo">
        <h1>
            <figure><a href="/"><img src="<?php echo $image_dir ?>/logo.png" alt="술친닷컴" class="img-fluid"></a>
                <figcaption>soolchin9</figcaption>
            </figure>
        </h1>
    </div>
    <div class="ranking">
        <h2>Top<em>6</em></h2>
        <ul>
            <?php
for($i=0;$i<6;$i++) {?>
            <li class="ranking__item"> <a href="#" class="select-channel" data-slide="<?php echo $i?>" data-room="<?php echo $i+1?>" data-charge="<?php echo number_format(rand(500000,3000000));?>" data-bank="국민은행 000-000-000<?php echo $i?>" data-video="WMhDOZOp1Fc"> <span class="ranking__num"><?php echo $i+1;?></span> <img src="//picsum.photos/300?random=<?php echo $i+1;?>" class="img-fluid d-block mx-auto" > <span class="ranking__info"> <i class="bi bi-heart-fill"></i> 999 <i class="bi bi-eye-fill"></i> 999 </span> </a> </li>
            <?php }?>
        </ul>
    </div>
    <main>
    <nav class="category">
        <ul class="category__list">
            <li><a href="#">청담점</a></li>
            <li data-state="is-onair"><a href="#">논현점</a></li>
            <li><a href="#">역삼점</a></li>
            <li><a href="#">강남점</a></li>
            <li><a href="#">청담점</a></li>
            <li><a href="#">논현점</a></li>
            <li><a href="#">역삼점</a></li>
            <li><a href="#">강남점</a></li>
            <li><a href="#">청담점</a></li>
            <li><a href="#">논현점</a></li>
            <li><a href="#">역삼점</a></li>
            <li><a href="#">강남점</a></li>
            <li><a href="#">청담점</a></li>
            <li><a href="#">논현점</a></li>
            <li><a href="#">역삼점</a></li>
            <li><a href="#">강남점</a></li>
            <li><a href="#">청담점</a></li>
            <li><a href="#">논현점</a></li>
            <li><a href="#">역삼점</a></li>
            <li><a href="#">강남점</a></li>
        </ul>
    </nav>
    <section class="vid">
        <section id="splash">
            <div class="item youtube">
                <iframe class="embed-player slide-media" width="980" height="520" src="https://www.youtube.com/embed/waVe1UiGgt4?enablejsapi=1&controls=2&fs=0&iv_load_policy=3&rel=0&showinfo=0&loop=1&playlist=waVe1UiGgt4&start=1" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="item youtube">
                <iframe class="embed-player slide-media" width="980" height="520" src="https://www.youtube.com/embed/Zk_jQmAoAm0?enablejsapi=1&controls=0&fs=0&iv_load_policy=3&rel=0&showinfo=0&loop=1&playlist=Zk_jQmAoAm0&start=1" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="item youtube">
                <iframe class="embed-player slide-media" width="980" height="520" src="https://www.youtube.com/embed/7HgJIAUtICU?enablejsapi=1&controls=0&fs=0&iv_load_policy=3&rel=0&showinfo=0&loop=1&playlist=7HgJIAUtICU&start=1" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="item youtube">
                <iframe class="embed-player slide-media" width="980" height="520" src="https://www.youtube.com/embed/4NRXx6U8ABQ?enablejsapi=1&controls=0&fs=0&iv_load_policy=3&rel=0&showinfo=0&loop=1&playlist=4NRXx6U8ABQ&start=1" frameborder="0" allowfullscreen></iframe>
            </div>
        </section>
    </section>
    <!-- / .vid -->
    <section class="channel">
        <div class="container-fluid">
            <div class="channel__control">
                <button type="button" class="btn btn-primary expand-channel" data-condition="expand">전체보기 <i class="bi bi-grid-fill"></i></button>
                <button type="button" class="btn btn-primary hide-channel" data-condition="hide">기본보기 <i class="bi bi-arrow-down-square-fill"></i></button>
            </div>
            <?php include('inc.channel_list.php'); //유튜브 플레이어 control?>
        </div>
        <!-- / .container-fluid -->
    </section>
    </main>
</div>
<!-- / .wrapper -->
<?php include('tail.php'); ?>
