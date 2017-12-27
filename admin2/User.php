<?php include 'header.php' ?>
        <div class="content-wrapper">
            <section class="content-header">
                <h1>
                    داشبورد
                </h1>
            </section>
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box box-danger">
                            <div class="box-header with-border ui-sortable-handle" style="cursor: move;">
                                <h3 class="box-title">آخرین کاربران</h3>
                                <div class="box-tools pull-right">
                                    <span class="label label-danger">8 کاربر جدید</span>
                                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                                </div>
                            </div><!-- /.box-header -->
                            <div class="box-body no-padding">
                                <ul class="users-list clearfix">
                                    <?php
                                    $users_query=mysqli_query($connect,"SELECT id,fullname FROM t_user");
                                    $users=mysqli_fetch_all($users_query,MYSQLI_ASSOC);
                                    foreach ($users as $item){
                                    ?>

                                    <li>
                                        <img src="Images/user<?php echo $item['id'];  ?>-128x128.jpg" alt="User Image">
                                        <a class="users-list-name" href="#">

<?php echo $item['fullname']; ?>



                                        </a>
                                        <span class="users-list-date">امروز</span>
                                    </li>
<?php } ?>
                                </ul><!-- /.users-list -->
                            </div><!-- /.box-body -->
                            <div class="box-footer text-center">
                                <a href="javascript::" class="uppercase">مشاهده تمام کاربران</a>
                            </div><!-- /.box-footer -->
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