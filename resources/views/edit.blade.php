<?php
include(app_path() . "\master.php");
?>

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
            min-width: 300px;

        }

        .main table {
            margin-top: 50px;
            font-size: 25px;
            font-family: "Arial";
        }

        th,
        td {
            padding: 10px;
        }

        button {
            font-size: 30px;
        }

        .btn {
            width: 200px;
            margin-top: 10px;
        }

        .btn {
            margin-top: 10px;
            font-size: 30px;
            width: 200px;
        }

        .save {
            position: relative;
            left: 38%;
            /* margin-top: 10px; */
        }

        .del {
            margin-top: 10px;
        }
    </style>
</head>

<body>

    <div class="main">
        <?php
        $list = [];
        foreach ($data[0] as $item)
        {
            $list[] = $item;
        }
        echo Form::open(array("url" => "users/" . $list[0], "method" => "pos"));
        ?>

        <table border="1">
            <tr>
                <th>ID</th>
                <th>Нэр</th>
                <th>Овог</th>
                <th>Цахим шуудан</th>
            </tr>
            <?php

            echo "<tr>";
            echo "<td>$list[0]</td>";
            echo "<td>";
            echo Form::text("name", $list[1]);
            echo "</td>";
            echo "<td>";
            echo Form::text("surName", $list[2]);
            echo "</td>";
            echo "<td>";
            echo Form::text("email", $list[3]);
            echo "</td>";
            echo "</tr>";
            ?>
        </table>
        <br />
        <?php
            echo Form::submit("Save", array("class" => "save"));
            echo Form::close();
            echo Form::open(array("url" => "users/".$list[0]."/delete", "method"=>"delete"));
            echo "<br/>";
            echo Form::submit("Delete");
            echo Form::close();
        ?>

        <button class="btn" onclick="Click()">Back</button>
    </div>
    <script>
        function Click() {
            var str = window.location.href.substr(0, window.location.href.length - 5)
            window.location.href = str

        }
    </script>
</body>

</html>