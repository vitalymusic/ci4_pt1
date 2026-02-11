<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            "title"=>"Galvenā lapa",
            "content"=>"Te nāks saturs"
        ];

        return view('welcome_message',$data);

    }
    
    public function users(): string
    {
        return view('users');
    }

     public function user($id=0): string
    {
        $data = [
            "user_id"=>$id
        ];
        
        return view('users',$data);
    }




     public function posts()
    {
        // atriež JSON datus

    $data = [
        'success' => true,
        'id'      => 123,
    ];

    return $this->response->setJSON($data);
    }



}
