<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

session_start();

class UserReg extends Controller
{

    public function index()
    {
        $data = DB::select("select * from PHPUser", []);
        return view("view", ["data" => $data]);
    }
    public function create()
    {
        return view("insert");
    }
    public function store(request $request)
    {

        DB::insert('insert into PHPUser (userName, userSurName, userEmail) values (?, ?,?)', [$_POST["name"], $_POST["surName"], $_POST["email"]]);
        echo "<script>window.location.href='/users'</script>";
    }
    public function show($id)
    {
        $data = DB::select("select * from PHPUser where userId=?", [$id]);
        return view("show", ["data" => $data]);
    }
    public function edit($id)
    {
        $data = DB::select("select * from PHPUser where userId=?", [$id]);
        return view("edit", ["data" => $data]);
    }
    public function update(request $require, $id)
    {
        DB::update("update PHPUser set userName=?, userSurName=?, userEmail=?, where userId=?", [$_POST["name"], $_POST["surName"], $_POST["email"], $id]);
        echo "<script>window.location.href='/users'</script>";
    }
    public function destroy($id)
    {
        DB::delete("delete from PHPUser where userId=?", [$id]);
        echo "<script>window.location.href='/users'</script>";
    }


}
