<?php include 'layouts/header.php'; ?>
<section>

    <div class="oneViedo pages">
        <div class="container  pt-3">
            <div class="row">
                <div class="col-xl-8 right-side overflow-auto">
                    <div class="container">

                        <article id="videos-box" class="post social">
                            <div class="big-video-box">
                                <div class="topProfile">
                                    <div class="topData">
                                        <a href="#9" title="سعد محمد على">
                                            <img class="userImage"
                                                src="https://login.btolat.com/v/u/9/profile//P320x320/0.png"
                                                alt="سعد محمد على">
                                        </a>
                                    </div>
                                    <div class="postDate">
                                        <a href="#" title="سعد محمد على"><span class="userName">سعد محمد على </span></a>
                                        <span>منذ الخميس , 12 مايو 2022 ,12:02 ص </span>
                                    </div>
                                </div>
                                <h1 class="title">
                                    مراسم تتويج انتر ميلان بطلا لكاس ايطاليا
                                </h1>
                                <div class="imageOfPost">
                                    <div>
                                        <iframe class="contentVencher" width="100%" height="421px" frameborder="0"
                                            scrolling="no" allowfullscreen="true" webkitallowfullscreen="true"
                                            mozallowfullscreen="true"
                                            src="https://btoooatx2.stad90.com/embed/cBzlvDTtqVq9f"></iframe>
                                    </div>
                                    <div>
                                        <p class="alert-warning p-3 text-right" style="">
                                            <strong>إخلاء مسئولية: </strong>
                                            هذا المحتوى لم يتم انشائه او استضافته بواسطة موقع يلا جول وأي مسئولية
                                            قانونية
                                            تقع
                                            على
                                            عاتق الطرف
                                            الثالث
                                        </p>
                                    </div>
                                    <div id="dtAdstripVideo" class="adStrip">
                                        <div class="topAdStrip">
                                            <div id="div-gpt-ad-1561379854444-0"
                                                data-google-query-id="CPD6mIH12fcCFQ7qGwod1tkBeA"
                                                style="display: none;">
                                                <script>
                                                googletag.cmd.push(function() {
                                                    googletag.display('div-gpt-ad-1561379854444-0');
                                                });
                                                </script>
                                                <div id="google_ads_iframe_/168615412/Btolat-desktop-strip-video_0__container__"
                                                    style="border: 0pt none;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tags">
                                        <ul>
                                            <?php
                                                for ($i=1; $i <= 12; $i++) { 
                                                ?>
                                            <li>
                                                <h3>
                                                    <a href="#">
                                                        مباراة يوفنتوس اليوم
                                                    </a>
                                                </h3>
                                            </li>
                                            <?php }?>
                                        </ul>
                                    </div>
                                </div>
                                <hr>
                                <div class="moreVideosBox">
                                    <div class="moreVideosTitle">فيديوهات متعلقة</div>
                                    <div class="container videos">

                                        <div class="row ">
                                            <?php
                                            for ($i=1; $i <= 6; $i++) { 
                                        ?>
                                            <div class="col-md-4 videos col-sm-12">
                                                <div class="big-video-box xrow">
                                                    <div class="topProfile">
                                                        <div class="topData">
                                                            <a href="#" title="ابراهيم السعداوى">
                                                                <img class="userImage"
                                                                    src="https://login.btolat.com/v/u/7/profile//P320x320/0.png"
                                                                    alt="ابراهيم السعداوى">
                                                            </a>
                                                        </div>
                                                        <div class="postDate">
                                                            <a href="#" title="ابراهيم السعداوى"><span
                                                                    class="userName">ابراهيم
                                                                    السعداوى </span></a>
                                                            <span>منذ 14 ساعة </span>
                                                        </div>
                                                    </div>
                                                    <h1 class="title">
                                                        ملخص مباراة انتر ميلان ويوفنتوس (4-2) نهائي كاس ايطاليا
                                                    </h1>
                                                    <a href="video.php">
                                                        <div class="imageOfPost">
                                                            <img src="https://img.btolat.com/2022/5/11/video/58760/l.jpg"
                                                                class="w-100"
                                                                alt="ملخص مباراة انتر ميلان ويوفنتوس 4 2 نهائي كاس ايطاليا"
                                                                style="">
                                                        </div>
                                                    </a>

                                                </div>
                                            </div>
                                            <?php }?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <div class="box fbComm bg-white">
                            <h2 class="title text-end me-3 pt-3">التعليقات</h2>
                            <?php include './comments.php'; ?>
                        </div>
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