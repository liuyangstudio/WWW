<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        * {
            border: 0;
            margin: 0;
            text-decoration: none;
            list-style: none;
        }

        div {
            width: 1024px;
            height: 768px;
            overflow: hidden;
            position: relative;
        }

        ul {
            width:;
        }

        li {
            float: left;
            opacity: 0;
        }


    </style>
</head>
<body>
<div id="banner">
    <ul id="box">

        <li ><img src="golf%20(1).jpg" alt=""></li>
        <li><img src="golf%20(2).jpg" alt=""></li>
        <li><img src="golf%20(3).jpg" alt=""></li>
        <li><img src="golf%20(4).jpg" alt=""></li>
        <li><img src="golf%20(5).jpg" alt=""></li>
    </ul>

</div>


</body>

<script>
    function fadein(element, speed, time) {
        element.style.display = 'block';
        element.style.opacity = 0;
        var alpha = 0;
        timer = setInterval(function () {
            if (alpha > 0.9) {
                clearInterval(timer);
            } else {
                alpha = alpha + speed;
            }
            element.style.opacity = alpha;
        }, time)
    }






    var li = document.getElementsByTagName('li');
    var ind = 0;
    setInterval(function () {
        for (var i = 0; i < li.length; i++) {
            li[i].style.display='none';
        }
        fadein(li[ind], 0.2, 80);
        if (ind>3) {
            ind=0
        }else{ind++}
    }, 2000)


</script>
</html>


