<?php

namespace App\Controllers;

class Gallery extends BaseController
{

public function index(){
    // Parādīt visu galeriju
    return view('admin/gallery_index',['title'=>"Bilžu galerija"]);


}

public function uploadForm(){
    return view('admin/fileupload',['title'=>"Pievienot bildi"]);


}

public function uploadPhoto(){
    


}
}