<?php include 'layouts/header.php'; ?>
<section>
    <div class="league team py-3">
        <div class="container">
            <div class="row tabsLinks root leagueMenu ">
                <div class="logo col-md-4">
                    <a class="leagueTitle d-flex">
                        <img src="https://img.btolat.com/teamslogo/11938.png" alt="دوري أبطال أفريقيا">
                        <h1>دوري أبطال أفريقيا</h1>
                    </a>
                </div>
                <div class="links col-md-8">
                    <a href="team.php">الرئيسية</a>
                    <a href="teamNews.php">اخر الأخبار</a>
                    <a href="teamVideos.php">فيديوهات</a>
                    <a href="teamMatches.php" class="active">مباريات</a>
                    <a href="teamPlayers.php">قائمة اللاعبين</a>
                </div>
            </div>
            <div class="row page-content mt-3 pages position-relative">
                <div class="col-xl-8 right-side allNews overflow-auto">
                    <div class="container">

                        <div class="leagueFixtures">
                            <div id="fullMatchCenterTable">
                                <div class="cardBox">
                                    <div class="matchCenterBox light full">
                                        <div class="matchtableX tabyBox" data-leg-name="ael">
                                            <div class="row w-100 m-0">
                                                <a class="col taby active" href="#">
                                                    <p>المبارايات السابقة</p>
                                                </a>
                                                <a class="col taby" href="#">
                                                    <p>المبارايات التالية</p>
                                                </a>
                                            </div>
                                            <div class="matchDate">
                                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                    <div class="col"></div>
                                                    <select class="col nav-item nav-link x team" name="selectLeg"
                                                        id="selectLeg">
                                                        <option value="0">كل البطولات </option>
                                                        <option value="leagueid=1269">
                                                            الدوري الايطالي
                                                        </option>
                                                        <option value="leagueid=1264">
                                                            كأس إيطاليا
                                                        </option>
                                                        <option value="leagueid=1005">
                                                            دوري أبطال أوروبا
                                                        </option>
                                                        <option value="leagueid=1534">
                                                            مباريات ودية أندية
                                                        </option>
                                                    </select>
                                                </div>
                                                <div class="matchtableX">
                                                    <div class="matchDate">
                                                        <ul>
                                                            <li class="">
                                                                <h4>الدوري الايطالي</h4>
                                                            </li>
                                                            <li id="3017092" class="fullMatchBox ended"
                                                                data-stat="ended">
                                                                <div class="matchBox">
                                                                    <div class="teams">
                                                                        <a class="team1" href="/team/11938/milan">
                                                                            <span><img
                                                                                    src="https://img.btolat.com/teamslogo/11938.png"
                                                                                    alt="ميلان" title="ميلان"></span>
                                                                            <span class="teamName">ميلان</span>
                                                                        </a>
                                                                        <a class="stat" href="/matches/details/3017092">

                                                                            <div class="status"><span>انتهت</span></div>
                                                                            <div id="reslt3017092" class="results ">
                                                                                <div class="team1G">2 </div>
                                                                                <div class="team2G">0 </div>
                                                                            </div>
                                                                            <span class="matchDate"
                                                                                style="font-size:13px">
                                                                                <span> 15.05.2022 <br> 06:00 م</span>
                                                                            </span>

                                                                        </a>

                                                                        <a class="team2" href="/team/11811/atalanta">
                                                                            <span><img
                                                                                    src="https://img.btolat.com/teamslogo/11811.png"
                                                                                    alt="أتالانتا"
                                                                                    title="أتالانتا"></span>
                                                                            <span class="teamName">أتالانتا</span>
                                                                        </a>

                                                                    </div>

                                                                </div>
                                                            </li>
                                                            <li id="3017103" class="fullMatchBox notYet"
                                                                data-stat="notYet">
                                                                <div class="matchBox">
                                                                    <div class="teams">
                                                                        <a class="team1" href="/team/12013/sassuolo">
                                                                            <span><img
                                                                                    src="https://img.btolat.com/teamslogo/12013.png"
                                                                                    alt="ساسولو" title="ساسولو"></span>
                                                                            <span class="teamName">ساسولو</span>
                                                                        </a>
                                                                        <a class="stat" href="/matches/details/3017103">
                                                                            <div id="reslt3017103" class="results">
                                                                                <div class="team1G"> </div>
                                                                                <div class="team2G"> </div>
                                                                            </div>
                                                                            <span class="matchDate"
                                                                                style="font-size:13px">
                                                                                <span> 22.05.2022 <br> 06:00 م</span>
                                                                            </span>
                                                                        </a>
                                                                        <a class="team2" href="/team/11938/milan">
                                                                            <span><img
                                                                                    src="https://img.btolat.com/teamslogo/11938.png"
                                                                                    alt="ميلان" title="ميلان"></span>
                                                                            <span class="teamName">ميلان</span>
                                                                        </a>
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
                </div>

                <div class="col-xl-4 d-none d-xl-block left-side">
                    <div class="boxes">
                        <div class="box ads">
                            <img src="./assets/images/ads.jpg" alt="" class="img-fluid h-100">
                        </div>

                        <!-- Tabs navs -->
                        <div class="box intro overflow-hidden">
                            <div class="matchCenter">
                                <div class="matchCenterBox light">
                                    <div class="title bg1">
                                        اهم المباريات
                                    </div>
                                    <ul class="nav nav-tabs justify-content-between mb-1 p-0" id="ex1" role="tablist">
                                        <li class="nav-item flex-grow-1" role="presentation">
                                            <a class="nav-link" id="yesterday" data-mdb-toggle="tab"
                                                href="#yesterday-tob" role="tab" aria-controls="yesterday-tob"
                                                aria-selected="false">أمس</a>
                                        </li>
                                        <li class="nav-item flex-grow-1" role="presentation">
                                            <a class="nav-link  active" id="today" data-mdb-toggle="tab"
                                                href="#today-tab" role="tab" aria-controls="today-tab"
                                                aria-selected="true">اليوم</a>
                                        </li>
                                        <li class="nav-item flex-grow-1" role="presentation">
                                            <a class="nav-link" id="tomorrow" data-mdb-toggle="tab" href="#tomorrow-top"
                                                role="tab" aria-controls="tomorrow-top" aria-selected="false">غدا</a>
                                        </li>
                                    </ul>
                                    <!-- Tabs navs -->
                                    <!-- Tabs contet -->
                                    <div class="tab-content" id="ex1-content">
                                        <div class="tab-pane fade" id="yesterday-tob" role="tabpanel"
                                            aria-labelledby="yesterday-tob">
                                            <ul class="list-unstyled p-0">
                                                <li>
                                                    <a href="/matches/details/3150749" class="matchBox">

                                                        <div class="lTitle">
                                                            <span class="type"> الدوري المصري </span>
                                                            <span class="time">
                                                                تفاصيل
                                                            </span>
                                                        </div>
                                                        <div class="teams row">
                                                            <div class="team1 col">
                                                                <span><img
                                                                        src="https://img.btolat.com/teamslogo/33716.png"
                                                                        class="img-fluid" alt="سيراميكا كليوباترا"
                                                                        title="سيراميكا كليوباترا"></span>
                                                                <span class="teamName ">سيراميكا كليوباترا</span>
                                                            </div>

                                                            <div class="stat col text-center">
                                                                <div class="live">
                                                                    <span class="no">انتهت</span>
                                                                </div>
                                                                <span class="matchDate"> 3 - 2 </span>
                                                            </div>
                                                            <div class="team2 col">
                                                                <span><img
                                                                        src="https://img.btolat.com/teamslogo/8902.png"
                                                                        class="img-fluid" alt="الجونة"
                                                                        title="الجونة"></span>
                                                                <span class="teamName">الجونة</span>
                                                            </div>
                                                        </div>
                                                    </a>

                                                </li>
                                                <li>
                                                    <a href="/matches/details/3150749" class="matchBox">

                                                        <div class="lTitle">
                                                            <span class="type"> الدوري المصري </span>
                                                            <span class="time">
                                                                تفاصيل
                                                            </span>
                                                        </div>
                                                        <div class="teams row">
                                                            <div class="team1 col">
                                                                <span><img
                                                                        src="https://img.btolat.com/teamslogo/33716.png"
                                                                        class="img-fluid" alt="سيراميكا كليوباترا"
                                                                        title="سيراميكا كليوباترا"></span>
                                                                <span class="teamName ">سيراميكا كليوباترا</span>
                                                            </div>

                                                            <div class="stat col text-center">
                                                                <div class="live">
                                                                    <span class="no">انتهت</span>
                                                                </div>
                                                                <span class="matchDate"> 3 - 2 </span>
                                                            </div>
                                                            <div class="team2 col">
                                                                <span><img
                                                                        src="https://img.btolat.com/teamslogo/8902.png"
                                                                        class="img-fluid" alt="الجونة"
                                                                        title="الجونة"></span>
                                                                <span class="teamName">الجونة</span>
                                                            </div>
                                                        </div>
                                                    </a>

                                                </li>
                                                <li>
                                                    <a href="/matches/details/3150749" class="matchBox">

                                                        <div class="lTitle">
                                                            <span class="type"> الدوري المصري </span>
                                                            <span class="time">
                                                                تفاصيل
                                                            </span>
                                                        </div>
                                                        <div class="teams row">
                                                            <div class="team1 col">
                                                                <span><img
                                                                        src="https://img.btolat.com/teamslogo/33716.png"
                                                                        class="img-fluid" alt="سيراميكا كليوباترا"
                                                                        title="سيراميكا كليوباترا"></span>
                                                                <span class="teamName ">سيراميكا كليوباترا</span>
                                                            </div>

                                                            <div class="stat col text-center">
                                                                <div class="live">
                                                                    <span class="no">انتهت</span>
                                                                </div>
                                                                <span class="matchDate"> 3 - 2 </span>
                                                            </div>
                                                            <div class="team2 col">
                                                                <span><img
                                                                        src="https://img.btolat.com/teamslogo/8902.png"
                                                                        class="img-fluid" alt="الجونة"
                                                                        title="الجونة"></span>
                                                                <span class="teamName">الجونة</span>
                                                            </div>
                                                        </div>
                                                    </a>

                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane fade  show active" id="today-tab" role="tabpanel"
                                            aria-labelledby="today-tab">
                                            <ul class="list-unstyled p-0">
                                                <li>
                                                    <a href="/matches/details/3150749" class="matchBox">

                                                        <div class="lTitle">
                                                            <span class="type"> الدوري المصري </span>
                                                            <span class="time">
                                                                تفاصيل
                                                            </span>
                                                        </div>
                                                        <div class="teams row">
                                                            <div class="team1 col">
                                                                <span><img
                                                                        src="https://img.btolat.com/teamslogo/33716.png"
                                                                        class="img-fluid" alt="سيراميكا كليوباترا"
                                                                        title="سيراميكا كليوباترا"></span>
                                                                <span class="teamName ">سيراميكا كليوباترا</span>
                                                            </div>

                                                            <div class="stat col text-center">
                                                                <div class="live">
                                                                    <span class="notYet">لم تبدأ</span>
                                                                </div>
                                                                <span class="matchDate"> 3 - 2 </span>
                                                            </div>
                                                            <div class="team2 col">
                                                                <span><img
                                                                        src="https://img.btolat.com/teamslogo/8902.png"
                                                                        class="img-fluid" alt="الجونة"
                                                                        title="الجونة"></span>
                                                                <span class="teamName">الجونة</span>
                                                            </div>
                                                        </div>
                                                    </a>

                                                </li>
                                                <li>
                                                    <a href="/matches/details/3150749" class="matchBox">

                                                        <div class="lTitle">
                                                            <span class="type"> الدوري المصري </span>
                                                            <span class="time">
                                                                تفاصيل
                                                            </span>
                                                        </div>
                                                        <div class="teams row">
                                                            <div class="team1 col">
                                                                <span><img
                                                                        src="https://img.btolat.com/teamslogo/33716.png"
                                                                        class="img-fluid" alt="سيراميكا كليوباترا"
                                                                        title="سيراميكا كليوباترا"></span>
                                                                <span class="teamName ">سيراميكا كليوباترا</span>
                                                            </div>

                                                            <div class="stat col text-center">
                                                                <div class="live">
                                                                    <span class="notYet">لم تبدأ</span>
                                                                </div>
                                                                <span class="matchDate"> 3 - 2 </span>
                                                            </div>
                                                            <div class="team2 col">
                                                                <span><img
                                                                        src="https://img.btolat.com/teamslogo/8902.png"
                                                                        class="img-fluid" alt="الجونة"
                                                                        title="الجونة"></span>
                                                                <span class="teamName">الجونة</span>
                                                            </div>
                                                        </div>
                                                    </a>

                                                </li>
                                                <li>
                                                    <a href="/matches/details/3150749" class="matchBox">

                                                        <div class="lTitle">
                                                            <span class="type"> الدوري المصري </span>
                                                            <span class="time">
                                                                تفاصيل
                                                            </span>
                                                        </div>
                                                        <div class="teams row">
                                                            <div class="team1 col">
                                                                <span><img
                                                                        src="https://img.btolat.com/teamslogo/33716.png"
                                                                        class="img-fluid" alt="سيراميكا كليوباترا"
                                                                        title="سيراميكا كليوباترا"></span>
                                                                <span class="teamName ">سيراميكا كليوباترا</span>
                                                            </div>

                                                            <div class="stat col text-center">
                                                                <div class="live">
                                                                    <span class="notYet">لم تبدأ</span>
                                                                </div>
                                                                <span class="matchDate"> 3 - 2 </span>
                                                            </div>
                                                            <div class="team2 col">
                                                                <span><img
                                                                        src="https://img.btolat.com/teamslogo/8902.png"
                                                                        class="img-fluid" alt="الجونة"
                                                                        title="الجونة"></span>
                                                                <span class="teamName">الجونة</span>
                                                            </div>
                                                        </div>
                                                    </a>

                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane fade" id="tomorrow-top" role="tabpanel"
                                            aria-labelledby="tomorrow-top">
                                            <ul class="list-unstyled p-0">
                                                <li>
                                                    <a href="/matches/details/3150749" class="matchBox">

                                                        <div class="lTitle">
                                                            <span class="type"> الدوري المصري </span>
                                                            <span class="time">
                                                                تفاصيل
                                                            </span>
                                                        </div>
                                                        <div class="teams row">
                                                            <div class="team1 col">
                                                                <span><img
                                                                        src="https://img.btolat.com/teamslogo/33716.png"
                                                                        class="img-fluid" alt="سيراميكا كليوباترا"
                                                                        title="سيراميكا كليوباترا"></span>
                                                                <span class="teamName ">سيراميكا كليوباترا</span>
                                                            </div>

                                                            <div class="stat col text-center">
                                                                <div class="live">
                                                                    <span class="notYet">لم تبدأ</span>
                                                                </div>
                                                                <span class="matchDate"> 3 - 2 </span>
                                                            </div>
                                                            <div class="team2 col">
                                                                <span><img
                                                                        src="https://img.btolat.com/teamslogo/8902.png"
                                                                        class="img-fluid" alt="الجونة"
                                                                        title="الجونة"></span>
                                                                <span class="teamName">الجونة</span>
                                                            </div>
                                                        </div>
                                                    </a>

                                                </li>
                                                <li>
                                                    <a href="/matches/details/3150749" class="matchBox">

                                                        <div class="lTitle">
                                                            <span class="type"> الدوري المصري </span>
                                                            <span class="time">
                                                                تفاصيل
                                                            </span>
                                                        </div>
                                                        <div class="teams row">
                                                            <div class="team1 col">
                                                                <span><img
                                                                        src="https://img.btolat.com/teamslogo/33716.png"
                                                                        class="img-fluid" alt="سيراميكا كليوباترا"
                                                                        title="سيراميكا كليوباترا"></span>
                                                                <span class="teamName ">سيراميكا كليوباترا</span>
                                                            </div>

                                                            <div class="stat col text-center">
                                                                <div class="live">
                                                                    <span class="notYet">لم تبدأ</span>
                                                                </div>
                                                                <span class="matchDate"> 3 - 2 </span>
                                                            </div>
                                                            <div class="team2 col">
                                                                <span><img
                                                                        src="https://img.btolat.com/teamslogo/8902.png"
                                                                        class="img-fluid" alt="الجونة"
                                                                        title="الجونة"></span>
                                                                <span class="teamName">الجونة</span>
                                                            </div>
                                                        </div>
                                                    </a>

                                                </li>
                                                <li>
                                                    <a href="/matches/details/3150749" class="matchBox">

                                                        <div class="lTitle">
                                                            <span class="type"> الدوري المصري </span>
                                                            <span class="time">
                                                                تفاصيل
                                                            </span>
                                                        </div>
                                                        <div class="teams row">
                                                            <div class="team1 col">
                                                                <span><img
                                                                        src="https://img.btolat.com/teamslogo/33716.png"
                                                                        class="img-fluid" alt="سيراميكا كليوباترا"
                                                                        title="سيراميكا كليوباترا"></span>
                                                                <span class="teamName ">سيراميكا كليوباترا</span>
                                                            </div>

                                                            <div class="stat col text-center">
                                                                <div class="live">
                                                                    <span class="notYet">لم تبدأ</span>
                                                                </div>
                                                                <span class="matchDate"> 3 - 2 </span>
                                                            </div>
                                                            <div class="team2 col">
                                                                <span><img
                                                                        src="https://img.btolat.com/teamslogo/8902.png"
                                                                        class="img-fluid" alt="الجونة"
                                                                        title="الجونة"></span>
                                                                <span class="teamName">الجونة</span>
                                                            </div>
                                                        </div>
                                                    </a>

                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <a class="moreMatchesLink" href="/matches"> كل المباريات <i
                                            class="fa-solid fa-angle-left"></i></a>
                                </div>
                            </div>
                        </div>

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
                                                <h3>فلافيو: أملي في تدريب الأهلي زاد بعد تولي موسيماني.. وتمنيت اللعب
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
                                                <h3>فلافيو: أملي في تدريب الأهلي زاد بعد تولي موسيماني.. وتمنيت اللعب
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
                                                <h3>فلافيو: أملي في تدريب الأهلي زاد بعد تولي موسيماني.. وتمنيت اللعب
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
                                                <h3>فلافيو: أملي في تدريب الأهلي زاد بعد تولي موسيماني.. وتمنيت اللعب
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
                                                <h3>فلافيو: أملي في تدريب الأهلي زاد بعد تولي موسيماني.. وتمنيت اللعب
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
                                                <h3>فلافيو: أملي في تدريب الأهلي زاد بعد تولي موسيماني.. وتمنيت اللعب
                                                    بجوار
                                                    ثنائي الزمالك</h3>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="box mostRead">
                            <h2 class="title text-end me-3">الاكثر مشاهدة</h1>
                                <div class="most">
                                    <span class="number">1</span>
                                    <a href="/news/282752">
                                        <h2>كاف يوضح تفاصيل اختيار ملعب نهائي دوري أبطال إفريقيا.. ويرد على الأهلي </h2>
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
                                        <h2>بين بنزيما ومحمد صلاح ومبابي.. جوتي يختار اللاعب الأحق بالكرة الذهبية 2022
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
</section>

<?php include 'layouts/footer.php'; ?>