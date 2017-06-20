<?php ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>留言板</title>
    <style type="text/css">
        a {
            color: #0a6aff;
        }

        a:visited {
            color: #0a6aff;

        }

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

        .list {
            margin-top: 30px;
            font-weight: 600;
        }

        table {
            width: 80%;
            margin: 0 auto;
            text-align: left;
            border: 1px solid #000000;
            border-spacing: 0;
        }

        thead th {
            border: 2px solid #000000;
            text-align: center;
        }

        tbody td {
            border: 1px solid #000;
            text-align: center;
        }

        thead .ind {
            width: 3%;

        }

        thead .user {
            width: 8%;

        }

        thead .tit {
            width: 15%;
        }

        thead .time {
            width: 10%;
        }

        thead .control {
            width: 7%;
        }

        .add {
            position: fixed;
            bottom: 50px;
            right: 50px;
            display: block;
            width: 85px;
            height: 25px;
            margin-top: 30px;
            box-shadow: 2px 2px 3px #373737;
            text-align: center;
            font-size: 18px;
            text-decoration: none;
            background-color: #c9c9c9;
            border-radius: 3px;

        }

        .add:visited {
            color: #000;
        }

        .add:hover {
            color: #FFFFFF;
            background-color: #0f86ff;
            box-shadow: -1px -1px 5px 2px #000000;
        }
    </style>
</head>
<body>
<h1>IMOOC留言板-V1.0</h1>
<hr>
<header>
    <h3>慕课留言板，欢迎你！</h3>
    <span>
        慕课网是垂直的互联网IT技能免费学习网站。
        以独家视频教程、在线编程工具、学习计划、问答社区为核心特色。
        在这里，你可以找到最好的互联网技术牛人，也可以通过免费的在线公开视频课程学习国内领先的互联网IT技术。
    </span>
</header>
<div class="list"> 留言板</div>
<hr>

<table>
    <thead>
    <tr>
        <th class="ind">编号</th>
        <th class="user">用户名</th>
        <th class="tit">标题</th>
        <th class="con">内容</th>
        <th class="time">发布时间</th>
        <th class="control">操作</th>
    </tr>
    </thead>
    <tbody>

    <?php
    date_default_timezone_set('PRC');
    $msg = file_get_contents('msg.txt');
    $arr = unserialize($msg);
    $i = 1;
    foreach ($arr as $key => $d) {

        echo '                         
    <tr>
        <td>' . $i . '</td>
        <td>' . $d['user'] . '</td>
        <td>' . $d['title'] . '</td>
        <td>' . $d['content'] . '</td>
        <td>' . date('m月d日  H:i:s', $d['time']) . '</td>
        <td>
        <a href="edit.php?id=' . $key . '">编辑</a>| <a href="delete.php?id=' . $key . '">删除</a>
        </td>
    </tr>';
        $i++;            //编号每输出一次加一。
    }
    ?>
    </tbody>

</table>
<a href="add.php" class="add">我要留言</a>
</body>
</html>






