<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>许愿墙</title>
    <link rel="stylesheet" href="./Css/index.css"/>
    <script type="text/javascript" src='./Js/jquery-1.7.2.min.js'></script>
    <script type="text/javascript" src='./Js/index.js'></script>
</head>
<body>
<div id='top'>
    <span id='send'></span>
</div>
<div id='main'>
    <?php
    $connect = mysqli_connect('localhost', 'root', '84708597', 'wall');
    $data = mysqli_query($connect, 'select * from wall');
    $array = mysqli_fetch_all($data, MYSQLI_ASSOC);
    mysqli_close($connect);

    foreach ($array as $arr) {

        echo "  <dl class='paper  " . $arr['color'] . "'>
        <dt>
            <span class='username'>" . $arr['name'] . "</span>
            <span class='num'>NO." . $arr['id'] . "</span>
        </dt>
        <dd class='content'>" . $arr['content'] . "</dd>
        <dd class='bottom'>
            <span class='time'>今天08:30</span>
            <a href=\"delete.php\"   class='close'> </a>
        </dd>
    </dl>";

    }

    ?>


</div>

<!--[if IE 6]>
<script type="text/javascript" src="./Js/iepng.js"></script>
<script type="text/javascript">
    DD_belatedPNG.fix('#send,#close,.close', 'background');
</script>
<![endif]-->
</body>
</html>