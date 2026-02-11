<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index(): string
    {
        $data = [
            "title"=>"Administrēšana",
            "content"=>""
        ];

        return view('admin/index_page',$data);

    }


    public function login(): string
    {
        $data = [
            "title"=>"Ielogoties",
            "content"=>""
        ];

        return view('admin/login',$data);

    }

    
   




     



}
