
@extends('layouts.app')
<html>

<head>
    <style>
        .main {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 100%;
        }

        label,
        input {
            font-size: 30px;
            width: 300px;

        }

        form {
            margin-top: 10px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            border: 1px black solid;
            width: 400px;
            background-color: wheat;
            padding: 20px;
        }

        .btnn {
            margin-top: 10px;
            font-size: 30px;
            width: 200px;
        }
    </style>
</head>

<body>
    <div class="main">

            <?php
            echo Form::open(array('url'=>'users', 'method'=>"post"));
            echo Form::label("Нэр");
            echo "<br/>";
            echo Form::text("name");
            echo "<br/>";
            echo Form::label("Овог");
            echo "<br/>";
            echo Form::text("surName");
            echo "<br/>";
            echo Form::label("Цахим шуудан");
            echo "<br/>";
            echo Form::text("email");
            echo "<br/>";
            echo Form::submit("Add User", array("class" => "btnn"));
            echo Form::close();
            ?>
            
            <br />
        <button class="btnn" onclick="Click()">Back</button>
    </div>
    <script>
        function Click() {
            var str = window.location.href.substr(0, window.location.href.length - 7)
            window.location.href = str

        }
    </script>
</body>

</html>