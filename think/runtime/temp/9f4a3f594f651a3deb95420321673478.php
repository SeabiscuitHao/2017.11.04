<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:68:"F:\www\youme\think\public/../application/admin\view\login\login.html";i:1509360137;}*/ ?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台登录</title>
    <link href="__PUBLIC__/css/admin_login.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="admin_login_wrap">
    <h1>后台管理</h1>
    <div class="adming_login_border">
        <div class="admin_input">
            <form action="<?php echo url('login/login'); ?>" method="post">
                <ul class="admin_items">
                    <li>
                        <label for="user">用户名：</label>
                        <input type="text" name="admin_name" value="admin" id="user" size="35" class="admin_input_style" />
                    </li>
                    <li>
                        <label for="pwd">密码：</label>
                        <input type="password" name="password" value="admin" id="pwd" size="35" class="admin_input_style" />
                    </li>
                    <li>
                        <input type="submit" tabindex="3" value="提交" class="btn btn-primary" />
                    </li>
                </ul>
            </form>
        </div>
    </div>
</div>
</body>
</html>
