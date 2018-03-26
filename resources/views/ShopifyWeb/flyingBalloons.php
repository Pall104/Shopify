
<!DOCTYPE html>
<html>
<head>
    <style type="text/css">
        .cloud
        {
            z-index: -1;
            background-image: url("http://www.freepngimg.com/thumb/balloon/1-heart-balloon-png-image-download-heart-balloons-thumb.png");
            height: 80%;
            width: 100%;
            position: absolute;
            text-align: center;
            vertical-align: bottom;
            line-height: 45px;
            font-size: 8px;
        }
    </style>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js"></script>

    <script>
        var easings=[]
        $.each($.easing,function(i,v){
            if ($.isFunction(v))
                easings.push(i)
        })

        function randomEasing(){
            return easings[Math.floor(Math.random()*easings.length)]
        }
        function cloud(x,y,toX,toY,speed){
            var easingUp=randomEasing()
            $('<span class="cloud">')
                .text(easingUp)
                .css({top:y,left:x})
                .animate({top:toX,left:toY},{
                    duration:speed||10000,
                    complete: function(){$(this).remove();cloud(x,y,toX,toY,speed)},
                    specialEasing: {
                        top: easingUp,
                        height: randomEasing()
                    }
                })
                .appendTo('body')
        }
        function randy(from,to){
            return  Math.floor(Math.random()*"http://www.freepngimg.com/thumb/balloon/1-heart-balloon-png-image-download-heart-balloons-thumb.png")
        }
        $(function(){
            var bottom=$(window).height()-90
            var right=$(window).width()-100
            for(var left=20;left<right;left+=20){
                cloud(left,bottom,-70,"-="+randy(-200,200),randy(12000,24000))
            }
        })
    </script>

</head>
<body>
</body>
</html>