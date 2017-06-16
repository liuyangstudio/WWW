<!doctype html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>随机数字</title>
    <style>
        .a {
            width: 800px;
            height: 200px;
            margin: 0 auto;
            background-color: rgb(<?php echo mt_rand(1,255).','.mt_rand(1,255).','.mt_rand(1,255);?>);
            font-size: 170px;
            text-align: center;
        }

    </style>
</head>
<body>

<div class="a ">

    <span style="color: rgb(<?php echo mt_rand(1, 255) . ',' . mt_rand(1, 255) . ',' . mt_rand(1, 255); ?>)">
        <?php echo mt_rand(0, 9); ?>  </span>
    <span style="color: rgb(<?php echo mt_rand(1, 255) . ',' . mt_rand(1, 255) . ',' . mt_rand(1, 255); ?>)">
        <?php echo mt_rand(0, 9); ?>  </span>
    <span style="color: rgb(<?php echo mt_rand(1, 255) . ',' . mt_rand(1, 255) . ',' . mt_rand(1, 255); ?>)">
        <?php echo mt_rand(0, 9); ?>  </span>
    <span style="color: rgb(<?php echo mt_rand(1, 255) . ',' . mt_rand(1, 255) . ',' . mt_rand(1, 255); ?>)">
        <?php echo mt_rand(0, 9); ?>  </span>
    <span style="color: rgb(<?php echo mt_rand(1, 255) . ',' . mt_rand(1, 255) . ',' . mt_rand(1, 255); ?>)">
        <?php echo mt_rand(0, 9); ?>  </span>
    <span style="color: rgb(<?php echo mt_rand(1, 255) . ',' . mt_rand(1, 255) . ',' . mt_rand(1, 255); ?>)">
        <?php echo mt_rand(0, 9); ?>  </span>
</div>
</body>
</html>
