<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title><?php echo $judul;?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
   
<link href="<?php echo base_url('./main.css'); ?>" rel="stylesheet"></head>
    <body class="login">
        <div class="main-card mb-3 card">
        <div class="card-body"><h5 class="card-title">Login</h5>
            <div>
                <?php echo form_open('app/login_app','class=form.inline'); ?>
                    <div class="mb-2 mr-sm-2 mb-sm-0 position-relative form-group">
                        <label class="mr-sm-2">Username</label>
                        <input name="username" id="username" type="text">
                    </div>
                                <div class="mb-2 mr-sm-2 mb-sm-0 position-relative form-group">
                                    <label class="mr-sm-2">Password</label>
                                    <input name="password" id="password" type="password">
                                        <button class="btn btn-primary">Submit</button>
                                </div>
                            <?php echo form_close(); ?>
            </div>
        </div>
    </div>
    </body>
<script type="text/javascript" src="<?php echo base_url('./assets/scripts/main.js');?>"></script></body>
</html>