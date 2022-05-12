<?php include 'layouts/header.php'; ?>
<section>
    <div id="fullMatchCenterTable">
        <div class="container pt-4">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="">مركز المباريات</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        مباريات <span>
                            الخميس 12-05-2022
                        </span>
                    </li>
                </ol>
            </nav>
            <div class="matchsDays row">
                <div class="col day first" data-date="5.10.2022">
                    <div class="time">
                        <div class="dayDate"><span>الثلاثاء</span><time>10/5/2022</time></div>
                    </div>
                </div>
                <div class="col day sec" data-date="5.11.2022">
                    <div class="time">
                        <div class="dayDate"><span>الأربعاء</span><time>11/5/2022</time></div>
                    </div>
                </div>
                <div class="col day midday active" data-date="5.12.2022">
                    <div class="time">
                        <div class="dayDate"><span>اليوم</span><time>12/5/2022</time></div>
                    </div>
                </div>
                <div class="col day sami" data-date="5.13.2022">
                    <div class="time">
                        <div class="dayDate"><span>الجمعة</span><time>13/5/2022</time></div>
                    </div>
                </div>
                <div class="col day last" data-date="5.14.2022">
                    <div class="time">
                        <div class="dayDate"><span>السبت</span><time>14/5/2022</time></div>
                    </div>
                </div>
                <div>

                    <button class="datepicker" data-provide="datepicker"><i class="fa fa-calendar"></i></button>
                </div>
                <div>




                </div>




            </div>
            <div id="matchtable" class="cardBox">


                <div class="matchCenterBox light full">
                    <nav>
                        <div class="nav nav-tabs justify-content-between overflow-hidden" id="nav-tab" role="tablist">
                            <a class="col nav-item nav-link active x" id="all-tab" data-mdb-toggle="tab" href="#all"
                                role="tab" aria-controls="all" aria-selected="true">الكل</a>
                            <a class="col nav-item nav-link x" id="ended-tab" data-mdb-toggle="tab" href="#ended"
                                role="tab" aria-controls="ended" aria-selected="false">انتهت</a>
                            <a class="col nav-item nav-link x" id="live-tab" data-mdb-toggle="tab" href="#live"
                                role="tab" aria-controls="live" aria-selected="false">مباشر</a>
                            <a class="col nav-item nav-link x" id="notYet-tab" data-mdb-toggle="tab" href="#notYet"
                                role="tab" aria-controls="notYet" aria-selected="false">لم تبدأ</a>
                            <select class="col nav-item nav-link x" name="" id="selectLeg">
                                <option value="all">كل البطولات</option>
                                <option value="1204">الدوري الإنجليزي</option>
                                <option value="1399">الدوري الاسباني</option>
                                <option value="1368">الدوري السعودي</option>
                                <option value="1535">مباريات ودية منتخبات</option>
                            </select>
                        </div>
                    </nav>
                    <div class="tab-content">
                        <div class="tab-content" id="nav-tab-content">
                            <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                                <div class="matchtableX" data-stat-notyet="" data-leg-name="1204">
                                    <div class="row matchBox title dark">
                                        <div class="col-6">
                                            <div class="row">
                                                <div class="col-2"><img
                                                        src="https://img.btolat.com/tourlogo/32eab27b-e23c-4d16-ad92-605a1d6ab55d.png"
                                                        alt="الدوري الإنجليزي"></div>
                                                <h2 class="col-10 legTitle">الدوري الإنجليزي</h2>
                                            </div>
                                        </div>
                                        <div class="col-6 newsLinks">
                                            <div class="row">
                                                <a href="/league/news/1204/premier-league" class="col">اخبار</a>
                                                <a href="/league/videos/1204/premier-league" class="col">فيديو</a>
                                                <a href="/league/standings/1204/premier-league" class="col">ترتيب</a>
                                                <a href="/league/fixtures/1204/premier-league" class="col">مباريات</a>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="list-unstyled">
                                        <li id="2994140" class="fullMatchBox notYet" data-stat="notYet">
                                            <div class="matchBox">
                                                <div class="teams row">
                                                    <a class="team1 col" href="/team/9406/tottenham-hotspur">
                                                        <span><img src="https://img.btolat.com/teamslogo/9406.png"
                                                                alt="توتنهام هوتسبر" title="توتنهام هوتسبر"></span>
                                                        <h3 class="teamName">توتنهام هوتسبر</h3>
                                                    </a>

                                                    <a class="stat col" href="/matches/details/2994140">

                                                        <div class="status"><span>لم تبدأ</span></div>
                                                        <div id="reslt2994140" class="results clearfix">
                                                            <div class="team1G"></div>
                                                            <div class="team2G"></div>
                                                        </div>
                                                        <span class="matchDate" id="timer2994140"> <span>08:45 م</span>
                                                        </span>
                                                    </a>
                                                    <a class="team2 col" href="/team/9002/arsenal">
                                                        <span><img src="https://img.btolat.com/teamslogo/9002.png"
                                                                alt="آرسنال" title="آرسنال"></span>
                                                        <h3 class="teamName">آرسنال</h3>
                                                    </a>
                                                    <div class="teamsfooter col-12">
                                                        <span content="توتنهام هوتسبر ضد آرسنال" itemprop="name">
                                                            توتنهام هوتسبر ضد آرسنال
                                                        </span> فى <span>الدوري الإنجليزي</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="matchtableX" data-stat-notyet="" data-leg-name="1204">
                                    <div class="row matchBox title dark">
                                        <div class="col-6">
                                            <div class="row">
                                                <div class="col-2"><img
                                                        src="https://img.btolat.com/tourlogo/32eab27b-e23c-4d16-ad92-605a1d6ab55d.png"
                                                        alt="الدوري الإنجليزي"></div>
                                                <h2 class="col-10 legTitle">الدوري الإنجليزي</h2>
                                            </div>
                                        </div>
                                        <div class="col-6 newsLinks">
                                            <div class="row">
                                                <a href="/league/news/1204/premier-league" class="col">اخبار</a>
                                                <a href="/league/videos/1204/premier-league" class="col">فيديو</a>
                                                <a href="/league/standings/1204/premier-league" class="col">ترتيب</a>
                                                <a href="/league/fixtures/1204/premier-league" class="col">مباريات</a>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="list-unstyled">
                                        <li id="2994140" class="fullMatchBox notYet" data-stat="notYet">
                                            <div class="matchBox">
                                                <div class="teams row">
                                                    <a class="team1 col" href="/team/9406/tottenham-hotspur">
                                                        <span><img src="https://img.btolat.com/teamslogo/9406.png"
                                                                alt="توتنهام هوتسبر" title="توتنهام هوتسبر"></span>
                                                        <h3 class="teamName">توتنهام هوتسبر</h3>
                                                    </a>

                                                    <a class="stat col" href="/matches/details/2994140">

                                                        <div class="status"><span>لم تبدأ</span></div>
                                                        <div id="reslt2994140" class="results clearfix">
                                                            <div class="team1G"></div>
                                                            <div class="team2G"></div>
                                                        </div>
                                                        <span class="matchDate" id="timer2994140"> <span>08:45 م</span>
                                                        </span>
                                                    </a>
                                                    <a class="team2 col" href="/team/9002/arsenal">
                                                        <span><img src="https://img.btolat.com/teamslogo/9002.png"
                                                                alt="آرسنال" title="آرسنال"></span>
                                                        <h3 class="teamName">آرسنال</h3>
                                                    </a>
                                                    <div class="teamsfooter col-12">
                                                        <span content="توتنهام هوتسبر ضد آرسنال" itemprop="name">
                                                            توتنهام هوتسبر ضد آرسنال
                                                        </span> فى <span>الدوري الإنجليزي</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="ended" role="tabpanel" aria-labelledby="ended-tab">
                                <div class="matchtableX" data-stat-notyet="" data-leg-name="1204">
                                    <div class="row matchBox title dark">
                                        <div class="col-6">
                                            <div class="row">
                                                <div class="col-2"><img
                                                        src="https://img.btolat.com/tourlogo/32eab27b-e23c-4d16-ad92-605a1d6ab55d.png"
                                                        alt="الدوري الإنجليزي"></div>
                                                <h2 class="col-10 legTitle">الدوري الإنجليزي</h2>
                                            </div>
                                        </div>
                                        <div class="col-6 newsLinks">
                                            <div class="row">
                                                <a href="/league/news/1204/premier-league" class="col">اخبار</a>
                                                <a href="/league/videos/1204/premier-league" class="col">فيديو</a>
                                                <a href="/league/standings/1204/premier-league" class="col">ترتيب</a>
                                                <a href="/league/fixtures/1204/premier-league" class="col">مباريات</a>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="list-unstyled">
                                        <li id="2994140" class="fullMatchBox notYet" data-stat="notYet">
                                            <div class="matchBox">
                                                <div class="teams row">
                                                    <a class="team1 col" href="/team/9406/tottenham-hotspur">
                                                        <span><img src="https://img.btolat.com/teamslogo/9406.png"
                                                                alt="توتنهام هوتسبر" title="توتنهام هوتسبر"></span>
                                                        <h3 class="teamName">توتنهام هوتسبر</h3>
                                                    </a>

                                                    <a class="stat col" href="/matches/details/2994140">

                                                        <div class="status"><span>لم تبدأ</span></div>
                                                        <div id="reslt2994140" class="results clearfix">
                                                            <div class="team1G"></div>
                                                            <div class="team2G"></div>
                                                        </div>
                                                        <span class="matchDate" id="timer2994140"> <span>08:45 م</span>
                                                        </span>
                                                    </a>
                                                    <a class="team2 col" href="/team/9002/arsenal">
                                                        <span><img src="https://img.btolat.com/teamslogo/9002.png"
                                                                alt="آرسنال" title="آرسنال"></span>
                                                        <h3 class="teamName">آرسنال</h3>
                                                    </a>
                                                    <div class="teamsfooter col-12">
                                                        <span content="توتنهام هوتسبر ضد آرسنال" itemprop="name">
                                                            توتنهام هوتسبر ضد آرسنال
                                                        </span> فى <span>الدوري الإنجليزي</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="matchtableX" data-stat-notyet="" data-leg-name="1204">
                                    <div class="row matchBox title dark">
                                        <div class="col-6">
                                            <div class="row">
                                                <div class="col-2"><img
                                                        src="https://img.btolat.com/tourlogo/32eab27b-e23c-4d16-ad92-605a1d6ab55d.png"
                                                        alt="الدوري الإنجليزي"></div>
                                                <h2 class="col-10 legTitle">الدوري الإنجليزي</h2>
                                            </div>
                                        </div>
                                        <div class="col-6 newsLinks">
                                            <div class="row">
                                                <a href="/league/news/1204/premier-league" class="col">اخبار</a>
                                                <a href="/league/videos/1204/premier-league" class="col">فيديو</a>
                                                <a href="/league/standings/1204/premier-league" class="col">ترتيب</a>
                                                <a href="/league/fixtures/1204/premier-league" class="col">مباريات</a>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="list-unstyled">
                                        <li id="2994140" class="fullMatchBox notYet" data-stat="notYet">
                                            <div class="matchBox">
                                                <div class="teams row">
                                                    <a class="team1 col" href="/team/9406/tottenham-hotspur">
                                                        <span><img src="https://img.btolat.com/teamslogo/9406.png"
                                                                alt="توتنهام هوتسبر" title="توتنهام هوتسبر"></span>
                                                        <h3 class="teamName">توتنهام هوتسبر</h3>
                                                    </a>

                                                    <a class="stat col" href="/matches/details/2994140">

                                                        <div class="status"><span>لم تبدأ</span></div>
                                                        <div id="reslt2994140" class="results clearfix">
                                                            <div class="team1G"></div>
                                                            <div class="team2G"></div>
                                                        </div>
                                                        <span class="matchDate" id="timer2994140"> <span>08:45 م</span>
                                                        </span>
                                                    </a>
                                                    <a class="team2 col" href="/team/9002/arsenal">
                                                        <span><img src="https://img.btolat.com/teamslogo/9002.png"
                                                                alt="آرسنال" title="آرسنال"></span>
                                                        <h3 class="teamName">آرسنال</h3>
                                                    </a>
                                                    <div class="teamsfooter col-12">
                                                        <span content="توتنهام هوتسبر ضد آرسنال" itemprop="name">
                                                            توتنهام هوتسبر ضد آرسنال
                                                        </span> فى <span>الدوري الإنجليزي</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="live" role="tabpanel" aria-labelledby="live-tab">
                                <div class="matchtableX" data-stat-notyet="" data-leg-name="1204">
                                    <div class="row matchBox title dark">
                                        <div class="col-6">
                                            <div class="row">
                                                <div class="col-2"><img
                                                        src="https://img.btolat.com/tourlogo/32eab27b-e23c-4d16-ad92-605a1d6ab55d.png"
                                                        alt="الدوري الإنجليزي"></div>
                                                <h2 class="col-10 legTitle">الدوري الإنجليزي</h2>
                                            </div>
                                        </div>
                                        <div class="col-6 newsLinks">
                                            <div class="row">
                                                <a href="/league/news/1204/premier-league" class="col">اخبار</a>
                                                <a href="/league/videos/1204/premier-league" class="col">فيديو</a>
                                                <a href="/league/standings/1204/premier-league" class="col">ترتيب</a>
                                                <a href="/league/fixtures/1204/premier-league" class="col">مباريات</a>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="list-unstyled">
                                        <li id="2994140" class="fullMatchBox notYet" data-stat="notYet">
                                            <div class="matchBox">
                                                <div class="teams row">
                                                    <a class="team1 col" href="/team/9406/tottenham-hotspur">
                                                        <span><img src="https://img.btolat.com/teamslogo/9406.png"
                                                                alt="توتنهام هوتسبر" title="توتنهام هوتسبر"></span>
                                                        <h3 class="teamName">توتنهام هوتسبر</h3>
                                                    </a>

                                                    <a class="stat col" href="/matches/details/2994140">

                                                        <div class="status"><span>لم تبدأ</span></div>
                                                        <div id="reslt2994140" class="results clearfix">
                                                            <div class="team1G"></div>
                                                            <div class="team2G"></div>
                                                        </div>
                                                        <span class="matchDate" id="timer2994140"> <span>08:45 م</span>
                                                        </span>
                                                    </a>
                                                    <a class="team2 col" href="/team/9002/arsenal">
                                                        <span><img src="https://img.btolat.com/teamslogo/9002.png"
                                                                alt="آرسنال" title="آرسنال"></span>
                                                        <h3 class="teamName">آرسنال</h3>
                                                    </a>
                                                    <div class="teamsfooter col-12">
                                                        <span content="توتنهام هوتسبر ضد آرسنال" itemprop="name">
                                                            توتنهام هوتسبر ضد آرسنال
                                                        </span> فى <span>الدوري الإنجليزي</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="matchtableX" data-stat-notyet="" data-leg-name="1204">
                                    <div class="row matchBox title dark">
                                        <div class="col-6">
                                            <div class="row">
                                                <div class="col-2"><img
                                                        src="https://img.btolat.com/tourlogo/32eab27b-e23c-4d16-ad92-605a1d6ab55d.png"
                                                        alt="الدوري الإنجليزي"></div>
                                                <h2 class="col-10 legTitle">الدوري الإنجليزي</h2>
                                            </div>
                                        </div>
                                        <div class="col-6 newsLinks">
                                            <div class="row">
                                                <a href="/league/news/1204/premier-league" class="col">اخبار</a>
                                                <a href="/league/videos/1204/premier-league" class="col">فيديو</a>
                                                <a href="/league/standings/1204/premier-league" class="col">ترتيب</a>
                                                <a href="/league/fixtures/1204/premier-league" class="col">مباريات</a>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="list-unstyled">
                                        <li id="2994140" class="fullMatchBox notYet" data-stat="notYet">
                                            <div class="matchBox">
                                                <div class="teams row">
                                                    <a class="team1 col" href="/team/9406/tottenham-hotspur">
                                                        <span><img src="https://img.btolat.com/teamslogo/9406.png"
                                                                alt="توتنهام هوتسبر" title="توتنهام هوتسبر"></span>
                                                        <h3 class="teamName">توتنهام هوتسبر</h3>
                                                    </a>

                                                    <a class="stat col" href="/matches/details/2994140">

                                                        <div class="status"><span>لم تبدأ</span></div>
                                                        <div id="reslt2994140" class="results clearfix">
                                                            <div class="team1G"></div>
                                                            <div class="team2G"></div>
                                                        </div>
                                                        <span class="matchDate" id="timer2994140"> <span>08:45 م</span>
                                                        </span>
                                                    </a>
                                                    <a class="team2 col" href="/team/9002/arsenal">
                                                        <span><img src="https://img.btolat.com/teamslogo/9002.png"
                                                                alt="آرسنال" title="آرسنال"></span>
                                                        <h3 class="teamName">آرسنال</h3>
                                                    </a>
                                                    <div class="teamsfooter col-12">
                                                        <span content="توتنهام هوتسبر ضد آرسنال" itemprop="name">
                                                            توتنهام هوتسبر ضد آرسنال
                                                        </span> فى <span>الدوري الإنجليزي</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="notYet" role="tabpanel" aria-labelledby="notYet-tab">
                                <div class="matchtableX" data-stat-notyet="" data-leg-name="1204">
                                    <div class="row matchBox title dark">
                                        <div class="col-6">
                                            <div class="row">
                                                <div class="col-2"><img
                                                        src="https://img.btolat.com/tourlogo/32eab27b-e23c-4d16-ad92-605a1d6ab55d.png"
                                                        alt="الدوري الإنجليزي"></div>
                                                <h2 class="col-10 legTitle">الدوري الإنجليزي</h2>
                                            </div>
                                        </div>
                                        <div class="col-6 newsLinks">
                                            <div class="row">
                                                <a href="/league/news/1204/premier-league" class="col">اخبار</a>
                                                <a href="/league/videos/1204/premier-league" class="col">فيديو</a>
                                                <a href="/league/standings/1204/premier-league" class="col">ترتيب</a>
                                                <a href="/league/fixtures/1204/premier-league" class="col">مباريات</a>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="list-unstyled">
                                        <li id="2994140" class="fullMatchBox notYet" data-stat="notYet">
                                            <div class="matchBox">
                                                <div class="teams row">
                                                    <a class="team1 col" href="/team/9406/tottenham-hotspur">
                                                        <span><img src="https://img.btolat.com/teamslogo/9406.png"
                                                                alt="توتنهام هوتسبر" title="توتنهام هوتسبر"></span>
                                                        <h3 class="teamName">توتنهام هوتسبر</h3>
                                                    </a>

                                                    <a class="stat col" href="/matches/details/2994140">

                                                        <div class="status"><span>لم تبدأ</span></div>
                                                        <div id="reslt2994140" class="results clearfix">
                                                            <div class="team1G"></div>
                                                            <div class="team2G"></div>
                                                        </div>
                                                        <span class="matchDate" id="timer2994140"> <span>08:45 م</span>
                                                        </span>
                                                    </a>
                                                    <a class="team2 col" href="/team/9002/arsenal">
                                                        <span><img src="https://img.btolat.com/teamslogo/9002.png"
                                                                alt="آرسنال" title="آرسنال"></span>
                                                        <h3 class="teamName">آرسنال</h3>
                                                    </a>
                                                    <div class="teamsfooter col-12">
                                                        <span content="توتنهام هوتسبر ضد آرسنال" itemprop="name">
                                                            توتنهام هوتسبر ضد آرسنال
                                                        </span> فى <span>الدوري الإنجليزي</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="matchtableX" data-stat-notyet="" data-leg-name="1204">
                                    <div class="row matchBox title dark">
                                        <div class="col-6">
                                            <div class="row">
                                                <div class="col-2"><img
                                                        src="https://img.btolat.com/tourlogo/32eab27b-e23c-4d16-ad92-605a1d6ab55d.png"
                                                        alt="الدوري الإنجليزي"></div>
                                                <h2 class="col-10 legTitle">الدوري الإنجليزي</h2>
                                            </div>
                                        </div>
                                        <div class="col-6 newsLinks">
                                            <div class="row">
                                                <a href="/league/news/1204/premier-league" class="col">اخبار</a>
                                                <a href="/league/videos/1204/premier-league" class="col">فيديو</a>
                                                <a href="/league/standings/1204/premier-league" class="col">ترتيب</a>
                                                <a href="/league/fixtures/1204/premier-league" class="col">مباريات</a>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="list-unstyled">
                                        <li id="2994140" class="fullMatchBox notYet" data-stat="notYet">
                                            <div class="matchBox">
                                                <div class="teams row">
                                                    <a class="team1 col" href="/team/9406/tottenham-hotspur">
                                                        <span><img src="https://img.btolat.com/teamslogo/9406.png"
                                                                alt="توتنهام هوتسبر" title="توتنهام هوتسبر"></span>
                                                        <h3 class="teamName">توتنهام هوتسبر</h3>
                                                    </a>

                                                    <a class="stat col" href="/matches/details/2994140">

                                                        <div class="status"><span>لم تبدأ</span></div>
                                                        <div id="reslt2994140" class="results clearfix">
                                                            <div class="team1G"></div>
                                                            <div class="team2G"></div>
                                                        </div>
                                                        <span class="matchDate" id="timer2994140"> <span>08:45 م</span>
                                                        </span>
                                                    </a>
                                                    <a class="team2 col" href="/team/9002/arsenal">
                                                        <span><img src="https://img.btolat.com/teamslogo/9002.png"
                                                                alt="آرسنال" title="آرسنال"></span>
                                                        <h3 class="teamName">آرسنال</h3>
                                                    </a>
                                                    <div class="teamsfooter col-12">
                                                        <span content="توتنهام هوتسبر ضد آرسنال" itemprop="name">
                                                            توتنهام هوتسبر ضد آرسنال
                                                        </span> فى <span>الدوري الإنجليزي</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
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