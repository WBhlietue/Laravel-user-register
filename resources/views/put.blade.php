@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form name=_frm1 action="user/" method="post">

        <input type="hidden" name="put" value="<?php echo csrf_token(); ?>">

        <input type="button" value="Add user">

    </form>
</body>

</html>