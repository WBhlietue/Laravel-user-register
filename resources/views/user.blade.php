@extends('layouts.app')

<html>
    
<body>

    <form action="user/1" method="post">

        <input type="hidden" name="_method" value="put" />

        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

        <input type="button" value="Edit user">

    </form>

    <form action="user/1" method="post">

        <input type="hidden" name="_method" value="delete" />

        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

        <input type="button" value="Delete user">

    </form>

</body>

</html>