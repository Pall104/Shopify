<!DOCTYPE HTML>
<html>
<head>
    <style>
        html{
            background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTYiBEpqwWHusICjyxHmg9MVng2GVG8mSF0h3TcPzXuBBtHwqvgXg);
            background-size: cover;
        }
        #div1, #div2 {
            float: left;
            width: 100px;
            height: 35px;
            margin: 10px;
            padding: 10px;
            border: 1px solid black;
        }
    </style>
    <script>
        function allowDrop(ev) {
            ev.preventDefault();
        }

        function drag(ev) {
            ev.dataTransfer.setData("data", ev.target.id);
        }

        function drop(ev) {
            ev.preventDefault();
            var data = ev.dataTransfer.getData("data");
            ev.target.appendChild(document.getElementById(data));
        }

    </script>
</head>
<body>

<h2>Drag and Drop</h2>
<p>Drag the image back and forth between the two div elements.</p>

<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSjA2yGExH4-2ztMkbMOLXL24JlFpakUGlYORJUrAP9L7fBf5RH" draggable="true" ondragstart="drag(event)" id="drag1" width="88" height="31">
</div>

<div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>

</body>
</html>
