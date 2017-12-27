<?php include 'header.php';?>
        <div class="content-wrapper">
            <section class="content-header">
                <h1>
                    داشبورد
                </h1>
            </section>
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-lg-12 connectedSortable">
                            <div class="box box-info">
                                <form action="/ticket/_addticket" method="post">
                                    <input name="__RequestVerificationToken" type="hidden" value="P-atNtfo9AX6JSBUmgpKSnvuHdLzQ_gbeNH5fEZCbidkNkKadZIV-Dri5S9ZH2y2sYG1lSCx1T6QZ37HptX_ZDYJyRg5HzR2W7RsbrQyRDwxK5PNMBvPCboSHR0_ocosV6MG5JmZ3iz8j1gnCHW9PQ2" /> <div class="box-header">
                                        <i class="fa fa-envelope"></i>
                                        <h3 class="box-title">ایجاد تیکت جدید</h3>
                                    </div>
                                    <div class="box-body">
                                        <div class="form-horizontal">
                                            <div class="form-group">
                                                <label class="control-label col-md-2" for="Title">عنوان تیکت</label>
                                                <div class="col-md-10">
                                                    <input class="form-control text-box single-line" data-val="true" data-val-length="طول عنوان تیکت بایست 550 و حداکثر 550 حرف باشد" data-val-length-max="550" data-val-required="پر کردن فیلد &#39;عنوان تیکت&#39; الزامیست." id="Title" name="Title" placeholder="عنوان اصلی" type="text" value="" />
                                                    <span class="field-validation-valid text-danger" data-valmsg-for="Title" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-2" for="Section">ارجاع به</label>
                                                <div class="col-md-10">
                                                    <select class="form-control" data-val="true" data-val-required="پر کردن فیلد &#39;ارجاع به&#39; الزامیست." id="Section" name="Section">
                                                        <option selected="selected" value="0">واحد پشتیبانی</option>
                                                        <option value="1">امور مالی</option>
                                                        <option value="2">واحد فنی</option>
                                                        <option value="3">واحد دیگر</option>
                                                      
                                                    </select>
                                                    <span class="field-validation-valid text-danger" data-valmsg-for="Section" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-2" for="Note">سوال یا مشکل</label>
                                                <div class="col-md-10">
                                                    <textarea class="form-control text-box multi-line" data-val="true" data-val-length="طول سوال یا مشکل بایست 1550 و حداکثر 1550 حرف باشد" data-val-length-max="1550" data-val-required="پر کردن فیلد &#39;سوال یا مشکل&#39; الزامیست." id="Note" name="Note" placeholder="سوال یا موضوعی که به راهنمایی نیاز دارد را با ما در میان بگذرید" rows="5"></textarea>
                                                    <span class="field-validation-valid text-danger" data-valmsg-for="Note" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box-footer clearfix">
                                        <div class="col-md-10 col-md-offset-2">
                                            <button type="submit" class="btn btn-labeled bg-orange-active"> <i class="fa fa-send"></i> ارسال</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>


                    </div>
                </div>
            </section>
        </div>
        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <a href="#">لورم</a> &copy; 2015-2016
            </div>
            <div class="pull-left">
                <ul class="social list-unstyled list-inline" itemscope itemtype="http://schema.org/Organization">
                    <li><a itemprop="sameAs" target="_blank" href="//www.facebook.com/#" title="# facebook fanpage"><i class="fa fa-facebook"></i><span class="sr-only">صفحه فیسبوک </span></a></li>
                    <li><a itemprop="sameAs" target="_blank" href="//twitter.com/#"><i class="fa fa-twitter" title="# twitter"></i><span class="sr-only">توئیتر </span></a></li>
                    <li><a itemprop="sameAs" target="_blank" href="//www.google.com/#" rel="publisher" title="# google plus"><i class="fa fa-google-plus"></i><span class="sr-only">گوگل پلاس </span></a></li>
                    <li><a itemprop="sameAs" target="_blank" href="//www.linkedin.com/company/#" title="# linkedin page"><i class="fa fa-linkedin"></i><span class="sr-only">لینکداین </span></a></li>
                    <li><a itemprop="sameAs" target="_blank" href="//instagram.com/#?ref=badge" title="# instagram"><i class="fa fa-instagram"><span class="sr-only">اینستاگرام </span></i></a></li>
                    <li><a target="_blank" href="#" title="# feed"><i class="fa fa-rss"></i><span class="sr-only">اشتراک فید </span></a></li>
                    <li class="hidden"><a itemprop="url" href="https://#/">لورم</a></li>
                </ul>
            </div>
        </footer>
        <div class="control-sidebar-bg"></div>
    </div>


    <script src="Scripts/jquery.min.js"></script>
    <script src="Scripts/bootstrap.rtl.min.js"></script>
    <script src="Scripts/panel.js"></script>

</body>
</html>