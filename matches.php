<?php include 'layouts/header.php'; ?>
<section>
    <div id="fullMatchCenterTable">
        <div class="container-fluid pt-2">
            <div class="container">

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
                <div class="matchsDays row text-center">
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

                    <button class="datepicker" id="datepicker" data-provide="datepicker"><i
                            class="fa fa-calendar"></i></button>

                </div>
                <div id="matchtable" class="cardBox">
                    <div class="matchCenterBox light full">
                        <nav>
                            <div class="nav nav-tabs justify-content-between overflow-hidden" id="nav-tab"
                                role="tablist">
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
                        <div class="tab-content overflow-hidden">
                            <div class="tab-content" id="nav-tab-content">
                                <div class="tab-pane fade show active" id="all" role="tabpanel"
                                    aria-labelledby="all-tab">
                                    <div class="matchtableX">
                                        <div class="row matchBox title dark">
                                            <div class="col d-flex  mx-4">
                                                <div><img class="img-fluid"
                                                        src="https://img.btolat.com/tourlogo/32eab27b-e23c-4d16-ad92-605a1d6ab55d.png"
                                                        alt="الدوري الإنجليزي">
                                                </div>
                                                <h2 class=" legTitle">الدوري الإنجليزي</h2>

                                            </div>
                                            <div class="col newsLinks d-flex justify-content-between mx-4">

                                                <a href="league.php">اخبار</a>
                                                <a href="league.php">فيديو</a>
                                                <a href="league.php">ترتيب</a>
                                                <a href="league.php">مباريات</a>

                                            </div>
                                        </div>
                                        <ul class="list-unstyled">
                                            <li id="3150755" class="live">
                                                <div class="matchBox">
                                                    <div class="teams d-flex flex-wrap ">
                                                        <div class="team-header d-flex w-100 justify-content-between">
                                                            <a class="team1" href="team.php">
                                                                <span><img
                                                                        src="https://img.btolat.com/teamslogo/8930.png"
                                                                        alt="الإسماعيلي" title="الإسماعيلي"></span>
                                                                <h3 class="teamName">الإسماعيلي</h3>
                                                            </a>
                                                            <a class="stat" href="matchDetails.php">
                                                                <div class="status"><span>مباشر</span></div>
                                                                <span class="xmatchDate"
                                                                    id="timer3150755"><span>16'</span>
                                                                </span>
                                                                <div class="results d-flex justify-content-between">
                                                                    <div class="team1G">1 </div>
                                                                    <div class="team2G">0 </div>
                                                                </div>
                                                            </a>
                                                            <a class="team2" href="team.php">
                                                                <span><img
                                                                        src="https://img.btolat.com/teamslogo/33716.png"
                                                                        alt="سيراميكا كليوباترا"
                                                                        title="سيراميكا كليوباترا"></span>
                                                                <h3 class="teamName">سيراميكا كليوباترا</h3>
                                                            </a>
                                                        </div>
                                                        <div class="teamsfooter w-100">
                                                            <span content="الإسماعيلي ضد سيراميكا كليوباترا"
                                                                itemprop="name">
                                                                الإسماعيلي ضد سيراميكا كليوباترا
                                                            </span> فى <span>الدوري المصري</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li id="3150755" class="notYet">
                                                <div class="matchBox">
                                                    <div class="teams d-flex flex-wrap ">
                                                        <div class="team-header d-flex w-100 justify-content-between">
                                                            <a class="team1" href="team.php">
                                                                <span><img
                                                                        src="https://img.btolat.com/teamslogo/8930.png"
                                                                        alt="الإسماعيلي" title="الإسماعيلي"></span>
                                                                <h3 class="teamName">الإسماعيلي</h3>
                                                            </a>
                                                            <a class="stat" href="matchDetails.php">
                                                                <div class="status"><span>لم تبدأ</span></div>
                                                                <span class="xmatchDate"><span>06:30 م</span>
                                                                </span>

                                                            </a>
                                                            <a class="team2" href="team.php">
                                                                <span><img
                                                                        src="https://img.btolat.com/teamslogo/33716.png"
                                                                        alt="سيراميكا كليوباترا"
                                                                        title="سيراميكا كليوباترا"></span>
                                                                <h3 class="teamName">سيراميكا كليوباترا</h3>
                                                            </a>
                                                        </div>
                                                        <div class="teamsfooter w-100">
                                                            <span content="الإسماعيلي ضد سيراميكا كليوباترا"
                                                                itemprop="name">
                                                                الإسماعيلي ضد سيراميكا كليوباترا
                                                            </span> فى <span>الدوري المصري</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li id="3150755" class="ended">
                                                <div class="matchBox">
                                                    <div class="teams d-flex flex-wrap ">
                                                        <div class="team-header d-flex w-100 justify-content-between">
                                                            <a class="team1" href="team.php">
                                                                <span><img
                                                                        src="https://img.btolat.com/teamslogo/8930.png"
                                                                        alt="الإسماعيلي" title="الإسماعيلي"></span>
                                                                <h3 class="teamName">الإسماعيلي</h3>
                                                            </a>
                                                            <a class="stat" href="matchDetails.php">
                                                                <div class="status"><span>مباشر</span></div>
                                                                <span class="xmatchDate"
                                                                    id="timer3150755"><span>16'</span>
                                                                </span>
                                                                <div class="results d-flex justify-content-between">
                                                                    <div class="team1G">1 </div>
                                                                    <div class="team2G">0 </div>
                                                                </div>
                                                            </a>
                                                            <a class="team2" href="team.php">
                                                                <span><img
                                                                        src="https://img.btolat.com/teamslogo/33716.png"
                                                                        alt="سيراميكا كليوباترا"
                                                                        title="سيراميكا كليوباترا"></span>
                                                                <h3 class="teamName">سيراميكا كليوباترا</h3>
                                                            </a>
                                                        </div>
                                                        <div class="teamsfooter w-100">
                                                            <span content="الإسماعيلي ضد سيراميكا كليوباترا"
                                                                itemprop="name">
                                                                الإسماعيلي ضد سيراميكا كليوباترا
                                                            </span> فى <span>الدوري المصري</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="ended" role="tabpanel" aria-labelledby="ended-tab">
                                    <div class="matchtableX">
                                        <div class="row matchBox title dark">
                                            <div class="col d-flex  mx-4">
                                                <div><img class="img-fluid"
                                                        src="https://img.btolat.com/tourlogo/32eab27b-e23c-4d16-ad92-605a1d6ab55d.png"
                                                        alt="الدوري الإنجليزي">
                                                </div>
                                                <h2 class=" legTitle">الدوري الإنجليزي</h2>

                                            </div>
                                            <div class="col newsLinks d-flex justify-content-between mx-4">

                                                <a href="league.php">اخبار</a>
                                                <a href="league.php">فيديو</a>
                                                <a href="league.php">ترتيب</a>
                                                <a href="league.php">مباريات</a>

                                            </div>
                                        </div>
                                        <ul class="list-unstyled">

                                            <li id="3150755" class="ended">
                                                <div class="matchBox">
                                                    <div class="teams d-flex flex-wrap ">
                                                        <div class="team-header d-flex w-100 justify-content-between">
                                                            <a class="team1" href="team.php">
                                                                <span><img
                                                                        src="https://img.btolat.com/teamslogo/8930.png"
                                                                        alt="الإسماعيلي" title="الإسماعيلي"></span>
                                                                <h3 class="teamName">الإسماعيلي</h3>
                                                            </a>
                                                            <a class="stat" href="matches.php">
                                                                <div class="status"><span>مباشر</span></div>
                                                                <span class="xmatchDate"
                                                                    id="timer3150755"><span>16'</span>
                                                                </span>
                                                                <div class="results d-flex justify-content-between">
                                                                    <div class="team1G">1 </div>
                                                                    <div class="team2G">0 </div>
                                                                </div>
                                                            </a>
                                                            <a class="team2" href="team.php">
                                                                <span><img
                                                                        src="https://img.btolat.com/teamslogo/33716.png"
                                                                        alt="سيراميكا كليوباترا"
                                                                        title="سيراميكا كليوباترا"></span>
                                                                <h3 class="teamName">سيراميكا كليوباترا</h3>
                                                            </a>
                                                        </div>
                                                        <div class="teamsfooter w-100">
                                                            <span content="الإسماعيلي ضد سيراميكا كليوباترا"
                                                                itemprop="name">
                                                                الإسماعيلي ضد سيراميكا كليوباترا
                                                            </span> فى <span>الدوري المصري</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li id="3150755" class="ended">
                                                <div class="matchBox">
                                                    <div class="teams d-flex flex-wrap ">
                                                        <div class="team-header d-flex w-100 justify-content-between">
                                                            <a class="team1" href="/team/8930/ismaily">
                                                                <span><img
                                                                        src="https://img.btolat.com/teamslogo/8930.png"
                                                                        alt="الإسماعيلي" title="الإسماعيلي"></span>
                                                                <h3 class="teamName">الإسماعيلي</h3>
                                                            </a>
                                                            <a class="stat" href="matches.php">
                                                                <div class="status"><span>مباشر</span></div>
                                                                <span class="xmatchDate"
                                                                    id="timer3150755"><span>16'</span>
                                                                </span>
                                                                <div class="results d-flex justify-content-between">
                                                                    <div class="team1G">1 </div>
                                                                    <div class="team2G">0 </div>
                                                                </div>
                                                            </a>
                                                            <a class="team2" href="/team/33716/ceramica-cleopatra">
                                                                <span><img
                                                                        src="https://img.btolat.com/teamslogo/33716.png"
                                                                        alt="سيراميكا كليوباترا"
                                                                        title="سيراميكا كليوباترا"></span>
                                                                <h3 class="teamName">سيراميكا كليوباترا</h3>
                                                            </a>
                                                        </div>
                                                        <div class="teamsfooter w-100">
                                                            <span content="الإسماعيلي ضد سيراميكا كليوباترا"
                                                                itemprop="name">
                                                                الإسماعيلي ضد سيراميكا كليوباترا
                                                            </span> فى <span>الدوري المصري</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li id="3150755" class="ended">
                                                <div class="matchBox">
                                                    <div class="teams d-flex flex-wrap ">
                                                        <div class="team-header d-flex w-100 justify-content-between">
                                                            <a class="team1" href="/team/8930/ismaily">
                                                                <span><img
                                                                        src="https://img.btolat.com/teamslogo/8930.png"
                                                                        alt="الإسماعيلي" title="الإسماعيلي"></span>
                                                                <h3 class="teamName">الإسماعيلي</h3>
                                                            </a>
                                                            <a class="stat" href="matches.php">
                                                                <div class="status"><span>مباشر</span></div>
                                                                <span class="xmatchDate"
                                                                    id="timer3150755"><span>16'</span>
                                                                </span>
                                                                <div class="results d-flex justify-content-between">
                                                                    <div class="team1G">1 </div>
                                                                    <div class="team2G">0 </div>
                                                                </div>
                                                            </a>
                                                            <a class="team2" href="/team/33716/ceramica-cleopatra">
                                                                <span><img
                                                                        src="https://img.btolat.com/teamslogo/33716.png"
                                                                        alt="سيراميكا كليوباترا"
                                                                        title="سيراميكا كليوباترا"></span>
                                                                <h3 class="teamName">سيراميكا كليوباترا</h3>
                                                            </a>
                                                        </div>
                                                        <div class="teamsfooter w-100">
                                                            <span content="الإسماعيلي ضد سيراميكا كليوباترا"
                                                                itemprop="name">
                                                                الإسماعيلي ضد سيراميكا كليوباترا
                                                            </span> فى <span>الدوري المصري</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="live" role="tabpanel" aria-labelledby="live-tab">
                                    <div class="matchtableX">
                                        <div class="row matchBox title dark">
                                            <div class="col d-flex  mx-4">
                                                <div><img class="img-fluid"
                                                        src="https://img.btolat.com/tourlogo/32eab27b-e23c-4d16-ad92-605a1d6ab55d.png"
                                                        alt="الدوري الإنجليزي">
                                                </div>
                                                <h2 class=" legTitle">الدوري الإنجليزي</h2>

                                            </div>
                                            <div class="col newsLinks d-flex justify-content-between mx-4">

                                                <a href="league.php">اخبار</a>
                                                <a href="league.php">فيديو</a>
                                                <a href="league.php">ترتيب</a>
                                                <a href="league.php">مباريات</a>

                                            </div>
                                        </div>
                                        <ul class="list-unstyled">
                                            <li id="3150755" class="live">
                                                <div class="matchBox">
                                                    <div class="teams d-flex flex-wrap ">
                                                        <div class="team-header d-flex w-100 justify-content-between">
                                                            <a class="team1" href="/team/8930/ismaily">
                                                                <span><img
                                                                        src="https://img.btolat.com/teamslogo/8930.png"
                                                                        alt="الإسماعيلي" title="الإسماعيلي"></span>
                                                                <h3 class="teamName">الإسماعيلي</h3>
                                                            </a>
                                                            <a class="stat" href="matches.php">
                                                                <div class="status"><span>مباشر</span></div>
                                                                <span class="xmatchDate"
                                                                    id="timer3150755"><span>16'</span>
                                                                </span>
                                                                <div class="results d-flex justify-content-between">
                                                                    <div class="team1G">1 </div>
                                                                    <div class="team2G">0 </div>
                                                                </div>
                                                            </a>
                                                            <a class="team2" href="/team/33716/ceramica-cleopatra">
                                                                <span><img
                                                                        src="https://img.btolat.com/teamslogo/33716.png"
                                                                        alt="سيراميكا كليوباترا"
                                                                        title="سيراميكا كليوباترا"></span>
                                                                <h3 class="teamName">سيراميكا كليوباترا</h3>
                                                            </a>
                                                        </div>
                                                        <div class="teamsfooter w-100">
                                                            <span content="الإسماعيلي ضد سيراميكا كليوباترا"
                                                                itemprop="name">
                                                                الإسماعيلي ضد سيراميكا كليوباترا
                                                            </span> فى <span>الدوري المصري</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li id="3150755" class="live">
                                                <div class="matchBox">
                                                    <div class="teams d-flex flex-wrap ">
                                                        <div class="team-header d-flex w-100 justify-content-between">
                                                            <a class="team1" href="/team/8930/ismaily">
                                                                <span><img
                                                                        src="https://img.btolat.com/teamslogo/8930.png"
                                                                        alt="الإسماعيلي" title="الإسماعيلي"></span>
                                                                <h3 class="teamName">الإسماعيلي</h3>
                                                            </a>
                                                            <a class="stat" href="matches.php">
                                                                <div class="status"><span>مباشر</span></div>
                                                                <span class="xmatchDate"
                                                                    id="timer3150755"><span>16'</span>
                                                                </span>
                                                                <div class="results d-flex justify-content-between">
                                                                    <div class="team1G">1 </div>
                                                                    <div class="team2G">0 </div>
                                                                </div>
                                                            </a>
                                                            <a class="team2" href="/team/33716/ceramica-cleopatra">
                                                                <span><img
                                                                        src="https://img.btolat.com/teamslogo/33716.png"
                                                                        alt="سيراميكا كليوباترا"
                                                                        title="سيراميكا كليوباترا"></span>
                                                                <h3 class="teamName">سيراميكا كليوباترا</h3>
                                                            </a>
                                                        </div>
                                                        <div class="teamsfooter w-100">
                                                            <span content="الإسماعيلي ضد سيراميكا كليوباترا"
                                                                itemprop="name">
                                                                الإسماعيلي ضد سيراميكا كليوباترا
                                                            </span> فى <span>الدوري المصري</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li id="3150755" class="live">
                                                <div class="matchBox">
                                                    <div class="teams d-flex flex-wrap ">
                                                        <div class="team-header d-flex w-100 justify-content-between">
                                                            <a class="team1" href="/team/8930/ismaily">
                                                                <span><img
                                                                        src="https://img.btolat.com/teamslogo/8930.png"
                                                                        alt="الإسماعيلي" title="الإسماعيلي"></span>
                                                                <h3 class="teamName">الإسماعيلي</h3>
                                                            </a>
                                                            <a class="stat" href="matches.php">
                                                                <div class="status"><span>مباشر</span></div>
                                                                <span class="xmatchDate"
                                                                    id="timer3150755"><span>16'</span>
                                                                </span>
                                                                <div class="results d-flex justify-content-between">
                                                                    <div class="team1G">1 </div>
                                                                    <div class="team2G">0 </div>
                                                                </div>
                                                            </a>
                                                            <a class="team2" href="/team/33716/ceramica-cleopatra">
                                                                <span><img
                                                                        src="https://img.btolat.com/teamslogo/33716.png"
                                                                        alt="سيراميكا كليوباترا"
                                                                        title="سيراميكا كليوباترا"></span>
                                                                <h3 class="teamName">سيراميكا كليوباترا</h3>
                                                            </a>
                                                        </div>
                                                        <div class="teamsfooter w-100">
                                                            <span content="الإسماعيلي ضد سيراميكا كليوباترا"
                                                                itemprop="name">
                                                                الإسماعيلي ضد سيراميكا كليوباترا
                                                            </span> فى <span>الدوري المصري</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="notYet" role="tabpanel" aria-labelledby="notYet-tab">
                                    <div class="row matchBox title dark">
                                        <div class="col d-flex  mx-4">
                                            <div><img class="img-fluid"
                                                    src="https://img.btolat.com/tourlogo/32eab27b-e23c-4d16-ad92-605a1d6ab55d.png"
                                                    alt="الدوري الإنجليزي">
                                            </div>
                                            <h2 class=" legTitle">الدوري الإنجليزي</h2>

                                        </div>
                                        <div class="col newsLinks d-flex justify-content-between mx-4">

                                            <a href="league.php">اخبار</a>
                                            <a href="league.php">فيديو</a>
                                            <a href="league.php">ترتيب</a>
                                            <a href="league.php">مباريات</a>

                                        </div>
                                    </div>
                                    <div class="matchtableX">

                                        <ul class="list-unstyled">
                                            <li id="3150755" class="notYet">
                                                <div class="matchBox">
                                                    <div class="teams d-flex flex-wrap ">
                                                        <div class="team-header d-flex w-100 justify-content-between">
                                                            <a class="team1" href="/team/8930/ismaily">
                                                                <span><img
                                                                        src="https://img.btolat.com/teamslogo/8930.png"
                                                                        alt="الإسماعيلي" title="الإسماعيلي"></span>
                                                                <h3 class="teamName">الإسماعيلي</h3>
                                                            </a>
                                                            <a class="stat" href="matches.php">
                                                                <div class="status"><span>لم تبدأ</span></div>
                                                                <span class="xmatchDate"><span>06:30 م</span>
                                                                </span>

                                                            </a>
                                                            <a class="team2" href="/team/33716/ceramica-cleopatra">
                                                                <span><img
                                                                        src="https://img.btolat.com/teamslogo/33716.png"
                                                                        alt="سيراميكا كليوباترا"
                                                                        title="سيراميكا كليوباترا"></span>
                                                                <h3 class="teamName">سيراميكا كليوباترا</h3>
                                                            </a>
                                                        </div>
                                                        <div class="teamsfooter w-100">
                                                            <span content="الإسماعيلي ضد سيراميكا كليوباترا"
                                                                itemprop="name">
                                                                الإسماعيلي ضد سيراميكا كليوباترا
                                                            </span> فى <span>الدوري المصري</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li id="3150755" class="notYet">
                                                <div class="matchBox">
                                                    <div class="teams d-flex flex-wrap ">
                                                        <div class="team-header d-flex w-100 justify-content-between">
                                                            <a class="team1" href="/team/8930/ismaily">
                                                                <span><img
                                                                        src="https://img.btolat.com/teamslogo/8930.png"
                                                                        alt="الإسماعيلي" title="الإسماعيلي"></span>
                                                                <h3 class="teamName">الإسماعيلي</h3>
                                                            </a>
                                                            <a class="stat" href="/matches/details/3150755">
                                                                <div class="status"><span>لم تبدأ</span></div>
                                                                <span class="xmatchDate"><span>06:30 م</span>
                                                                </span>

                                                            </a>
                                                            <a class="team2" href="/team/33716/ceramica-cleopatra">
                                                                <span><img
                                                                        src="https://img.btolat.com/teamslogo/33716.png"
                                                                        alt="سيراميكا كليوباترا"
                                                                        title="سيراميكا كليوباترا"></span>
                                                                <h3 class="teamName">سيراميكا كليوباترا</h3>
                                                            </a>
                                                        </div>
                                                        <div class="teamsfooter w-100">
                                                            <span content="الإسماعيلي ضد سيراميكا كليوباترا"
                                                                itemprop="name">
                                                                الإسماعيلي ضد سيراميكا كليوباترا
                                                            </span> فى <span>الدوري المصري</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li id="3150755" class="notYet">
                                                <div class="matchBox">
                                                    <div class="teams d-flex flex-wrap ">
                                                        <div class="team-header d-flex w-100 justify-content-between">
                                                            <a class="team1" href="/team/8930/ismaily">
                                                                <span><img
                                                                        src="https://img.btolat.com/teamslogo/8930.png"
                                                                        alt="الإسماعيلي" title="الإسماعيلي"></span>
                                                                <h3 class="teamName">الإسماعيلي</h3>
                                                            </a>
                                                            <a class="stat" href="/matches/details/3150755">
                                                                <div class="status"><span>لم تبدأ</span></div>
                                                                <span class="xmatchDate"><span>06:30 م</span>
                                                                </span>

                                                            </a>
                                                            <a class="team2" href="/team/33716/ceramica-cleopatra">
                                                                <span><img
                                                                        src="https://img.btolat.com/teamslogo/33716.png"
                                                                        alt="سيراميكا كليوباترا"
                                                                        title="سيراميكا كليوباترا"></span>
                                                                <h3 class="teamName">سيراميكا كليوباترا</h3>
                                                            </a>
                                                        </div>
                                                        <div class="teamsfooter w-100">
                                                            <span content="الإسماعيلي ضد سيراميكا كليوباترا"
                                                                itemprop="name">
                                                                الإسماعيلي ضد سيراميكا كليوباترا
                                                            </span> فى <span>الدوري المصري</span>
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

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</section>
<?php include 'layouts/footer.php'; ?>