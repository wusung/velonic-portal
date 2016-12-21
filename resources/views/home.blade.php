<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <link rel="shortcut icon" href="img/favicon_1.ico">

        <title>Velonic - Responsive Admin Dashboard Template</title>

        <!-- Bootstrap core CSS -->
        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <link href="/css/bootstrap-reset.css" rel="stylesheet">

        <!--Animation css-->
        <link href="/css/animate.css" rel="stylesheet">

        <!--Icon-fonts css-->
        <link href="/css/font-awesome.css" rel="stylesheet" />
        <link href="/css/ionicons.min.css" rel="stylesheet" />
        <link href="/css/material-design-iconic-font.min.css" rel="stylesheet" />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css" />

        <!-- Custom styles for this template -->
        <link href="/css/style.css" rel="stylesheet">
        <link href="/css/helper.css" rel="stylesheet">

         <style media="screen">
          .about-links-item {
            list-style-type: none;
            padding: 0;
          }
          .fc-event {
            font-size: 10px;
          }
         </style>

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
        <!--[if lt IE 9]>
          <script src="js/html5shiv.js"></script>
          <script src="js/respond.min.js"></script>
        <![endif]-->

    </head>


    <body>

        <!-- Aside Start-->
        <aside class="left-panel">

            <!-- brand -->
            <div class="logo">
                <a href="index.html" class="logo-expanded">
                    <i class="ion-social-buffer"></i>
                    <span class="nav-label">KKBOX Group</span>
                </a>
            </div>
            <!-- / brand -->

            <!-- Navbar Start -->
            <nav class="navigation">
                <ul class="list-unstyled">
                    <li class=""><a href="/home">
                      <i class="zmdi zmdi-view-dashboard"></i> <span class="nav-label">Home</span></a>
                    </li>
                </ul>
            </nav>

        </aside>
        <!-- Aside Ends-->

        <!--Main Content Start -->
        <section class="content">

            <!-- Header -->
            <header class="top-head container-fluid">
                <button type="button" class="navbar-toggle pull-left">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Search -->
                <form role="search" class="navbar-left app-search pull-left hidden-xs">
                  <input type="text" placeholder="Search..." class="form-control">
                  <a href=""><i class="fa fa-search"></i></a>
                </form>

                <!-- Left navbar -->
                <nav class=" navbar-default" role="navigation">

                    <!-- Right navbar -->
                    <ul class="nav navbar-nav navbar-right top-menu top-right-menu">
                        <!-- mesages -->
                        <li class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <i class="zmdi zmdi-email-open"></i>
                                <span class="badge badge-sm up bg-purple count">4</span>
                            </a>
                            <ul class="dropdown-menu extended fadeInUp animated nicescroll" tabindex="5001">
                                <li>
                                    <p>Messages</p>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="pull-left"><img src="img/avatar-2.jpg" class="img-circle thumb-sm m-r-15" alt="img"></span>
                                        <span class="block"><strong>John smith</strong></span>
                                        <span class="media-body block">New tasks needs to be done<br><small class="text-muted">10 seconds ago</small></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="pull-left"><img src="img/avatar-3.jpg" class="img-circle thumb-sm m-r-15" alt="img"></span>
                                        <span class="block"><strong>John smith</strong></span>
                                        <span class="media-body block">New tasks needs to be done<br><small class="text-muted">3 minutes ago</small></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="pull-left"><img src="img/avatar-4.jpg" class="img-circle thumb-sm m-r-15" alt="img"></span>
                                        <span class="block"><strong>John smith</strong></span>
                                        <span class="media-body block">New tasks needs to be done<br><small class="text-muted">10 minutes ago</small></span>
                                    </a>
                                </li>
                                <li>
                                    <p><a href="inbox.html" class="text-right">See all Messages</a></p>
                                </li>
                            </ul>
                        </li>
                        <!-- /messages -->
                        <!-- Notification -->
                        <li class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <i class="zmdi zmdi-notifications-none"></i>
                                <span class="badge badge-sm up bg-pink count">3</span>
                            </a>
                            <ul class="dropdown-menu extended fadeInUp animated nicescroll" tabindex="5002">
                                <li class="noti-header">
                                    <p>Notifications</p>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="pull-left"><i class="fa fa-user-plus fa-2x text-info"></i></span>
                                        <span>New user registered<br><small class="text-muted">5 minutes ago</small></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="pull-left"><i class="fa fa-diamond fa-2x text-primary"></i></span>
                                        <span>Use animate.css<br><small class="text-muted">5 minutes ago</small></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="pull-left"><i class="fa fa-bell-o fa-2x text-danger"></i></span>
                                        <span>Send project demo files to client<br><small class="text-muted">1 hour ago</small></span>
                                    </a>
                                </li>

                                <li>
                                    <p><a href="#" class="text-right">See all notifications</a></p>
                                </li>
                            </ul>
                        </li>
                        <!-- /Notification -->

                        <!-- user login dropdown start-->
                        <li class="dropdown text-center">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <img alt="" src="img/avatar-2.jpg" class="img-circle profile-img thumb-sm">
                                <span class="username">John Deo </span> <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu pro-menu fadeInUp animated" tabindex="5003" style="overflow: hidden; outline: none;">
                                <li><a href="profile.html"><i class="fa fa-briefcase"></i>Profile</a></li>
                                <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                                <li><a href="#"><i class="fa fa-bell"></i> Friends <span class="label label-info pull-right mail-info">5</span></a></li>
                                <li><a href="#"><i class="fa fa-sign-out"></i> Log Out</a></li>
                            </ul>
                        </li>
                        <!-- user login dropdown end -->
                    </ul>
                    <!-- End right navbar -->
                </nav>

            </header>
            <!-- Header Ends -->


            <!-- Page Content Start -->
            <!-- ================== -->

            <div class="wraper container-fluid">
                <div class="page-title">
                    <h3 class="title">Portal</h3>
                </div>

                <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">行事曆</h3>
                        </div>
                        <div class="panel-body">
                            <div id="calendar"></div>
                        </div>
                    </div>
                    <div class="panel panel-color panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">其他申請</h3>
                        </div>
                        <div class="panel-body">
                            <ul class="about-links-item">
                            @foreach ($others as $other)
                                <li>
                                  <a href="#" title="{{ $other['title'] }}">
                                    {{ $other['title'] }}
                                  </a>
                                </li>
                            @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="panel panel-color panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">公告</h3>
                        </div>
                        <div class="panel-body">
                            <ul class="about-links-item">
                            @foreach ($announces as $announce)
                               <li>
                                 <a href="#" title="{{ $announce->announce_title }}">
                                   {{ $announce->announce_title }}
                                 </a>
                               </li>
                            @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="panel panel-color panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">待簽核事項</h3>
                        </div>
                        <div class="panel-body">
                          <table class="table">
                              <thead>
                                  <tr>
                                      <th>別</th>
                                      <th>單號</th>
                                      <th>申請人</th>
                                      <th>開單日期</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <th>出</th>
          														<td>W115120011</td>
          														<td>tingwu</td>
          														<td>2016/12/01</td>
                                  </tr>
                                  <tr>
                                      <th>假</th>
          														<td>W115120011</td>
          														<td>tingwu</td>
          														<td>2016/12/01</td>
                                  </tr>
                              </tbody>
                          </table>
                        </div>
                    </div>
                    <div class="panel panel-color panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">其他活動</h3>
                        </div>
                        <div class="panel-body">
                            <ul class="about-links-item">
                              <li>
                                <a href="#">其他活動</a>
                              </li>
                              <li>
                                <a href="#">2016 KKBOX 集團保齡球競賽現場</a>
                              </li>
                              <li>
                                <a href="#">隱形眼鏡團購</a>
                              </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="panel panel-color panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">常用系統</h3>
                        </div>
                        <div class="panel-body">
                            <ul class="about-links-item">
                            @foreach ($sidebars as $sidebar)

                              <li>
                                <a href="#" title="{{ $sidebar['title'] }}">
                                  {{ $sidebar['title'] }}
                                </a>
                              </li>

                            @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="panel panel-color panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">辦公室資訊</h3>
                        </div>
                        <div class="panel-body">
                            <ul class="about-links-item">
                              <li>
                                <a href="#">各據點聯絡方式</a>
                              </li>
                              <li>
                                <a href="#">座位平面圖</a>
                              </li>
                              <li>
                                <a href="#">分機表</a>
                              </li>
                              <li>
                                <a href="#">VPN 使用說明</a>
                              </li>
                            </ul>
                        </div>
                    </div>
                    <div class="panel panel-color panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">各 BU 資訊</h3>
                        </div>
                        <div class="panel-body">
                            <ul class="nav nav-tabs">
                             <li class=""><a href="#home-pills" data-toggle="tab">KKBOX </a>
                             </li>
                             <li class=""><a href="#home-pills" data-toggle="tab">KKStream </a>
                             </li>
                             <li class="active"><a href="#home-pills" data-toggle="tab">KKTV</a>
                             </li>
                             <li class=""><a href="#home-pills" data-toggle="tab">KKTown</a>
                             </li>
                             <li class=""><a href="#home-pills" data-toggle="tab">KKTIX</a>
                             </li>
                          </ul>
                          <div class="tab-content">
                             <div id="home-pills" class="tab-pane fade  active in">
                                <ul class="about-links-item">
                                  <li>
                                    <a href="#">組識圖</a>
                                  </li>
                                  <li>
                                    <a href="#">核決權限</a>
                                  </li>
                                  <li>
                                    <a href="#">管理辦法</a>
                                  </li>
                                  <li>
                                    <a href="#">福委會管理辦法</a>
                                  </li>
                                </ul>
                             </div>
                             <div id="profile-pills" class="tab-pane fade">
                                <h4>Profile Tab</h4>
                                <p></p>
                             </div>
                             <div id="messages-pills" class="tab-pane fade">
                                <h4>Messages Tab</h4>
                                <p></p>
                             </div>
                             <div id="settings-pills" class="tab-pane fade">
                                <h4>Settings Tab</h4>
                                <p></p>
                             </div>
                          </div>
                        </div>
                    </div>
                </div>

            </div> <!-- END Wraper -->

            <!-- Footer Start -->
            <footer class="footer">
                <div class="page-footer-inner"> 2016 &copy;
                  <a target="_blank" href="http://keenthemes.com">KKBOX Group</a> &nbsp;|&nbsp;
                  <a href="http://metronic.wusungpeng.macross.kk-box.com/home" title="Purchase Metronic just for 27$ and get lifetime updates for free" target="_blank">KKBOX Taiwan</a>&nbsp;|&nbsp;
                  <a href="http://beadmin.wusungpeng.macross.kk-box.com/home" title="Purchase Metronic just for 27$ and get lifetime updates for free" target="_blank">KKStream</a>&nbsp;|&nbsp;
                  <a href="http://black.wusungpeng.macross.kk-box.com/home" title="Purchase Metronic just for 27$ and get lifetime updates for free" target="_blank">KKTV</a>&nbsp;|&nbsp;
                  <a href="http://wintermin.wusungpeng.macross.kk-box.com/home" title="Purchase Metronic just for 27$ and get lifetime updates for free" target="_blank">KKTOWN</a>&nbsp;|&nbsp;
                  <a href="" title="Purchase Metronic just for 27$ and get lifetime updates for free" target="_blank">KKTIX</a>
                </div>
            </footer>
            <!-- Footer Ends -->

        </section>

        <!-- js placed at the end of the document so the pages load faster -->
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/pace.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
        <!-- MomentJs-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js"></script>
        <!-- FulCalendar-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js"></script>

        <script src="js/calendar-init.js"></script>

        <script src="js/jquery.app.js"></script>
    </body>
</html>
