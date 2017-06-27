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

        <li><img src="golf%20(1).jpg" alt=""></li>
        <li><img src="golf%20(2).jpg" alt=""></li>
        <li><img src="golf%20(3).jpg" alt=""></li>
        <li><img src="golf%20(4).jpg" alt=""></li>
        <li><img src="golf%20(5).jpg" alt=""></li>
    </ul>

</div>


</body>

<script>
    function fadeIn(x) {
        x.style.opacity = 0;
        var alpha = 0.1;
        for (var i = 1; i < 20; i++) {


            setTimeout(function ()
            {
                alpha = alpha + 0.1;
               x.style.opacity = alpha;
            }
        ,
            300
        )
        }



    }


    var li = document.getElementsByTagName('li');

    fadeIn(li);

</script>


<!--<script>-->
<!---->
<!--    var img = document.getElementsByTagName('li');-->
<!--    var ind = 0;-->
<!--    function fade(x, y, speed,time) {-->
<!--        setInterval(function () {-->
<!--            var alpha = x;-->
<!--            if (x < y) {-->
<!--                x = x + speed-->
<!--            }-->
<!--            return x;-->
<!---->
<!---->
<!--        },time)-->
<!---->
<!--    }-->
<!---->
<!--    console.log(fade(1,100,5,300))-->
<!--    timer = setInterval(function () {-->
<!---->
<!--        for (var i = 0; i < img.length; i++) {-->
<!--            img[i].style.opacity = 0;-->
<!--        }-->
<!--         var alpha=fade(0,1,0.1,300);-->
<!--        img[ind].style.opacity = alpha;-->
<!---->
<!---->
<!--        if (ind > 3) {-->
<!--            ind = 0-->
<!--        } else {-->
<!--            ind++-->
<!--        }-->
<!---->
<!---->
<!--    }, 300)-->
<!---->
<!---->
<!--</script>-->
</html>