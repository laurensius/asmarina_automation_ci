<body style="background-color: #2b669a" onload="bacaStatus();">
        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href=""> Asmarina's Project</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                </div>
            </div>
        </div>
        <div class="container-fluid" style="margin-top: 60px;height: 50px;">
            <?php
            echo $message;
            ?>
        </div>
        <div class="container-fluid" style="height: 100%;margin-top: 10px">
            <div class="row">
                <div class="col-lg-4"></div>
                <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <center>Login Asmarina's Project</center>
                            </div>
                        </div>
                        <div class="panel-body">
                            <form action="<?php echo site_url();?>/user/verifikasi" method="post">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-user"></span>
                                        </span>
                                        <input type="text" name="username" class="form-control" placeholder="Username" required="">
                                    </div>
                                    <br>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-pencil"></span>
                                        </span>
                                        <input type="password" name="password" class="form-control" placeholder="Password" required="">
                                    </div>
                                    <br>
                                    <input type="submit" value="Login" class="btn btn-primary form-control">
                                </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4"></div>
            </div>
        </div>