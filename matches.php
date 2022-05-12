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
                        <div class="nav nav-tabs justify-content-between" id="nav-tab" role="tablist">
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

                                    <ul>
                                        <li id="2994140" class="fullMatchBox notYet" data-stat="notYet">



                                            <div class="matchBox">
                                                <div class="teams">
                                                    <a class="team1" href="/team/9406/tottenham-hotspur">
                                                        <span><img src="https://img.btolat.com/teamslogo/9406.png"
                                                                alt="توتنهام هوتسبر" title="توتنهام هوتسبر"></span>
                                                        <h3 class="teamName">توتنهام هوتسبر</h3>
                                                    </a>

                                                    <a class="stat" href="/matches/details/2994140">

                                                        <div class="status"><span>لم تبدأ</span></div>
                                                        <div id="reslt2994140" class="results clearfix">
                                                            <div class="team1G"></div>
                                                            <div class="team2G"></div>
                                                        </div>
                                                        <span class="matchDate" id="timer2994140"> <span>08:45 م</span>
                                                        </span>




                                                    </a>

                                                    <a class="team2" href="/team/9002/arsenal">
                                                        <span><img src="https://img.btolat.com/teamslogo/9002.png"
                                                                alt="آرسنال" title="آرسنال"></span>
                                                        <h3 class="teamName">آرسنال</h3>
                                                    </a>


                                                    <div class="clearfix"></div>
                                                    <div class="teamsfooter">
                                                        <span content="توتنهام هوتسبر ضد آرسنال" itemprop="name">
                                                            توتنهام هوتسبر ضد آرسنال
                                                        </span> فى <span>الدوري الإنجليزي</span>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </li>









                                    </ul>

                                </div>
                                <div class="matchtableX" data-stat-notyet="" data-leg-name="1399">
                                    <div class="matchBox title row dark">
                                        <div class="col">
                                            <div class="row">
                                                <div class="col-2"><img
                                                        src="https://img.btolat.com/tourlogo/ed687795-f506-4c5f-a66e-a9520d80c697.png"
                                                        class="img-responsive" alt="الدوري الاسباني"></div>
                                                <h2 class="col-10 legTitle">الدوري الاسباني</h2>
                                            </div>
                                        </div>
                                        <div class="col newsLinks">
                                            <div class="row">
                                                <a href="/league/news/1399/primera" class="col">اخبار</a>
                                                <a href="/league/videos/1399/primera" class="col">فيديو</a>
                                                <a href="/league/standings/1399/primera" class="col">ترتيب</a>
                                                <a href="/league/fixtures/1399/primera" class="col">مباريات</a>
                                            </div>
                                        </div>
                                    </div>

                                    <ul>
                                        <li id="3004913" class="fullMatchBox notYet" data-stat="notYet">



                                            <div class="matchBox">
                                                <div class="teams">
                                                    <a class="team1" href="/team/16117/real-sociedad">
                                                        <span><img src="https://img.btolat.com/teamslogo/16117.png"
                                                                alt="ريال سوسيداد" title="ريال سوسيداد"></span>
                                                        <h3 class="teamName">ريال سوسيداد</h3>
                                                    </a>

                                                    <a class="stat" href="/matches/details/3004913">

                                                        <div class="status"><span>لم تبدأ</span></div>
                                                        <div id="reslt3004913" class="results clearfix">
                                                            <div class="team1G"></div>
                                                            <div class="team2G"></div>
                                                        </div>
                                                        <span class="matchDate" id="timer3004913"> <span>07:00 م</span>
                                                        </span>




                                                    </a>

                                                    <a class="team2" href="/team/15721/c-diz">
                                                        <span><img src="https://img.btolat.com/teamslogo/15721.png"
                                                                alt="قادش" title="قادش"></span>
                                                        <h3 class="teamName">قادش</h3>
                                                    </a>


                                                    <div class="clearfix"></div>
                                                    <div class="teamsfooter">
                                                        <span content="ريال سوسيداد ضد قادش" itemprop="name">
                                                            ريال سوسيداد ضد قادش
                                                        </span> فى <span>الدوري الاسباني</span>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </li>
                                        <li id="3004916" class="fullMatchBox notYet" data-stat="notYet">



                                            <div class="matchBox">
                                                <div class="teams">
                                                    <a class="team1" href="/team/16098/rayo-vallecano">
                                                        <span><img src="https://img.btolat.com/teamslogo/16098.png"
                                                                alt="رايو فاييكانو" title="رايو فاييكانو"></span>
                                                        <h3 class="teamName">رايو فاييكانو</h3>
                                                    </a>

                                                    <a class="stat" href="/matches/details/3004916">

                                                        <div class="status"><span>لم تبدأ</span></div>
                                                        <div id="reslt3004916" class="results clearfix">
                                                            <div class="team1G"></div>
                                                            <div class="team2G"></div>
                                                        </div>
                                                        <span class="matchDate" id="timer3004916"> <span>08:00 م</span>
                                                        </span>




                                                    </a>

                                                    <a class="team2" href="/team/16270/villarreal">
                                                        <span><img src="https://img.btolat.com/teamslogo/16270.png"
                                                                alt="فياريال" title="فياريال"></span>
                                                        <h3 class="teamName">فياريال</h3>
                                                    </a>


                                                    <div class="clearfix"></div>
                                                    <div class="teamsfooter">
                                                        <span content="رايو فاييكانو ضد فياريال" itemprop="name">
                                                            رايو فاييكانو ضد فياريال
                                                        </span> فى <span>الدوري الاسباني</span>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </li>
                                        <li id="3004912" class="fullMatchBox notYet" data-stat="notYet">



                                            <div class="matchBox">
                                                <div class="teams">
                                                    <a class="team1" href="/team/16110/real-madrid">
                                                        <span><img src="https://img.btolat.com/teamslogo/16110.png"
                                                                alt="ريال مدريد" title="ريال مدريد"></span>
                                                        <h3 class="teamName">ريال مدريد</h3>
                                                    </a>

                                                    <a class="stat" href="/matches/details/3004912">

                                                        <div class="status"><span>لم تبدأ</span></div>
                                                        <div id="reslt3004912" class="results clearfix">
                                                            <div class="team1G"></div>
                                                            <div class="team2G"></div>
                                                        </div>
                                                        <span class="matchDate" id="timer3004912"> <span>09:30 م</span>
                                                        </span>




                                                    </a>

                                                    <a class="team2" href="/team/16043/levante">
                                                        <span><img src="https://img.btolat.com/teamslogo/16043.png"
                                                                alt="ليفانتي" title="ليفانتي"></span>
                                                        <h3 class="teamName">ليفانتي</h3>
                                                    </a>


                                                    <div class="clearfix"></div>
                                                    <div class="teamsfooter">
                                                        <span content="ريال مدريد ضد ليفانتي" itemprop="name">
                                                            ريال مدريد ضد ليفانتي
                                                        </span> فى <span>الدوري الاسباني</span>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </li>









                                    </ul>

                                </div>
                                <div class="matchtableX" data-stat-notyet="" data-leg-name="1368">
                                    <div class="matchBox title row dark">
                                        <div class="col">
                                            <div class="row">
                                                <div class="col-2"><img
                                                        src="https://img.btolat.com/tourlogo/f042a93b-625f-498f-bc1d-bf6b68c84fd5.png"
                                                        class="img-responsive" alt="الدوري السعودي"></div>
                                                <h2 class="col-10 legTitle">الدوري السعودي</h2>
                                            </div>
                                        </div>
                                        <div class="col newsLinks">
                                            <div class="row">
                                                <a href="/league/news/1368/saudi-professional-league"
                                                    class="col">اخبار</a>
                                                <a href="/league/videos/1368/saudi-professional-league"
                                                    class="col">فيديو</a>
                                                <a href="/league/standings/1368/saudi-professional-league"
                                                    class="col">ترتيب</a>
                                                <a href="/league/fixtures/1368/saudi-professional-league"
                                                    class="col">مباريات</a>
                                            </div>
                                        </div>
                                    </div>

                                    <ul>
                                        <li id="3141482" class="fullMatchBox notYet" data-stat="notYet">



                                            <div class="matchBox">
                                                <div class="teams">
                                                    <a class="team1" href="/team/15019/al-taawon">
                                                        <span><img src="https://img.btolat.com/teamslogo/15019.png"
                                                                alt="التعاون" title="التعاون"></span>
                                                        <h3 class="teamName">التعاون</h3>
                                                    </a>

                                                    <a class="stat" href="/matches/details/3141482">

                                                        <div class="status"><span>لم تبدأ</span></div>
                                                        <div id="reslt3141482" class="results clearfix">
                                                            <div class="team1G"></div>
                                                            <div class="team2G"></div>
                                                        </div>
                                                        <span class="matchDate" id="timer3141482"> <span>06:20 م</span>
                                                        </span>




                                                    </a>

                                                    <a class="team2" href="/team/14994/al-batin">
                                                        <span><img src="https://img.btolat.com/teamslogo/14994.png"
                                                                alt="الباطن" title="الباطن"></span>
                                                        <h3 class="teamName">الباطن</h3>
                                                    </a>


                                                    <div class="clearfix"></div>
                                                    <div class="teamsfooter">
                                                        <span content="التعاون ضد الباطن" itemprop="name">
                                                            التعاون ضد الباطن
                                                        </span> فى <span>الدوري السعودي</span>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </li>
                                        <li id="3141483" class="fullMatchBox notYet" data-stat="notYet">



                                            <div class="matchBox">
                                                <div class="teams">
                                                    <a class="team1" href="/team/15017/al-shabab">
                                                        <span><img src="https://img.btolat.com/teamslogo/15017.png"
                                                                alt="الشباب السعودي" title="الشباب السعودي"></span>
                                                        <h3 class="teamName">الشباب السعودي</h3>
                                                    </a>

                                                    <a class="stat" href="/matches/details/3141483">

                                                        <div class="status"><span>لم تبدأ</span></div>
                                                        <div id="reslt3141483" class="results clearfix">
                                                            <div class="team1G"></div>
                                                            <div class="team2G"></div>
                                                        </div>
                                                        <span class="matchDate" id="timer3141483"> <span>07:50 م</span>
                                                        </span>




                                                    </a>

                                                    <a class="team2" href="/team/14997/al-faisaly">
                                                        <span><img src="https://img.btolat.com/teamslogo/14997.png"
                                                                alt="الفيصلي" title="الفيصلي"></span>
                                                        <h3 class="teamName">الفيصلي</h3>
                                                    </a>


                                                    <div class="clearfix"></div>
                                                    <div class="teamsfooter">
                                                        <span content="الشباب السعودي ضد الفيصلي" itemprop="name">
                                                            الشباب السعودي ضد الفيصلي
                                                        </span> فى <span>الدوري السعودي</span>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </li>









                                    </ul>

                                </div>
                                <div class="matchtableX" data-stat-ended="" data-stat-notyet="" data-leg-name="1535">
                                    <div class="matchBox title row dark">
                                        <div class="col">
                                            <div class="row">
                                                <div class="col-2"><img
                                                        src="https://img.btolat.com/tourlogo/a3be84cc-a923-4785-9ae6-ba2fe10dee71.png"
                                                        class="img-responsive" alt="مباريات ودية منتخبات"></div>
                                                <h2 class="col-10 legTitle">مباريات ودية منتخبات</h2>
                                            </div>
                                        </div>
                                        <div class="col newsLinks">
                                            <div class="row">
                                                <a href="/league/news/1535/friendlies" class="col">اخبار</a>
                                                <a href="/league/videos/1535/friendlies" class="col">فيديو</a>
                                                <a href="/league/standings/1535/friendlies" class="col">ترتيب</a>
                                                <a href="/league/fixtures/1535/friendlies" class="col">مباريات</a>
                                            </div>
                                        </div>
                                    </div>

                                    <ul>
                                        <li id="3153086" class="ended" data-stat="ended">



                                            <div class="matchBox">
                                                <div class="teams">
                                                    <a class="team1" href="/team/18207/montenegro-u19">
                                                        <span><img src="https://img.btolat.com/" alt="Montenegro U19"
                                                                title="Montenegro U19"></span>
                                                        <h3 class="teamName">Montenegro U19</h3>
                                                    </a>

                                                    <a class="stat" href="/matches/details/3153086">

                                                        <div class="status"><span>انتهت</span></div>
                                                        <div id="reslt3153086" class="results clearfix">
                                                            <div class="team1G">1</div>
                                                            <div class="team2G">1</div>
                                                        </div>




                                                    </a>

                                                    <a class="team2" href="/team/23982/bosnia-herzegovina-u19">
                                                        <span><img src="https://img.btolat.com/"
                                                                alt="Bosnia Herzegovina U19"
                                                                title="Bosnia Herzegovina U19"></span>
                                                        <h3 class="teamName">Bosnia &amp; Herzegovina U19</h3>
                                                    </a>


                                                    <div class="clearfix"></div>
                                                    <div class="teamsfooter">
                                                        <span content="Montenegro U19 ضد Bosnia &amp; Herzegovina U19"
                                                            itemprop="name">
                                                            Montenegro U19 ضد Bosnia &amp; Herzegovina U19
                                                        </span> فى <span>مباريات ودية منتخبات</span>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </li>
                                        <li id="3153198" class="fullMatchBox notYet" data-stat="notYet">



                                            <div class="matchBox">
                                                <div class="teams">
                                                    <a class="team1" href="/team/8828/dominica">
                                                        <span><img src="https://img.btolat.com/teamslogo/8828.png"
                                                                alt="دومينيكا" title="دومينيكا"></span>
                                                        <h3 class="teamName">دومينيكا</h3>
                                                    </a>

                                                    <a class="stat" href="/matches/details/3153198">

                                                        <div class="status"><span>لم تبدأ</span></div>
                                                        <div id="reslt3153198" class="results clearfix">
                                                            <div class="team1G"></div>
                                                            <div class="team2G"></div>
                                                        </div>
                                                        <span class="matchDate" id="timer3153198"> <span>09:00 م</span>
                                                        </span>




                                                    </a>

                                                    <a class="team2" href="/team/16307/st-vincent-grenadines">
                                                        <span><img src="https://img.btolat.com/teamslogo/16307.png"
                                                                alt="سانت فينسنت وغرينادينز"
                                                                title="سانت فينسنت وغرينادينز"></span>
                                                        <h3 class="teamName">سانت فينسنت وغرينادينز</h3>
                                                    </a>


                                                    <div class="clearfix"></div>
                                                    <div class="teamsfooter">
                                                        <span content="دومينيكا ضد سانت فينسنت وغرينادينز"
                                                            itemprop="name">
                                                            دومينيكا ضد سانت فينسنت وغرينادينز
                                                        </span> فى <span>مباريات ودية منتخبات</span>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </li>
                                        <li id="3153220" class="fullMatchBox notYet" data-stat="notYet">



                                            <div class="matchBox">
                                                <div class="teams">
                                                    <a class="team1" href="/team/6601/bahamas">
                                                        <span><img src="https://img.btolat.com/teamslogo/6601.png"
                                                                alt="باهاماس" title="باهاماس"></span>
                                                        <h3 class="teamName">باهاماس</h3>
                                                    </a>

                                                    <a class="stat" href="/matches/details/3153220">

                                                        <div class="status"><span>لم تبدأ</span></div>
                                                        <div id="reslt3153220" class="results clearfix">
                                                            <div class="team1G"></div>
                                                            <div class="team2G"></div>
                                                        </div>
                                                        <span class="matchDate" id="timer3153220"> <span>01:30 ص</span>
                                                        </span>

                                                    </a>

                                                    <a class="team2" href="/team/17124/turks-and-caicos-islands">
                                                        <span><img src="https://img.btolat.com/teamslogo/17124.png"
                                                                alt="جزر تركس وكايكوس" title="جزر تركس وكايكوس"></span>
                                                        <h3 class="teamName">جزر تركس وكايكوس</h3>
                                                    </a>


                                                    <div class="clearfix"></div>
                                                    <div class="teamsfooter">
                                                        <span content="باهاماس ضد جزر تركس وكايكوس" itemprop="name">
                                                            باهاماس ضد جزر تركس وكايكوس
                                                        </span> فى <span>مباريات ودية منتخبات</span>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </li>









                                    </ul>

                                </div>
                            </div>
                            <div class="tab-pane fade" id="ended" role="tabpanel" aria-labelledby="ended-tab"></div>
                            <div class="tab-pane fade" id="live" role="tabpanel" aria-labelledby="live-tab"></div>
                            <div class="tab-pane fade" id="notYet" role="tabpanel" aria-labelledby="notYet-tab">
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </div>
</section>
<?php include 'layouts/footer.php'; ?>