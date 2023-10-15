@extends('layouts.app')
<html lang="en">
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
        .main table {
            margin-top: 50px;
            font-size: 25px;
            font-family: "Arial";
        }

        .tt {
            padding: 10px;
            border:1px black solid;
        }

        button {
            font-size: 30px;
        }
        .btn{
            width: 200px;
            margin-top: 10px;
        }

        .btnn{
            margin-top: 10px;
            font-size: 30px;
            width: 200px;
        }
    </style>
</head>
<body>
    <div class="main">
    <table border="1">
        <tr class="tt">
            <th class="tt">ID</th>
            <th class="tt">Нэр</th>
            <th class="tt">Овог</th>
            <th class="tt">Цахим шуудан</th>
        </tr>
        <?php
                echo "<tr class='tt'> ";
                foreach ($data[0] as $value)
                {
                    echo "<td class='tt'>$value</td>";
                }
                echo "</tr>";
        ?>
    </table>
    
    <br />
    <?php
         use Illuminate\Support\Facades\Auth;
         if (Auth::check()) {
             echo "<button class=\"btnn\" onclick=\"window.location.href += '/edit'\">Edit</button>";
         }
    ?>
    
    <button class="btnn" onclick="Click()">Back</button>
    </div>
    <script>
        function Click() {
            var str = window.location.href.substr(0, window.location.href.length - 2)
            window.location.href = str

        }
    </script>
</body>

</html>