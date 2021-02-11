<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="main.css" />
    <title>Lumen with js</title>
</head>
<body>
    <h1 id="test_1">My App</h1>
    <button id="save_test_1">save</button>
    <button id="delete_test_1">delete</button>
    <div id="app"></div>
    <!--div class="container">
        <div draggable="true" class="box">
            <textarea  id="test_1">My App</textarea >
            <button id="save_test_1">save</button>
        </div>
        <div draggable="true" class="box">B</div>
        <div draggable="true" class="box">C</div>
    </div-->
    <div id="drag-1" class="draggable">
      <p> You can drag one element </p>
    </div>
    <div id="drag-2" class="draggable">
      <p> with each pointer </p>
    </div>
    <div class="draggable"> Draggable Element </div>
    <script type="module" src="app.js"></script>
</body>
</html>