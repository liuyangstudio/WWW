<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        * {
            margin: 0px;
        }

        #box {
            position: relative;
            left: -200px;
            height: 200px;
            width: 200px;
            background-color: #ff6c0d;
            opacity: 0.1;
        }

        #share {
            position: absolute;
            height: 50px;
            top: 75px;
            right: -20px;
            width: 20px;

            background-color: #48b1ff;
        }
    </style>
    <script>
        window.onload = function () {
            var box = document.getElementById("box");
            var btn = document.getElementById("share");
            var timer;
            var spend;
            var alpa = 0.1;
            box.onmousemove = function () {
                if (timer) {
                    clearInterval(timer)
                }
                timer = setInterval(function () {

                    if (parseInt(getComputedStyle(box).left) < 0) {


                        box.style.left = parseInt(getComputedStyle(box).left) + 10 + 'px';

                        document.getElementById("qq").value = box.style.left;
                        document.getElementById("ww").value = box.offsetLeft;
                    }
                    alpa += .1;
                    box.style.opacity = alpa;
                    console.log(box.style.opacity);
                    console.log(getComputedStyle(box).opacity);
                }, 20);


            }


            box.onmouseout = function () {
                if (timer) {
                    clearInterval(timer)
                }
                timer = setInterval(function () {

                    if (box.offsetLeft > -200) {
                        box.style.left = box.offsetLeft - 10 + 'px';

                    }
                    document.getElementById("qq").value = box.style.left;
                    document.getElementById("ww").value = box.offsetLeft;

                    if (alpa > .1) {
                        alpa -= .1;
                    }


                    box.style.opacity = alpa;


                }, 20)

            }

        }
    </script>
</head>
<body>


<div id="box">
    <div id="share">

        分享
    </div>
</div>
<input type="text" value="" id="qq"> </input>
<input type="text" value="" id="ww"> </input>

</body>

</html>