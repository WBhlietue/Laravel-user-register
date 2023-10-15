<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            padding: 0;
            margin: 0;
        }

        .cont {
            width: 100%;
            height: 75px;
            position: relative;
            color: white;
            font-size: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: lightskyblue;
        }

        .header {
            top: 0px;
        }

        .footer {
            position:fixed;
            bottom: 0px;
        }
    </style>
</head>

<body>
        <div class="cont header">Header</div>
        <div class="cont footer">Footer</div>
    
</body>

</html>