
<section class="wrap-page-gray2 mt-5 py-5 rtl">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2">
                <div class="row">
                    <aside class="col-lg-12 col-md-12 col-sm-2 px-0 mx-3 menu-dash shadow">

                        <div class="accordion" id="accordionExample">


                            <div class="card my-1">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" type="button" data-target="" aria-expanded="true"
                                                aria-controls="collapseOne">
                                            ثبت سفارش
                                        </button>
                                    </h5>
                                </div>
                            </div>

                            <div class="card my-1">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" type="button" data-toggle="collapse"
                                                data-target="#collapseOne" aria-expanded="false"
                                                aria-controls="collapseOne">
                                            پیگیری سفارشات
                                            <img class="accordion-plus" src="<?php echo URLROOT;?>/img/left-arrow.svg" alt="">

                                        </button>
                                    </h5>
                                </div>

                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                     data-parent="#accordionExample">
                                    <div class="card-body">
                                        <ul>
                                            <li>تایید پیش فاکتور</li>
                                            <li>پیگیری سفارشات</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="card my-1">
                                <div class="card-header" id="headingTwo">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed pdp-accord-toggle" type="button"
                                                data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
                                                aria-controls="collapseTwo">
                                            خدمات مالی
                                            <img class="accordion-plus" src="<?php echo URLROOT;?>/img/left-arrow.svg" alt="">
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo"
                                     data-parent="#accordionExample">
                                    <div class="card-body">
                                        <ul>
                                            <li><a href="">فاکتورهای سررسید شده</a></li>
                                            <li><a href="">درخواست صورتحساب</a></li>
                                            <li><a href="">مانده بدهی</a></li>
                                            <li><a href="/dashboard/deposit">واریز به حساب</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="card my-1">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" type="button">
                                            ارسال فایل
                                        </button>
                                    </h5>
                                </div>
                            </div>

                            <div class="card my-1">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" type="button">
                                            ثبت شکایات
                                        </button>
                                    </h5>
                                </div>
                            </div>

                            <div class="card my-1">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" type="button">
                                            نقد و نظرات
                                        </button>
                                    </h5>
                                </div>
                            </div>

                            <div class="card my-1">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" type="button">
                                            ارتباط با ما
                                        </button>
                                    </h5>
                                </div>
                            </div>



                        </div>

                    </aside>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="row">

                    <main class="col-lg-12 col-md-12 col-sm-12 py-3 mx-5 shadow rounded main-dash">
                      <h2>واریز به حساب</h2>
                      <form class="py-3 m-lg-5 offset-md-2">
                      <div class="form-group py-2">
                        <label for="exampleFormControlInput1">مبلغ به ریال</label>
                        <input class="mablagh form-control" id="exampleFormControlInput1" placeholder="مبلغ به ریال" value="">
                      </div>
                      <div class="form-check form-check-inline py-2">
                      <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="<?php echo $_SESSION['asrremain'];?>">
                      <label class="form-check-label" for="inlineCheckbox1">مانده حساب فعلی: <span class="mablagh "><?php echo $_SESSION['asrremain'];?></span>  ریال</label>
                    </div>
                      <div class="form-group py-2">
                        <label for="exampleFormControlTextarea1"> توضیحات واریز</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>
                      <button type="submit" class="btn btn-success">اتصال به درگاه بانک</button>

                    </form>


                    </main>
                </div>
            </div>

        </div>
    </div>
</section>
