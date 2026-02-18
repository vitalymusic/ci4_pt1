<?php

namespace App\Controllers;

class Admin extends BaseController
{
    
    public function __construct()
    {
        $this->session = service('session');
        $this->username = "admin@inbox.lv";
        $this->password = "12345";

    }
    


    public function index()
    {   
        if(!$this->checkLogin()){
            // dd($this->checkLogin());
            return redirect()->to('/login');
        }
        
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
          

          $something = $this->request->getPost();
          $result = $this->checkUser($something);
        
          if($result){
            $this->session->set("username",$something["email"]);
            $this->session->set("logged_in",true);
            
            return redirect()->to('admin');
          }else{
                $this->session->set("logged_in",false);
                $this->session->set("username","");
                return redirect()->to('login');
          }
   
    }

    public function logout(){
        $this->session->destroy();
        return redirect()->to('login');
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
             }else{
                return true;
             }
    }


    
   




     



}
