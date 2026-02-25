<?php

namespace App\Controllers;

class Gallery extends BaseController
{

    public function __construct(){
        $this->db = \Config\Database::connect();

    }

public function index(){
    // Parādīt visu galeriju
    return view('admin/gallery_index',['title'=>"Bilžu galerija"]);


}

public function uploadForm(){
    return view('admin/fileupload',['title'=>"Pievienot bildi"]);


}

public function uploadPhoto(){
        $img = $this->request->getFile('file');
        if($img->getMimeType() !=="image/png"){
               return redirect()->to('gallery');
        }
        $img->move(FCPATH . 'uploads', $img->getName());
        
         $data = [
               'url'=> $img->getName()
           ]; 
           try{
                $builder = $this->db->table('images');
                $query   = $builder
                     ->insert($data); 
                return redirect()->to('gallery');
           }
           catch(Error){
                return $this->response->setJSON(["error"=>Error]);
           }

        

}
}