@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .main {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .main table {
            margin-top: 100px;
            font-size: 25px;
            font-family: "Arial";
        }

        .tt {
            padding: 10px;
            min-width: 100px;
            border: 1px black solid;
        }

        button {
            font-size: 30px;
        }

        .btnn {
            margin-top: 10px;
            font-size: 25px;
            min-width: 100px;
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
                <th class="tt"></th>
            </tr>
            <?php
            foreach ($data as $item)
            {
                echo "<tr class='tt'>";
                $id = -1;
                foreach ($item as $value)
                {
                    if ($id < 0)
                    {
                        $id = $value;
                    }
                    echo "<td class='tt'>$value</td>";
                }
                echo "<td class='tt'><button onclick=\"window.location.href='users/" . $id . "'\">Show</button></td>";
                echo "</tr>";
            }
            ?>
        </table>
        <?php
        use Illuminate\Support\Facades\Auth;
        if (Auth::check()) {
            echo "<button class=\"btnn\" onclick=\"window.location.href='users/create'\">Create</button>";
        }
        ?>
    </div>
</body>

</html>