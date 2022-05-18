<?php include 'layouts/header.php'; ?>
<section>
    <div class="allNews pages">
        <div class="container  pt-3">
            <div class="row">
                <div class="col-xl-8 right-side overflow-auto">
                    <h2 class="title">أحدث الأخبار</h2>
                    <div class="container">

                        <div class="row news px-2">
                            <?php
                                for ($i=1; $i <= 36; $i++) { 
                                ?>
                            <div class="new col-sm-6 col-lg-4">
                                <div class="card news">
                                    <a href="singleNews.php">
                                        <div class="card-header position-relative p-0">
                                            <img src="./assets/images/medium.jpg" alt="yallagoal" class="card-img-top">
                                        </div>
                                        <div class="card-body p-0">
                                            <h3 class="card-title">
                                                مرتضى منصور: تنبأت بخسارة الزمالك أمام إنبي.. ولن نلعب في استاد القاهرة
                                                مرة
                                                أخرى
                                            </h3>
                                        </div>
                                    </a>
                                    <a href="#" class="categoryTag">الدوري المصري</a>
                                    <div class="newsFooter"> <span class="time">منذ 11 ساعة </span> </div>
                                </div>
                            </div>
                            <?php } ?>
                            <nav class="mb-4 mt-2" aria-label="Page navigation">
                            <ul class="pagination p-0 mt-3 justify-content-center">
                                    <li class="page-item disabled"><a class="page-link" href="#">السابق</a></li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                    <li class="page-item"><a class="page-link" href="#">6</a></li>
                                    <li class="page-item"><span class="page-link ellipse clickable">…</span></li>
                                    <li class="page-item"><a href="#" class="page-link">10</a></li>
                                    <li class="page-item"><a href="#" class="page-link">12</a></li>
                                    <li class="page-item"><a class="page-link" href="#">التالي</a></li>
                                </ul>
                            </nav>
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