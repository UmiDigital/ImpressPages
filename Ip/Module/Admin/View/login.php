<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ImpressPages</title>
    <link rel="stylesheet" href="<?php echo \Ip\Config::coreModuleUrl('Admin/assets/backend/login/login.css') ?>">
    <link rel="stylesheet" href="<?php echo \Ip\Config::coreModuleUrl('Assets/assets/css/bootstrap/bootstrap.css') ?>">
    <link rel="shortcut icon" href="<?php echo \Ip\Config::baseUrl('favicon.ico') ?>">
</head>
<body>


<a href="http://www.impresspages.org/" class="logo" target="_blank"><img src="<?php echo \Ip\Config::coreModuleUrl('Admin/assets/backend/login/logo.png') ?>"></a>
<div class="verticalAlign"></div>
<div class="login">
    <div class="loginTitle">
        <h1><?php _e('Login', 'ipAdmin') ?></h1>
    </div>
    <?php echo $loginForm->render() ?>
</div>
<div class="loginFooter">Copyright 2009-<?php echo date("Y") ?> by <a href="http://www.impresspages.org/">ImpressPages UAB</a></div>
<?php ipPrintJavascript() ?>
</body>
</html>