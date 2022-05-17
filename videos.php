<?php include 'layouts/header.php'; ?>
<section>
    <div class="allVideos pages">
        <div class="container pt-3">
            <div class="row">
                <div class="col-xl-8 right-side overflow-auto">
                    <h2 class="title">الفيديوهات</h2>
                    <div class="container">
                        <article id="videos-box" class="post social">
                            <?php
                                for ($i=1; $i <= 12; $i++) { 
                                ?>
                            <div class="big-video-box mLikePage xrow" data-val="58761" data-type="">
                                <div class="topProfile">
                                    <div class="topData">
                                        <a href="#9" title="سعد محمد على">
                                            <img class="userImage"
                                                src="https://login.btolat.com/v/u/9/profile//P320x320/0.png"
                                                alt="سعد محمد على">
                                        </a>
                                    </div>
                                    <div class="postDate">
                                        <a href="#" title="سعد محمد على">
                                            <span class="userName">سعد محمد على </span>
                                        </a>
                                        <span>منذ 13 ساعة </span>
                                    </div>
                                </div>
                                <h1 class="title">
                                    مراسم تتويج انتر ميلان بطلا لكاس ايطاليا
                                </h1>
                                <a href="video.php">
                                    <div class="imageOfPost">
                                        <img class="w-100" src="https://img.btolat.com/2022/5/12/video/58761/l.jpg"
                                            alt="مراسم تتويج انتر ميلان بطلا لكاس ايطاليا" style="">
                                    </div>
                                </a>
                            </div>

                            <?php } ?>

                            <?php
                                for ($i=1; $i <= 12; $i++) { 
                            ?>
                            <div class="big-video-box xrow" data-val="58682" data-type="">
                                <div class="topProfile">
                                    <div class="topData">
                                        <a href="#11" title="أنس أسامة">
                                            <img class="userImage"
                                                src="https://login.btolat.com/v/u/11/profile//P320x320/0.png"
                                                alt="أنس أسامة">
                                        </a>
                                    </div>
                                    <div class="postDate">
                                        <a href="#" title="أنس أسامة"><span class="userName">أنس أسامة </span></a>

                                        <span>منذ 4 يوم </span>
                                    </div>
                                </div>
                                <h1 class="title">
                                    ملخص مباراة ارسنال وليدز يونايتد (2-1) الدوري الانجليزي
                                </h1>
                                <a href="video.php">
                                    <div class="imageOfPost">
                                        <img class="w-100" src="https://img.btolat.com/2022/5/8/video/58682/l.jpg"
                                            alt="ملخص مباراة ارسنال وليدز يونايتد 2 1 الدوري الانجليزي">
                                    </div>
                                </a>
                            </div>
                            <?php } ?>
                        </article>
                    </div>
                </div>
                <div class="col-xl-4 d-none d-xl-block left-side">
                    <?php include 'side-section.php'; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'layouts/footer.php'; ?>