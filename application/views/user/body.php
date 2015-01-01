<body style="background-color: #2b669a" onload="bacaStatus();">
        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href=""> Asmarina's Project</a>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Menu / Navigasi</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?php echo site_url();?>/user/logout"><span class="glyphicon glyphicon-log-out"></span> Logout </a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid" style="margin-top: 50px;height: 10px;"></div>
        <div class="container-fluid"  style="height: 100%;">
            <div class="row">
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        Saklar Lampu 1 :  
                                        <input type="checkbox" class="form-control" checked data-size="large" id="lampu_1">
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <br>
                                    <center><div id="bohlam_1"></div></center>
                                    <div id="alert_1" class="col-lg-12"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        Saklar Lampu 4 : 
                                        <input type="checkbox" class="form-control" checked data-size="large" id="lampu_4">
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <br>
                                    <center><div id="bohlam_4"></div></center>
                                    <div id="alert_4" class="col-lg-12"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        Saklar Lampu 2 : 
                                        <input type="checkbox" class="form-control" checked data-size="large" id="lampu_2">
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <br>
                                    <center><div id="bohlam_2"></div></center>
                                    <div id="alert_2" class="col-lg-12"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        Saklar Lampu 5 : 
                                        <input type="checkbox" class="form-control" checked data-size="large" id="lampu_5">
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <br>
                                    <center><div id="bohlam_5"></div></center>
                                    <div id="alert_5" class="col-lg-12"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        Saklar Lampu 3 : 
                                        <input type="checkbox" class="form-control" checked data-size="large" id="lampu_3">
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <br>
                                    <center><div id="bohlam_3"></div></center>
                                    <div id="alert_3" class="col-lg-12"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        Saklar Lampu 6 : 
                                        <input type="checkbox" class="form-control" checked data-size="large" id="lampu_6">
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <br>
                                    <center><div id="bohlam_6"></div></center>
                                    <div id="alert_6" class="col-lg-12"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="panel-title">
                                Informasi
                            </div>
                        </div>
                        <div class="panel-body">
                            <b>User URL :</b> <i><?php echo site_url();?>/user/</i><br>
                            <b>User change state :</b> <i><?php echo site_url();?>/user/change/{id}/{param}</i><br>
                            <b>Device GET Command :</b> <i><?php echo site_url();?>/device/</i><br>
                            <b>Device POST Response :</b> <i><?php echo site_url();?>/device/get_response</i><br>
                        </div>
                    </div>
                </div-->
            </div>
        </div>