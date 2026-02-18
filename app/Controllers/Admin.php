<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public $username = "admin@inbox.lv";
    public $password = "12345";
   


    public function index(): string
    {   
        if($this->checkLogin()){
            return redirect()->to('login');
        }
        
        $session = service('session');  
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

    public function loginProcess(){
           $session = service('session');  

          $something = $this->request->getPost();
          $result = $this->checkUser($something);
          if($result){
            $session->set("username",$something["email"]);
            $session->set("logged_in",true);
            return redirect()->to('admin');
          }else{
                $session->set("logged_in",false);
                $session->set("username","");
                return redirect()->to('login');
          }

        //   dd($session);    
    }

    private function checkUser($data): bool {
           if($this->username==$data["email"] && $this->password===$data["password"]){
               return true; 
           }else{
            return false;
           } 
    }

    private function checkLogin(){
             $session = service('session');
             if($session->get("logged_in")===false){
                return false;
             }
    }


    
   




     



}
