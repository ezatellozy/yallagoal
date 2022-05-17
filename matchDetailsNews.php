<?php include 'layouts/header.php'; ?>
<section>
    <div class="container-fluid match-details">
        <div class="container">
            <div class="row mt-3 matchCenterTable" data-id="3017089">
                <div class="col">
                    <div class="row quickView">
                        <div class="col teamA text-start">
                            <div class="mb-2">
                                <a href="/team/11867/empoli" title="إمبولي">
                                    <img src="https://img.btolat.com/teamslogo/11867.png" class="teamImage"
                                        alt="إمبولي">
                                    <span class="teamNameX text-white"> إمبولي </span>
                                </a>
                            </div>
                            <div class=" getGoalsTeamA">
                                <div class="goals">
                                    <div class="getGoal">
                                        <span><img src="./assets/images/goalBall.png" alt="هدف"></span>
                                        <span class="goalTime clr2">31'</span>
                                        <span class="goalPlayer">باتريك كوتروني</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col text-center">
                            <div class="row">
                                <div class="col-3">
                                    <h2 class="font-weight-bold teamAScore">1 </h2>
                                </div>
                                <div class="col-6">
                                    <h3 class="clr2 font-weight-bold matchStatusAr">إنتهت</h3>
                                </div>
                                <div class="col-3">
                                    <h2 class="font-weight-bold teamBScore">1 </h2>
                                </div>
                            </div>
                        </div>
                        <div class="col teamB text-end">
                            <div class="mb-2">
                                <a href="/team/12002/salernitana" title="ساليرنيتانا">
                                    <img src="https://img.btolat.com/teamslogo/12002.png" class="teamImage"
                                        alt="ساليرنيتانا">
                                    <span class="teamNameX text-white"> ساليرنيتانا </span>
                                </a>
                            </div>
                            <div class="getGoalsTeamB">
                                <div class="goals">
                                    <div class="getGoal">
                                        <span><img src="./assets/images/goalBall.png" alt="هدف"></span>
                                        <span class="goalTime clr2">83'</span>
                                        <span class="goalPlayer">دييجو بيروتي</span>
                                    </div>
                                    <div class="getGoal">
                                        <span><img src="./assets/images/goalBall.png" alt="هدف"></span>
                                        <span class="goalTime clr2">76'</span>
                                        <span class="goalPlayer">فيدريكو بونازولي</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row  position-relative">
                        <div class="col matchTimer">
                            <div class="timeNow bg2">
                                <span class="bg2"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row bg1 lastNewsMatchCenter">
                <div class="bobo">
                    <div class="lam">
                        <img src="./assets/images/event.png" alt="">
                        <span>السبت , 14 مايو 2022</span>
                    </div>
                    <div class="lam">
                        <img src="./assets/images/stopwatch.png" alt="">
                        <span>03:00 م</span>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row page-content mt-3 pages position-relative">
                    <div class="col-xl-8 right-side allNews overflow-auto">
                        <div class="container">

                            <div class="rightBoxes" style="position: inherit; top: inherit;">
                                <div class="row">
                                    <div class="col rshandler">
                                        <div class="row tabsLinks shadow-sm bg-white">
                                            <div class="col"><a href="matchDetails.php">معلومات</a>
                                            </div>
                                            <div class="col"><a href="matchDetailsLineup.php">التشكيل</a>
                                            </div>
                                            <div class="col"><a href="matchDetailsEvents.php">احداث</a></div>
                                            <div class="col"><a href="matchDetailsStatistics.php">احصائيات</a></div>
                                            <div class="col"><a class="active" href="matchDetailsNews.php">اخبار و
                                                    فيديو</a>
                                            </div>
                                        </div>
                                        <div class="row tabBody">
                                            <div class="row m-0 news videos">
                                                <?php
                                for ($i=1; $i <= 3; $i++) { 
                                ?>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="card video">
                                                        <a href="video.php">
                                                            <div class="card-header position-relative p-0">
                                                                <img src="./assets/images/video1.jpg" alt=""
                                                                    class="card-img-top">
                                                            </div>
                                                            <div class="card-body p-0">
                                                                <h3 class="card-title">
                                                                    ملخص مباراة ليفربول واستون فيلا 2 1 الدوري الانجليزي
                                                                </h3>
                                                            </div>
                                                            <span class="icon">
                                                                <img class="img-fluid"
                                                                    src="./assets/images/play-arrow.png"
                                                                    alt=" ملخص مباراة ليفربول واستون فيلا 2 1 الدوري الانجليزي">
                                                            </span>
                                                        </a>
                                                        <a href="#" class="categoryTag">الدوري المصري</a>
                                                    </div>
                                                </div>
                                                <div class="new col-sm-6 col-lg-4">
                                                    <div class="card news">
                                                        <a href="singleNews.php">
                                                            <div class="card-header position-relative p-0">
                                                                <img src="./assets/images/medium.jpg" alt="yallagoal"
                                                                    class="card-img-top">
                                                            </div>
                                                            <div class="card-body p-0">
                                                                <h3 class="card-title">
                                                                    مرتضى منصور: تنبأت بخسارة الزمالك أمام إنبي.. ولن
                                                                    نلعب
                                                                    في استاد القاهرة مرة
                                                                    أخرى
                                                                </h3>
                                                            </div>
                                                        </a>
                                                        <a href="#" class="categoryTag">الدوري المصري</a>
                                                        <div class="newsFooter"> <span class="time">منذ 11 ساعة </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box fbComm bg-white">
                                        <h2 class="title text-end">التعليقات</h2>
                                        <?php include './comments.php'; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 d-none d-xl-block left-side">
                        <div class="boxes">
                            <div class="box ads">
                                <img src="./assets/images/ads.jpg" alt="" class="img-fluid h-100">
                            </div>
                            <!-- Tabs navs -->
                            <div class="box trend">
                                <div class="outX">
                                    <div class="title">
                                        <div class="more-category" data-section="">
                                            <a>تريند يلاجول</a>
                                        </div>
                                    </div>
                                    <div id="newspointercontent" class="newspointercontent">
                                        <div id="boxUpDown" data-isup="ChartBeatDataUp"
                                            class="post trend news animated slideInUp">
                                            <a href="#" link="www.btolat.com/news/282781" target="_top">

                                                <div class="image">
                                                    <img src="/assets/NewsPointer/images/play-btn.png" class="player">
                                                    <img src="https://img.btolat.com/2022/5/12/news/282781/small.jpg"
                                                        class="img-responsive" alt="2">
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15">
                                                            <path id="arrow" fill="#09ab24"
                                                                d="M 7.5,0 L 15,15 L 7.5,10.5 L 0,15">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <div class="title">
                                                    <div class="top">
                                                        <span class="visitors">198</span>
                                                    </div>
                                                    <h3>فلافيو: أملي في تدريب الأهلي زاد بعد تولي موسيماني.. وتمنيت
                                                        اللعب
                                                        بجوار
                                                        ثنائي الزمالك</h3>
                                                </div>
                                            </a>
                                        </div>
                                        <div id="boxUpDown" data-isup="ChartBeatDataUp"
                                            class="post trend news animated slideInUp">
                                            <a href="#" link="www.btolat.com/news/282781" target="_top">

                                                <div class="image">
                                                    <img src="/assets/NewsPointer/images/play-btn.png" class="player">
                                                    <img src="https://img.btolat.com/2022/5/12/news/282781/small.jpg"
                                                        class="img-responsive" alt="2">
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15">
                                                            <path id="arrow" fill="#09ab24"
                                                                d="M 7.5,0 L 15,15 L 7.5,10.5 L 0,15">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <div class="title">
                                                    <div class="top">
                                                        <span class="visitors">198</span>
                                                    </div>
                                                    <h3>فلافيو: أملي في تدريب الأهلي زاد بعد تولي موسيماني.. وتمنيت
                                                        اللعب
                                                        بجوار
                                                        ثنائي الزمالك</h3>
                                                </div>
                                            </a>
                                        </div>
                                        <div id="boxUpDown" data-isup="ChartBeatDataUp"
                                            class="post trend news animated slideInUp">
                                            <a href="#" link="www.btolat.com/news/282781" target="_top">

                                                <div class="image">
                                                    <img src="/assets/NewsPointer/images/play-btn.png" class="player">
                                                    <img src="https://img.btolat.com/2022/5/12/news/282781/small.jpg"
                                                        class="img-responsive" alt="2">
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15">
                                                            <path id="arrow" fill="#09ab24"
                                                                d="M 7.5,0 L 15,15 L 7.5,10.5 L 0,15">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <div class="title">
                                                    <div class="top">
                                                        <span class="visitors">198</span>
                                                    </div>
                                                    <h3>فلافيو: أملي في تدريب الأهلي زاد بعد تولي موسيماني.. وتمنيت
                                                        اللعب
                                                        بجوار
                                                        ثنائي الزمالك</h3>
                                                </div>
                                            </a>
                                        </div>
                                        <div id="boxUpDown" data-isup="ChartBeatDataUp"
                                            class="post trend news animated slideInUp">
                                            <a href="#" link="www.btolat.com/news/282781" target="_top">

                                                <div class="image">
                                                    <img src="/assets/NewsPointer/images/play-btn.png" class="player">
                                                    <img src="https://img.btolat.com/2022/5/12/news/282781/small.jpg"
                                                        class="img-responsive" alt="2">
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15">
                                                            <path id="arrow" fill="#09ab24"
                                                                d="M 7.5,0 L 15,15 L 7.5,10.5 L 0,15">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <div class="title">
                                                    <div class="top">
                                                        <span class="visitors">198</span>
                                                    </div>
                                                    <h3>فلافيو: أملي في تدريب الأهلي زاد بعد تولي موسيماني.. وتمنيت
                                                        اللعب
                                                        بجوار
                                                        ثنائي الزمالك</h3>
                                                </div>
                                            </a>
                                        </div>
                                        <div id="boxUpDown" data-isup="ChartBeatDataUp"
                                            class="post trend news animated slideInUp">
                                            <a href="#" link="www.btolat.com/news/282781" target="_top">

                                                <div class="image">
                                                    <img src="/assets/NewsPointer/images/play-btn.png" class="player">
                                                    <img src="https://img.btolat.com/2022/5/12/news/282781/small.jpg"
                                                        class="img-responsive" alt="2">
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15">
                                                            <path id="arrow" fill="#09ab24"
                                                                d="M 7.5,0 L 15,15 L 7.5,10.5 L 0,15">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <div class="title">
                                                    <div class="top">
                                                        <span class="visitors">198</span>
                                                    </div>
                                                    <h3>فلافيو: أملي في تدريب الأهلي زاد بعد تولي موسيماني.. وتمنيت
                                                        اللعب
                                                        بجوار
                                                        ثنائي الزمالك</h3>
                                                </div>
                                            </a>
                                        </div>
                                        <div id="boxUpDown" data-isup="ChartBeatDataUp"
                                            class="post trend news animated slideInUp">
                                            <a href="#" link="www.btolat.com/news/282781" target="_top">
                                                <div class="image">
                                                    <img src="/assets/NewsPointer/images/play-btn.png" class="player">
                                                    <img src="https://img.btolat.com/2022/5/12/news/282781/small.jpg"
                                                        class="img-responsive" alt="2">
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15">
                                                            <path id="arrow" fill="#09ab24"
                                                                d="M 7.5,0 L 15,15 L 7.5,10.5 L 0,15">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <div class="title">
                                                    <div class="top">
                                                        <span class="visitors">198</span>
                                                    </div>
                                                    <h3>فلافيو: أملي في تدريب الأهلي زاد بعد تولي موسيماني.. وتمنيت
                                                        اللعب
                                                        بجوار
                                                        ثنائي الزمالك</h3>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box ads2">
                                <img src="./assets/images/ads.jpg" alt="" class="img-fluid h-100">
                            </div>
                            <div class="box mostRead">
                                <h2 class="title text-end me-3">الاكثر مشاهدة</h1>
                                    <div class="most">
                                        <span class="number">1</span>
                                        <a href="/news/282752">
                                            <h2>كاف يوضح تفاصيل اختيار ملعب نهائي دوري أبطال إفريقيا.. ويرد على الأهلي
                                            </h2>
                                        </a>
                                        <div class="line w100"></div>
                                    </div>
                                    <div class="most">
                                        <span class="number">2</span>
                                        <a href="/news/282763">
                                            <h2>فرج عامر: مباراة مصر والسنغال ستعاد بنسبة 99% </h2>
                                        </a>
                                        <div class="line w80"></div>
                                    </div>
                                    <div class="most">
                                        <span class="number">3</span>
                                        <a href="/news/282781">
                                            <h2>فلافيو: أملي في تدريب الأهلي زاد بعد تولي موسيماني.. وتمنيت اللعب بجوار
                                                ثنائي
                                                الزمالك </h2>
                                        </a>
                                        <div class="line w60"></div>
                                    </div>
                                    <div class="most">
                                        <span class="number">4</span>
                                        <a href="/news/282755">
                                            <h2>ترتيب الدوري الإنجليزي بعد خماسية مانشستر سيتي أمام ولفرهامبتون </h2>
                                        </a>
                                        <div class="line w40"></div>
                                    </div>
                                    <div class="most">
                                        <span class="number">5</span>
                                        <a href="/news/282757">
                                            <h2>بين بنزيما ومحمد صلاح ومبابي.. جوتي يختار اللاعب الأحق بالكرة الذهبية
                                                2022
                                            </h2>
                                        </a>
                                        <div class="line w20"></div>
                                    </div>
                                    <div class="most">
                                        <span class="number">6</span>
                                        <a href="/news/282773">
                                            <h2>الكومي يناشد الرئيس السيسي بالموافقة على لعب الأهلي في الإسماعيلية </h2>
                                        </a>
                                        <div class="line w0"></div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<?php include 'layouts/footer.php'; ?>