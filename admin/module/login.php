<?php
    if($_REQUEST['admin_username'] && $_REQUEST['admin_password']){
        $adminInfo = $queryObj->queryDBFirst("SELECT admin_id,admin_username FROM admin where admin_username = '".$_REQUEST['admin_username']."' AND admin_password = '".md5($_REQUEST['admin_password'])."'");
        if($adminInfo) $_SESSION['SS_ADMIN_ID'] = $adminInfo['admin_id'];
        header('location:'.$urlBackEnd);exit;
    }
?>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form class="form-signin" method="post" action="<?php echo $urlBackEnd;?>login">
                            <fieldset>
                                <div class="form-group">
                                    <input type="text" name="admin_username" class="form-control" placeholder="Username" required autofocus>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="admin_password" id="inputPassword" class="form-control" placeholder="Password" required>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Login</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<style type="text/css">
    #wrapper{
        display: none;
    }
</style>