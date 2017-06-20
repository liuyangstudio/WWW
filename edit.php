<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>编辑留言</title>
    <style type="text/css">
        header {
            height: 200px;
            text-align: center;
            background-color: #d6d6d6;

        }

        header h3 {
            padding-top: 50px;
            font-size: 50px;
        }

        header span {
            text-indent: 20px;
        }

        .edit {
            margin-top: 30px;
            font-weight: 600;
        }

        form {
            margin: 50px 0 0 100px;

            width: 450px;
        }

        form div {
            margin-bottom: 10px;

        }

        form .label {
            float: left;
        }

        form label {
            display: block;
            text-align: right;
            margin: 0 6px 10px 20px;
        }

        form textarea {
            resize: none;
        }

        #sub {
            float: right;
        }

    </style>
</head>
<body>
<h1>IMOOC留言板-V1.0</h1>
<hr>
<header>
    <h3>既然来了，就说点什么吧~~~~</h3>
    <span>
        把你想说的都写在下面，标注好你的姓名，主题，点击提交发送给我们，让小伙伴们都知道你在想些什么。
    </span>
</header>
<div class="edit">编辑</div>
<hr>
<form action="#" method="post">
    <div class="label">
        <label>用户名</label>
        <label> 标题</label>
        <label> 内容 </label>
    </div>
    <?php
    date_default_timezone_set('Asia/Shanghai');
    $id = $_GET['id'];                       //接收主页传来的键名。
    $msg = file_get_contents('msg.txt');
    $array = unserialize($msg);
    $arr = $array[$id];
    $uuser = $arr['user'];            //获取修改前的资料。
    $ttitle = $arr['title'];
    $ccontent = $arr['content'];

    if (isset($_POST['sub'])) {
        $user = strip_tags($_POST['user']);
        $title = strip_tags($_POST['title']);
        $content = strip_tags($_POST['content']);
        $time = time();
        $array[$id] = compact('user', 'title', 'content', 'time');    //把编辑完成的新资料重新录入到该数组中。
        $msgs = serialize($array);
        if (file_put_contents('msg.txt', $msgs)) {
            echo '<script> alert("发布成功！");window.location.href="index.php";</script>';
        } else {
            echo '<script> alert("发布失败~~");window.location.href="#";</script>';
        }


    }

    ?>

    <div>
        <input type="text" name="user" value="<?php echo $uuser; ?>" required>            //把老资料写入表单中。
    </div>
    <div>
        <input type="text" name="title" size="35" value="<?php echo $ttitle; ?>" required>
    </div>
    <div>
        <textarea name="content" rows="10" cols="50" required><?php echo $ccontent; ?></textarea>
    </div>
    <input id="sub" name="sub" type="submit" value="发布">
</form>
</body>
</html>

