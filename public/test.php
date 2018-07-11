<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
<div> Default HTML </div>

<script>
    (function() {
        var throttle = function(type, name, obj) {
            obj = obj || window;
            var running = false;
            var func = function() {
                if (running) { return; }
                running = true;
                requestAnimationFrame(function() {
                    obj.dispatchEvent(new CustomEvent(name));
                    running = false;
                });
            };
            obj.addEventListener(type, func);
        };

        /* init - you can init any event */
        throttle("resize", "optimizedResize");
    })();

    // handle event
    window.addEventListener("optimizedResize", function() {
        console.log("Resource conscious resize callback!");
        console.log(window.innerWidth);
    });

    function ajax() {
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "gethint.php?q="+str, true);
        xhttp.send();
    }


</script>
<style>
    div{
        width: 390px;
        height: 150px;
        background: #4E4E4E;
        color: #FFF;
        line-height: 150px;
        text-align: center;
        font-size: 30px;
        border-radius: 10px;
        margin: 80px auto;
    }
</style>
</body>
</html>